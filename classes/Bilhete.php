<?php

require_once "Passageiro.php";
// require_once "LinhasAereas.php";

class Bilhete {
    public Passageiro $nomePassageiro;
    public string $origem;
    public string $destino;
    public string $dataHora;
    public string $numeroDeIdentificacao;

    public function __construct() {
    }

    public function getNomePassageiro() : string {

    }

    public function permitirCheckIn(): void
    {
        
    }
    public function verificarPassageiro(): void
    {
        
    }
    public function autorizarEmbarque(): void
    {
        
    }
    public function gerarDadosDeRota():void
    {
        
    }
}