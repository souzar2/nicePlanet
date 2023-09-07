<?php
// Conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if(isset($_POST['idProdutor']) && isset($_POST['nomeProdutor']) && isset($_POST['cpfProdutor'])) {
    // Recupera os dados do formulário
    $idProdutor = $mysqli->real_escape_string($_POST['idProdutor']);
    $nomeProdutor = $mysqli->real_escape_string($_POST['nomeProdutor']);
    $cpfProdutor = $mysqli->real_escape_string($_POST['cpfProdutor']);
    

    // Insere os dados na tabela "Produtor"
    $sql = "INSERT INTO Produtor (idProdutor, nomeProdutor, cpfProdutor) VALUES ('$idProdutor', '$nomeProdutor', '$cpfProdutor')";

    if ($mysqli->query($sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $mysqli->error;
    }
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtor</title>
</head>
<body>
    <h1>Cadastro de Produtor</h1>
    <form action="cadastros.php" method="POST">
        <p>
            <label for="idProdutor">ID do Produtor:</label>
            <input type="number" id="idProdutor" name="idProdutor" required>
        </p>
        <p>
            <label for="nomeProdutor">Nome do Produtor:</label>
            <input type="text" id="nomeProdutor" name="nomeProdutor" required>
        </p>
        <p>
            <label for="cpfProdutor">CPF do Produtor:</label>
            <input type="number" id="cpfProdutor" name="cpfProdutor" required>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
