<?php


class Funcionario{

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    function __get($atributo)
    {
        return $this->$atributo;
    }
    // function setNome($nome){
    //     $this->nome = $nome;
    // }
    
    // function setNumFilhos($numFilhos){
    //     $this->numFilhos = $numFilhos;
    // }

    // function getNome(){
    //     return $this->nome;
    // }

    // function getNumFilhos(){
    //     return $this->numFilhos;
    // }

    function resumirCardFunc(){
        return "$this->nome tem $this->numFilhos filhos";
    }
    function modificarNumFilhos($numFilhos){
       $this->numFilhos = $numFilhos;

   }
 }
$y = new Funcionario();
$y-> __set('nome', 'jose');
$y-> __set('numFilhos', 2);
echo  $y->__get('nome'). ' possui' . $y->__get('numFilhos' ) . ' filho(s) ';
echo '<br/>';
$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos',0);
echo  $x->__get('nome'). ' possui' . $x->__get('numFilhos') . ' filho(s) ';

?>