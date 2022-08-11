<?php

interface Equipamento{
    public function ligar();
    public function desligar();
}

class Geladeira implements Equipamento{
    public function abrirPorta(){
        echo 'abrir porta ';
    }
    public function ligar(){
        echo 'ligar';
    }
    public function desligar(){
        echo 'desligar';
    }
}


class TV implements Equipamento{
    public function trocarCanal(){
        echo 'trocar canal';
    } 
    public function ligar(){
        echo 'ligar';
    }
    public function desligar(){
        echo 'desligar';
    }
}
$x = new Geladeira();
$y = new TV();
?>