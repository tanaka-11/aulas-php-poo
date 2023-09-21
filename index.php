<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 01 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 01</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação de instâncias/objetos</li>
    </ul>

<?php 
    //- Importando a Classe -
    require_once 'src/Cliente.php'; 

    //- Criando Instâncias da Classe(Objetos) -
    // Obs*. Passamos o comando new para criar objetos a partir da nossa classe Cliente.
        $A = new Cliente;
        $B = new Cliente;
   

?>
    <!-- -Teste- -->
    <pre><?=var_dump($A, $B)?></pre>

</body>
</html>