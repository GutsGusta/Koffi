<?php
include 'data.php';
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
        require 'partials/header.php';
    ?>

    <main>
        <div class="titulo-produtos">
            <div class="linha-titulo"></div>
                <h2>Nossos Produtos</h2>
            <div class="linha-titulo"></div>
        </div>

        <div class="produtos">
            <article class="card-produto">
                <img src="imagens/cafe-expresso.jpg">
                <h4>Café expresso</h4>
                <h5>R$4,00</h5>
                <p>A alma da Koffi em uma dose intensa, com crema aveludada e notas profundas que despertam os sentidos.</p>
                <a href="detalhes-cafe.php" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/Donut.png">
                <h4>Donut</h4>
                <h5>R$4,00</h5>
                <p>Uma massa brioche incrivelmente leve e aerada, com o equilíbrio perfeito entre doçura e maciez.</p>
                <a href="detalhes-donut.php" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/donut-cafe.jpg">
                <h4>Donut + Café expresso</h4>
                <h5>R$7,00</h5>
                <p>A harmonização definitiva onde o vigor do café encontra a delicadeza do doce para uma experiência completa.</p>
                <a href="detalhes-cafe-donut.php" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/cappuccino.jpg">
                <h4>Cappuccino</h4>
                <h5>R$4,00</h5>
                <p>Onde o amargor sofisticado do café encontra o abraço doce do donut. Um encontro de sabores que transforma o seu dia.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>
        </div>

        <div class="produtos">
            <article class="card-produto">
                <img src="imagens/Croissant.jpg">
                <h4>Croissant</h4>
                <h5>R$6,00</h5>
                <p>A medida exata entre o vigor do café e a cremosidade do leite, finalizado com um toque de perfeição.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/Pao-de-queijo.jpg">
                <h4>Pão de Queijo</h4>
                <h5>R$5,00</h5>
                <p>Crocante por fora e elástico por dentro, com o sabor autêntico do queijo curado em cada mordida.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/misto-quente.jpg">
                <h4>Misto Quente</h4>
                <h5>R$7,00</h5>
                <p>O clássico elevado a outro nível, com pão artesanal selado na manteiga e queijo derretendo.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/mediterranean.jpeg">
                <h4>The Mediterranean</h4>
                <h5>R$7,00</h5>
                <p>Uma combinação sofisticada de presunto cru e rúcula que equilibra frescor e intensidade.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>
        </div>

        <div class="produtos">
            <article class="card-produto">
                <img src="imagens/brownie.jfif">
                <h4>Brownie</h4>
                <h5>R$6,00</h5>
                <p>Denso, úmido e com aquela casquinha crocante que só um preparo artesanal consegue atingir.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/torta-maca.avif">
                <h4>Torta de Maçã</h4>
                <h5>R$5,00</h5>
                <p>Maçãs caramelizadas e especiarias em uma massa dourada que traz o conforto de um abraço.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/cheesecake.avif">
                <h4>Cheesecake</h4>
                <h5>R$8,00</h5>
                <p>Cremosa, levemente ácida e finalizada com uma calda artesanal que fecha a experiência com chave de ouro.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>

            <article class="card-produto">
                <img src="imagens/petit-gateau.jpg">
                <h4>Petit Gâteau</h4>
                <h5>R$10,00</h5>
                <p>Um vulcão de chocolate intenso com centro derretido, servido com sorvete para o contraste perfeito.</p>
                <a href="#" class="botao-card">Comprar agora</a>
            </article>
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