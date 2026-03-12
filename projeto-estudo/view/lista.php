<?php include "header.php"; ?>
<?php include "../controller/buscar-aluno.php"; ?>
<?php include "../controller/delete.php"; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="border border-1 shadow-sm p-4 mb-5 bg-body-tertiary rounded">
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
              <th scope="row"><?php echo $aluno["id"] ?></th>
              <td><?php echo $aluno["nome"] ?></td>
              <td><?php echo $aluno["idade"] ?></td>
              <td><?php echo $aluno["email"] ?></td>
              <td>
                <form action="lista.php" method="POST">

                <input type="hidden" value="<?php echo $aluno["id"] ?>" name="id">

                <button type="submit" class="btn btn-danger btn-sm" name="btn-delete" method="post">
                Deletar
                </button>

                </form>
              </td>
            </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
        <div class="d-grid gap-3">
          <a href="index.php" class="btn btn3"> Voltar para o início </a>
        </div>
    </div>
  </div>
</div>