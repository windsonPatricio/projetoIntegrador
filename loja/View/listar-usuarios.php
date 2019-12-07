<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h2> LISTA DE USUARIOS </h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">cpf</th>
                <th scope="col">email</th>
                <th scope="col">dataNascimento</th>
                <th scope="col">sexo</th>
                <th scope="col">dataCadastro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clientes as $cliente){ ?>
            <tr>
                <th scope="row"><?=$cliente->id?></th>
                <td><?=$cliente->nome?></td>
                <td><?=$cliente->cpf?></td>
                <td><?=$cliente->email?></td>
                <td><?=$cliente->dataNascimento?></td>
                <td><?=$cliente->sexo?></td>
                <td><?=$cliente->dataCadastro?></td>
                <td></td>

                <td>
                    <a href="\apagar-produto?id=<?=$cliente->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$cliente->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/portalAdm">Voltar</a>
        <br>
    </div>
</div