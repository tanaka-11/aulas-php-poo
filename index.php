<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 07 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 07    </h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Polimorfismo</li>
       <li>Sobreposição de metodos</li>
       <li>Uso do <code>parent</code> para acessar a super-classe</li>
    </ul>

<?php

// PESSOA FISICA
require_once 'src/PessoaFisica.php';

// Criação do objeto.
$clientePF = new PessoaFisica;

// Atribuindo valores (set)
$clientePF->setNome("Marina Tanaka");
$clientePF->setEmail("mtanakasg@gmail.com");
$clientePF->setIdade(21);
$clientePF->setCpf("503-077-318-31");


// PESSOA JURIDICA
require_once 'src/PessoaJuridica.php';
$clientePJ = new PessoaJuridica;

// Atribuindo valores (set)
$clientePJ->setNome("Tanaka S/A");
$clientePJ->setEmail("Huttenloucher@gmail.com");
$clientePJ->setAnoFundacao(2010);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Tanaka Informática");

?>

    
    <h2>Saída de Dados</h2>
    <hr>

    <!-- Cliente PF -->
    <section> <?=$clientePF->exibirDados()?> </section>

    <!-- Cliente PJ -->
    <section> <?=$clientePJ->exibirDados()?> </section>

</body>

</html>