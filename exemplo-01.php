<?php
//atributo fora do método usa $variável, dentro do método $this->variável
class Pessoa {
    
    public $nome; //atributo

    public function falar(){ //método

        return "O meu nome é ".$this->nome;

    }

}

$glaucio = new Pessoa();
$glaucio->nome =  "Glaucio Daniel";
echo $glaucio->falar();


?>