<?php

  class Mascota{

    private $nombre;
    private $tipo;
    private $sexo;
    private $peso;

    //Contrustor (método -unica ejecucion)
    //Inicializacion de valores
    public function __CONSTRUCT($nombre, $tipo, $sexo, $peso){
      $this->nombre = $nombre;
      $this->tipo = $tipo;
      $this->sexo = $sexo;
      $this->peso = $peso;
    }

    public function __GET($atributo){
      return $this->$atributo;
    }
  }

  $mascota1 = new Mascota("Firulais", "Perro", "Macho", 40);

  echo $mascota1->__GET("nombre");print"<br>";
  echo $mascota1->__GET("tipo");print"<br>";
  echo $mascota1->__GET("sexo");print"<br>";
  echo $mascota1->__GET("peso");print"<br>";




?>