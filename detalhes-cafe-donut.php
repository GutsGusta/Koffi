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
    <title>Café + Donut - <?php echo $nomeloja; ?></title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>
    
    <main>
        <div class="titulo-produtos">
            <div class="linha-titulo"></div>
                <h2>Café + Donut</h2>
            <div class="linha-titulo"></div>
        </div>
        <div class="pagina-detalhes">
            <img src="imagens/donut-cafe.jpg">
            <div class="descricao">               
                <h1>Café + Donut</h1>
                <p class="descricao-preco"><b>R$7,00</b></p>              
                <p>A experiência definitiva na Koffi acontece quando o calor vibrante do nosso espresso encontra a doçura delicada do donut artesanal em um dueto perfeito de sabores. Enquanto o café limpa o paladar com sua acidez elegante e notas torradas, a massa leve do donut suaviza a intensidade da bebida, criando um ciclo onde cada gole de café prepara a boca para uma nova mordida açucarada. É um contraste sensorial planejado para que você sinta a temperatura, a textura e o aroma de ambos os produtos se fundirem, elevando um simples lanche a um ritual de prazer que equilibra energia e doçura em cada detalhe.</p>
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