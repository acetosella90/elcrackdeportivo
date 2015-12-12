<?php
include_once("../clases/Database.php");
include_once("../clases/Query.php");

$idUser = $_GET['id'];
$db = new Database();
$db->deleteEntrevista($idUser);
echo "<script>window.location='list_entrevista.php';</script>";
