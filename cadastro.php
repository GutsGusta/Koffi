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
    <title>Cadastro - <?php echo $nomeloja; ?></title>
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

    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>