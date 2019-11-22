<div class="my-3 p-3 bg-white rounded shadow-sm">
    <span class="d-block text-center mb-3">
        <a href="/adicionar-produto-form" class="fas fa-plus text-dark text-decoration-none"></a>
    </span>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">descrição</th>
                <th scope="col">descricao</th>
                <th scope="col">data de ida</th>
                <th scope="col">data de volta</th>
                <th scope="col">ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($hotel as $hotel2){ ?>
            <tr>
                <th scope="row"><?=$hotel2->id?></th>
                <td><?=$hotel2->nome?></td>
                <td><?=$hotel2->valorDiaria?></td>
                <td><?=$hotel2->telefone?></td>

                <td>
                    <a href="\apagar-produto?id=<?=$hotel2->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$hotel2->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>