<?php
// SEMPRE começar uma classe com letra maiuscula !

// Importando a super classe "Cliente" para conseguir usando o extends na nossa Sub Classe "PessoaFisica"
require_once 'Cliente.php';

// Usando a palavra chave "extends" junto com o nome da classe que você quer HERDAR os recursos
class PessoaFisica extends Cliente{
    private int $idade;
    private string $cpf;


    // Get e Set criado pela extensão php8 getters and setter (IDADE)
    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;
        return $this;
    }

    // Get e Set criado pela extensão php8 getters and setter (CPF)
    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }
}