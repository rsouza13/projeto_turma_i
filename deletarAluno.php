<?php

require_once "conexao.php";

if ($conn->prepare("DELETE FROM Aluno WHERE id=". $_GET['idAluno'])->execute() === TRUE) {
  echo "Aluno ID {$_GET['idAluno']} excluído!";
} else {
  echo "Error ao excluir o aluno: " . $conn->error;
}

echo "<br/><a href='index.php'>Voltar<a/>";