<?php
include('conexao.php');

if(isset($_POST['idProdutor']) && isset($_POST['nomeProdutor']) && isset($_POST['cpfProdutor'])) {
    $idProdutor = $mysqli->real_escape_string($_POST['idProdutor']);
    $nomeProdutor = $mysqli->real_escape_string($_POST['nomeProdutor']);
    $cpfProdutor = $mysqli->real_escape_string($_POST['cpfProdutor']);
    
    $sql = "INSERT INTO Produtor (idProdutor, nomeProdutor, cpfProdutor) 
            VALUES ('$idProdutor', '$nomeProdutor', '$cpfProdutor')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Cadastro de Produtor realizado com sucesso!";
    } else {
        echo "Erro na inserção: " . $mysqli->error;
    }
    
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtor</title>
</head>
<body>
    <h1>Cadastro de Produtor</h1>
    <form action="" method="POST">
        <p>
            <label for="idProdutor">ID do Produtor:</label>
            <input type="number" name="idProdutor" required>
        </p>
        <p>
            <label for="nomeProdutor">Nome do Produtor:</label>
            <input type="text" name="nomeProdutor" required>
        </p>
        <p>
            <label for="cpfProdutor">CPF do Produtor:</label>
            <input type="number" name="cpfProdutor" required>
        </p>
        <p>
            <button type="submit" name = "submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
