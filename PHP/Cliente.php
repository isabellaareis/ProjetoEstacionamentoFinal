<?php
namespace Projeto\ProjetoEstacionamento\PHP;
//Específica qual classe ue vou utilizar
require_once("Veiculo.php");
use Projeto\projetoEstacionamento\PHP\Veiculo;
use Projeto\projetoEstacionamento\PHP\Cliente;
 
class Cliente extends Veiculo {
    //encapsular as variáveis
    //declaração de variável
    protected string $nome;
    protected string $telefone;
   
   
 
    //Instanciar = dar um valor inicial
    // Método Construtor
     public function __construct(string $nome,string $telefone, string $carro, string $cor, string $placa)
     {
        parent::__construct($carro, $cor, $placa);
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->carro = $carro;
        $this->cor = $cor;
        $this->placa = $placa;
   
 
     }//fim do método construtor
 
     //Método Gets e Sets - Acesso e Modificação
    //CODIGO
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
       return parent::imprimir().
               "<br><br>Nome do cliente: ".$this->nome.
               "<br>Telefone do cliente: ".$this->telefone;
    }          
}//fim da classe
?>
