<div class="container" style="margin-top: 100px;">
    <div class="row">
        <!-- Upload de Excel -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Upload de Excel</h2>
                    <form action="<?= base_url('/import') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="excel">Selecione um arquivo Excel:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="excel" name="upload_file" required>
                                <label class="custom-file-label" for="excel">Escolher arquivo</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Exportar -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Exportar</h2>
                    <a href="<?= base_url('/export') ?>" class="btn btn-dark">Exportar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Atualiza o texto da label do arquivo escolhido
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
</script>