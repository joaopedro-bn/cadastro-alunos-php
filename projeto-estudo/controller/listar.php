<?php

require "config.php";

$stmt = $pdo->query("SELECT * FROM cadastroalunos");

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Lista de Alunos</h2>

<table>

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Idade</th>
</tr>

<?php foreach ($alunos as $aluno): ?>

<tr>
    <td><?php $aluno["id"] ?></td>
    <td><?php $aluno["nome"] ?></td>
    <td><?php $aluno["email"] ?></td>
    <td><?php $aluno["idade"] ?></td>
</tr>

<?php endforeach; ?>

</table>