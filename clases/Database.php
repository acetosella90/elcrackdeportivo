<?php

class Database {

    private $link;
    private $host, $username, $password, $database;

    public function __construct() {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "1682951";
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

    public function addNoticia($titulo, $link, $descripcion, $destacada, $imagen) {

        $query = new Query();
        return $this->query($query->addNoticia($titulo, $link, $descripcion, $destacada, $imagen));
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
    
    public function updateNoticia($titulo, $link, $descripcion, $destacada, $imagen, $id) {
        $query = new Query();
        $this->query($query->updateNoticia($titulo, $link, $descripcion, $destacada, $imagen, $id));
    }


    public function addEntrevista($titulo, $link, $descripcion){
        $query = new Query();
        $this->query($query->addEntrevista($titulo, $link, $descripcion));
    }

    public function getAllEntrevistas(){
        $query = new Query();
        return $this->query($query->getAllEntrevistas());
    }

    public function deleteEntrevista($id){
        $query = new Query();
        $this->query($query->deleteEntrevista($id));
    }

    public function getEntrevistaById($id){
        $query = new Query();
        return $this->query($query->getEntrevistaById($id));
    }

    public function updateEntrevista($titulo, $link, $descripcion,$id){
        $query = new Query();
        
        $this->query($query->updateEntrevista($titulo, $link, $descripcion,$id));
    }

}
