<?php
    require_once "conexao.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_proximo"])) {
        $nome_contato = $_POST["nome_contato"];
        $sobrenome_contato = $_POST["sobrenome_contato"];
        $email_contato = $_POST["email_contato"];
        $telefone_contato = $_POST["telefone_contato"];
        $nome_cidade = $_POST["nome_cidade"];
        }
    $_inset_contato = "INSERT INTO  tb_contato (nome_contato, sobrenome_contato, email_contato, telefone_contato) VALUES ($nome_contato, $sobrenome_contato, $email_contato, $telefone_contato)";
    $insert_cidade = "INSERT INTO  tb_cidade (nome_cidade) VALUES ($nome_cidade)";
    if ($mysqli_query($conexao, $insert_contato, $insert_cidade)){
        header('Location: index.php');
        exit();
    }
?>        