<?php

namespace FactoryMethod\App\Model;

class Laberinto {


    public function __construct()
    {
    }

    public function anadirHabitacion(Habitacion $habitacion){

    }

    public function getHabitacion(int $numeroDeHabitacion){

    }

    public function getTipo(){
        echo "Mi clase es " . get_class($this) . "\n";

    }
}
