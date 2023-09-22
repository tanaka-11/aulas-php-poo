<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exemplo 03 - PHP POO</title>

</head>
<body>
    <h1>PHP com POO - Exemplo 03</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    
    <ul>
       <li>Método construtor (__construct) com atribuição obrigatória de valores aos parâmetros do objeto</li>
       <li>Uso do <code>$this</code> para acesso às propriedades dentro do objeto</li>
    </ul>

<?php 
    // Classe
        require_once 'src/Cliente.php';

    // Exemplo de criação de objeto com o construtor, obrigatoriamente temos que passar os parâmetros que atribuimos na classe.
        $A = new Cliente("Marina Tanaka", "mtanakasg@gmail.com");
        $B = new Cliente("Beatriz Kogici", "umemail@gmail.com");

    // Como passamos apenas nome e email no construct, o restante dos dados continuamos a chamar com a mesma sintaxe anterior.
        $A->telefones = ['11 98681-7759'];
?>
  




  <!-- Teste -->
  <pre><?=var_dump($A, $B)?></pre>

</body>

</html>