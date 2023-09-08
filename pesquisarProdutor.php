<?php

include('conexao.php');
include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Produtor</title>
</head>
<body>
    <h1>Lista de Produtores</h1>
    <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar Produtor</button>
    </form>
    <br>
    <table width="600px" border="1">
        <tr>
            <th>ID do Produtor</th>
            <th>Nome do Produtor</th>
            <th>CPF do Produtor</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
            <td colspan="3">Digite o ID do Produtor para pesquisar...</td>
        </tr>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM Produtor 
                WHERE idProdutor LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Não encontrado</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $dados['idProdutor']; ?></td>
                        <td><?php echo $dados['nomeProdutor']; ?></td>
                        <td><?php echo $dados['cpfProdutor']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>

    <p>
        <a href="cadastros_Pesquisas.php">Voltar</a>
    </p>
</body>
</html>