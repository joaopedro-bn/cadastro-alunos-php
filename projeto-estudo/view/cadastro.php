<?php include "header.php"; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-7">
                <h1 class="text-center mb-4 fw-bold">Insira os dados do aluno</h1>

                <form action="cadastro.php" class="form-group" method="POST">

                    <div class="border border-1 shadow-sm p-4 mb-5 bg-body-tertiary rounded">

                        <div class="mb-3">
                        <label for="text" class="form-label"><b>Nome:</b></label>
                        <input type="text" class="form-control" name="btn-name" id="" placeholder="Digite o nome do aluno...">
                        </div>

                        <div class="mb-3">
                        <label for="email" class="form-label"><b>Email:</b></label>
                        <input type="email" class="form-control" id="" name="btn-email" placeholder="nome@examplo.com">
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Idade:</b></label>
                        <input type="number" class="form-control" id="" name="btn-age" placeholder="Digite a idade do aluno...">
                        </div>

                        <button type="submit" class="btn btn-primary btn1" name="btn-submit">Cadastrar aluno</button>

                        <div class="resposta mt-3">
                            <?php include "../controller/salvar.php"; ?>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
