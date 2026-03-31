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
    <title>Login - <?php echo $nomeloja; ?></title>
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
                    <form action="../../index.php" method="post">
                        <p>Email</p>
                        <input type="email">
                        <p>Senha</p>
                        <input type="password">
                        <p>Não possui conta? <a href="./cadastro.php">Cadastre-se</a></p>    
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