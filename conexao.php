<?php
try {
    #Conexão com Banco de Dados
    $conn = new PDO("mysql:host=localhost;dbname=bd_turma_i", "root", "");
    
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}