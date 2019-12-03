<body>
<br><br>
<div class="container">
    <form action="/cadastro-Transporte" method="post">
     <div class="form-row">
        <div class="form-group col-md-8">
            <label for="inputAddress2">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Nome da empresa fretante">
        </div>
        <div class="form-group col-md-2">
            <label for="inputState">Tipo</label>
            <select id="inputState" name="tipoTransporte" class="form-control">
                <option selected>Selecione...</option>
                <option>Carro</option>
                <option>Van</option>
                <option>Micro Onibus</option>
                <option>Onibus</option>
                <option>Outros</option>
            </select>
        </div>
     </div>
        <div class="form-group">
            <label for="inputAddress2">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="inputAddress2" placeholder="Rua, Sitio, Fazenda...">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" name="estado" class="form-control">
                    <option selected>Selecione...</option>
                    <option>Acre (AC)</option>
                    <option>Alagoas (AL)</option>
                    <option>Amapá (AP)</option>
                    <option>Amazonas (AM)</option>
                    <option>Bahia (BA)</option>
                    <option>Ceará (CE)</option>
                    <option>Distrito Federal (DF)</option>
                    <option>Espírito Santo (ES)</option>
                    <option>Goiás (GO)</option>
                    <option>Maranhão (MA)</option>
                    <option>Mato Grosso (MT)</option>
                    <option>Mato Grosso do Sul (MS)</option>
                    <option>Minas Gerais (MG)</option>
                    <option>Pará (PA)</option>
                    <option>Paraíba (PB)</option>
                    <option>Paraná (PR)</option>
                    <option>Pernambuco (PE)</option>
                    <option>Piauí (PI)</option>
                    <option>Rio de Janeiro (RJ)</option>
                    <option>Rio Grande do Norte (RN)</option>
                    <option>Rio Grande do Sul (RS)</option>
                    <option>Rondônia (RO)</option>
                    <option>Roraima (RR)</option>
                    <option>Santa Catarina (SC)</option>
                    <option>São Paulo (SP)</option>
                    <option>Sergipe (SE)</option>
                    <option>Tocantins (TO)</option>

                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dinheiro">Valor do Frete</label>
                <input type="text" name="dinheiro" id="dinheiro" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="inputCity" minlength="13" maxlength="13" OnKeyPress="formatar('## #####-####', this)">
            </div>
        </div>

        <br>
        <button type="submit"  class="btn btn-primary" >Cadastrar</button>
        <a class="btn btn-primary" href="/portalAdm">Cancelar</a>
        <br>

    </form>
</div>
</body>
