<?php

require_once '../models/Curso.php';
require_once '../entities/ECursos.php';

if (isset($_POST['operation'])){
  $curso = new Curso();
  $entCurso = new ECurso;

  if ($_POST['operation']=='listar'){
    $datosObtenidos = $curso->listarCursos();

    if (count($datosObtenidos) == 0){
      echo "<tr><td> No se encontraron datos</td></tr>";
  }else{
      foreach($datosObtenidos as $curso){
         echo "
          <tr>
              <td>{$curso['idcurso']}</td>
              <td>{$curso['nombrecurso']}</td>
              <td>{$curso['especialidad']}</td>
              <td>{$curso['complejidades']}</td>
              <td>{$curso['fechainicio']}</td>
              <td>{$curso['precio']}</td>
              <td>
                  <a href='#' class='btn btn-sm btn-outline-success' title='Editar'><i class='bi bi-pencil'></i></a> -            
                  <a href='#' class='btn btn-sm btn-outline-danger'title='Eliminar'><i class='bi bi-trash'></i></a>
              </td>
          </tr>
          ";
      }
  }
  }

  if($_POST['operation']=='registrarCurso'){

    $datosForm = [
        "nombrecurso"   => $_POST['nombrecurso'],
        "especialidad"  => $_POST['especialidad'],
        "complejidad"   => $_POST['complejidad'],
        "fechainicio"   => $_POST['fechainicio'],
        "precio"        => $_POST['precio'],
        
    ];

      $curso->registrarCurso($datosForm);
  
  }


}


?>