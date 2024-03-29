<body>
<div class="container">
    <br>
        <h3> INCLUIR USUARIO AGENTE DE VIAGEM </h3>
    <br>
    <form action="/cadastro-agente" method="post">

        <div class="form-group">
            <label for="inputAddress2">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputAddress2" placeholder="Seu nome">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCity">CPF</label>
                <input type="text" name="CPF" class="form-control" id="inputCity"  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
            </div>
             <div class="form-group col-md-4">
                    <label for="inputCity">Data de Nascimento</label>
                    <input type="text" name="dataNascimento" class="form-control" id="inputCity"  maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Sexo</label>
                    <select id="inputState" name="sexo" class="form-control">
                        <option selected>Selecione...</option>
                        <option>Feminino</option>
                        <option>Masculino</option>
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
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">senha</label>
                    <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="Password">
                </div>
            </div>

        <br>
        <button type="submit"  class="btn btn-primary" >Cadastrar</button>
        <a class="btn btn-primary" href="/portalAdm">Voltar</a>
    </form>
</div>
</body>
