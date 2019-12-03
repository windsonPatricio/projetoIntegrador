<body>
<br><br>
<div class="container">
    <form action="/cadastro-Estadia" method="post">
     <div class="form-row">
        <div class="form-group col-md-8">
            <label for="inputAddress2">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Nome Hotel">
        </div>
        <div class="form-group col-md-2">
            <label for="inputState">Tipo</label>
            <select id="inputState" name="tipoHospedagem" class="form-control">
                <option selected>Selecione...</option>
                <option>Hotel</option>
                <option>Pousada</option>
                <option>Chacara</option>
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
                <label for="inputCity">Valor da Diaria</label>
                <input type="text" name="valorDiaria" class="form-control" id="inputCity" OnKeyPress="formatar('R$ #.###,##', this)">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Telefone</label>
                <input type="" name="telefone" class="form-control" id="inputCity"  OnKeyPress="formatar('(##) #####-####', this)">
            </div>
        </div>

        <br>
        <button type="submit"  class="btn btn-primary" >Cadastrar</button>
        <a class="btn btn-primary" href="/portalAdm">Cancelar</a>
        <br>

    </form>
</div>
<script>
    function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)

        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
    }
</script>
</body>
