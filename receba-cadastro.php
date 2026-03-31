<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];

    if ($senha == $confirmarSenha) {
        echo "Seja bem-vindo! $nome";
    }

    else {
        echo "Você colocou senhas diferentes.";
    }
?>