<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form action="/adicionar-estadia" method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Data reserva</label>
                <input type="text" name="dataReserva" class="form-control" id="inputCity" placeholder="digite..." maxlength="10" OnKeyPress="formatar('##/##/####', this)">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Cidade Visitada</label>
                <select id="inputState" name="estadia_id" class="form-control">
                    <option>Selecione...</option>
                    <?php foreach($estadias as $estadia){?>
                        <option value="<?=$estadia->id?>"><?= $estadia->nome?> </option>
                    <?php } ?>
                </select>
            </div>
    </form>
</div>