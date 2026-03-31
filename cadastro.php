<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-login.css">
    <link rel="icon" type="image/x-icon" href="../../imagens/Koffi-Icon.png">
    <title>Cadastro - Koffi</title>
</head>
<body>
    <?php
        require 'partials/header.php';
    ?>

    <main>
        <div class="pagina-inteira">
            <div class="metade-pagina1">
                <img src="imagens/cafe-login.avif">
            </div>

            <div class="metade-pagina2">
                <div class="formulario">
                    <h1>Bem Vindo de volta!</h1>
                    <form action="receba-cadastro.php" method="post">
                        <p>Nome</p>
                        <input type="text" placeholder="Ex: José Ribeiro" name="nome">
                        <p>Email</p>
                        <input type="email" placeholder="email@exemplo.com" name="email">
                        <p>Telefone</p>
                        <input type="tel" placeholder="Ex: 4002-8922" name="telefone">
                        <p>Senha</p>
                        <input type="password" placeholder="Min: 8 carácteres" name="senha">
                        <p>Confirmar Senha</p>
                        <input type="password" name="confirmarSenha">
                        <button type="submit">Entrar</button>                    
                    </form>
                </div>
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