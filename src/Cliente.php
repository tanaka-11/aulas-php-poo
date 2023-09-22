<?php
//  - Criando a class(classe) "Cliente" via PHP -
  
// *Obs. Classes SEMPRE começam com a letra maiuscula.
class Cliente {
    // - Criando Propriedades(Variaveis) baseadas nos dados do diagrama -
    public string $nome;
    // Alternativa dando valor padrão como "Não Informado" caso não seja atribuido um dado neste caso, o email.
    public string $email = "Não Informado";
    public string $senha;
    public array $telefones;
    
    // - Criando Métodos(Funções) baseados nos dados do diagrama -
    //                           :void(Não retorna dados apenas exibe nossos dados)
    public function exibirDados():void {
        echo "<section>";
        // $this é uma referencia direta a classe que estamos utilizando.
        echo "<h2>$this->nome</h2>";
        echo "<h2>$this->email</h2>";
        echo "</section>";
    }
}
