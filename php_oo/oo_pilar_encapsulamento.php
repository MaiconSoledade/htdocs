<?php
class Pai{
private $nome = 'maicon';
protected $sobrenome = 'soledade';
public $humor = 'nada';
}
$pai = new Pai();
echo $pai->$humor;
$pai->$humor = 'triste';
echo '<br/>';
echo $pai->$humor;

?>