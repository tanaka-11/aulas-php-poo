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
        <li>
            Acesso direto às propriedades
        </li>

        <li>
            Atribuição e leitura de dados
        </li>

        <li>
            Chamada de método(fuction)
        </li>

        <li>
            Uso da palavra chave <code>"this"</code> para acessar recursos dentro da própria classe (this se refere a classe)
        </li>
    </ul>

<?php 
    // Classe:
    require_once 'src/Cliente.php';
    
    // Objetos:
    $A = new Cliente;
    $B = new Cliente; 
  
    // Acessando e Atribuindo dados.
    // Nomes
    $A -> nome = "Marina Tanaka";
    $B -> nome = "Luis Fernando";

    // Telefones
    $A -> telefones = ["11-2135-0300", "1198681-7759"];

    // Email
    $A -> email = "mtanakasg@gmail.com";

    
    // Criptografando a senha com "password_hash"
    $A -> senha = password_hash("batata_quente", PASSWORD_DEFAULT)
?>
    <hr>

    <h2> Dados dos objetos (Acesso e Leitura dos dados) </h2>
        <!-- 1ª Versão
            *Obs. (Utilizamos (->) para atribuir o valor, ou seja, a variavel A está recebendo o valor "Marina Tanaka") 
        -->
            <h3> <?= $A -> nome ?> </h3>
        
            <!-- 2ª Versão simplificada -->
            <h3><?=$B->nome?></h3>

            <!-- 3º exemplo de saida simples-->
            <p>E-mail - <?=$A->email?></p>
            <hr>

            <!-- Exemplo de saida simples de um array -->
            <p>Telefones - <?=$A->telefones[0]?></p>
            <p>Telefones - <?=$A->telefones[1]?></p>

            <!-- Exemplo de saida de um array com o implode() -->
            <p>Telefones- <?=implode(', ' , $A -> telefones )?></p>

            <!-- Exemplo de saida de um array utilizando loop -->
            <ul>
                <?php foreach($A->telefones as $telefone){ ?>
                    <li><?=$telefone?></li>
                <?php } ?>
            </ul>

            <hr>
            
    <h2>Acessando dados através de um método(função)</h2>
        <p><?=$A->exibirDados()?></p>
        <p><?=$B->exibirDados()?></p>


    <!-- Teste -->
    <h3>Teste</h3>
    <pre><?=var_dump($A, $B)?></pre>        
</body>

</html>