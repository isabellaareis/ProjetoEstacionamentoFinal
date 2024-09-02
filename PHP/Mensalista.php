<?php
namespace Projeto\ProjetoEstacionamento\PHP;
//Específica qual classe ue vou utilizar
require_once("Pessoa.php");
use Projeto\projetoEstacionamento\PHP\Mensalista;
use Projeto\projetoEstacionamento\PHP\Pessoa;
 
class Mensalista extends Pessoa{
    //encapsular as variáveis
    //declaração de variável
    protected string $dtPagamento;
    protected float $valorMensal;
    protected string $placa;
    protected string $cor;
    protected string $carro;
   
    //Instanciar = dar um valor inicial
    // Método Construtor
     public function __construct(string $dtPagamento,float $valorMensal,string $nome, string $telefone,string $endereco,string $placa,string $cor,string $carro)
     {
        parent::__construct($nome,$telefone,$endereco);
        $this->dtPagamento     = $dtPagamento;
        $this->valorMensal     = $valorMensal;
        $this->placa           = $placa;
        $this->cor             = $cor;
        $this->carro           = $carro;
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
               "<br>Valor mensal: ".$this->valorMensal.
               "<br>Data de pagamento: ".$this->dtPagamento.
               "<br>placa do carro: "   .$this->placa.
               "<br>Cor do carro: ".$this->cor.
               "<br>Modelo do carro: ".$this->carro;
    }          
 
}//fim da classe
?>
 