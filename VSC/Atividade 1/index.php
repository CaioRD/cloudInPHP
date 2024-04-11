<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste php</title>
    <?php
    $nome = "Caio Roberto";
    $idade = 23;
    $peso = 103.0;
    $altura = 185;
    $escol = "Cursando Superior em Sistemas para internet";
    ?>
</head>
<body>
    <h1>
        Exercício 1 PHP
    </h1>
    <h2>
    Olá meu nome é <?php echo $nome ?>! 
    </h2>
   <p> 
  Minhas principais caracteristicas são: 
   </p>
   <ul>
    <li>Idade: <?php echo $idade?> anos. </li>
    <li>Peso: <?php echo $peso?> kg.  </li>
    <li>Altura: <?php echo $altura?> cm. </li>
   </ul>
   <h3>Minha escolaridade atual é: </h3>
   <p><?= $escol ?></p>
</body>
</html>