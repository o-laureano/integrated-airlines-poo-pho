<?php

class Passageiro {
//    private Bilhete $numeroDeIdentificacao;
//    private string $bagagem;
    private string $nome;
    private int $idade;
    private int $cpf;
    

    public function __construct(string $nome, int $idade, int $cpf) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function setNumeroDeIdentificacao(Bilhete $numeroDeIdentificacao) : void {
        $this->numeroDeIdentificacao = $numeroDeIdentificacao;
    }

    public function getNumeroDeIdentificacao() : Bilhete {
        return $this->numeroDeIdentificacao;
    }
    
    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }

    public function getNome() : string {
        return $this->nome;
    }

    //    public function setBagagem(string $bagagem) : void {
//        $this->bagagem = $bagagem;
//    }
//
//    public function getBagagem() : string {
//        return $this->bagagem;
//    }

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