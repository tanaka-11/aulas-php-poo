<?php
//  - Criando a class(classe) "Cliente" via PHP POO
  
// *Obs. Classes SEMPRE começam com a letra maiuscula.
class Cliente {
    // - Criando Propriedades(Variaveis) privadas o que significa que não é possivel alterar dados fora da classe -
    private string $nome;
    private string $email;
    private string $senha;
    
    // Métodos getters e setters (com atribuição simples)
    public function setNome(string $valorDoNome):void {
        $this->nome = $valorDoNome;
    }
}
