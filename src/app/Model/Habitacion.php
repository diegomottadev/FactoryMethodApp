<?php

namespace FactoryMethod\App\Model;

class Habitacion extends LugarDelMapa {

    public $numeroDeHabitacion;
    private $lados;
    public function __construct(int $numeroDeHabitacion)
    {
        $this->numeroDeHabitacion = $numeroDeHabitacion;
        $this->lados = array(
            Direccion::ESTE => "",
            Direccion::OESTE => "",
            Direccion::SUR =>  "",
            Direccion::NORTE =>  "",
        );;
    }

    public function entrar(){

    }

    public function establecerLado($direccion,LugarDelMapa $lugar){

        $this->lados[$direccion] = $lugar;

    }

    public function obtenerLado(Direccion $direccion){
        return $this->lados($direccion);
    }
}
