<div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="container">
        <br>
        <h3> INCLUIR LOCAL E EVENTOS AO PACOTE </h3>
        <br>
        <form action="/adicionar-trecho" method="post">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputCity">Id do pacote</label>
                    <input class="form-control" name="id" value="<?=$_GET['id']?>" type="text" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Data de Inicio</label>
                    <input type="text" name="dataInicio" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Data de Fim</label>
                    <input type="text" name="dataFim" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCity">Hora de Chegada</label>
                    <input type="text" name="horaInicio" class="form-control" id="inputCity" placeholder="digite..." maxlength="5" OnKeyPress="formatar('##:##', this)">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCity">Hora de Saida</label>
                    <input type="text" name="horaFim" class="form-control" id="inputCity" placeholder="digite..." maxlength="5" OnKeyPress="formatar('##:##', this)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">Valor de Entrada</label>
                    <input type="text" name="valor" class="form-control" id="inputCity" placeholder="(se houver)">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputState">Cidade a Ser Visitada</label>
                    <select id="inputState" name="trechoLocal" class="form-control">
                        <option>Selecione...</option>
                        <?php foreach($locais as $local){?>
                            <option value="<?=$local->id?>"><?= $local->cidade," ", $local->estado?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="inputState">Incluir Evento a Localidade</label>
                    <select id="inputState" name="trechoEvento" class="form-control">
                        <option>Selecione...</option>
                        <?php foreach($eventos as $evento){?>
                            <option value="<?=$evento->id?>"><?= $evento->nome?> </option>
                        <?php } ?>
                    </select>
                </div>

                <br>
                <button type="submit"  href="/adicionar-trecho"class="btn btn-primary" >Incluir Trecho</button>
                <br>
        </form>
    </div>
</div>