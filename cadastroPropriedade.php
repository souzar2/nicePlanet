<?php
include('conexao.php');
include('protect.php');

if(isset($_POST['idPropriedade']) && isset($_POST['nomePropriedade']) && isset($_POST['cadastroRural'])) {
    $idPropriedade = $mysqli->real_escape_string($_POST['idPropriedade']);
    $nomePropriedade = $mysqli->real_escape_string($_POST['nomePropriedade']);
    $cadastroRural = $mysqli->real_escape_string($_POST['cadastroRural']);
    
    $sql = "INSERT INTO Propriedade (idPropriedade, nomePropriedade, cadastroRural) 
            VALUES ('$idPropriedade', '$nomePropriedade', '$cadastroRural')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Cadastro de Propriedade realizado com sucesso!";
    } else {
        echo "Erro na inserção: " . $mysqli->error;
    }
    
}

$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Propriedade</title>
</head>
<body>
    <h1>Cadastrar Propriedade</h1>
    <form action="" method="POST">
        <p>
            <label>ID do Propriedade</label>
            <input type="number" name="idPropriedade">
        </p>
        <p>
            <label>Nome do Propriedade</label>
            <input type="text" name="nomePropriedade">
        </p>
        <p>
            <label>Cadastro Rural</label>
            <input type="number" name="cadastroRural">
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>

    <p>
        <a href="cadastros_Pesquisas.php">Voltar</a>
    </p>
</body>
</html>