<div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="container">
        <br>
        <h3> INCLUIR TRANSPORTE AO PACOTE </h3>
        <br>
        <form action="/adicionar-transporte" method="post">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputCity">Id do pacote</label>
                    <input class="form-control" name="id" value="<?=$_GET['id']?>" type="text" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Data do aluguel</label>
                    <input type="text" name="dataAluguel" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputState">Empresa fretante</label>
                    <select id="inputState" name="transporte_id" class="form-control">
                        <option>Selecione...</option>
                        <?php foreach($transportes as $transporte){?>
                            <option value="<?=$transporte->id?>"><?= $transporte->nome?> </option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <button type="submit"  href="/adicionar-transporte"class="btn btn-primary" >Incluir Transporte</button>
                <br>
        </form>
    </div>
</div>