<?php

require_once '../models/Curso.php';

if (isset($_POST['operation'])){
  $curso = new Curso();

  if ($_POST['operation']=='listar'){
    $datosObtenidos = $curso->listarCursos();
    echo json_encode($datosObtenidos);
  }


}


?>