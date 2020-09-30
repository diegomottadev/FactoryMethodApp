<?php

namespace FactoryMethod\App\Creator;

use FactoryMethod\App\Model\Direccion;
use FactoryMethod\App\Model\Habitacion;
use FactoryMethod\App\Model\Laberinto;


abstract class Creator
{
   abstract public  function crearLaberinto();

    public function hacerLaberinto(){
        return new Laberinto();
    }

    abstract public function hacerPared();

    abstract public function hacerHabitacion($n);

    abstract public function hacerPuerta($abierto,Habitacion $habitacion);
}