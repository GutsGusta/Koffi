<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes-produtos.css">
    <link rel="icon" type="image/x-icon" href="imagens/Koffi-Icon.png">
    <title>Donut - <?php echo $nomeloja; ?></title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>

    <main>
        <div class="titulo-produtos">
            <div class="linha-titulo"></div>
                <h2>Donut</h2>
            <div class="linha-titulo"></div>
        </div>
        <div class="pagina-detalhes">
            <img src="imagens/Donut.png">
            <div class="descricao">               
                <h1>Donut</h1>
                <p class="descricao-preco"><b>R$4,00</b></p>              
                <p>Nosso donut é fruto de um processo de paciência e cuidado, onde a massa de brioche descansa por longas horas em uma fermentação natural que garante uma textura incrivelmente aerada e macia. Cada unidade é moldada à mão e frita na temperatura ideal para criar uma casquinha dourada e sequinha por fora, mantendo o interior úmido como uma nuvem que derrete na boca. Finalizado com uma cobertura artesanal sedosa, ele entrega um equilíbrio perfeito entre a doçura e a leveza, transformando um clássico da confeitaria em um momento de puro conforto e prazer gastronômico.</p>
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