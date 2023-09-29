<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 09 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 09</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Namespaces - Agrupamento e organização de recursos (classes, funções, constantes)</li>
       <li>Finalidade - Prevenção de conflitos de classes com o mesmo nome</li>
       <li>Configuração e utilização do <code>namespaces</code> e <code>alias</code> </li>
    </ul>

<?php
// Quando tentamos fazer o require de duas classes com o mesmo nome, ele acaba dando erro no servidor por não permitir que ambos terem o mesmo nome, neste caso iremos utilizar o namespaces para cada classe ter um espaço diferente na memoria.
require_once 'src/fornecedores/Pagamento.php';
require_once 'src/prestadores/Pagamento.php';

// 1ª versão criando objetos com namespace
$pagamentoFornecedor = new Fornecedor\Pagamento;
$pagamentoPrestador = new Prestador\Pagamento;

// 2ª versão criando objetos com namespace

?>
    <pre> <?=var_dump($pagamentoFornecedor, $pagamentoPrestador)?> </pre>

</body>

</html>