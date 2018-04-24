<?php
abstract class Pessoa{
    protected $nome, $idade, $sexo, $xp;

    function __construct($nome, $idade, $sexo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->sexo=$sexo;
        $this->xp=0;
    }

    function setNome($nome){
        $this->nome=$nome;
    }
    function getNome(){
        return $this->nome;
    }

    function setIdade($idade){
        $this->idade=$idade;
    }
    function getIdade(){
        return $this->idade;
    }

    function setSexo($sexo){
        $this->sexo=$sexo;
    }
    function getSexo(){
        return $this->sexo;
    }

    function setXp($xp){
        $this->xp=$xp;
    }
    function getXp(){
        return $this->xp;
    }

    protected function ganharXp($n){
        $this->xp+=$n;
    }
}
?>