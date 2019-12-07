<body>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
    <br>
        <h3> LISTA DE EVENTOS </h3>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nome</th>
            <th scope="col">tipo</th>
            <th scope="col">valor</th>
            <th scope="col">data</th>
            <th scope="col">hora</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($eventos as $evento){?>
            <tr>
                <th scope="row"><?=$evento->id?></th>
                <td><?=$evento->nome?></td>
                <td><?=$evento->tipo?></td>
                <td><?=$evento->valor?></td>
                <td><?=$evento->data?></td>
                <td><?=$evento->hora?></td>
                <td></td>

                <td>
                    <a href="\apagar-evento?id=<?=$evento->id?>" class="fas fa-question-circle text-dark text-decoration-none mr-2"></a>
                    <a href="\editar-produto-form?id=<?=$evento->id?>" class="fas fa-edit text-dark text-decoration-none mr-2"></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div>
        <br>
            <a class="btn btn-primary" href="/cadastro-Evento-form">Voltar</a>
        <br>
    </div>
</div>

</body>