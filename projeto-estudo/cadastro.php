<?php include "header.php"; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-7">
                <h1 class="text-center mb-4 fw-bold">Insira os dados do aluno</h1>

                <form action="salvar" class="form-group">

                    <div class="border border-1 shadow-sm p-4 mb-5 bg-body-tertiary rounded">

                        <div class="mb-3">
                        <label for="text" class="form-label"><b>Nome:</b></label>
                        <input type="text" class="form-control" id="" placeholder="Digite o nome do aluno...">
                        </div>

                        <div class="mb-3">
                        <label for="email" class="form-label"><b>Email:</b></label>
                        <input type="email" class="form-control" id="" placeholder="nome@examplo.com">
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Idade:</b></label>
                        <input type="number" class="form-control" id="" placeholder="Digite a idade do aluno...">
                        </div>

                        <button type="submit" class="btn btn-primary btn1">Cadastrar aluno</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
