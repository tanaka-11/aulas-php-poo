<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 10 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Composer - Gerenciador de dependência PHP</li>
       <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
       <li>Autoload de classes evitando muitos requires ou requires manuais</li>
    </ul>

<?php
// Sintaxe passando as classes numa unica linha.
use Clientes\{PessoaFisica, PessoaJuridica, MEI};

// Sintaxe passando as classes individualmente
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

// Fazendo os requires (Clientes)
require_once 'src/PessoaFisica.php';
require_once 'src/PessoaJuridica.php';
require_once 'src/MEI.php';

// Fazendo os requires (Fornecedores/Prestadores)
require_once 'src/fornecedores/Pagamento.php';
require_once 'src/prestadores/Pagamento.php';

// Criação dos objetos
$clienteFisico = new PessoaFisica;
$clienteJuridico = new PessoaJuridica;
$clienteMEI = new MEI;
$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

?>
    <!-- Teste -->
    <pre> <?=var_dump($pagamentoFornecedor, $pagamentoPrestador)?> </pre>
    <hr>

<?php

// Adicionado valores com set
$clienteFisico->setNome("Marina Tanaka");
$clienteJuridico->setNome("Vinicius Miranda");
$clienteMEI->setNome("Luis Fernando");
?>
    <!-- Exibindo dados do objeto  -->
    <p><b>Nome Cliente Fisico:</b> <?=$clienteFisico->getNome()?> </p>
    <p><b>Nome Cliente Juridico:</b> <?=$clienteJuridico->getNome()?> </p>
    <p><b>Nome Cliente Fisico:</b> <?=$clienteMEI->getNome()?> </p>
    <hr>

</body>

</html>