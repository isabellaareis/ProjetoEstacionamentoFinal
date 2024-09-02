<?php
namespace Projeto\projetoEstacionamento\PHP;
use Projeto\projetoEstacionamento\PHP\Codigo;
 
class Codigo {
    // Gera um código aleatório de um tamanho especificado
    public function gerarCodigoAleatorio($tamanho = 10) {
        // Caracteres possíveis no código
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codigo = '';
        $comprimento = strlen($caracteres);
   
        // Gera o código aleatório
        for ($i = 0; $i < $tamanho; $i++) {
            $indice = rand(0, $comprimento - 1);
            $codigo .= $caracteres[$indice];
        }
   
        return $codigo;
    }
 
    // Imprime o código aleatório gerado
    public function imprimir(): string {
        $tamanhoDoCodigo = 5; // Defina o tamanho desejado do código
        $codigoAleatorio = $this->gerarCodigoAleatorio($tamanhoDoCodigo); // Corrigido para acessar o método da instância
        return "<br><br>Código gerado: " . $codigoAleatorio;
    }
}//fim da classe
   
 
   
 
?>