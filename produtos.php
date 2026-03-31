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

        <div class="categorias">
            <a>Todos</a>
            <?php
                foreach($categorias as $kcat => $nome) {
                    print '<a href="#cat-'. $kcat .'">'. $nome .'</a>';
                };
            ?>
            
        </div>

        <div class="produtos">
            <?php
                foreach ($produtos_base as $produto) {
                    print '<article class="card-produto">
                <img src="'. $produto['imagem'] .'">
                <h4>'.$produto['nome'].'</h4>
                <h5>'.$produto['preco'].'</h5>
                <p>'.$produto['descricao'].'</p>
                <a href="detalhes-cafe.php" class="botao-card">Comprar agora</a>
            </article>
                    ';
                };
            ?>

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