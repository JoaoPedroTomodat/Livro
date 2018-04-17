<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $livro;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($livro, $autor, $totPaginas, $leitor){
        $this->livro=$livro;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
        $this->aberto=false;
        $this->pagAtual = 0;
        $this->leitor=$leitor;
    }

    public function setLivro($livro){
        $this->livro=$livro;
    }
    public function getLivro(){
        return $this->livro;
    }

    public function setAutor($autor){
        $this->autor=$autor;
    }
    public function getAutor(){
        return $this->autor;
    }

    public function setTotPaginas($totPaginas){
        $this->totPaginas=$totPaginas;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function setPagAtual($pagAtual){
        $this->pagAtual=$pagAtual;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function setAberto($aberto){
        $this->aberto=$aberto;
    }
    public function getAberto($aberto){
        return $this->aberto;
    }

    public function setLeitor($leitor){
        $this->leitor=$leitor;
    }
    public function getLeitor(){
        return $this->leitor;
    }



    public function detalhes(){
        echo "<p>Nome do Livro: " . $this->livro;
        echo "<br>Autor: " . $this->autor;
        echo "<br>Total de Páginas " . $this->totPaginas;
        echo "<br>Sendo lido por " . $this->leitor->getNome();
        echo "<br>Na Página " . $this->pagAtual;
    }


    //Métodos da publicação
    public function abrir(){
        $this->aberto=true;
    }

    public function fechar(){
        $this->aberto=false;
    }

    public function folhear($p){
        if($p>$this->totPaginas){
            echo "Página não encontrada";
        }else{
            $this->pagAtual = $p;
        }
    }

    public function avancarPag(){
        if($this->pagAtual>$this->totPaginas){
            echo "<p>Não tem mais página.</p>";
        }else{
            $this->pagAtual ++;
        }
    }

    public function voltarPag(){
        $this->pagAtual --;
        if($this->pagAtual <= 0){
            echo "<p>Página não existe.</p>";
        }
    }
}
?>