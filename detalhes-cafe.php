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

    <footer>
        <div class="footer-completo">
            <div class="parte-footer">
                <h4>Koffi</h4>
                <a href="#">Sobre Nós</a>
                <a href="#">Termos e Condições</a>
                <p>Copyright © 2026 Koffi. Todos os direitos reservados.</p>
            </div>

            <div class="linha-footer" aria-hidden="true"></div>

            <div class="parte-footer">
                <h4>Contato</h4>
                <p>Email: assessoria@koffi.com</p>
                <p>Telefone: (11) 91234-5678</p>
                <p>Endereço: Rua Boa Vista, 825 - Boa Vista - São Caetano do Sul/SP, 09572-300</p>
            </div>

            <div class="linha-footer" aria-hidden="true"></div>

            <div class="parte-footer">
                 <h4>Redes Sociais</h4>
                 <a href="#">Instagram</a>
                 <a href="#">Twitter</a>
                 <a href="#">TikTok</a>
                 <a href="#">Facebook</a>
            </div>
        </div>
    </footer>
</body>
</html>