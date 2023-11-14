<link href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table').bootstrapTable();
    });
</script>

<div class="container" style="margin-top: 100px;">
    <table class="table" id="table" data-toggle="table" data-toolbar="#toolbar" data-pagination="true" data-search="true">
        <thead>
            <tr>
                <th data-field="nome_contato">Nome</th>
                <th data-field="email_contato">Email</th>
                <th data-field="dpua_contato">DPUA</th>
                <th data-field="texto_contato">Mensagem</th>
                <th data-field="acoes">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato) : ?>
                <tr>
                    <td><?= $contato['nome_contato'] ?></td>
                    <td><?= $contato['email_contato'] ?></td>
                    <td><?= $contato['dpua_contato'] ?></td>
                    <td><?= $contato['texto_contato'] ?></td>
                    <td><?= anchor('contatos/ver_contato/' . $contato['id_contato'], 'Visualizar') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>