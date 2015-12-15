<?php
$title = "Editar Entrevista";
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if (empty($_SESSION['id'])) {
    echo "<script>window.location='index.php';</script>";
}
if (!empty($_GET['id'])) {
    $idEntrevista = $_GET['id'];
    $datosEntrevista = mysql_fetch_assoc($db->getEntrevistaById($idEntrevista));
    
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->updateEntrevista($_POST['titulo'], $_POST['link'], $_POST['descripcion'], $_POST['id']);
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
            <span>Editar Entrevista</span>
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
            <?php if ($exito) { ?>
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>
                    <span> Usuario modificado correctamente. </span>
                </div>
            <?php } ?>
            <div class="portlet-body form">
                <form role="form" class="form-horizontal" action="edit_entrevista.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $datosEntrevista['id'] ?>">
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Titulo 
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="form_control_1"  value="<?php echo $datosEntrevista['titulo'] ?>" name="titulo">
                                <div class="form-control-focus"> </div>
                            </div>

                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Descripción 
                            </label>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control" id="form_control_1"  value="" name="descripcion"><?php echo $datosEntrevista['descripcion'] ?></textarea>
                                <div class="form-control-focus"> </div>
                            </div>

                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Link 
                            </label>
                            <div class="col-md-10">
                                <input type="text" value="<?php echo $datosEntrevista['link'] ?>" class="form-control" name="link" id="form_control_1" >
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