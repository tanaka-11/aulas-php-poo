<?php
namespace Clientes;

// Criando a sub classe "Pessoa Juridica" utilizando a palavra chave "extends"
class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    // Acessando o método setter PROTEGIDO (existente na super-classe Cliente)
    public function __construct()
    {
        $this->setSituacao("Em análise");
    }

    // Método exibirDados (construct sempre vem antes).
    public function exibirDados(): void
    {
        // Palavra chave (parent::) permite acesso aos recuros da super-classe.
        parent::exibirDados();
        // echo "<p>Nome Fantasia: $this-></p>";
        echo "<p>Nome Fantasia: $this->nomeFantasia</p>";
    }

    // Getter e Setter via Extensão (Ano Fundação)
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }

    // Getter e Setter via Extensão (CNPJ)
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    // Getter e Setter via Extensão (Nome Fantasia)
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}