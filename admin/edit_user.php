<?php
$title = "Editar Usuario";
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if(empty($_SESSION['id'])){
    echo "<script>window.location='index.php';</script>";
}
if(!empty($_GET['id'])){
    $idUser = $_GET['id'];
    $datosUser = mysql_fetch_assoc($db->getUserById($idUser));
}

if($_SESSION['id'] != $idUser){
    echo "<script>window.location='dashboard.php';</script>";
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $db->updateUser($_POST['username'],$_POST['password'],$_POST['superusuario'],$_POST['id']);
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
                                <span>Editar Usuario</span>
                            </li>
                        </ul>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Formulario de edicion</span>
                                    </div>
                                </div>
                                <?php 
                                if($exito){ ?>
                                <div class="alert alert-success">
                                    <button class="close" data-close="alert"></button>
                                    <span> Usuario modificado correctamente. </span>
                                </div>
                                <?php } ?>
                                <div class="portlet-body form">
                                    <form role="form" class="form-horizontal" action="edit_user.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $datosUser['id']?>">
                                        <div class="form-body">
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Username 
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="form_control_1" placeholder="Ingresar username" value="<?php echo $datosUser['username']?>" name="username">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Password 
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $datosUser['password']?>" class="form-control" name="password" id="form_control_1" placeholder="Ingresar Password">
                                                    <div class="form-control-focus"> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group form-md-line-input">
                                                <label class="col-md-2 control-label" for="form_control_1">Usuario Administrador</label>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="superusuario" id="form_control_1">
                                                        <option value="1" <?php if($datosUser['useperusuario'] == "SI") echo "selected"; ?>>SI</option>
                                                        <option value="0" <?php if($datosUser['useperusuario'] == "NO") echo "selected"; ?> >NO</option>
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