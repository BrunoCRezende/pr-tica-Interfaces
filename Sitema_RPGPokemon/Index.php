<?php

require 'vendor/autoload.php';
use App\Bulbasauro;
use App\Squirtle;
use App\Charmander;

$mago = new Bulbasauro();
$mago->Atacar("Razor Leaf", "10");

$guerreiro = new Squirtle();
$guerreiro->Atacar("Bubble Beam", "5");

$arqueiro = new Charmander();
$arqueiro->Atacar("Fire Fang", "7");

?>