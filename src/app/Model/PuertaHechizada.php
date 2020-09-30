<?php

namespace FactoryMethod\App\Model;


class PuertaHechizada extends Puerta {

    public $estaAbierta;
    public $habitacion;

    public function __construct(bool $estaAbierta, Habitacion $habitacion)
    {
        $this->habitacion = $habitacion;
        $this->estaAbierta = $estaAbierta;
    }

}
