<?php
require_once 'Pessoa.php';
class Assinante extends Pessoa{
    private $login, $totAssistido;

    function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido=0;
    }

    function setLogin($login){
        $this->login=$login;
    }
    function getLogin(){
        return $this->login;
    }

    function setTotAssistido($totAssistido){
        $this->totAssistido=$totAssistido;
    }
    function getTotAssistido(){
        return $this->totAssistido;
    }

    function viuMaisUm(){
        $this->totAssistido ++;
    }
}
?>