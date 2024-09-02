<?php
    namespace Projeto\projetoEstacionamento\PHP;
    require_once('Supervisor.php');
    require_once('Funcionario.php');
    require_once('Gerente.php');
    require_once('Mensalista.php');
    //Conexão esteja completa
    use Projeto\projetoEstacionamento\PHP\ControllerTodos;
    use Projeto\projetoEstacionamento\PHP\ControllerGerente;
    use Projeto\projetoEstacionamento\PHP\ControllerMensalista;
    use Projeto\projetoEstacionamento\PHP\ControllerFuncionario;
    use Projeto\projetoEstacionamento\PHP\ControllerControle;
    use Projeto\projetoEstacionamento\PHP\Supervisor;
    use Projeto\projetoEstacionamento\PHP\Funcionario;
    use Projeto\projetoEstacionamento\PHP\Gerente;
    use Projeto\projetoEstacionamento\PHP\Mensalista;
    

?>
</button><br><br>
<?php  echo
           $funcionario1->imprimir().
           $gerente1->imprimir().
           $controle1->imprimir().
           $mensalista1->imprimir();
?>         