<div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="container">
        <form action="/editar-valor" method="post">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputCity">Id do pacote</label>
                    <input class="form-control" name="id" value="<?=$_GET['id']?>" type="text" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Novo Valor do Pacote</label>
                    <input type="text" name="valor" class="form-control"  value="<?=$pacote->valorPacote?>">
                </div>
            </div>
                <br>
                <button type="submit"  href="/editar-valor"class="btn btn-primary" >Alterar Valor</button>
                <button href="/listar-pacote" class="btn btn-primary" >Cancelar</button>
                <br>
        </form>
    </div>
</div>
