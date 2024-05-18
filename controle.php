<?php
//comunic banco
include('conect.php');

//back-end de envio
include('dbEnviar.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC - Painel de Controle</title>
</head>

<body>
    <h1><?php echo $msg; ?></h1>
    <h1>Adicionar Produto</h1>
    <form method="post" enctype="multipart/form-data">

        <label for="file">Adicionar Imagem</label>
        <input type="file" name="file[]" accept="image/*" multiple required>

        <label for="nome">Nome do Produto</label>
        <input type="text" name="nome" placeholder="digite aqui o nome..." required>

        <label for="valor">Valor</label>
        <input type="text" name="valor" required>

        <label for="quant">Quantidade</label>
        <input type="text" name="quant" required>

        <select name="marca" id="">
            <option value="0">Selecionar marca</option>
            <option value="nike">Nike</option>
            <option value="adidas">Adidas</option>
        </select>

        <button type="submit" name="EnviarInfos">Adicionar Produto</button>
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>