<?php

require_once "./Conexion.php";

//MODELO = CONTIENE LA LÓGICA
//extends : HERENCIA (POO) en PHP
class Curso extends Conexion{

  //Objeto que almacena la conexion que viene desde el padre(Conexion)
  private $accesoBD;

  //Constructor
  public function __CONSTRUCT(){
    
  }

  //Metodo listar cursos
  public function listarCursos(){

  }

}
?>