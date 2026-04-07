<?php
require_once 'init.php';
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
// print_r($_GET);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="icon" type="image/x-icon" href="imagens/Koffi-Icon.png">
    <title>Produtos - <?php echo $nomeloja; ?></title>
</head>
<body>
    <?php
        require_once 'partials/header.php';
        if (isset($_GET['produtoadd'])&&$_GET['produtoadd'] === '1') {
            echo "<script>alert('Produto adicionado com sucesso!');</script>";
        }
    ?>

    <main>

        <div class="titulo-produtos">
            <div class="linha-titulo"></div>
                <h2>Nossos Produtos</h2>
            <div class="linha-titulo"></div>
        </div>

        <div class="categorias">
            <a href="produtos.php" class="categorias-botao">Todos</a>
            <?php
                foreach($categorias as $kcat => $nome) {
                    print '<a href="produtos.php?categoria='. $kcat .'" class="categorias-botao">'. $nome .'</a>';
                }
            ?>
        </div>

        <div class="produtos">
            <?php
                foreach ($_SESSION['produtos'] as $produto) {

                if ($categoria_get === '' || $produto['categoria']===$categoria_get) {

                    print '<article class="card-produto">
                            <img src="'. $produto['imagem'] .'">
                            <h4>'. $produto['nome'] .'</h4>
                            <h5>'. $produto['preco'] .'</h5>
                            <p>'. $produto['descricao_card'] .'</p>
                            <a href="detalhes-produtos.php?id='.$produto['id'].'" class="botao-card">Comprar agora</a>
                        </article>';
                }
                }
            ?>
        </div>
    </main>

    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>