<?php
require_once 'conexao.php';

$sql = "SELECT * FROM Aluno";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <h1 id="tituloh1">Lista de Alunos</h1>
    <p><a href="formCadastrarAluno.html">Novo Aluno</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Altura</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Ação</th>
        </tr>
        <?php
            while($result = $stmt->fetch()){
                echo '<tr>';
                echo '  <td>'. $result['id'] .'</td>';
                echo '  <td id="nomeAluno'.$result['id'].'">'. $result['nome'] .'</td>';
                echo '  <td>'. $result['altura'] .'</td>';
                echo '  <td>'. $result['data_nascimento'] .'</td>';
                echo '  <td>'. $result['sexo'] .'</td>';
                echo '  <td>';
                echo '    <button onClick="digaOi(\''.$result['nome'].'\')">Olá</button>';
                echo '    <button onClick="nomeAlunoMaisculo('.$result['id'].')">M</button>';
                echo '    <button onclick="confimarExclusao(\''.$result['nome'].'\', '.$result['id']. ')">Excluir</button>';
                echo '   </td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>