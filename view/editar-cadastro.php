<?php 
include "header.php";
require "../controller/buscar-cadastro.php"; 
?>

<div class="container mt-5">
    <form action="editar-cadastro.php?id=<?= $aluno['id'] ?>" method="POST">
        <div class="border border-1 shadow-sm p-4 mb-5 bg-body-tertiary rounded">
            
            <input type="hidden" name="id" value="<?= $aluno['id'] ?>">

            <div class="mb-3">
                <label class="form-label"><b>Nome:</b></label>
                <input type="text" class="form-control" name="btn-name" value="<?= $aluno['nome'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label"><b>Email:</b></label>
                <input type="email" class="form-control" name="btn-email" value="<?= $aluno['email'] ?>">
            </div>

            <div class="mb-3">
                <label class="form-label"><b>Idade:</b></label>
                <input type="number" class="form-control" name="btn-age" value="<?= $aluno['idade'] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="btn-update">Atualizar cadastro</button>

            <div class="resposta mt-3">
                <?php include "../controller/update.php"; ?>
            </div>

        </div>
        
        <div class="d-grid gap-3">
            <a href="index.php" class="btn btn3"> Voltar para o início </a>
        </div>

    </form>
</div>