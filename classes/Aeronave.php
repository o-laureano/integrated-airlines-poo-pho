<?php

class Aeronave
{
    private string $modelo;
    private int $capacidade;
    private string $tipo;
    private string $status;

    public function __construct(string $modelo, int $capacidade, string $tipo, string $status)
    {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->tipo = $tipo;
        $this->status = $status;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setCapacidade(int $capacidade): void
    {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function propostaDeVoo() : string
    {
        return "Levar os " . $this->getCapacidade() . " passageiros do ponto A para o ponto B";
    }

    // public function decolar(): void {

    // }

    // public function pousar(): void {

    // }

    // public function abastecer(): void {

    // }

    // public function estacionar(): void {

    // }

}