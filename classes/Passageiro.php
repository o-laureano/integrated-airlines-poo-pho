<?php

class Passageiro {
    public string $bilhete;
    public string $bagagem;
    public string $nome;
    

    public function __construct() {
    
    }

    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }

    public function getNome() : string {
        return $this->nome;
    }

//     public function fazerCheckIn(): void {
        
//     }
//     public function fazerCheckOut(): void
//     {
        
//     }
//     public function guardarBagagem(): void
//     {
        
//     }
//     public function embarcar(): void
//     {
        
//     }
//     public function solicitarServicos(): void
//     {
        
//     }
//     public function comprarPassagem(): void
//     {
        
//     }
}