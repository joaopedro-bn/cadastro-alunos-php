<?php

require "config.php";

if (isset($_POST["btn-delete"])) {

    $id = $_POST["id"];
    $stmt = $pdo->prepare("DELETE FROM cadastroalunos WHERE id = ?");
    $stmt->execute([$id]);
}