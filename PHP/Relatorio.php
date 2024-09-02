<?php
namespace Projeto\ProjetoEstacionamento\PHP;

// Especifica quais classes serão utilizadas
use Projeto\projetoEstacionamento\PHP\ControllerGerente;
use Projeto\projetoEstacionamento\PHP\ControllerMensalista;
use Projeto\projetoEstacionamento\PHP\ControllerSupervisor;
use Projeto\projetoEstacionamento\PHP\ControllerControle;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <style>
        /* CSS aqui */
        body {
            font-family: Arial, sans-serif;
            background-image: url("../imagens/pexels-screeny42-12033001.jpg");
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.9);
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST">
        <?php
        session_start();

        // Verifica se as variáveis de sessão estão definidas antes de exibi-las
        echo "<h2>Dados dos Funcionários</h2>";
        echo "<p><strong>Código:</strong> " . $_SESSION['codigog'] . "</p>";
        echo "<p><strong>Nome:</strong> " . $_SESSION['nomeg'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $_SESSION['telefoneg'] . "</p>";
        echo "<p><strong>Endereço:</strong> " . $_SESSION['enderecoGe'] . "</p>";
        echo "<p><strong>Data de Nascimento:</strong> " . $_SESSION['dtNascimentog'] . "</p>";
        echo "<p><strong>Salário:</strong> " . $_SESSION['salariog'] . "</p>";
        echo "<p><strong>Cargo:</strong> " . $_SESSION['cargog'] . "</p>";

        echo "<h2>Cadastro Realizado do Mensalista</h2>";
        echo "<p><strong>Nome:</strong> " . $_SESSION['nomem'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $_SESSION['telefonem'] . "</p>";
        echo "<p><strong>Endereço:</strong> " . $_SESSION['enderecom'] . "</p>";
        echo "<p><strong>Carro:</strong> " . $_SESSION['carrom'] . "</p>";
        echo "<p><strong>Placa:</strong> " . $_SESSION['placam'] . "</p>";
        echo "<p><strong>Cor:</strong> " . $_SESSION['corMen'] . "</p>";
        echo "<p><strong>Data de Pagamento:</strong> " . $_SESSION['dtPagamento'] . "</p>";
        echo "<p><strong>Valor Mensal:</strong> " . $_SESSION['valorMensal'] . "</p>";



        // Os seguintes métodos e variáveis não foram definidos no código fornecido
        // Supondo que $controle1, $cliente1 e $codigo1 sejam objetos com o método imprimir()
        // e que $horaI e $horaSaida sejam variáveis definidas anteriormente

        echo $controle1->imprimir();
        echo $cliente1->imprimir();
        echo $codigo1->imprimir();
        echo $controle1->pagar($horaI, $horaSaida);
        ?>
    </form>
</body>
</html>
