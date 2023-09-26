<?php
//  - Criando a class(classe) "Cliente" via PHP POO
  
// *Obs. Classes SEMPRE começam com a letra maiuscula.
class Cliente {
    // - Criando Propriedades(Variaveis) privadas, o que significa que não é possivel alterar dados fora da classe -
    private string $nome;
    private string $email;
    private string $senha;
    
    // - Métodos getters e setters (com atribuição simples) -

    // Metodo set onde TEMOS que passar parametro
    public function setNome(string $valorDoNome):void {
        $this->nome = $valorDoNome;
    }

    // Metodo get onde NÃO precisamos passar parametro
    public function getNome():string {
        return $this->nome;
    }

    // SET Email e Sanitização
    public function setEmail(string $email):void {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    // Retornando dados obtidos do email
    public function getEmail():string {
        return $this->email;
    }

    // SET senha e Sanitização
    public function setSenha(string $senha):void {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    // GET senha (retornando valor)
    public function getSenha():string {
        return $this->senha;
    }

}
