<?php
namespace Projeto\ProjetoEstacionamento\PHP;
//Específica qual classe que vou utilizar
require_once("Pessoa.php");
use Projeto\projetoEstacionamento\PHP\Supervisor;
use Projeto\projetoEstacionamento\PHP\Pessoa;
 
class Supervisor extends Pessoa{
    //encapsular as variáveis
    //declaração de variável
    protected float $salario;
    protected string $dtNascimento;
    protected int $codigo;
   
 
    //Instanciar = dar um valor inicial
    // Método Construtor
     public function __construct(string $codigo, string $cargo, string $nome,string $telefone,string $endereco,string $dtNascimento, float $salario)
     {
        parent::__construct($nome,$telefone,$endereco);
        $this->codigo       = $codigo;
        $this->cargo      = $cargo;
        $this->dtNascimento = $dtNascimento;
        $this->salario      = $salario;
        
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
       "<br>Código do funcionário: ".$this->codigo.
       "<br>Cargo do funcionário: ".$this->cargo.
       "<br>Data de Nascimento do funcionário: ".$this->dtNascimento.
       "<br>salario do funcionário: ".$this->salario;
    }          
 
 
 
 
}//fim da classe
?>