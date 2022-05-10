<?php

require_once 'Bebida.php';

class Vinho extends Bebida{

    private $safra;
    private $tipo;

    
    public function getSafra()
    {
        return $this->safra;
    }

    public function setSafra($safra)
    {
        $this->safra = $safra;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    //Métodos    

    public function mostraBebida(){
        $dados = "Nome: ".$this->getNome().
                "<br/>Preco: ".$this->getPreco().
                "<br/>Safra: ".$this->safra.
                "<br/>Tipo: ".$this->tipo;
        return $dados;
    }

    public function verificaPreco($preco)
    {
        $resultado = false;
        if($preco < 25){
            $resultado = true;
        }
        return $resultado;
    }
        
}