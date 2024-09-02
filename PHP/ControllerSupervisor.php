<?php
namespace Projeto\projetoEstacionamento\PHP;
require_once('Supervisor.php');

// Conexão esteja completa
use Projeto\projetoEstacionamento\PHP\ControllerSupervisor;
use Projeto\projetoEstacionamento\PHP\Supervisor;
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
                <label for="codigo">Código:</label>
                <input type="text" id="codigo" name="codigo"/>

                <label for="cargo">O Cargo do funcionário:</label>
                <input type="text" id="cargo" name="cargo"/>

                <label for="nome">Informe o nome do funcionário:</label>
                <input type="text" id="nome" name="nome"/>

                <label for="telefone">Informe o telefone do funcionário:</label>
                <input type="text" id="telefone" name="telefone"/>

                <label for="endereco">Informe o endereço do funcionário:</label>
                <input type="text" id="endereco" name="endereco"/>

                <label for="dtNascimento">Informe a data de nascimento do funcionário:</label>
                <input type="text" id="dtNascimento" name="dtNascimento"/>

                <label for="salario">Informe o salário do funcionário:</label>
                <input type="number" id="salario" name="salario"/>

                <button type="submit">Cadastrar</button>
            </form>
        </div>

        <!-- Caixa dos resultados -->
        <div class="result-container">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    try {
                        $codigo = $_POST['codigo'] ?? '';
                        $cargo = $_POST['cargo'] ?? '';
                        $nome = $_POST['nome'] ?? '';
                        $telefone = $_POST['telefone'] ?? '';
                        $endereco = $_POST['endereco'] ?? '';
                        $dtNascimento = $_POST['dtNascimento'] ?? '';
                        $salario = $_POST['salario'] ?? '';
                        
                        $supervisor1 = new Supervisor(
                            $codigo,
                            $cargo,
                            $nome,
                            $telefone,
                            $endereco,
                            $dtNascimento,
                            $salario
                        );

                        echo $supervisor1->imprimir();    
                    } catch (Exception $erro) {
                        echo $erro;
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
