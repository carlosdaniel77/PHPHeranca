<?php

require_once 'Bebida.php';

class Suco extends Bebida{

    private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function verificaPreco($preco)
    {
        $resultado = false;
        if($preco < 2.5){
            $resultado = true;
        }
        return $resultado;
    }

    public function mostraBebida()
    {
        $dados = "Nome: ".$this->getNome().
                 "<br/>Preço: ".$this->getPreco().
                 "<br/>Sabor: ".$this->getSabor();
        return $dados;
    }

}

?>