<?php
    require_once 'init.php';
    // print '<pre>';
    // print_r($_POST);
    // print '</pre>';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ids = array_column($_SESSION['produtos'], 'id');
    $novoId = $ids ? max($ids) + 1 : 1 ;    
        $_SESSION['produtos'][] = [
            'id'=> $novoId,
            'nome'=> $_POST['nome'],
            'preco'=> $_POST['preco'],
            'categoria'=> $_POST['categoria'],
            'descricao_card'=> $_POST['descricao_card'],
            'imagem'=> $_POST['imagem'],
            'descricao'=> $_POST['descricao']
        ];
        header('Location: produtos.php?produtoadd=1');
        exit;
    };
    // print_r($_SESSION['produtos']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-produto.css">
    <link rel="icon" type="image/x-icon" href="./imagens/Koffi-Icon.png">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <?php
        require_once 'partials/header.php';
    ?>

    <main>
        <div class="formulario">
            <form action="cadastro-produto.php" method="post">
                <p>Adicione o link da imagem</p>
                <input type="url" name="imagem">
                <p>Nome do Produto</p>
                <input type="text" name="nome" placeholder="Ex: Pão Doce">
                <p>Preço do Produto</p>
                <input type="text" name="preco" placeholder="Ex: R$10,00">
                <p>Qual a categoria do seu produto?</p>
                <select name="categoria">
                    <option>Escolha a categoria do seu produto</option>
                    <option value="bebida">Bebida</option>
                    <option value="salgado">Salgado</option>
                    <option value="doce">Doce</option>
                </select>
                <p>Descrição curta do produto</p>
                <textarea name="descricao_card"></textarea><br> 

                <p>Descrição completa do produto</p>
                <textarea name="descricao_card"></textarea><br>                 

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <?php
        require_once 'partials/footer.php';
    ?>
</body>
</html>