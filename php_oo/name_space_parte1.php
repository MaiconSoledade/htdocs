<?php
namespace A;

class Cliente implements CadastroInterface{
    public $nome = 'Maicon';

    public function __construct(){
print_r(get_class_methods($this));
    }

    public function __get($attr)
    {
     return $this->$attr;   
    }
    public function salvar(){
        echo 'salvar';
    }
}
interface CadastroInterface{
    public function salvar();
}

namespace B;
class Cliente implements CadastroInterface{
    public $nome = 'Douglas';
    public function __get($attr)
    {
     return $this->$attr;   
    }
    public function remover(){
        echo 'remover';
        
    }
}
interface CadastroInterface{
    public function remover();
}


$c = new \A\Cliente();

print_r($c);
echo $c->__get('nome');
?>