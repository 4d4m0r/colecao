<script>
  $(document).ready(function() {
    // Popula a lista de países
    $.ajax({
      url: 'https://servicodados.ibge.gov.br/api/v1/localidades/paises',
      dataType: 'json',
      success: function(paises) {
        paises.forEach(function(pais) {
          $('#paises').append($('<option>', {
            value: pais.nome,
            text: pais.nome,
            id: "pais",
            name: "pais",
            class: 'form-select'
          }));
        });
      }
    });

    // Quando o país for selecionado, busca os estados correspondentes (somente para Brasil)
    $('#paises').on('change', function() {
      var paisSelecionado = $('#paises option:selected').text();
      console.log(paisSelecionado)
      if (paisSelecionado === 'Brasil') {
        $('#estados').empty();
        $('#estados').append($('<option>', {
          value: '',
          text: 'Carregando...'
        }));
        $.ajax({
          url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
          dataType: 'json',
          success: function(estados) {
            $('#estados').empty();
            $('#estados').append($('<option>', {
              value: '',
              text: 'Selecione um estado'
            }));
            estados.forEach(function(estado) {
              $('#estados').append($('<option>', {
                value: estado.id,
                id: "estados",
                name: "estados",
                text: estado.nome,
                class: 'form-select'
              }));
            });
          }
        });
      } else {
        $('#estados').empty();
        $('#municipios').empty();
        $('#estados').append($('<option>', {
          value: '',
          text: '-                                  '
        }));
        $('#municipios').append($('<option>', {
          value: '',
          text: '-                                  '
        }));
      }
    });

    // Quando o estado for selecionado, busca os municípios correspondentes
    $('#estados').on('change', function() {
      var estadoID = $(this).val();
      if (estadoID) {
        $('#municipios').empty();
        $('#municipios').append($('<option>', {
          value: '',
          text: 'Carregando...'
        }));
        $.ajax({
          url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estadoID + '/municipios',
          dataType: 'json',
          success: function(municipios) {
            $('#municipios').empty();
            $('#municipios').append($('<option>', {
              value: '',
              text: 'Selecione um município'
            }));
            municipios.forEach(function(municipio) {
              $('#municipios').append($('<option>', {
                value: municipio.id,
                id: "municipios",
                name: "municipios",
                text: municipio.nome,
                class: 'form-select'
              }));
            });
          }
        });
      } else {
        $('#municipios').empty();
        $('#municipios').append($('<option>', {
          value: '',
          text: 'Selecione um estado primeiro'
        }));
      }
    });
  });
</script>
<div class="container" style="margin-top: 100px;">
  <h2>Adicionar Cultura</h2>
  <hr>
  <form action="<?= base_url('/cultura/store/') ?>" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="especie">Espécie</label>
        <select name="id_especie" id="id_especie" class="form-select" required>
          <option value="">Escolha a espécie</option>
          <?php foreach ($especies as $especie) { ?>
            <option value="<?php echo $especie['id_especie'] ?>"><?php echo $especie['nome_especie'] ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="id_meio">Meio de Cultivo</label>
        <select name="id_meio" id="id_meio" class="form-select" required>
          <option value="">Escolha o meio</option>
          <?php foreach ($meios as $meio) { ?>
            <option value="<?php echo $meio['id_meio_cultivo'] ?>"><?php echo $meio['meio_cultivo'] ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-6">
                <div id="especieDetails"></div>
            </div>
        </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="n_dpua_cultura">N° DPUA</label>
        <input type="text" class="form-control" id="n_dpua_cultura" name="n_dpua_cultura">
      </div>
      <div class="form-group col-md-6">
        <label for="codigo_col_ext_cultura">Código Coleta Externa</label>
        <input type="text" class="form-control" id="codigo_col_ext_cultura" name="codigo_col_ext_cultura">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="autor_cultura">Autor</label>
        <input type="text" class="form-control" id="autor_cultura" name="autor_cultura">
      </div>
      <div class="form-group col-md-6">
        <label for="metodo_preservacao_cultura">Método de Preservação</label>
        <input type="text" class="form-control" id="metodo_preservacao_cultura" name="metodo_preservacao_cultura">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cultura_descartada_cultura">Cultura Descartada</label>
        <input type="text" class="form-control" id="cultura_descartada_cultura" name="cultura_descartada_cultura">
      </div>
      <div class="form-group col-md-6">
        <label for="n_cul_preser_oleo_cultura">N° Cultura Preservada em Óleo</label>
        <input type="text" class="form-control" id="n_cul_preser_oleo_cultura" name="n_cul_preser_oleo_cultura">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="n_cul_preser_agua_cultura">N° Cultura Preservada em Água</label>
        <input type="text" class="form-control" id="n_cul_preser_agua_cultura" name="n_cul_preser_agua_cultura">
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="data_preser_oleo_cultura">Data Preser Oleo Cultura</label>
          <input type="date" class="form-control" id="data_preser_oleo_cultura" name="data_preser_oleo_cultura">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="data_preser_agua_cultura">Status Cultura</label>
          <input type="text" class="form-control" id="status_cultura" name="status_cultura">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="data_preser_agua_cultura">Data Preser Agua Cultura</label>
          <input type="date" class="form-control" id="data_preser_agua_cultura" name="data_preser_agua_cultura">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="depositante_cultura">Depositante Cultura</label>
          <input type="text" class="form-control" id="depositante_cultura" name="depositante_cultura">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="historico_deposito_cultura">Historico Deposito Cultura</label>
          <input type="text" class="form-control" id="historico_deposito_cultura" name="historico_deposito_cultura">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="forma_envio_cultura">Forma Envio Cultura</label>
          <input type="text" class="form-control" id="forma_envio_cultura" name="forma_envio_cultura">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="restricao_cultura">Restricao Cultura</label>
          <input type="text" class="form-control" id="restricao_cultura" name="restricao_cultura">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="status_cultura">Status</label>
          <input type="text" class="form-control" id="status_cultura" name="status_cultura">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="observacao_cultura">Observações</label>
          <input type="text" class="form-control" id="observacao_cultura" name="observacao_cultura">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-floating mb-3">
          <label for="paises">País:</label>
          <select id="paises" name="paises" class="form-select">
            <option value="">Selecione um país</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-floating mb-3">
          <label for="estados">Estado:</label><br>
          <select id="estados" name="estados" class="form-select">
            <option value="">Selecione um estado</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-floating mb-3">
          <label for=" ">Município:</label><br>
          <select id="municipios" name="municipios" class="form-select">
            <option value="">Selecione um município</option>
          </select>
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</div>