<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    function __construct($titulo){
        $this->titulo=$titulo;
        $this->avaliacao=1;
        $this->views=0;
        $this->curtidas=0;
        $this->reproduzindo=false;
    }

    function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    function getTitulo(){
        return $this->titulo;
    }

    function setAvaliacao($avaliacao){
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao=$media;
    }
    function getAvaliacao(){
        return $this->avaliacao;
    }

    function setViews($views){
        $this->views=$views;
    }
    function getViews(){
        return $this->views;
    }

    function setCurtidas($curtidas){
        $this->curtidas=$curtidas;
    }
    function getCurtidas(){
        return $this->curtidas;
    }

    function setReproduzindo($reproduzindo){
        $this->reproduzindo=$reproduzindo;
    }
    function getReproduzindo(){
        return $this->reproduzindo;
    }

    function like(){
        $this->curtidas ++;
    }

    function pause(){
        $this->reproduzindo=false;
    }

    function play(){
        $this->reproduzindo=true;
    }
}
?>