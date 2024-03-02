<?php

class Aeronave {
    public string $modelo;
    public int $capacidade;
    public string $tipo;
    public string $status;

    public function __construct() {
    
    }

    public function setModelo(string $modelo) : void {
        $this->modelo = $modelo;
    }

    public function getModelo () : string {
        return $this->modelo;
    }

    public function setCapacidade(int $capacidade) : void
    {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade() : int
    {
        return $this->capacidade;
    }

    public function decolar(): void {
        
    }

    public function pousar(): void {
        
    }

    public function abastecer(): void {
        
    }

    public function estacionar(): void {
        
    }

}