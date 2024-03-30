<?php

require_once "Piloto.php";
require_once "Aeronave.php";
class LinhaAerea {
  private array $rotasCadastradas = [];
  private int $horarioDeVoo;
  private Aeronave $modelo;
  private Piloto $nome;

  public function __construct(array $rota, int $horarioDeVoo, Aeronave $aeronave, Piloto $piloto) {
    $this->rotasCadastradas[] = $rota;
    $this->horarioDeVoo =  $horarioDeVoo;
    $this->modelo = $aeronave;
    $this->nome = $piloto; 
  }

    public function setRotasCadastradas(array $rotasCadastradas, int $horarioDeVoo, Aeronave $aeronave, Piloto $piloto) : void 
    {
        $this->rotasCadastradas = $rotasCadastradas;
    }

    public function getRotasCadastradas() : array 
    {
        return $this->rotasCadastradas;
    }

    public function setHorarioDeVoo(int $horarioDeVoo) : void 
    {
        $this->horarioDeVoo = $horarioDeVoo;
    }

    public function getHorarioDeVoo() : string 
    {
        return $this->horarioDeVoo;
    }

    public function setModelo(Aeronave $modelo) : void 
    {
        $this->modelo = $modelo;
    }

    public function getModelo() : Aeronave
    {
        return $this->modelo;
    }

    public function setNome(Piloto $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getNome() : Piloto
    {
        return $this->nome;
    }

// public function agendarVoo() : void {

// }

//   public function adicionarRota() : void {

// }

//   public function removerRota() : void {

// }

//   public function adicionarAeronave() : void {

// }

//   public function removerAeronave() : void {

// }

//   public function gerenciarVoos() : void {

// }

//   public function gerenciarPassageiros() : void {
  
// }
}