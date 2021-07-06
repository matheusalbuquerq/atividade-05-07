<?php

/*1)Construir uma classe PHP, para a entidade Pessoa. Uma pessoa tem nome, data de nascimento, CPF e RG.
A classe deve contemplar os modificadores de acesso e os métodos Getters e Setters.*/

class Pessoa{
    public $nome="andre";
    private $data_nascimento;
    private $CPF;
    private $RG;

    public function getNome(){
        return $this->nome;
    }
}

$jose = new Pessoa();
echo $jose->getNome();

