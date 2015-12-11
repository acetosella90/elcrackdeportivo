<?php
include_once("../clases/Database.php");
include_once("../clases/Query.php");

$idNoticia = $_GET['id'];
$db = new Database();
$db->deleteNoticia($idNoticia);
echo "<script>window.location='list_noticia.php';</script>";
