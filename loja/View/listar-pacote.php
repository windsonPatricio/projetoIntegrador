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
            <th scope="col">Qnt de Passageiros</th>
            <th scope="col">Status</th>
            <th scope="col">Valor do Pacote</th>
            <th scope="col">Data do Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($pacote as $pacotes){?>
            <tr>
                <th scope="row"><?=$pacotes->id?></th>
                <td><?=$pacotes->nome?></td>
                <td><?=$pacotes->quantidadeMax?></td>
                <td><?=$pacotes->status?></td>
                <td><?=$pacotes->valorPacote?></td>
                <td><?=$pacotes->dataCadastro?></td>
                <td>
                    <a href="\adicionar-estadia-form?id=<?=$pacotes->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$pacotes->id?>" class="fas fa-user-secret text-dark text-decoration-none mr-2"></a>
                    <a href="\apagar-estadia?id=<?=$pacotes->id?>" class="fas fa-list text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$pacotes->id?>" class="fas fa-address-book text-dark text-decoration-none mr-2"></a>
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