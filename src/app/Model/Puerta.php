<?php

namespace FactoryMethod\App\Model;


class Puerta extends LugarDelMapa {

    public $estaAbierta;
    public $habitacion;

    public function __construct(bool $estaAbierta, Habitacion $habitacion)
    {
        $this->habitacion = $habitacion;
        $this->estaAbierta = $estaAbierta;
    }


    protected function entrar()
    {
        // TODO: Implement entrar() method.
    }
}

