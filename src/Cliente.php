<?php
//  - Criando a class(classe) "Cliente" via PHP -
  
// *Obs. Classes SEMPRE começam com a letra maiuscula.
class Cliente {
    // - Criando Propriedades(Atributos) baseadas nos dados do diagrama -
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;
    
    // - Criando Métodos(Funções) baseados nos dados do diagrama -

    //                            void(Não retorna)
    public function exibirDados():void {
        
    }
}
