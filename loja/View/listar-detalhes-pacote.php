<body>
<div class="container">
    <br>
        <h3> DETALHES DO PACOTE </h3>
    <br>
</div>
<div class="container mt-3 bg-white rounded shadow-sm flex-row">
        <br>
        <h5> ESTADIAS </h5>
        <br>
            <table class="table">
                <?php foreach($estadias as $estadia){ ?>
                <thead class="thead-dark" >
                <tr>
                    <th scope="col">Nome da Estadia:</th>
                    <th scope="col">Data da Reserva</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado </th>
                    <th scope="col">Tipo de Hospedagem</th>
                    <th scope="col">Valor da Diaria</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $estadia->estadia_id->nome ?> </th>
                        <td> <?= $estadia->dataReserva?></td>
                        <td> <?= $estadia->estadia_id->cidade?></td>
                        <td> <?= $estadia->estadia_id->estado?></td>
                        <td> <?= $estadia->estadia_id->tipo?></td>
                        <td><?= $estadia->estadia_id->valorDiaria ?></td>
                    </tr>

                </tbody>
                <?php } ?>
            </table>
    </div>
    <br>
    <div class="container mt-3 bg-white rounded shadow-sm flex-row">
        <br>
        <h5> TRANSPORTE </h5>
        <br>
        <table class="table">
            <?php foreach($transportes as $transporte){ ?>
            <thead class="thead-dark" >
            <tr>
                <th scope="col">Nome da Empresa Fretante:</th>
                <th scope="col">Data do Aluguel</th>
                <th scope="col">Tipo de Transporte</th>
                <th scope="col">Valor do Frete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><?= $transporte->transporte_id->nome ?> </th>
                <td> <?= $transporte->dataAluguel?></td>
                <td> <?= $transporte->transporte_id->tipo?></td>
                <td> <?= $transporte->transporte_id->valorFrete?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-3 bg-white rounded shadow-sm flex-row">
        <br>
        <h5> CIDADES A SER VISITADA</h5>
        <br>
        <table class="table">
            <?php foreach($trechos as $trecho){ ?>
            <thead class="thead-dark" >
            <tr>
                <th scope="col">Data da Chegada</th>
                <th scope="col">Hora de Chegada</th>
                <th scope="col">Data da Saida</th>
                <th scope="col">Hora de Saida</th>
                <th scope="col">Cidade a ser visitada</th>
                <th scope="col">Estado</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="row"><?= $trecho->dataInicio ?> </td>
                <td> <?= $trecho->horaInicio?></td>
                <td> <?= $trecho->dataFim?></td>
                <td> <?= $trecho->horaFim?></td>
                <td> <?= $trecho->trechoLocal->cidade?></td>
                <td> <?= $trecho->trechoLocal->estado?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php if ($usuario->tipoUsuario==1||$usuario->tipoUsuario==2){ ?>
            <br>
                <a class="btn btn-primary" href="/listar-pacote">Voltar</a>
            <br>
        <?php } else{ ?>
            <br>
                <a class="btn btn-success" href="/portal">Demonstrar Interesse</a>
            <br>
        <?php } ?>
    </div>
</body>