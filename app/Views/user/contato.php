<div class="container mt-5">
    <h2 class="mb-4">Formulário de Contato</h2>

    <form method="post" id="add_contato" name="add_contato" action="<?= site_url('/contatos/store/') ?>">

        <div class="form-group">
            <label for="nome_contato">Nome:</label>
            <input type="text" class="form-control" name="nome_contato" required>
        </div>

        <div class="form-group">
            <label for="email_contato">E-mail:</label>
            <input type="email" class="form-control" name="email_contato" required>
        </div>

        <div class="form-group">
            <label for="dpua_contato">DPUA:</label>
            <input type="text" class="form-control" name="dpua_contato" required>
        </div>

        <div class="form-group">
            <label for="texto_contato">Mensagem:</label>
            <textarea class="form-control" name="texto_contato" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Enviar</button>

    </form>
</div>