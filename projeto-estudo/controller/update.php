<?php
require_once "../model/user.php";
require "config.php";

if (isset($_POST["btn-update"])) {
    if (empty($_POST["btn-name"]) || empty($_POST["btn-email"]) || empty($_POST["btn-age"])) {
    echo "<div class='alert alert-danger'>Preencha todos os campos!</div>";
    return;
    }
}

if (isset($_POST["btn-update"])) {
    $atualizaAluno = new User();

    $atualizaAluno->setId((int)$_POST["id"]); 
    $atualizaAluno->setName($_POST["btn-name"]);
    $atualizaAluno->setEmail($_POST["btn-email"]);
    $atualizaAluno->setAge((int)$_POST["btn-age"]);

    $stmt = $pdo->prepare("UPDATE cadastroalunos SET nome = ?, email = ?, idade = ? WHERE id = ?");

    $success = $stmt->execute([
        $atualizaAluno->getName(),
        $atualizaAluno->getEmail(),
        $atualizaAluno->getAge(),
        $atualizaAluno->getId()
    ]);

    if (($_POST["btn-age"]) > 150 || ($_POST["btn-age"]) < 1) {
        echo "<div class='alert alert-danger'>Insira uma idade válida!</div>";
    } else {
        header("Location: ../view/lista.php?success=cadastrado");
        exit;
    }
}
?>