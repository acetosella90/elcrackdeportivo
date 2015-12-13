<?php

// clase base con propiedades y métodos miembro
class Entrevista {

   var $id;
   var $link;
   var $descripcion;
   var $titulo;


   function Entrevista($id, $link, $descripcion, $titulo) 
   {
          $this->id=$id;
          $this->link=$link;
          $this->descripcion=$descripcion;
          $this->titulo=$titulo;
   }

   function getId() 
   {
      return $this->id;
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
}