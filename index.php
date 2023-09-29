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

// Adicionado automaticamente por conta da (3ª versão) utilizando o use, ele sempre vai ir automaticamente para cima dos requires.
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

require_once 'src/fornecedores/Pagamento.php';
require_once 'src/prestadores/Pagamento.php';

// 1ª versão criando objetos com namespace:
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestador = new Prestador\Pagamento;

// 2ª versão criando objetos com namespace com a palavra chave "use" e "as" para prevenção de conflitos:
// use Fornecedor\Pagamento;
// use Prestador\Pagamento as PrestadorPagamento;

// Objeto sem o alias "AS":
// $pagamentoFornecedor = new Pagamento;
// Utilizando o alias "AS":
// $pagamentoPrestador = new PrestadorPagamento;

// 3ª versão utilizando o metodo automatico do VScode.
$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

?>
    <pre> <?=var_dump($pagamentoFornecedor, $pagamentoPrestador)?> </pre>
    <hr>

    <!-- Mini-exercicio para criação de objetos com "namespaces" nas classes que ja tinhamos, passando dados usando setters e exibição destes dados -->
<?php

// Passando os "use" das classes. 
use Clientes\PessoaFisica;
use Clientes\PessoaJuridica;
use Clientes\MEI;

// Fazendo os requires
require_once 'src/PessoaFisica.php';
require_once 'src/PessoaJuridica.php';
require_once 'src/MEI.php';

// Criação dos objetos
$clienteFisico = new PessoaFisica;
$clienteJuridico = new PessoaJuridica;
$clienteMEI = new MEI;

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