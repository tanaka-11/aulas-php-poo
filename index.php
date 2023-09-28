<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 05 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 05</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Herança(Super Classe e Sub Classe)</li>
       <li>Métodos/Propriedades PROTEGIDOS ou seja são acessíveis apenas pela classe em que foram definidos e suas sub-classes.</li>
       <li>Classe Abstrata: Não permitido istâncias/objetos, ou seja, serve apenas para modelo de sub-classes</li>
       <li>Classe Final: Não permite herança, ou seja, não aceita a criação de sub-classes</li>
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

    <hr>
    <h2>Saída de Dados</h2>

    <!-- Cliente PF -->
    <section> <?=$clientePF->exibirDados()?> </section>

    <!-- Cliente PJ -->
    <section> <?=$clientePJ->exibirDados()?> </section>

</body>

</html>