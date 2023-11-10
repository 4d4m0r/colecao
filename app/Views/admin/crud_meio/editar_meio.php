<div class="container"style="margin-top: 100px;">
    <h2>Novo Meio de Cultivo:</h2>
    <form method="POST" action="<?= base_url('/update_meio') ?>" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="meio_cultivo" class="sr-only">Meio de cultivo</label>
            <input type="text" class="form-control" id="meio_cultivo" name="meio_cultivo" value="<?php echo $meio_cultivo['meio_cultivo']?>">
        </div>
        <input type="hidden" name="id_meio_cultivo" id="id_meio_cultivo" value="<?php echo $meio_cultivo['id_meio_cultivo']?>">
        <button type="submit" class="btn btn-primary mb-2">Adicionar</button>
    </form>
</div>