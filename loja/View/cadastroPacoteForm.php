<body>
<br><br>
<div class="container">
    <br>
        <h3> CADASTRO DE PACOTE DE VIAGEM </h3>
    <br>
    <form action="/cadastro-pacote" method="post">
             <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress2">Nome</label>
                        <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Nome do pacote">
                    </div>
                    <div class="form-group col-md-9">
                         <label for="inputAddress2">Quantidade de Passageiros do pacote</label>
                         <input type="text" class="form-control" name="quantidadeMax" id="inputAddress2" placeholder="Quantidade">
                    </div>
             </div>

            <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Data de Inicio</label>
                        <input type="text" name="dataInicio" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Data de Fim</label>
                        <input type="text" name="dataFim" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Hora de Inicio</label>
                        <input type="text" name="horaInicio" class="form-control" id="inputCity" placeholder="digite..." maxlength="5" OnKeyPress="formatar('##:##', this)">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Hora de Fim</label>
                        <input type="text" name="horaFim" class="form-control" id="inputCity" placeholder="digite..." maxlength="5" OnKeyPress="formatar('##:##', this)">
                    </div>
            </div>
            <div class="form-row">
                <?php foreach($locais as $local){?>
                <div class="form-group col-md-4">
                    <label for="inputState">Cidade Visitada</label>
                    <select id="inputState" name="trechoLocal" class="form-control">
                        <option>Selecione...</option>
                        <option><?= $local-> nome?> </option>
                    </select>
                </div>
                <?php}?>
                <?php foreach($Eventos as $evento){?>
                <div class="form-group col-md-4">
                    <label for="inputState">Cidade Visitada</label>
                    <select id="inputState" name="trechoEvento" class="form-control">
                        <option>Selecione...</option>
                        <option><?= $evento-> nome?> </option>
                    </select>
                </div>
                <?php}?>
            </div>

        <br>
        <button type="submit"  class="btn btn-primary" >Cadastrar</button>
        <a class="btn btn-primary" href="/portalAdm">Voltar</a>
        <a class="btn btn-primary" href="#">Listar pacotes cadastrados</a>
        <br>

    </form>
</div>
</body>