<div class="container mt-4">
    <h1>Visualizar espécie: <?php echo $especie['nome_especie']?></h1>
    <div class="form-group">
        <label for="nome_especie">Nome:</label>
        <input disabled value="<?php echo $especie['nome_especie']?>" type="text" name="nome_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="status_tax_especie">Status taxonômico:</label>
        <input disabled value="<?php echo $especie['status_tax_especie']?>" type="text" name="status_tax_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="tipos_org_especie">Tipos de organismo:</label>
        <input disabled value="<?php echo $especie['tipos_org_especie']?>" type="text" name="tipos_org_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="aplicacoes_especie">Aplicações:</label>
        <input disabled value="<?php echo $especie['aplicacoes_especie']?>" name="aplicacoes_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="procedencia_especie">Procedência:</label>
        <input disabled value="<?php echo $especie['procedencia_especie']?>" type="text" name="procedencia_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="substrato_especie">Substrato:</label>
        <input disabled value="<?php echo $especie['substrato_especie']?>" type="text" name="substrato_especie" class="form-control">
    </div>

    <div class="form-group">
        <label for="riscos_especie">Riscos:</label>
        <input disabled value="<?php echo $especie['riscos_especie']?>" name="riscos_especie" class="form-control">
    </div>
</div>