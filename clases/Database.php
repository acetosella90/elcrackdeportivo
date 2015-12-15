<?php

class Database {

    private $link;
    private $host, $username, $password, $database;

    public function __construct() {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->database = "elcrackdeportivo";

        $this->link = mysql_connect($this->host, $this->username, $this->password)
                OR die("There was a problem connecting to the database.");

        mysql_select_db($this->database, $this->link)
                OR die("There was a problem selecting the database.");
        return true;
    }

    public function query($query) {
        $result = mysql_query($query);
        if (!$result)
            die('Invalid query: ' . mysql_error());
        return $result;
    }

    public function __destruct() {
        mysql_close($this->link)
                OR die("There was a problem disconnecting from the database.");
    }

    public function isLogin($username, $password) {
        $query = new Query();
        $result = $this->query($query->getUser($username, $password));
        return (mysql_fetch_assoc($result)['cant'] > 0);
    }

    public function getUserId($username, $password) {
        $query = new Query();
        $result = $this->query($query->getUserId($username, $password));
        return mysql_fetch_assoc($result)['id'];
    }

    public function isUserUser($idUser) {
        $query = new Query();
        $result = $this->query($query->isSuper($idUser));
        return (mysql_fetch_assoc($result)['cant'] > 0);
    }

    public function addUser($username, $password, $superuser) {
        $query = new Query();
        $this->query($query->addUser($username, $password, $superuser));
    }

    public function updateUser($username, $password, $superuser, $id) {
        $query = new Query();
        $this->query($query->updateUser($username, $password, $superuser));
    }

    public function getAllUsers() {
        $query = new Query();
        return $this->query($query->getAllUsers());
    }

    public function deleteUser($id) {
        $query = new Query();
        $this->query($query->deleteUser($id));
    }

    public function getUserById($idUser) {
        $query = new Query();
        return $this->query($query->getUserById($idUser));
    }

    public function addNoticia($titulo, $link, $descripcion, $destacada, $imagen, $categoria, $etiquetas) {

        $query = new Query();
        return $this->query($query->addNoticia($titulo, $link, $descripcion, $destacada, $imagen, $categoria, $etiquetas));
    }

    public function getAllNoticias() {
        $query = new Query();
        return $this->query($query->getAllNoticias());
    }

    public function deleteNoticia($id) {
        $query = new Query();
        $this->query($query->deleteNoticia($id));
    }

    public function getNoticiaById($idNoticia) {
        $query = new Query();
        return $this->query($query->getNoticiaById($idNoticia));
    }

    public function updateNoticia($titulo, $link, $descripcion, $destacada, $imagen, $categoria, $etiquetas, $id) {
        $query = new Query();
        $this->query($query->updateNoticia($titulo, $link, $descripcion, $destacada, $imagen, $categoria, $etiquetas, $id));
    }

    public function addEntrevista($titulo, $link, $descripcion, $nombre) {
        $query = new Query();
        $this->query($query->addEntrevista($titulo, $link, $descripcion, $nombre));
    }

    public function getAllEntrevistas() {
        $query = new Query();
        return $this->query($query->getAllEntrevistas());
    }

    public function deleteEntrevista($id) {
        $query = new Query();
        $this->query($query->deleteEntrevista($id));
    }

    public function getEntrevistaById($id) {
        $query = new Query();
        return $this->query($query->getEntrevistaById($id));
    }

    public function updateEntrevista($titulo, $link, $descripcion, $id) {
        $query = new Query();
        $this->query($query->updateEntrevista($titulo, $link, $descripcion, $id));
    }

    public function getCantUsers() {
        $query = new Query();
        return $this->query($query->getCantUsers());
    }

    public function getCantNoticias() {
        $query = new Query();
        return $this->query($query->getCantNoticias());
    }

    public function getCantEntrevistas() {
        $query = new Query();
        return $this->query($query->getCantEntrevistas());
    }

    public function getCantPublicidadTapas() {
        $query = new Query();
        return $this->query($query->getCantPublicidadTapas());
    }

    public function updatePublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2) {
        $query = new Query();
        return $this->query($query->updatePublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2));
    }

    public function addPublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2) {

        $query = new Query();

        if ($this->query($query->getCantPublicidadTapas()))
            $this->query($query->addPublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2));

        return $this->query($query->updatePublicidadTapa($publicidad1, $publicidad2, $tapa1, $tapa2));
    }

}
