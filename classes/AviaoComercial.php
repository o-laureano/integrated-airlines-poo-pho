<?php

require_once "Aeronave.php";
class AviaoCarga extends Aeronave
{
    private array $mercadorias;
    public function __construct(string $modelo, int $capacidade, string $tipo, string $status)
    {
        parent::__construct($modelo, $capacidade, $tipo, $status);
        $this->mercadorias = [];
    }

    public function addMercadorias(string $produto, float $quantidade) : void
    {
        $this->mercadorias[] = [$produto, $quantidade];
    }

    public function getMercadorias() : string
    {
        return print_r($this->mercadorias);
    }

    public function propostaDeVoo(): string
    {
        $proposta = "Levar os " . $this->getCapacidade() . " passageiros do ponto A para o ponto B junto com as seguintes mercadorias:";
        foreach ($this->mercadorias as $mercadoria) {
            $proposta = $proposta . "\n* " . $mercadoria[0] . " = " . $mercadoria[1];
        }



        return $proposta;
    }

}