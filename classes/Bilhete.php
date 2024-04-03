<?php

require_once "Passageiro.php";

class Bilhete {
    private Passageiro $nome;
    private LinhaAerea $rotasCadastradas;
    private string $data;
    private string $numeroDeIdentificacao;

    public function __construct(Passageiro $nome, LinhaAerea $rotasCadastradas, string $data, string $numeroDeIdentificacao) {
        $this->nome = $nome;
        $this->rotasCadastradas = $rotasCadastradas;
        $this->data = $data;
        $this->numeroDeIdentificacao = $numeroDeIdentificacao;
    }

    public function setNome(Passageiro $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getNome(): Passageiro 
    {
        return $this->nome;
    }


    public function setRotas(LinhaAerea $rota) : void
    {
        $this->rotasCadastradas = $rota;
    }
    public function getRotas(LinhaAerea $rota) : LinhaAerea
    {
        return $this->rotasCadastradas = $rota;
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