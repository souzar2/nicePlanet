<?php

include('protect.php');
include('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo a tela de cadastros, <?php echo $_SESSION['nomeUsuario']; ?>.
    <p>
        <a href="cadastroProdutor.php">Cadastrar Produtor</a>
    </p>
    <p>
        <a href="cadastroPropriedade.php">Cadastrar Propriedade</a>
    </p>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>