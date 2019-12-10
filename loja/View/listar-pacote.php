<body>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h2> LISTA DE PACOTES </h2>
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
                <?php } ?>

                <?php if ($usuario->tipoUsuario==1){?>
                <td>
                    <a href="\aprovar-pacote?id=<?=$pacotes->id?>" class="fas fa-umbrella text-dark text-decoration-none mr-2"></a>
                    <a href="\reprovar-pacote?id=<?=$pacotes->id?>" class="fas fa-crop text-dark text-decoration-none mr-2"></a>
                </td>
                <?php } else { ?>
                <td>
                    <a href="\adicionar-estadia-form?id=<?=$pacotes->id?>" class="fas fa-home text-dark text-decoration-none mr-2"></a>
                    <a href="\adicionar-transporte-form?id=<?=$pacotes->id?>" class="fas fa-bus text-dark text-decoration-none mr-2"></a>
                    <a href="\adicionar-trecho-form?id=<?=$pacotes->id?>" class="fas fa-glass text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$pacotes->id?>" class="fas fa-list text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/cadastro-pacote-form">Voltar</a>
        <br>
    </div>
</div>

</body>