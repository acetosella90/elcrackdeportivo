<?php

// clase base con propiedades y métodos miembro
class Noticia {

   var $id;
   var $imagen;
   var $link;
   var $descripcion;
   var $titulo;
   var $destacada;


  function Noticia($id, $imagen, $link, $descripcion, $titulo,$destacada) 
  {
    $this->id=$id;
    $this->imagen=$imagen;
    $this->link=$link;
    $this->descripcion=$descripcion;
    $this->titulo=$titulo;
    $this->destacada=$destacada;
  }

  function getId() 
  {
    return $this->id;
  }

  function getImagen() 
  {
    return $this->imagen;
  }

  function getLink() 
  {
    return $this->link;
  }

  function getDescripcion() 
  {
    return $this->descripcion;
  }


  function getTitulo() 
  {
    return $this->titulo;
  }

  function getDestacada() 
  {
    return $this->destacada;
  }
   
}