<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./css/manual.css">
</head>
<body class="body">
    <div class="container">
        <h1>Bem-vindo a sua agenda de contatos!</h1>
    </div>
    <div>   
        <h3>Contatos</h3>    
        <button type="button" class="btn btn-outline-danger" onclick="openPopup()">Novo Contato</button>
    </div>
    <div class="bg_popup" id="popup_contato">        
        <div class="janela_popup">
            <h2>Contato</h2>
            <form method="$_POST" action="">
                <p><input type="text" name="nome_contato" placeholder="Nome..."></p>
                <p><input type="text" name="sobrenome_contato" placeholder="Sobrenome..."></p>
                <p><input type="email" name="email_contato" placeholder="Email..."></p>
                <p><input type="text" name="telefone_contato" placeholder="Telefone..."></p>
                    <?php
                        $select_cidade = "SELECT * FROM tb_cidade";
                        require_once "conexao.php";
                        $resultado_select = mysqli_query($conexao, $select_cidade);
                        if (mysqli_num_rows($resultado_select) > 0) {
                            echo "<select name='nome_cidade'></select>";
                            while ($linha = mysqli_fetch_array($resultado_select))
                            $id_cidade = $linha[$id_cidade];
                            $nome_cidade = $linha[$nome_cidade];
                            echo "<option value='$id_cidade'>$nome_cidade</option>";
                        }
                        else{
                            echo "Parece que não temos cidade cadastradas.<br>";
                            echo "<button type='button' class='btn_orange' id='btn_cidade'>Clique para cadastrar uma nova.</button>";
                        }
                        
                    ?>
                <button type="submit" class="btn_orange" onclick="closePopup()" id="btn_proximo">Cadastrar</button>
            </form>
        </div>
    </div>
    <iframe src="visualizacao.html" class="visualizacao"></iframe>
    <div class="esquerda"></div>
    <script src="./script.js"></script>
</body>
</html>