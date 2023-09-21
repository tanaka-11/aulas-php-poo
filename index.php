<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 02 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método(fuction)</li>
    </ul>

<?php 
    // Importando a Classe:
    require_once 'src/Cliente.php'; 

    // Criando Instâncias da Classe(Objetos):
    $clienteA = new Cliente;
    $clienteB = new Cliente;
    // Passamos o comando new para criar objetos a partir da nossa classe Cliente.


    // Acessando e Atribuindo dados.
    $clienteA -> nome = "Marina Tanaka";
    $clienteB -> nome = "Luis Fernando";

    $clienteA -> telefones = ["11-2135-0300", "1198681-7759"];
    $clienteA -> email = "mtanakasg@gmail.com";
    $clienteA -> senha = password_hash("batata_quente", PASSWORD_DEFAULT)
?>
    <hr>

    <h2>Dados dos objetos (Acesso e Leitura dos dados)</h2>
    <h3> <?= $clienteA -> nome ?> </h3>
    <h3><?=$clienteB->nome?></h3>

    <pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>