<?php
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if (empty($_SESSION['id'])) {
    echo "<script>window.location='index.php';</script>";
}
if (!empty($_GET['id'])) {
    $idNoticia = $_GET['id'];
    $datosNoticia = mysql_fetch_assoc($db->getNoticiaById($idNoticia));
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

    $db->updateNoticia($_POST['titulo'], $_POST['link'], $_POST['descripcion'], $_POST['destacada'], $nombre, $_POST['id']);
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
            <span>Editar Noticia</span>
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
                <form role="form" class="form-horizontal" action="edit_noticia.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $datosNoticia['id_noticia'] ?>">
                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Titulo 
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="form_control_1"  value="<?php echo $datosNoticia['titulo'] ?>" name="titulo">
                                <div class="form-control-focus"> </div>
                            </div>

                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Descripción 
                            </label>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control" id="form_control_1"  value="" name="descripcion"><?php echo $datosNoticia['descripcion'] ?></textarea>
                                <div class="form-control-focus"> </div>
                            </div>

                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Link 
                            </label>
                            <div class="col-md-10">
                                <input type="text" value="<?php echo $datosNoticia['link'] ?>" class="form-control" name="link" id="form_control_1" >
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">¿Destacada?r</label>
                            <div class="col-md-5">
                                <select class="form-control" name="superusuario" id="form_control_1">
                                    <option value="1" <?php if ($datosNoticia['destacada'] == "SI") echo "selected"; ?>>SI</option>
                                    <option value="0" <?php if ($datosNoticia['destacada'] == "NO") echo "selected"; ?> >NO</option>
                                </select>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Imagen 
                            </label>
                            <div class="col-md-10">
                                <input type="file"  class="form-control" name="imagen" id="form_control_1" >
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