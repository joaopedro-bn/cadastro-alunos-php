<?php

require_once "../model/user.php";
require "config.php";

if (isset($_POST["btn-submit"])) {
    if (empty($_POST["btn-name"]) || empty($_POST["btn-email"]) || empty($_POST["btn-age"])) {
    echo "<div class='alert alert-danger'>Preencha todos os campos!</div>";
    return;
    }
}

if (isset($_POST["btn-submit"])) {    

if (($_POST["btn-age"]) > 150 || ($_POST["btn-age"]) < 1) {
    echo "<div class='alert alert-danger'>Insira uma idade válida!</div>";
} elseif (isset($_POST["btn-submit"])) {
    $novoAluno = new User();

    $novoAluno->setName($_POST["btn-name"]);
    $novoAluno->setEmail($_POST["btn-email"]);
    $novoAluno->setAge($_POST["btn-age"]);

    $stmt = $pdo->prepare("INSERT INTO cadastroalunos (nome, email, idade) VALUES (?, ?, ?)");

    $stmt->execute([
        $novoAluno->getName(),
        $novoAluno->getEmail(),
        $novoAluno->getAge()
    ]);

    echo "<div class='alert alert-success'> Aluno cadastrado com sucesso: <strong>" . $novoAluno->getName() . "</div>";
    }
}