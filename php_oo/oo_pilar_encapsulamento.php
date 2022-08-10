<?php
class Pai{
private $nome = 'maicon';
protected $sobrenome = 'soledade';
public $humor = 'nada';

public function getNome(){
    return $this->nome;
}
public function setNome($value){
    if(strlen($value)>=3){
        $this->nome = $value;

    }

}
}
$pai = new Pai();
echo $pai->getNome();
$pai->setNome('douglas');
echo '<br/>';
echo $pai->getNome();
?>