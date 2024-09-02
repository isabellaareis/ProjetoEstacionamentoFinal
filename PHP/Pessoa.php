<?php
    namespace Projeto\projetoEstacionamento\PHP;
    use Projeto\ProjetoEstacionamento\PHP\Pessoa;

    class Pessoa{
        //Encapsular as variáveis
        //Declaração de Variáveis
        protected string $nome;
        protected string $telefone;
        protected string $endereco;
        protected string $placa;
        protected string $carro;
        protected string $cor;

        //Instanciar = dar um valor inicial
        //Método Construtor
        public function __construct( 
            string $nome, 
            string $telefone, 
            string $endereco)
        {
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
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
                "<br><br>Nome: ".$this->nome.
                "<br>Telefone: ".$this->telefone.
                "<br>Endereço: ".$this->endereco;
        }//fim do método
    }
?>