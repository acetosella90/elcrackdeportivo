<?php

class Query {

    public function getUser($username, $password) {
        $result = "SELECT count(*) as cant FROM usuarios WHERE username='$username' AND password='$password'";
        return $result;
    }

    public function isSuper($id) {
        $result = "SELECT count(*) as cant FROM usuarios WHERE id='$id' and superusuario='1'";
        return $result;
    }

    public function getUserId($username, $password) {
        $result = "SELECT id FROM usuarios WHERE username='$username' AND password='$password'";
        return $result;
    }

    public function addUser($username, $password, $superuser) {
        $result = "INSERT INTO usuarios(username,password,superusuario) VALUES ('$username','$password','$superuser');";
        return $result;
    }

    public function updateUser($username, $password, $superuser, $id) {
        $result = "UPDATE usuarios SET username='$username', password='$password',superusuario='$superusuario' WHERE id='$id';";
        return $result;
    }

    public function getAllUsers() {
        $result = "SELECT * FROM usuarios;";
        return $result;
    }

    public function getUserById($id) {
        $result = "SELECT * FROM usuarios where id = '$id';";
        return $result;
    }

    public function deleteUser($id) {
        $result = "DELETE FROM usuarios WHERE id ='$id';";

        return $result;
    }

    public function addNoticia($titulo, $link, $descripcion, $destacada, $imagen) {
        $result = "INSERT INTO noticias(titulo,link,descripcion,destacada,imagen) VALUES ('$titulo', '$link', '$descripcion', '$destacada', '$imagen' );";
        return $result;
    }

    public function getAllNoticias() {
        $result = "SELECT * FROM noticias;";
        return $result;
    }

    public function deleteNoticia($id) {
        $result = "DELETE FROM noticias WHERE id_noticia ='$id';";
        return $result;
    }


    public function deleteEntrevista($id) {
        $result = "DELETE FROM entrevistas WHERE id ='$id';";
        return $result;
    }
    
    public function getNoticiaById($id) {
        $result = "SELECT * FROM noticias where id_noticia = '$id';";
        return $result;
    }
    
    public function updateNoticia($titulo, $link, $descripcion, $destacada, $imagen, $id) {
        $result = "UPDATE noticias SET titulo='$titulo', link='$link',descripcion='$descripcion', destacada='$destacada', imagen='$imagen' WHERE id_noticia='$id';";
        return $result;
    }

    public function addEntrevista($titulo, $link, $descripcion){
        $result = "INSERT INTO entrevistas(titulo,link,descripcion) VALUES ('$titulo','$link','$descripcion');";
        return $result;
    }


    public function getAllEntrevistas() {
        $result = "SELECT * FROM entrevistas;";
        return $result;
    }

    public function getEntrevistaById($id){
        $result = "SELECT * FROM entrevistas where id = '$id';";
        return $result;
    }

    public function updateEntrevista($titulo, $link, $descripcion,$id){
        $result = "UPDATE entrevistas SET titulo='$titulo', link='$link',descripcion='$descripcion' WHERE id='$id';";
        return $result; 
    }
}
