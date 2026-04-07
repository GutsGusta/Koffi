<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes-produtos.css">
    <link rel="icon" type="image/x-icon" href="imagens/Koffi-Icon.png">
    <title>Café Expresso - <?php echo $nomeloja; ?></title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>

    <main>
        <div class="titulo-produtos">
            <div class="linha-titulo"></div>
                <h2>Café Expresso</h2>
            <div class="linha-titulo"></div>
        </div>
        <div class="pagina-detalhes">
            <img src="imagens/cafe-expresso.jpg">
            <div class="descricao">               
                <h1>Café Expresso</h1>
                <p class="descricao-preco"><b>R$4,00</b></p>              
                <p>O nosso espresso nasce de um grão selecionado que passa por uma torra artesanal lenta, garantindo que cada nota de sabor seja preservada até o momento da moagem, feita segundos antes de chegar à sua mesa. O preparo é um ritual de precisão, onde a água quente atravessa o café compactado na medida exata, extraindo um líquido denso, coroado por uma camada aveludada de crema que retém todo o aroma de chocolate e caramelo. Ao degustar, você sente o calor e a força de um café feito com paciência e técnica, proporcionando uma experiência intensa que desperta os sentidos e abraça o paladar com um vigor incomparável.</p>
                <div class="linha"></div>
                <a href="#" class="botao-comprar">Comprar</a>
            </div>
        </div>
    </main>

    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>