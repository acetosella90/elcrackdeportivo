<?php
$title = "Nueva Entrevista";
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if (empty($_SESSION['id'])) {
    echo "<script>window.location='../index.php';</script>";
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $cad = "";
    for ($i = 0; $i < 12; $i++) {
        $cad .= substr($str, rand(0, 62), 1);
    }

    $tamano = $_FILES ['imagen']['size'];
    $tamaño_max = "50000000000";
    if ($tamano < $tamaño_max) {
        $destino = 'img';
        $sep = explode('image/', $_FILES["imagen"]["type"]);
        $tipo = $sep[1];
        if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "jpg") {
            $a = move_uploaded_file($_FILES ['imagen']['tmp_name'], $destino . '/' . $cad . '.' . $tipo);
            $nombre = $cad . '.' . $tipo;
        } else
            echo "El tipo de archivo no es de los permitidos";
    } else
        echo "El archivo supera el peso permitido.";

    
    $db->addEntrevista($_POST['titulo'], $_POST['link'], $_POST['descripcion'], $nombre);
    $exito = true;
}
?>
  <script src="tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Inicio</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Agregar Entrevista</span>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-settings font-green-haze"></i>
                    <span class="caption-subject bold uppercase"> Alta de entrevista</span>
                </div>
            </div>
<?php if ($exito) { ?>
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>
                    <span> Entrevista agregada correctamente. </span>
                </div>
<?php } ?>
            <div class="portlet-body form">
                <form role="form" class="form-horizontal" action="new_entrevista.php" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Titulo 
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="form_control_1" placeholder="Ingresar Titulo" name="titulo">
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Link Audio 
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="link" id="form_control_1" placeholder="Ingresar Link">
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Imagen 
                            </label>
                            <div class="col-md-10">
                                <input type="file"   class="form-control" name="imagen" id="form_control_1" >
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>


                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Descripción 
                            </label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="descripcion" id="form_control_1" ></textarea>
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