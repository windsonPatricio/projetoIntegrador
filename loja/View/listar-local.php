<body>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h2> lISTA DE LOCAIS </h2>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">endereco</th>
            <th scope="col">valor da ingresso</th>
            <th scope="col">cidade</th>
            <th scope="col">estado</th>
            <th scope="col">dataCadastro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($local as $locais){?>
            <tr>
                <th scope="row"><?=$locais->id?></th>
                <td><?=$locais->nome?></td>
                <td><?=$locais->endereco?></td>
                <td><?=$locais->valorIngresso?></td>
                <td><?=$locais->cidade?></td>
                <td><?=$locais->estado?></td>
                <td><?=$locais->dataCadastro?></td>
                <td></td>

                <td>
                    <a href="\apagar-local?id=<?=$locais->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$locais->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/cadastro-local-form">Voltar</a>
        <br>
    </div>
</div>

</body>