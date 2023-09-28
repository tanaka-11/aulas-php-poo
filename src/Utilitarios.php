<?php
// Criação da classe Utilitaria
class Utilitarios {
    // Palavra chave (static) para a chamada de propriedade estatica
    public static string $dataAtual;

    // Palavra chave (static) para a chamada de método estático
    public static function obterData(){
        // A palavra chave (self::) permite o acesso à propriedade estática.
        self::$dataAtual = date("d/m/Y");
    }
}