<?php
// comunicacao com o banco de dados
include('conect.php');

//captar as infos da empresa
$info = $database->getReference('aula/Dados')->getValue();

//listas dos produtos
$ListaDeProdutos = $database->getReference('aula/Produtos/')->getSnapshot();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index_style.css">
    <title>Teste loja</title>
</head>

<body class="center">
    <!-- navbar -->
    <div class="navBar">
        <div class="nav">
            <div class="Esq">
                <h1>Logo</h1>
            </div>
            <div class="Dir center">
                <div class="Conteudo">
                    <a href="">Home</a>
                    <a href="">Sobre</a>
                    <a href="controle.php">Controle</a>
                </div>
            </div>
        </div>
    </div>

    <!-- fim da navbar -->
    <!-- inicio header -->
    <div class="home center">
        <div class="banner">
            <div class="banner_texto">
                <h1><?php echo $info['nome']; ?></h1>
                <img src="/static/AdobeStock_667327100_Preview." alt="imgagem de loja de roupas">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ducimus. Dolorem eveniet earum architecto delectus beatae maiores sapiente fugit ratione commodi asperiores, officiis voluptatibus fugiat repellendus labore maxime quibusdam atque?</p>
            </div>
        </div>
    </div>
    <!-- fim do header -->
    <!-- inicio catalogo -->
    <!-- destaques -->
    <div class="catalogo center">
        <div class="catalogo_texto center">
            <h1>Destaques</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos numquam voluptatibus, earum dolore fuga debitis corporis minus sit, ratione, quam natus. Deleniti necessitatibus iusto ducimus ad minus sapiente qui voluptate!</p>
        </div>
        <div class="lista">

            <?php foreach ($ListaDeProdutos->getValue() as $produto) : ?>


                <!-- produto 1 -->
                <div class="produto">
                    <h5>Nome: <?php echo $produto['nome']; ?></h5>
                    <h5>Valor: <?php echo $produto['valor']; ?></h5>
                    <!-- criamos uma variavel para armazenar o link de redirecionamento -->
                    <?php $link = 'preview.php?id=' . $produto['chave']; ?>
                    <a href="<?php echo $link ?>">Comprar</a>
                </div>

            <?php endforeach ?>


        </div>
    </div>
    <!-- catalogo principal -->
    <div class="catalogo center">
        <div class="catalogo_texto center">
            <h1>Catálogo</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi totam error doloremque nesciunt quos, facere ex ratione nostrum non illum. Inventore corporis incidunt dolorum architecto natus dicta aperiam dignissimos illum.</p>
        </div>
        <div class="lista">
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
            <div class="produto">

            </div>
        </div>
    </div>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Logo</h1>
                <p>It's all about your dreams.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Contato</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Sobre</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Notícias</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Destaques</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Catálogo</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Novidades</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Inscreva-se</h3>

                <p>
                    Digite seu melhor email e saiba mais sobre nossas novidades!
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="Digite seu email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>       
    </footer>
</body>

</html>