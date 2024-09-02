<?php
    namespace Projeto\ProjetoEstacionamento\PHP;
    //Específica qual classe ue vou utilizar
    require_once("Pessoa.php");
    require_once("Veiculo.php");
    use Projeto\projetoEstacionamento\PHP\Controle;
    use Projeto\projetoEstacionamento\PHP\Pessoa;
    use Projeto\projetoEstacionamento\PHP\Veiculo;
 
    class Controle{
        //encapsular as variáveis
        //declaração de variável
       protected string $data;
       protected string $horaI;
       protected string $horaSaida;
   
        //Instanciar = dar um valor inicial
        // Método Construtor
         public function __construct(string $horaI, string $horaSaida, string $data)
         {
           
            $this->horaI           = $horaI;
            $this->horaSaida       = $horaSaida;
            $this->data            = $data;
 
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
     
        function pagar(int $horaI,int $horaSaida){
            $total = $horaSaida - $horaI;
            if($total <= 1){
                return "<br>R$ 5.00 reais";
            }else{
                $valor = $total * 10;
                return "<br>R$ ".$valor." reais";
            }
        } 
 
        public function imprimir():string
        {
           return 
                  "<br><br>hora de entrada: ".$this->horaI.
                  "<br><br>hora saida: ".$this->horaSaida.
                  "<br><br>data: ".$this->data;
        }          
 
    }//fim da classe
    ?>