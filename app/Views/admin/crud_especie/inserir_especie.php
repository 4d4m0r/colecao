<div class="container"style="margin-top: 100px;">
    <h1>Adicionar espécie</h1>
    <form action="<?= base_url('/especie/store/') ?>" method="post">
      <div class="form-group">
        <label for="nome_especie">Nome:</label>
        <input id="nome_especie" type="text" name="nome_especie" class="form-control">
      </div>

      <div class="form-group">
        <label for="status_tax_especie">Status taxonômico:</label>
        <input id="status_tax_especie" type="text" name="status_tax_especie" class="form-control">
      </div>

      <div class="form-group">
        <label for="tipos_org_especie">Tipos de organismo:</label>
        <input id="tipos_org_especie" type="text" name="tipos_org_especie" class="form-control">
      </div>

      <div class="form-group">
        <label for="aplicacoes_especie">Aplicações:</label>
        <textarea id="aplicacoes_especie" name="aplicacoes_especie" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="procedencia_especie">Procedência:</label>
        <input id="procedencia_especie" type="text" name="procedencia_especie" class="form-control">
      </div>

      <div class="form-group">
        <label for="substrato_especie">Substrato:</label>
        <input id="substrato_especie"  type="text" name="substrato_especie" class="form-control">
      </div>

      <div class="form-group">
        <label for="riscos_especie">Riscos:</label>
        <textarea id="riscos_especie" name="riscos_especie" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
  </div>