<?php

require_once "LinhaAerea.php";
class Aeroporto {
    private string $codigoIATA;
    private string $nome;
//    private LinhaAerea $rotasCadastradas;
    private string $tipo;
    
    public function __construct() {

    }

    public function setCodigoIATA(string $codigoIATA) : void 
    {
        $this->codigoIATA = $codigoIATA;
    }

    public function getCodigoIATA () : string 
    {
        return $this->codigoIATA;
    }
    
    public function setNome(string $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getNome (): string 
    {
        return $this->nome;
    }

//    public function setRotasCadastradas(LinhaAerea $rotasCadastradas) : void
//    {
//        $this->nome = $rotasCadastradas;
//    }

//    public function getRotasCadastradas() : LinhaAerea
//    {
//        return $this->rotasCadastradas;
//    }

    public function setTipo(string $tipo) : void 
    {
        $this->tipo = $tipo;
    }

    public function getTipo() : string
    {
        return $this->tipo;
    }

    public function checkIn(): void {
        
    }

    public function checkOut(): void {
        
    }

    public function pesarBagagem(): void {
        
    }
    
    public function revistarPassageiros(): void {
        
    }
}