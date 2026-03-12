<?php include "header.php" ?>

<div class="col-8 justify-content-center">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach ($alunos as $aluno): ?>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>

      <?php endforeach; ?>

    </tbody>
  </table>
</div>