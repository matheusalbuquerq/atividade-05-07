<?php

/*1)Construir uma classe PHP, para a entidade Pessoa. Uma pessoa tem nome, data de nascimento, CPF e RG.
A classe deve contemplar os modificadores de acesso e os métodos Getters e Setters.*/

class Pessoa{
    public $nome;
    private $data_nascimento;
    private $CPF;
    private $RG;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getData_nascimento(){
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public function getRG(){
        return $this->CPF;
    }

    public function setRG($RG){
        $this->RG = $RG;
    }

}

/*2)Construir uma classe PHP, para a entidade 
Engenheiro. Uma engenheiro tem nome, data de nascimento, CPF, RG e  
CREA.A classe deve contemplar os modificadores de acesso e os métodos Getters e Setters.*/

class Engenheiro extends Pessoa{
    private $CREA;

    public function getCREA(){
        return $this->CREA;
    }

    public function setCREA($CREA){
        $this->CREA = $CREA;
    }
} 

/*3)Construir uma classe PHP, para a entidade Médico Uma médico tem nome, data de nascimento,
 CPF, RG e  CRM.A classe deve contemplar os modificadores de acesso e os métodos Getters e Setters.*/

class Medico extends Pessoa{
    private $CRM;

    public function getCRM(){
        return $this->CRM;
    }

    public function setCRM($CRM){
        $this->CRM = $CRM;
    }
}





