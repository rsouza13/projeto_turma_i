<?php

require_once 'conexao.php';

#Receber as informações do formulário
if($_POST){
    $nome           = $_POST['nome'];
    $altura         = $_POST['altura'];
    $dtNascimento   = $_POST['dtNascimento'];
    $sexo           = $_POST['sexo'];

    $sqlInsert = "INSERT INTO Aluno (nome, altura, data_nascimento, sexo) "
                    ."value (:nome, :altura, :dtNascimento, :sexo)";
    $stm = $conn->prepare($sqlInsert);
    
    $stm->bindParam('nome', $nome, PDO::PARAM_STR);
    $stm->bindParam('altura', $altura, PDO::PARAM_INT);
    $stm->bindParam('dtNascimento', $dtNascimento, PDO::PARAM_STR);
    $stm->bindParam('sexo', $sexo, PDO::PARAM_STR);

    if($stm->execute()){
        echo 'Usuário cadastrado com sucesso';
    }else{
        echo 'Erro ao cadastrar!';
    }
}

echo "<br/><a href='index.php'>Voltar<a/>";
?>