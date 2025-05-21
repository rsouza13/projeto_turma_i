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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <h1 id="tituloh1">Lista de Alunos</h1>
    <p><a href="formCadastrarAluno.html">Novo Aluno</a></p>
    <table id="tableAlunos" class="stripe">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Altura</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($result = $stmt->fetch()){
                echo '<tr>';
                echo '  <td>'. $result['id'] .'</td>';
                echo '  <td><img src="fotoAluno/'.$result['foto'].'" width="30px" ></td>';
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
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
    var xValues = ["Masculino", "Feminino", ""];
    var yValues = [6, 3, 0];
    var barColors = ["blue", "red", ""];

    new Chart("myChart", {
    type: "bar",
    labels: xValues,
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Quantidade de Alunos por Sexo"
        }
    }
    });
    </script>


    <script>
        $(document).ready( function () {
            $('#tableAlunos').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/2.3.1/i18n/pt-BR.json',
                }
            });
        } );
    </script>
</body>
</html>