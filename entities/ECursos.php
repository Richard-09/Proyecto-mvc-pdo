<?php

class ECurso{

  private $nombrecurso;		
	private $especialidad;	
	private $complejidad;		
	private $fechainicio	;	
	private $precio;
    
    public function __GET($campo){
        return $this->$campo;
    }

    public function __SET($campo, $valor){
        $this->$campo = $valor;
    }
}

?>