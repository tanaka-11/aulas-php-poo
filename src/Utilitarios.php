<?php
// Criação da classe Utilitaria
class Utilitarios {
    // Palavra chave (static) para a chamada de propriedade estatica
    public static string $dataAtual;

    // Palavra chave (static) para a chamada de método estático
    public static function obterData(){
        self::$dataAtual = date("d/m/Y");
        // A palavra chave (self::) permite o acesso à propriedade estática.
    }

    public static function definirAtendimento(int $idade):string {
        return $idade >= 60 ? "Prioridade" : "Normal";
    }
}