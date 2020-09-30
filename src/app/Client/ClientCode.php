<?php

namespace FactoryMethod\App\Client;


 use FactoryMethod\App\Creator\Creator;

 class ClientCode
{
    public function clienCode(Creator $creator)
    {
        $laberinto =$creator->crearLaberinto();

    }
}