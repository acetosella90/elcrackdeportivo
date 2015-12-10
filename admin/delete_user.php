<?php
include_once("../clases/Database.php");
include_once("../clases/Query.php");

$idUser = $_GET['id'];
$db = new Database();
$db->deleteUser($idUser);
echo "<script>window.location='list_user.php';</script>";
