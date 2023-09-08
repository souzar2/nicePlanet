<?php
include('conexao.php');

if(isset($_POST['nomeUsuario']) || isset($_POST['senhaUsuario'])) {

    if(strlen($_POST['nomeUsuario']) == 0) {
        echo "Preencha com o seu nome";
    } else if(strlen($_POST['senhaUsuario']) == 0) {
        echo "Preencha sua senhaUsuario";
    } else {
        $nomeUsuario = $mysqli->real_escape_string($_POST['nomeUsuario']);
        $senhaUsuario = $mysqli->real_escape_string($_POST['senhaUsuario']);

        $sql_code = "SELECT * FROM Usuarios WHERE nomeUsuario = '$nomeUsuario' AND senhaUsuario = '$senhaUsuario'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['idUsuario'] = $usuario['idUsuario'];
            $_SESSION['nomeUsuario'] = $usuario['nomeUsuario'];

            header("Location: cadastros_Pesquisas.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>Nome do Usuário</label>
            <input type="text" name="nomeUsuario">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senhaUsuario">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>