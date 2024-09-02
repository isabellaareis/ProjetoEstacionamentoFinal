<?php

 //conectando a classe ao projeto
 namespace Projeto\ProjetoEstacionamento\PHP;
 //qual classe vou utilizar
 require_once("Pessoa.php");
 require_once("Funcionario.php");
 require_once("Veiculo.php");
 require_once("Mensalista.php");
 require_once("Cliente.php");
 require_once("Gerente.php");
 require_once("Controle.php");
 use Projeto\projetoEstacionamento\PHP\Pessoa;
 use Projeto\projetoEstacionamento\PHP\Funcionario;
 use Projeto\projetoEstacionamento\PHP\Veiculo;
 use Projeto\projetoEstacionamento\PHP\Mensalista;
 use Projeto\projetoEstacionamento\PHP\Cliente;
 use Projeto\projetoEstacionamento\PHP\Gerente;
 use Projeto\projetoEstacionamento\PHP\Controle;
 //instanciando um objeto da classe pessoa /Cadastrando


 $pessoa1 = new Pessoa("giovanna","2548978","rua Helena Aparecida 280");
 echo $pessoa1->imprimir();

 $funcionario1 = new Funcionario("isabbella","9 119858954","rua armando italo","atedente",10000, "17/04/2007", 97862);
 echo $funcionario1->imprimir();

 $veiculo1 = new Veiculo("1401ss","vermelho","a8-AUDI");
  echo $veiculo1->imprimir();

  $mensalista1 = new Mensalista("14/01/2008",1500,"isabella","9 119858954","rua armando italo","455","vermelha","audi");
  echo $mensalista1->imprimir();

  $gerente1 = new Gerente(4576918,"Luana","15/45/2008","9 119858954","rua helena","gerente",120000);
  echo $gerente1->imprimir();

  $cliente1 = new Cliente("isabbella","15454454546","ggg1401","vermelho","audi8","154256526");
  echo $cliente1->imprimir();

  $controle1 = new Controle("15/01/2008","14:00","14:30");
 echo $controle1->imprimir();


session_start();
echo"<br><br>";
echo $_SESSION["funcionario1"];


?>