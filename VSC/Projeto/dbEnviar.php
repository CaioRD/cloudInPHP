<?php
//comunic banco
include('conect.php');

if (isset($_POST['EnviarInfos'])) {

    //o nome da pasta - quanto a chave de reconhecimento da pasta
    $token = uniqid();

    //adicionar imagem
    $files = $_FILES['file'];
    $names = $files['name'];
    $tmp_name = $files['tmp_name'];

    //limitador de quantidade de imagens
    $contador = 1;

    //repetir ate que todas as imagens sejam adicionadas
    foreach ($names as $index => $name) {
        //delimitar a quantidade de imagens
        if ($contador <= 4) {
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $newName = $token . "_" . $contador . "." . $extension;
            move_uploaded_file($tmp_name[$index], 'static/' . $newName);
            $contador = $contador + 1;
        }
    }


    //vetor que armazena as variaveis que vem do formulario HTML
    $novoItem = [
        'chave' => $token,
        'nome' => $_POST['nome'],
        'valor' => $_POST['valor'],
        'quantidade' => $_POST['quant'],
        'marca' => $_POST['marca']
    ];

    //caminho para armazernar, deletar ou atualizar o banco
    $database->getReference('aula/Produtos/' . $token)->set($novoItem);

    //mensagem de feedback
    // $msg = "Produto adicionado com sucesso!";

    //mover o usuario
    header('Location: index.php');
}