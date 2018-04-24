<?php
require_once 'Video.php';
require_once 'Assinante.php';
class Visualizacao{
    private $espectador, $filme;

    function __construct($espectador, $filme){
        $this->espectador=$espectador;
        $this->filme=$filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }

    function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }

    function avaliarPorc($porc){
        $nova = 0;
        if($porc <= 20){
            $nova = 3;
        }elseif ($porc <= 50 ){
            $nova = 5;        
        }elseif( $porc <= 75){
            $nova = 7;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($porc);
    }

    function setEspectador($espectador){
        $this->espectador=$espectador;
    }
    function getEspectador(){
        return $this->espectador;
    }

    function setFilme($filme){
        $this->filme=$filme;
    }
    function getFilme(){
        return $this->filme;
    }
    
   
}
?>