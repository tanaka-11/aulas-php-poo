<?php
// Importando a super classe "Cliente"
require_once 'Cliente.php';

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
        echo "<h3> Método <b>(exibirDados)</b> - Sub-Classe PessoaJuridica </h3>";
        // Chamando o nome com get e concatenação.
         echo "<h4>".$this->getNome()."</h4>";

        // Por se tratar de uma sub-classe a chamada direta não ira funcionar.
        // echo "<h4> $this->nome </h4>";

        // Situação
        echo "<p>Situação:".$this->getSituacao()."</p>";

        // Nome Fantasia
        echo "<p> Nome Fantasia: ".$this->nomeFantasia."</p>";

        echo "<hr>";
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