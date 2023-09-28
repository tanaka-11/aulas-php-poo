<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 08 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 08</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Propriedades e métodos estáticos</li>
       <li>Acesso direto sem necessidade de objetos/instâncias</li>
       <li>Uso do <code>::self</code> para acesso (dentro da classe) aos recursos estáticos</li>
    </ul>

    <?php
    require_once 'src/PessoaFisica.php';
    require_once 'src/Utilitarios.php';
    $clienteA = new PessoaFisica;
    $clienteB = new PessoaFisica;

    $clienteA->setNome("Roberto");
    $clienteA->setIdade(78);

    $clienteB->setNome("Tanaka");
    $clienteB->setIdade(21);

    // Sintaxe do recurso estático
    Utilitarios::obterData();
    ?>

    <h2>Atendimentos do dia <?=Utilitarios::$dataAtual?>.</h2>

    <h3>Cliente A - <?=$clienteA->getNome()?></h3>
    <p>
        Tipo de Atendimento - 
        <?=Utilitarios::definirAtendimento($clienteA->getIdade())?>
    </p>

    <h3>Cliente B - <?=$clienteB->getNome()?></h3>
    <p>
        Tipo de Atendimento - 
        <?=Utilitarios::definirAtendimento($clienteB->getIdade())?>
    </p>
</body>

</html>