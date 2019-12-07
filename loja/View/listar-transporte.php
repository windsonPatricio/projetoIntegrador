<body>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h2> LISTA DE TRANSPORTES </h2>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">tipo</th>
            <th scope="col">Valor do Frete</th>
            <th scope="col">Endereco</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Telefone</th>
            <th scope="col">data do Cadastro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($transporte as $transportes){?>
            <tr>
                <th scope="row"><?=$transportes->id?></th>
                <td><?=$transportes->nome?></td>
                <td><?=$transportes->tipo?></td>
                <td><?=$transportes->valorFrete?></td>
                <td><?=$transportes->endereco?></td>
                <td><?=$transportes->cidade?></td>
                <td><?=$transportes->estado?></td>
                <td><?=$transportes->telefone?></td>
                <td><?=$transportes->dataCadastro?></td>
                <td></td>

                <td>
                    <a href="\apagar-transporte?id=<?=$transportes->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$transportes->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/cadastro-Transporte-form">Voltar</a>
        <br>
    </div>
</div>

</body>