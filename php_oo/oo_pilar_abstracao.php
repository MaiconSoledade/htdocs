<?php


class Funcionario{

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function resumirCardFunc(){
        return "$this->nome tem $this->numFilhos filhos";
    }
    function modificarNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;

    }
}
$y = new Funcionario();
$y-> setNome('jose');
$y-> setNumFilhos(2);
echo  $y->resumirCardFunc();

?>