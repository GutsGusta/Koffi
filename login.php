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
    
    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>