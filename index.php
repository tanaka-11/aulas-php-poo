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
       <!-- <li></li> -->
    </ul>

<?php
// Importando a sub-classe "PessoaFisica".
require_once 'src/PessoaFisica.php';

// Criação do objeto.
$clientePF = new PessoaFisica;

// Colocando um nome no Cliente(PF)
$clientePF->setNome("Marina Tanaka");
// $clientePF->nome = "Marina Tanaka"; (Está linha inves de adicionar o nome nos dados ja existente ele cria uma nova propriedade com o valor passado). NÃO UTILIZAR POIS É UM ERRO NO PROPRIO PHP.

//Colocando um email no Cliente(PF)
$clientePF->setEmail("mtanakasg@gmail.com");

// Colocando idade (PF)
$clientePF->setIdade(21);

// Colocando cpf (PF)
$clientePF->setCpf("503-077-318-31");
?>

    <!-- Teste -->
    <pre> <?=var_dump($clientePF)?> </pre>
</body>

</html>