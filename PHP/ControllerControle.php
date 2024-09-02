<?php
    namespace Projeto\projetoEstacionamento\PHP;
    require_once('Codigo.php');
    require_once('Cliente.php');
    require_once('Controle.php');
    //Conexão esteja completa
    use Projeto\projetoEstacionamento\PHP\ControllerControle;
    use Projeto\projetoEstacionamento\PHP\Codigo;
    use Projeto\projetoEstacionamento\PHP\Cliente;
    use Projeto\projetoEstacionamento\PHP\Controle;
?>

<!DOCTYPE HTML>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
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
                    <label for="horaI">Hora de entrada:</label>
                    <input type="text" id="horaI" name="horaI"/>

                    <label for="horaSaida">Hora de saída:</label>
                    <input type="text" id="horaSaida" name="horaSaida"/>

                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data"/>

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome"/>

                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone"/>

                    <label for="carro">Carro:</label>
                    <input type="text" id="carro" name="carro"/>

                    <label for="cor">Cor:</label>
                    <input type="text" id="cor" name="cor"/>

                    <label for="placa">Placa:</label>
                    <input type="text" id="placa" name="placa"/>

                    <button type="submit">Cadastrar</button>
                </form>
            </div>
            
            <!-- Caixa dos resultados -->
            <div class="result-container">
                <?php
                    try {
                        $codigo1 = new Codigo();
                        $horaI = $_POST['horaI'];
                        $horaSaida = $_POST['horaSaida'];
                        $data = $_POST['data'];
                        $nome = $_POST['nome'];
                        $telefone = $_POST['telefone'];
                        $carro = $_POST['carro'];
                        $cor = $_POST['cor'];
                        $placa = $_POST['placa'];

                        $controle1 = new Controle($horaI, $horaSaida, $data, $codigo1);
                        $cliente1 = new Cliente($nome, $telefone, $carro, $cor, $placa);
                    } catch(Exception $erro) {
                        echo $erro;
                    }

                    echo $controle1->imprimir() .
                         $cliente1->imprimir() .
                         $codigo1->imprimir() .
                         $controle1->pagar($horaI, $horaSaida);
                ?>
            </div>
        </div>
    </body>
</html>



