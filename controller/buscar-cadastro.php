<?php

require "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM cadastroalunos WHERE id = ?");
    $stmt->execute([$id]);
    
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC); 

    if (!$aluno) {
        die("Aluno não encontrado!");
    }
} else {
    die("ID não fornecido!");
}
?>