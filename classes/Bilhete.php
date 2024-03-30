<?php

require_once "Passageiro.php";

class Bilhete {
    private Passageiro $nome;
    private string $origem;
    private string $destino;
    private string $data;
    private string $numeroDeIdentificacao;

    public function __construct(Passageiro $nome, string $origem, string $destino, string $data, int $numeroDeIdentificacao) {

    }

    public function setNome(Passageiro $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getNome(): Passageiro 
    {
        return $this->nome;
    }


    public function setOrigem(string $origem) : void 
    {
        $this->origem = $origem;
    }

    public function getOrigem() : string 
    {
        return $this->origem;
    }

    public function setDestino(string $destino) : void 
    {
        $this->destino = $destino;
    }

    public function getDestino() : string 
    {
        return $this->destino;
    }

    public function setData(string $data) : void 
    {
        $this->data = $data;
    }

    public function getData() : string 
    {
        return $this->data;
    }

    public function setNumeroDeIdentificacao(string $numeroDeIdentificacao) : void 
    {
        $this->numeroDeIdentificacao = $numeroDeIdentificacao;
    }

    public function getNumeroDeIdentificacao() : string 
    {
        return $this->numeroDeIdentificacao;
    }

    // public function getNomePassageiro() : string {

    // }

    // public function permitirCheckIn(): void
    // {
        
    // }
    // public function verificarPassageiro(): void
    // {
        
    // }
    // public function autorizarEmbarque(): void
    // {
        
    // }
    // public function gerarDadosDeRota():void
    // {
        
    // }
}