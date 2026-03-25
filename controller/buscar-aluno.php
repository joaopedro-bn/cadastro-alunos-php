<?php

require "config.php";

$stmt = $pdo->query("SELECT * FROM cadastroalunos");

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>