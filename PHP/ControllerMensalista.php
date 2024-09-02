<?php
namespace Projeto\ProjetoEstacionamento\PHP;

// Conexão esteja completa
require_once("Pessoa.php");
require_once("Mensalista.php");
require_once("Veiculo.php");

use Projeto\projetoEstacionamento\PHP\ControllerMensalista;
use Projeto\projetoEstacionamento\PHP\Mensalista;
use Projeto\projetoEstacionamento\PHP\Pessoa;
use Projeto\projetoEstacionamento\PHP\Veiculo;
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário e Resultados</title>
    <style>
         /* Estilo do corpo */
         body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo do container */
        .container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Estilo das caixas de formulário e resultado */
        .form-container, .result-container {
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px; /* Tamanho ajustado */
            box-sizing: border-box;
        }

        /* Estilo dos labels */
        label {
            font-size: 0.8em;
            margin-bottom: 4px;
            display: block;
            color: #555;
        }

        /* Estilo dos inputs */
        input {
            font-size: 0.8em;
            padding: 4px;
            margin-bottom: 8px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #b22222;
            outline: none;
        }

        /* Estilo do botão */
        button {
            background-color: #b22222;
            color: white;
            font-size: 0.8em;
            padding: 6px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #8b1a1a;
        }

        /* Estilo da caixa de resultados */
        .result-container {
            font-size: 0.8em;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Caixa do formulário -->
        <div class="form-container">
            <form method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"/>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone"/>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco"/>

                <label for="carro">Carro:</label>
                <input type="text" id="carro" name="carro"/>

                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa"/>

                <label for="cor">Cor:</label>
                <input type="text" id="cor" name="cor"/>

                <label for="dtPagamento">Data de Pagamento:</label>
                <input type="text" id="dtPagamento" name="dtPagamento"/>

                <label for="valorMensal">Valor:</label>
                <input type="number" id="valorMensal" name="valorMensal"/>

                <button type="submit">Cadastrar
            </form>
        </div>

        <!-- Caixa dos resultados -->
        <div class="result-container">
            <?php
            session_start();
            try {
                // Obtendo valores do formulário
                $_SESSION['nomem'] = $_POST['nome'];
                $_SESSION['telefonem'] = $_POST['telefone'];
                $_SESSION['enderecom'] = $_POST['endereco'];
                $_SESSION['carrom'] = $_POST['carro'];
                $_SESSION['placam'] = $_POST['placa'];
                $_SESSION['corm'] = $_POST['cor'];
                $_SESSION['dtPagamento'] = $_POST['dtPagamento'];
                $_SESSION['valorMensal'] = $_POST['valorMensal'];
                
            } catch (Exception $erro) {
                echo $erro;
            }
            ?>
            </button>
            <?php
             echo "<h2>Cadastro Realizado</h2>";
             echo "<p><strong>Nome:</strong> " . $_SESSION['nomem'] . "</p>";
             echo "<p><strong>Telefone:</strong> " . $_SESSION['telefonem'] . "</p>";
             echo "<p><strong>Endereço:</strong> " . $_SESSION['enderecom'] . "</p>";
             echo "<p><strong>Carro:</strong> " . $_SESSION['carrom'] . "</p>";
             echo "<p><strong>Placa:</strong> " . $_SESSION['placam'] . "</p>";
             echo "<p><strong>Cor:</strong> " . $_SESSION['corm'] . "</p>";
             echo "<p><strong>Data de Pagamento:</strong> " . $_SESSION['dtPagamento'] . "</p>"; 
             echo "<p><strong>Valor Mensal:</strong> " . $_SESSION['valorMensal'] . "</p>";   
            
            ?>

        </div>
    </div>
</body>
</html>
