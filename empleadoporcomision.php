<?php

include "empleado.php";

class empleadoporcomision extends empleado{
    private $comision;
    private $unidadesvendidas;

    function __construct($nombre,$apellido,$salario,$comision){
        parent::__construct($nombre,$apellido,$salario);
        $this->comision =$comision;
    }
    public function calcularPago(){
        $salario = $this->getSalario();
        return $salario + ($this->comision * $this->unidadesvendidas);
    }
    public function sumarVentas($unidades){
        $this->unidadesvendidas = $this->unidadesvendidas + $unidades;
    }
    public function reiniciarVentas(){
        $this->unidadesvendidas = 0;
    }
}