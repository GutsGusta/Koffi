<?php
require_once 'init.php';
$id_get = isset($_GET['id']) ? trim($_GET['id']) : '';

$produtoEncontrado = null;

if (isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
    foreach($_SESSION['produtos'] as $p){
        if ((string)$p['id'] === (string)$id_get){
            $produtoEncontrado = $p; 
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes-produtos.css">
    <link rel="icon" type="image/x-icon" href="imagens/Koffi-Icon.png">
    <title><?php echo $nomeloja; ?></title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>

    <main>

        <?php
            if ($produtoEncontrado) {
                $pr = $produtoEncontrado;

                print '<div class="titulo-produtos">
                    <div class="linha-titulo"></div>
                        <h2>'.$pr['nome'].'</h2>
                    <div class="linha-titulo"></div>
                </div>
                <div class="pagina-detalhes">
                    <img src="'.$pr['imagem'].'">
                    <div class="descricao">               
                        <h1>'.$pr['nome'].'</h1>
                        <p class="descricao-preco"><b>'. $pr['preco'] .'</b></p>              
                        <p>'. $pr['descricao'] .'</p>
                        <div class="linha"></div>
                        <a href="#" class="botao-comprar">Comprar</a>
                    </div>
                </div>';
        }
        else {
            echo 'Produto não encontrado!';
        }
        ?>
    </main>

    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>