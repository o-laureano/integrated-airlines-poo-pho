<?php

class Piloto {
    private string $nome;
    private string $registroRAB;
    private int $tempoDeVoo;

    public function __construct() {
    
    }


    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function setRegistroRAB(string $registroRAB) : void {
        $this->registroRAB = $registroRAB;
    }

    public function getRegistroRAB() : string {
        return $this->registroRAB;
    }

    public function setTempoDeVoo(string $tempoDeVoo) : void {
        $this->tempoDeVoo = $tempoDeVoo;
    }

    public function getTempoDeVoo() : int {
        return $this->tempoDeVoo;
    }


    public function pilotarAeronave(): void {
        
    }

    public function comunicarPassageiros(): void {
        
    }

    public function comunicarCentralDeComando(): void {
        
    }

}