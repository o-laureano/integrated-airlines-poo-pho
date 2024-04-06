<?php

require_once "./classes/Aeronave.php";
require_once "./classes/Aeroporto.php";
require_once "./classes/Bilhete.php";
require_once "./classes/LinhaAerea.php";
require_once "./classes/Passageiro.php";
require_once "./classes/Piloto.php";
require_once "./classes/AviaoCarga.php";

//Criando aeronava
$boeing = new Aeronave("Boeing 373", 150, "Comercial", "Livre");

//Criando piloto
$pablomarcal = new Piloto("Pablo Marçal", "171-BOBO", 1000000);

//Criando linha aerea
$gol = new LinhaAerea("SP - PR", 1200, $boeing, $pablomarcal);

//Criando tripulante
$zeca = new Passageiro("Zeca PAgodinho", 50, 123);

//Criando bilhete
$sppr = new Bilhete($zeca, $gol, "hoje", 123);
echo $sppr->getNumeroDeIdentificacao();

//Exemplos de impressão dos objetos
echo $pablomarcal->getNome();

$gol->setRotasCadastradas("SP - RJ");

print_r($gol->getRotasCadastradas());

$cargueiro = new AviaoCarga("Aviao  de Carga", 8, "Carga", "Ativo");
$cargueiro->addMercadorias("Equipamentos Eletrônicos", 12000);
$cargueiro->addMercadorias("CELULAR DA XIAOMI", 500);
$cargueiro->addMercadorias("Air Jordan", 53000);
$cargueiro->getMercadorias();

//echo $boeing->propostaDeVoo();

echo $cargueiro->propostaDeVoo();


//foreach ($gol->getRotasCadastradas() as $rota) {
//    echo $rota;
//}

//$passageiro = new Passageiro("123", 12, "Henrique");
//$passageiro->setNome("Zé");
//
//echo $passageiro->getNome();
//
//$aeronave = new Aeronave();
//$aeronave->setModelo('Boeing 777');
//$aeronave->setCapacidade(600);
//
//
//echo $aeronave->getModelo();
//echo $aeronave->getCapacidade();
//
//echo "$aeronave->getModelo().$aeronave->getCapacidade()";