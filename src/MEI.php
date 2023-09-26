<?php
// Importando a classe herdada e criando uma nova classe com a palavra-chave "final", ou seja, essa classe não permite extender recursos para novas sub-classes (Classe Final).
require_once 'PessoaJuridica.php';

final class MEI extends PessoaJuridica {
    private string $areaDeAtuacao;
    
    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao): self
    {
        $this->areaDeAtuacao = $areaDeAtuacao;

        return $this;
    }
}
