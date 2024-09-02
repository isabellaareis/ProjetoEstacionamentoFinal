<?php
namespace Projeto\projetoEstacionamento\PHP;
require_once('Gerente.php');
// Conexão esteja completa
use Projeto\projetoEstacionamento\PHP\ControllerGerente;
use Projeto\projetoEstacionamento\PHP\Gerente;
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
            overflow: hidden; /* Para garantir que a tela não mostre barras de rolagem */
        }

        /* Estilo do container */
        .container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        /* Estilo das caixas de formulário e resultado */
        .form-container, .result-container {
            background-color: #fff;
            padding: 8px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 220px;
            box-sizing: border-box;
        }

        /* Estilo dos labels */
        label {
            font-size: 0.75em;
            margin-bottom: 3px;
            display: inline-block;
            color: #555;
        }

        /* Estilo dos inputs */
        input {
            font-size: 0.75em;
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
            font-size: 0.75em;
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
            font-size: 0.75em;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Caixa do formulário -->
        <div class="form-container">
            <form method="POST">
                <label for="codigo">Código:</label>
                <input type="number" id="codigo" name="codigo"/>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"/>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone"/>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco"/>

                <label for="dtNascimento">Data de Nascimento:</label>
                <input type="text" id="dtNascimento" name="dtNascimento"/>

                <label for="salario">Salário:</label>
                <input type="number" id="salario" name="salario"/>

                <button type="submit">Cadastrar
            </form>
        </div>

        <!-- Caixa dos resultados -->
        <div class="result-container">
            <?php
                session_start();
                try {
                    $_SESSION['codigog'] = $_POST['codigo'];
                    $_SESSION['nomeg'] = $_POST['nome'];
                    $_SESSION['telefoneg'] = $_POST['telefone'];
                    $_SESSION['enderecog'] = $_POST['endereco'];
                    $_SESSION['dtNascimentog'] = $_POST['dtNascimento'];
                    $_SESSION['salariog'] = $_POST['salario'];

                } catch(Exception $erro) {
                    echo $erro;
                }
            ?>
             </button>
            <?php 
             echo "<h2>Cadastro Realizado</h2>";
             echo "<p><strong>Código:</strong> " . $_SESSION['codigog'] . "</p>";
             echo "<p><strong>Nome:</strong> " . $_SESSION['nomeg'] . "</p>";
             echo "<p><strong>Telefone:</strong> " . $_SESSION['telefoneg'] . "</p>";
             echo "<p><strong>Endereço:</strong> " . $_SESSION['enderecog'] . "</p>";
             echo "<p><strong>Data de Nascimento:</strong> " . $_SESSION['dtNascimentog'] . "</p>"; 
             echo "<p><strong>Salário:</strong> " . $_SESSION['salariog'] . "</p>";   
            
            ?>
        </div>
    </div>
</body>
</html>
