<body>
<br><br>
<div class="container">
    <form action="/cadastro-Evento" method="post">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputAddress2">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Nome Evento">
            </div>
            <div class="form-group col-md-2">
                <label for="inputState">Tipo</label>
                <select id="inputState" name="tipo" class="form-control">
                    <option selected>Selecione...</option>
                    <option>Show musical</option>
                    <option>Festa Religiosa</option>
                    <option>Parque de Diversao</option>
                    <option>City tur</option>
                    <option>Outros</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Valor do Ingresso</label>
                <input type="text" name="valor" class="form-control" id="inputCity" placeholder="Valor"">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Data</label>
                <input type="" name="data" class="form-control" id="inputCity" placeholder="Data do Evento" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Hora</label>
                <input type="" name="hora" class="form-control" id="inputCity" placeholder="Hora do Evento" maxlength="5" OnKeyPress="formatar('##:##', this)">
            </div>
        </div>

        <br>
        <button type="submit"  class="btn btn-primary" >Cadastrar</button>
        <a class="btn btn-primary" href="/portalAdm">Voltar</a>
        <a class="btn btn-primary" href="/listar-eventos">Listar Eventos Cadastrados</a>
        <br>

    </form>
</div>
</body>
