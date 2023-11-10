<div class="container"style="margin-top: 100px;">
    <h2>Novo Meio de Cultivo:</h2>
    <form method="POST" action="<?= base_url('/meio/store/') ?>" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="meio_cultivo" class="sr-only">Meio de cultivo</label>
            <input type="text" class="form-control" id="nome_meio" name="nome_meio" placeholder="Meio de cultivo">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Adicionar</button>
    </form>
</div>