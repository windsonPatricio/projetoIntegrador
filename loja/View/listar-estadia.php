<body>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h2> LISTA DE ESTADIAS </h2>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">endereco</th>
            <th scope="col">telefone</th>
            <th scope="col">valor da diaria</th>
            <th scope="col">cidade</th>
            <th scope="col">estado</th>
            <th scope="col">tipo</th>
            <th scope="col">dataCadastro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($estadia as $estadias){?>
            <tr>
                <th scope="row"><?=$estadias->id?></th>
                <td><?=$estadias->nome?></td>
                <td><?=$estadias->endereco?></td>
                <td><?=$estadias->telefone?></td>
                <td><?=$estadias->valorDiaria?></td>
                <td><?=$estadias->cidade?></td>
                <td><?=$estadias->estado?></td>
                <td><?=$estadias->tipo?></td>
                <td><?=$estadias->dataCadastro?></td>
                <td></td>

                <td>
                    <a href="\apagar-estadia?id=<?=$estadias->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$estadias->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/cadastro-Estadia-form">Voltar</a>
        <br>
    </div>
</div>

</body>