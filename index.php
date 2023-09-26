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


// PESSOA JURIDICA
// Importando a sub-classe "PessoaJuridica" e criação do objeto.
require_once 'src/PessoaJuridica.php';
$clientePJ = new PessoaJuridica;

// Atribuindo valores (set)
$clientePJ->setNome("Tanaka S/A");
$clientePJ->setEmail("Huttenloucher@gmail.com");
$clientePJ->setAnoFundacao(2010);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Tanaka Informática");

?>

    <!-- Teste PF e PJ -->
    <pre> <?=var_dump($clientePF, $clientePJ)?> </pre>
    <hr>

<?php
// Importando e criando o objeto de mei.
require_once 'src/MEI.php';
$clienteMEI = new MEI;


$clienteMEI->setNome("Marina Tanaka");
$clienteMEI->setAnoFundacao(2023);
$clienteMEI->setNomeFantasia("Tanaka Empreendimentos");
$clienteMEI->setAreaDeAtuacao("Ervas medicinais");

?>

<!-- Teste da sub-classe MEI herdada da sub-classe PessoaJuridica -->
    <pre> <?=var_dump($clienteMEI)?> </pre>

    <!-- Criando um objeto generico com a nossa Super-Classe "Cliente", o codigo abaixo dara erro pois a classe "Cliente" se trata de uma classe abstrata -->
<?php
// Importando a Super-Classe
require_once 'src/Cliente.php';

// Criando um objeto
$clienteGenerico = new Cliente;

?>
    <pre> <?=var_dump($clienteGenerico)?> </pre>    


</body>

</html>