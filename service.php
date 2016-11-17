<?php

  class Alunno
  {
    public $nome, $cognome, $voto;
    
    public function __construct($nome, $cognome, $voto)
    {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->voto = $voto;
    }
  }
  
  header('Content-type: application/json');  //manipola direttamente un pezzo della risposta http
  //Oggetto Php  
  $alunno = new Alunno("Marco", "Maimonte", "9.5");
  $alunno2 = new Alunno("Geordi", "Parriglio", "9.5");
  //$array = array("nome"=>$alunno->nome,"cognome"=>"Garibaldino");
  //Trasformazione in php
  $json = json_encode(array($alunno, $alunno2));
  
  //Restituire al client
  echo $json;
 
 // json_encode();

?>