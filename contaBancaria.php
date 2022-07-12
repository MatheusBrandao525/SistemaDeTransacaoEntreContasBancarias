<?php

class Contabanco {

    // Atributos
    public $numConta;
    protected $tipoConta;
    private $donoConta;
    private $saldo;
    private $status;

    // Metodos

    public function abrirConta(){

    }

    public function fecharConta(){

    }

    public function depositar(){

    }

    public function sacar(){

    }

    public function pagarMensalidade(){

    }

    public function transferir(){

    }

    // Metodos Especiais
    public function __construct(){
        $this->getsaldo(0);
        $this->getstatus(false);
    }

    public function getNumConta(){
        return $this->numConta;
    }

    

}/* Fim da classe ContaBanco */





?>