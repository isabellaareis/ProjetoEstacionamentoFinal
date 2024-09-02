<?php
namespace Projeto\ProjetoEstacionamento\PHP;
//Específica qual classe ue vou utilizar
require_once("Pessoa.php");
use Projeto\ProjetoEstacionamento\PHP\Funcionario;
use Projeto\ProjetoEstacionamento\PHP\Pessoa;
 
class Funcionario extends Pessoa{
    //encapsular as variáveis
    //declaração de variável
    protected string $cargo;
    protected float $salario;
    protected string $dtNascimento;
    protected int $codigo;
   
 
    //Instanciar = dar um valor inicial
    // Método Construtor
     public function __construct(string $nome,string $telefone,string $endereco,string $cargo,  float $salario ,string $dtNascimento, int $codigo )
     {
        parent::__construct($nome,$telefone,$endereco);
 
        $this->cargo        = $cargo;
        $this->salario      = $salario;
        $this->dtNascimento = $dtNascimento;
        $this->codigo       = $codigo;
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
               "<br>Cargo do funcionário: ".$this->cargo.
               "<br>salario do funcionário: ".$this->salario.
               "<br>Data de Nascimento do funcionário: ".$this->dtNascimento.
               "<br>Código do funcionário: ".$this->codigo;
    }
}
 
?>