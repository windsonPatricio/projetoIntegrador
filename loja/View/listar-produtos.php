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
            </tr>
        </thead>
        <tbody>
        <?php foreach($produtos as $roteiro){ ?>
            <tr>
                <th scope="row"><?=$roteiro->id?></th>
                <td><?=$roteiro->descricao?></td>
                <td><?=$roteiro->data_de_ida?></td>
                <td><?=$roteiro->data_de_volta?></td>

                <td>
                    <a href="\apagar-produto?id=<?=$roteiro->id?>" class="fas fa-eraser text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$roteiro->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>