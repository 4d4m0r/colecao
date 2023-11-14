<div class="container" style="margin-top: 100px;">
<div class="container text-center mt-3">
        <h3>Visualizar mensagem de <?= $contato['nome_contato'] ?></h3>
    </div>
    <div class="container mt-3">
        <form method="post" id="add_create" name="add_create">
            <div class="form-group">
                <label for="nome_especie">Nome:</label>
                <input type="text" value="<?= $contato['nome_contato'] ?>" name="nome_contato" disabled class="form-control">
            </div>
            <div class="form-group">
                <label for="status_tax">Email:</label>
                <input type="text" value="<?= $contato['email_contato'] ?>" name="email_contato" disabled class="form-control">
            </div>
            <div class="form-group">
                <label for="tipos_org">DPUA:</label>
                <input type="text" value="<?= $contato['dpua_contato'] ?>" name="dpua_contato" disabled class="form-control">
            </div>
            <div class="form-group">
                <label for="tipos_org">Mensagem:</label>
                <textarea name="texto_contato" disabled class="form-control"><?= $contato['texto_contato'] ?></textarea>
            </div>
        </form>
    </div>
</div>
