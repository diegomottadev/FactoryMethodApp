<?php

namespace FactoryMethod\App\Model;


class HabitacionEncantada extends Habitacion {

    public $numeroDeHabitacion;
    public $lados;
    public $hechizo;
    public function __construct(int $numeroDeHabitacion,Hechizo $hechizo)
    {
        $this->hechizo = $hechizo;
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
