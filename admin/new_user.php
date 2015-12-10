<?php
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if(empty($_SESSION['id'])){
    echo "<script>window.location='index.php';</script>";
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $db->addUser($_POST['username'],$_POST['password'],$_POST['superusuario']);
    $exito = true;
}

?>
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Inicio</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Agregar Usuario</span>
                            </li>
                        </ul>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Formulario de alta</span>
                                    </div>
                                </div>
                                <?php if($exito){ ?>
                                <div class="alert alert-success">
                                    <button class="close" data-close="alert"></button>
                                    <span> Usuario agregado correctamente. </span>
                                </div>
                                <?php } ?>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal" action="new_user.php" method="POST">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Username 
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Ingresar username" name="username">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Password 
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="password" id="form_control_1" placeholder="Ingresar Password">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Usuario Administrador</label>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="superusuario" id="form_control_1">
                                                        <option value="1">SI</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-10">
                                                    <button type="submit" class="btn blue">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        <!-- END CONTAINER -->
        <?php
include_once('common/footer.php');
        ?>