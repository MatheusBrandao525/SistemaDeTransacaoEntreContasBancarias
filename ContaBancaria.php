<?php

class ContaBancaria {

    // Atributos
    public $numConta;
    protected $tipoConta;
    private $donoConta;
    private $saldo;
    private $status;

    // Metodos

    public function abrirConta($tipo){
        $this->setTipoConta($tipo);
        $this->setStatus(true);
            if($tipo == 'CC'){
                $this->setSaldo(100);
            } elseif($tipo == 'CP'){
                $this->setSaldo(150);
            }
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Voce não pode encerrar a comta pois existe saldo nela!";
        }elseif($this->getSaldo() < 0){
            echo "Voce precisa pagar as pendencias para encerrar a sua conta!";
        }else{
            $this->setStatus(false);
        }
    }

    public function depositar($valorDeposito){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() +$valorDeposito);
        }else{
            echo "Conta Fechada Impossivel Depositar!";
        }
    }

    public function sacar($valorSaque){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $valorSaque){
                $this->setSaldo($this->getSaldo() - $valorSaque);
                echo "Saque realizado com sucesso!";
            }else{
                echo "Saldo insuficiente para saque!";
            }
        }else{
            echo "Impossivel sacar, conta está fechada!";
        }
    }

    public function pagarMensalidade(){
        $valorTaxa = 0;
        if($this->getTipoConta() == 'CC'){
            $this->valorTaxa = 20;
        }elseif($this->getTipoConta() == 'CP'){
            $this->valorTaxa = 10;
        }
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $valorTaxa);
        }else{
            echo "problemas na sua conta";
        }
    }

    public function transferir($valorTranferencia,$dono,$numero,$nomeDestinatario){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $valorTranferencia){
                if($this->getNumConta() == $numero){
                $this->setSaldo($this->getSaldo() - $valorTranferencia);
                $this->setSaldo($this->getSaldo() + $valorTranferencia);
                }else{
                    echo 'Destinatario não encontrado';
                }
            }else{
                echo "Saldo insuficiente para transferencias";
            
            }
        }else{
            echo "impossivel transferir!";
        }
    }

    // Metodos Especiais
    public function __construct(){
        $this->getsaldo(0);
        $this->getstatus(false);
        echo "conta aberta com sucesso!";
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($nc){
        $this->numConta = $nc;
    }

    public function getTipoConta(){
        return $this->tipoConta;
    }

    public function setTipoConta($tp){
        $this->tipoConta = $tp;
    }

    public function getDono(){
        return $this->donoConta;
    }

    public function setDono($dn){
        $this->donoConta = $dn;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($sl){
        $this->saldo = $sl;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($st){
        $this->status = $st;
    }

    

}/* Fim da classe ContaBanco */





?>