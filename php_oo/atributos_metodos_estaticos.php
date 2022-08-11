<?php
class Exemplo{
    public static $atributo1 = 'sou um atributo estatico';
    public $atributo2 = 'sou um atributo normal';
    public static function metodo1(){
        echo ' sou um metodo estatico';

    }
    public function metodo2(){
        echo 'sou um metodo normal';

    }
 
}
$x = new Exemplo();
// echo Exemplo::$atributo1;
// echo '<br/>';
// Exemplo::metodo1();
echo $x->atributo2;

?>