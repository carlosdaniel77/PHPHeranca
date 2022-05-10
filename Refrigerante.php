<?php

require_once 'Bebida.php';

class Refrigerante extends Bebida{

    private $retornavel;

    
    public function getRetornavel()
    {
        return $this->retornavel;
    }

    public function setRetornavel($retornavel)
    {
        $this->retornavel = $retornavel;
    }

    //Métodos    

    public function mostraBebida()
    {
        $dados = "Nome: ".$this->getNome().
                "<br/>Preço: ".$this->getPreco().
                "<br/>Retornavel: ".$this->getRetornavel();
        
        return $dados;
    }
    
    public function verificaPreco($preco)
    {
        $resultado = false;
        if($preco < 5){
            $resultado = true;
        }
        return $resultado;
    }
        
}