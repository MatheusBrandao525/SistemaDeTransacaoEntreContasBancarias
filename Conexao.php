<?php

   class ConexaoBD
   {
      // Atributos
      private $usuario;
      private $senha;
      private $banco;
      private $servidor;
      private static $pdo


      // Metodo Construtor
      public function __construct(){
         $this->servidor = 'localhost';
         $this->banco = 'SistemaBanco';
         $this->usuario = 'Matheus';
         $this->senha = '1exagon1@';
      }


      // Metodo de conexao
      public function conectar(){
         try {
            if(is_null(self::$pdo)){
               self::$pdo -> new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco,$this->usuario, $this->senha);
            }
            return self::$pdo;
         } catch (PDOExeption $e) {
            echo "ERRO: ".$e->getMessage();
         }
      }
   }
   
?>