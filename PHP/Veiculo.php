<?php
     namespace Projeto\projetoEstacionamento\PHP;
     use Projeto\ProjetoEstacionamento\PHP\Veiculo;

     class Veiculo{
         //Encapsular as variáveis
        //Declaração de Variáveis
        protected string $carro;
        protected string $placa;
        protected string $cor;

         //Instanciar = dar um valor inicial
        //Método Construtor
        public function __construct( 
            string $carro, 
            string $placa, 
            string $cor)
        {
            $this->placa     = $placa;
            $this->carro = $carro;
            $this->cor = $cor;
        }//fim do método construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->$name = $value;
        }//fim do set

        public function imprimir():string
        {
            return
                "<br><br>Carro: ".$this->carro.
                "<br>Placa: ".$this->placa.
                "<br>Cor: ".$this->cor;
        }//fim do método
    }

?>