<?php
namespace Projeto\ProjetoEstacionamento\PHP;
//Específica qual classe ue vou utilizar
require_once("Pessoa.php");
use Projeto\projetoEstacionamento\PHP\Gerente;
use Projeto\projetoEstacionamento\PHP\Pessoa;

class Gerente extends Pessoa{
    //encapsular as variáveis
    //declaração de variável 
    protected int $codigo;
    protected float $salario;
    protected string $dtNascimento;
    

    //Instanciar = dar um valor inicial
    // Método Construtor
     public function __construct(int $codigo,string $nome, string $telefone,string $endereco, string $dtNascimento, float $salario)
     {
        parent::__construct($nome,$telefone,$endereco);
        $this->codigo       = $codigo;
        $this->salario      = $salario;
        $this->dtNascimento = $dtNascimento;
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
               "<br><br>codigo: ".$this->codigo.
               "<br>salario: ".$this->salario.
               "<br>dtNascimento: ".$this->dtNascimento;
    }           




}//fim da classe
?>