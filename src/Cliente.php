<?php
//  - Criando a class(classe) "Cliente" via PHP POO
  
// *Obs. Classes SEMPRE começam com a letra maiuscula.
class Cliente {
    // - Criando Propriedades(Variaveis) baseadas nos dados do diagrama -
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;
    
    // Método construtor (__construct) permite você configurar uma forma de inicialização do objeto, exigindo a atribuição de dados no momento de criar o objeto.
    // *Obs. O construtor é SEMPRE chamado de maneira automatica assim que o objeto for criado.

    // Passando parâmetros(NÃO é a mesma coisa que variavel) dentro do __construct e sua indução de dados
    public function __construct(string $nome, string $email) {
        // - Atribuindo valores dos parâmetros às propriedades(variaveis) - 
        // *Obs. Usamos o "$this" para acessar as propriedades desta Classe.
        $this->nome = $nome;
        $this->email = $email;
    }
}
