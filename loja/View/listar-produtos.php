<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <span class="d-block text-center mb-3">
        <a href="/cadastro-cliente" class="fas fa-plus text-dark text-decoration-none"></a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">cpf</th>
                <th scope="col">endereco</th>
                <th scope="col">email</th>
                <th scope="col">dataNascimento</th>
                <th scope="col">sexo</th>
                <th scope="col">cidade</th>
                <th scope="col">estado</th>
                <th scope="col">dataCadastro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clientes as $cliente){ ?>
            <tr>
                <th scope="row"><?=$cliente->id?></th>
                <td><?=$cliente->nome?></td>
                <td><?=$cliente->cpf?></td>
                <td><?=$cliente->endereco?></td>
                <td><?=$cliente->email?></td>
                <td><?=$cliente->dataNascimento?></td>
                <td><?=$cliente->sexo?></td>
                <td><?=$cliente->cidade?></td>
                <td><?=$cliente->estado?></td>
                <td><?=$cliente->dataCadastro?></td>
                <td></td>

                <td>
                    <a href="\apagar-produto?id=<?=$cliente->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$cliente->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div