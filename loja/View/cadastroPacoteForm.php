<body>
<br><br>
<div class="container">
    <br>
        <h3> CADASTRO DE PACOTE DE VIAGEM </h3>
    <br>
    <form action="/cadastro-pacote" method="post">
             <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="inputAddress2">Nome</label>
                        <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Nome do pacote">
                    </div>
                    <div class="form-group col-md-3">
                         <label for="inputAddress2">Quantidade de Passageiros do pacote</label>
                         <input type="text" class="form-control" name="quantidadeMax" id="inputAddress2" placeholder="Quantidade">
                    </div>
                     <div class="form-group col-md-4">
                         <label for="inputCity">Valor do Pacote</label>
                         <input type="text" name="valor" class="form-control" id="inputCity" placeholder="valor Incial">
                     </div>
             </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Data de inicio</label>
                    <input type="" name="dataInicio" class="form-control" id="inputCity" placeholder="Data do Evento" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Data de fim</label>
                    <input type="" name="dataFim" class="form-control" id="inputCity" placeholder="Data do Evento" maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
            </div>


                <br>
                <button type="submit"  class="btn btn-primary" >Cadastrar</button>
                <a class="btn btn-primary" href="/portalAdm">Voltar</a>
                <a class="btn btn-primary" href="/listar-pacote">Listar pacotes cadastrados</a>
                <br>

    </form>
</div>
</body>