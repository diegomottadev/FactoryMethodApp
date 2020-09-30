<?php
require '../vendor/autoload.php';

$juego1 = new \FactoryMethod\App\Client\ClientCode();
$juego1->clienCode(new \FactoryMethod\App\CreadorConcreto\JuegoDeLaberintos());

$juego2 = new \FactoryMethod\App\Client\ClientCode();
$juego2->clienCode(new \FactoryMethod\App\CreadorConcreto\JuegoDeLaberintosEncantados());