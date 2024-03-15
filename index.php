<?php

require_once "./classes/Aeronave.php";
require_once "./classes/Aeroporto.php";
require_once "./classes/Bilhete.php";
require_once "./classes/LinhaAerea.php";
require_once "./classes/Passageiro.php";
require_once "./classes/Piloto.php";

$passageiro = new Passageiro();
$passageiro->setNome("Zé");

echo $passageiro->getNome();

$aeronave = new Aeronave();
$aeronave->setModelo('Boeing 777');
$aeronave->setCapacidade(600);


echo $aeronave->getModelo();
echo $aeronave->getCapacidade();

//echo "$aeronave->getModelo().$aeronave->getCapacidade()";