<?php

  class Persona{
    private $apellidos;
    private $nombres;
    private $estadoCivil;
    private $numeroHijos;
    private $telefono;

    //Métodos mágicos
    public function __GET($atributo){
      return $this->$atributo;
    }

    public function __SET($atributo, $valor){
      $this->$atributo = $valor;
    }

  }
  $persona1 = new Persona();

  $persona1->__SET("apellidos", "De la Cruz Campos");
  $persona1->__SET("nombres", "Richard");
  $persona1->__SET("telefono", "961118837");

  echo $persona1->__GET("apellidos");print"<br>";
  echo $persona1->__GET("nombres");print"<br>";
  echo $persona1->__GET("telefono");print"<br>";
?>
