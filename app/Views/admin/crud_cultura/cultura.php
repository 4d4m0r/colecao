<link href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>

<script>
    $(function() {
        $('#table').bootstrapTable()
    })
</script>

<div class="loader-wrapper">
    <div class="spinner-border text-dark loader" role="status">
        <span class="visually-hidden"></span>
    </div>
</div>
<div class="container" style="margin-top: 100px;">
    <div style="overflow: hidden;" class="mb-4">
        <div style="float: left;">
            <h2>Culturas</h2>
        </div>
        <div style="float: right;">
            <?php echo anchor(base_url('cultura/create/'), 'Adicionar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <table data-toggle="table" data-pagination="true" data-search="true" data-advanced-search="true" style="width:100%">
        <thead>
            <tr>
                <th>DPUA</th>
                <th>Espécie</th>
                <th>Meio Cultivo</th>
                <th>Cód. Col. Ext.</th>
                <th>Método de Preser.</th>
                <th>Depositante</th>
                <th>Restrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($culturas as $cultura) : ?>
                <tr>
                    <td><?php echo $cultura['n_dpua_cultura'] ?></td>
                    <td><?php echo $cultura['nome_especie'] ?></td>
                    <td><?php echo $cultura['meio_cultivo'] ?></td>
                    <td><?php echo $cultura['codigo_col_ext_cultura'] ?></td>
                    <td><?php echo $cultura['metodo_preservacao_cultura'] ?></td>
                    <td><?php echo $cultura['depositante_cultura'] ?></td>
                    <td><?php
                        if ($cultura['restricao_cultura'] == 0) {
                            echo "Não";
                        } else {
                            echo "Sim";
                        }
                        ?>
                    </td>

                    <td>
                        <?php echo anchor('cultura/visualizar/' . $cultura['id_cultura'], '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>') ?>

                        <?php echo anchor('cultura/edit/' . $cultura['id_cultura'], '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>') ?>

                        <?php echo anchor('cultura/delete/' . $cultura['id_cultura'], '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>