<!-- Crie um novo arquivo chamado 'cultura_results.php' na pasta 'Views/user' -->
<?php if (!empty($culturas)): ?>
    <div class="table-responsive">
        <table class="table table-hover table-bordered"  style="margin-bottom: 100px;">
            <thead>
                <tr>
                    <th>DPUA</th>
                    <th>Espécie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($culturas as $cultura): ?>
                    <tr>
                        <td><?= $cultura['n_dpua_cultura'] ?></td>
                        <td><?= $cultura['nome_especie'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div class="alert alert-warning" role="alert" style="margin-bottom: 100px;">
        Nenhum resultado encontrado.
    </div>
<?php endif; ?>
