<?php

namespace FactoryMethod\App\CreadorConcreto;

use FactoryMethod\App\Creator\Creator;
use FactoryMethod\App\Model\Direccion;
use FactoryMethod\App\Model\Habitacion;
use FactoryMethod\App\Model\HabitacionEncantada;
use FactoryMethod\App\Model\Hechizo;
use FactoryMethod\App\Model\Pared;
use FactoryMethod\App\Model\PuertaHechizada;

class JuegoDeLaberintosEncantados extends Creator
{

    private function hechizar()
    {
        return new Hechizo();
    }

    public function hacerPared()
    {
        // TODO: Implement hacerPared() method.
        return new Pared();
    }

    public function hacerHabitacion($n)
    {
        // TODO: Implement hacerHabitacion() method.
        return new HabitacionEncantada($n,$this->hechizar());
    }

    public function hacerPuerta($abierto,Habitacion $habitacion)
    {
        // TODO: Implement hacerPuerta() method.
        return new PuertaHechizada($abierto,$habitacion);
    }

    public function crearLaberinto(){
        $unLaberinto = $this->hacerLaberinto();
        $h1 = $this->hacerHabitacion(1);
        $h2 = $this->hacerHabitacion(2);
        $unaPuerta = $this->hacerPuerta(true,$h1);
        $otraPuerta = $this->hacerPuerta(false,$h2);

        $h1->establecerLado(Direccion::NORTE,$this->hacerPared());
        $h1->establecerLado(Direccion::ESTE,$unaPuerta);

        $h1->establecerLado(Direccion::SUR,$this->hacerPared());
        $h1->establecerLado(Direccion::OESTE,$this->hacerPared());

        $h2->establecerLado(Direccion::NORTE,$this->hacerPared());
        $h2->establecerLado(Direccion::ESTE,$unaPuerta);

        $h2->establecerLado(Direccion::SUR,$this->hacerPared());
        $h2->establecerLado(Direccion::OESTE,$this->hacerPared());

        $unLaberinto->anadirHabitacion($h1);
        $unLaberinto->anadirHabitacion($h2);

        return $unLaberinto;
    }

}