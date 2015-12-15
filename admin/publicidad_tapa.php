<?php
$title = "Publicidad/Tapa";
include_once('common/header.php');
include_once('common/theme_color.php');
$exito = false;
if (empty($_SESSION['id'])) {
    echo "<script>window.location='../index.php';</script>";
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_FILES["publicidad1"]["type"]) {

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for ($i = 0; $i < 12; $i++) {
            $cad .= substr($str, rand(0, 62), 1);
        }

        $tamano = $_FILES ['publicidad1']['size'];
        $tamaño_max = "50000000000";
        if ($tamano < $tamaño_max) {
            $destino = 'img';
            echo  "ACA === " . $_FILES["publicidad1"]["type"];
            $sep = explode('image/', $_FILES["publicidad1"]["type"]);
            $tipo = $sep[1];
            if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "jpg" || $tipo == "png") {
                $a = move_uploaded_file($_FILES ['publicidad1']['tmp_name'], $destino . '/' . $cad . '.' . $tipo);
                $publicidad1 = $cad . '.' . $tipo;
            } else
                echo "El tipo de archivo no es de los permitidos";
        } else
            echo "El archivo supera el peso permitido.";


       
    } 
    if ($_FILES["publicidad2"]["type"]) {

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for ($i = 0; $i < 12; $i++) {
            $cad .= substr($str, rand(0, 62), 1);
        }

        $tamano = $_FILES ['publicidad2']['size'];
        $tamaño_max = "50000000000";
        if ($tamano < $tamaño_max) {
            $destino = 'img';
            $sep = explode('image/', $_FILES["publicidad2"]["type"]);
            $tipo = $sep[1];
            if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "jpg"|| $tipo == "png") {
                $a = move_uploaded_file($_FILES ['publicidad2']['tmp_name'], $destino . '/' . $cad . '.' . $tipo);
                $publicidad2 = $cad . '.' . $tipo;
            } else
                echo "El tipo de archivo no es de los permitidos";
        } else
            echo "El archivo supera el peso permitido.";


       
    } 
    if ($_FILES["tapa1"]["type"]) {

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for ($i = 0; $i < 12; $i++) {
            $cad .= substr($str, rand(0, 62), 1);
        }

        $tamano = $_FILES ['tapa1']['size'];
        $tamaño_max = "50000000000";
        if ($tamano < $tamaño_max) {
            $destino = 'img';
            $sep = explode('image/', $_FILES["tapa1"]["type"]);
            $tipo = $sep[1];
            if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "jpg"|| $tipo == "png") {
                $a = move_uploaded_file($_FILES ['tapa1']['tmp_name'], $destino . '/' . $cad . '.' . $tipo);
                $tapa1 = $cad . '.' . $tipo;
            } else
                echo "El tipo de archivo no es de los permitidos";
        } else
            echo "El archivo supera el peso permitido.";


       
    } 
    if ($_FILES["tapa2"]["type"]) {

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for ($i = 0; $i < 12; $i++) {
            $cad .= substr($str, rand(0, 62), 1);
        }

        $tamano = $_FILES ['tapa2']['size'];
        $tamaño_max = "50000000000";
        if ($tamano < $tamaño_max) {
            $destino = 'img';
            $sep = explode('image/', $_FILES["tapa2"]["type"]);
            $tipo = $sep[1];
            if ($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "jpg"|| $tipo == "png") {
                $a = move_uploaded_file($_FILES ['tapa2']['tmp_name'], $destino . '/' . $cad . '.' . $tipo);
                $tapa2 = $cad . '.' . $tipo;
            } else
                echo "El tipo de archivo no es de los permitidos";
        } else
            echo "El archivo supera el peso permitido.";


       
    } 
    
    
    
     $db->addPublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2);
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
            <span>Agregar Publicidad/Tapa</span>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-settings font-green-haze"></i>
                    <span class="caption-subject bold uppercase"> Alta de Publicidad/Tapa</span>
                </div>
            </div>
            <?php if ($exito) { ?>
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>
                    <span> Publicidad/Tapa agregada correctamente. </span>
                </div>
            <?php } ?>
            <div class="portlet-body form">
                <form role="form" class="form-horizontal" action="publicidad_tapa.php" method="POST" enctype="multipart/form-data">
                    <div class="form-body">

                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Publicidad 1 
                            </label>
                            <div class="col-md-10">
                                <input type="file"   class="form-control" name="publicidad1" id="form_control_1" >
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Publicidad 2 
                            </label>
                            <div class="col-md-10">
                                <input type="file"   class="form-control" name="publicidad2" id="form_control_1" >
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Tapa 1 
                            </label>
                            <div class="col-md-10">
                                <input type="file"   class="form-control" name="tapa1" id="form_control_1" >
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Tapa 2 
                            </label>
                            <div class="col-md-10">
                                <input type="file"   class="form-control" name="tapa2" id="form_control_1" >
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