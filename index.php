<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 04 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Encapsulamento</li>
       <li>Modificadores de visibilidade(public(publico), private(privado) e protected(protegido))</li>
    </ul>

<?php 
    // Classe
        require_once 'src/Cliente.php';
        $A = new Cliente;    

    // O codigo abaixo de atribuição manual dará erro pois nossa propriedade é PRIVADA (podemos mexer APENAS dentro da classe)
    //    $A->nome = "Marina Tanaka"

    // - Exemplos dos metodos setter e getter -
    // *Obs. abaixo tem a tradução do getter e setter
    // Getter - GET - (pegar/obter) - NÃO recebe parametro
    // Setter - SET - (atribuir/definir) - RECEBE parametro

    // Usando set(setter) para atribuir um valor à propriedade privada "nome" "email" e "senha".
        $A->setNome('Marina Tanaka'); 
        $A->setEmail('mtanakasg@gmail.com');
        $A->setSenha('batata');
?>
    <!-- Usando o getter para ler/acessar dados privados da propiedade "nome" onde atribuimos seu valor no set -->
        <p>Nome: <?=$A->getNome()?></p>
        <p>Email: <?=$A->getEmail()?></p>
        <p>Senha: <?=$A->getSenha()?></p>

    <hr>
    <!-- Teste -->
    <pre>
        <?=var_dump($A)?>
    </pre>

    
    



</body>

</html>