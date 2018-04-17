<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function receberAum($aum){
        $this->salario += $aum;
    }

    public function __construct(){

    }

    public function setEspecialidade($especialidade){
        $this->especialidade=$especialidade;
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setSalario($salario){
        $this->salario=$salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}
?>