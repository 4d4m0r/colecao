<div class="container"style="margin-top: 100px;">
    <h2>Visualizar Cultura: <?php echo $cultura[0]['n_dpua_cultura'] ?></h2>
    <hr>
    <div class="container mt-3">
        <form>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="n_dpua_cultura">DPUA:</label>
                        <input style="border:0 none" type="text" value="<?php echo $cultura[0]['n_dpua_cultura'] ?>" name="n_dpua_cultura" id="n_dpua_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="nome_especie">Nome da Espécie:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['nome_especie'] ?>" name="nome_especie" id="nome_especie" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="meio_cultivo">Meio de Cultivo:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['meio_cultivo'] ?>" name="meio_cultivo" id="meio_cultivo" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="codigo_col_ext_cultura">Código Externo:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['codigo_col_ext_cultura'] ?>" name="codigo_col_ext_cultura" id="codigo_col_ext_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="autor_cultura">Autor:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['autor_cultura'] ?>" name="autor_cultura" id="autor_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="metodo_preservacao_cultura">Método de Preservação:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['metodo_preservacao_cultura'] ?>" name="metodo_preservacao_cultura" id="metodo_preservacao_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="cultura_descartada_cultura">Cultura Descartada:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['cultura_descartada_cultura'] ?>" name="cultura_descartada_cultura" id="cultura_descartada_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="n_cul_preser_oleo_cultura">N° da Cultura Preservada em óleo:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['n_cul_preser_oleo_cultura'] ?>" name="n_cul_preser_oleo_cultura" id="n_cul_preser_oleo_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="n_cul_preser_agua_cultura">N° da Cultura Preservada em água:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['n_cul_preser_agua_cultura'] ?>" name="n_cul_preser_agua_cultura" id="n_cul_preser_agua_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="data_preser_oleo_cultura">Data de preservação em óleo:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['data_preser_oleo_cultura'] ?>" name="data_preser_oleo_cultura" id="data_preser_oleo_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="data_preser_agua_cultura">Data de preservação em água:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['data_preser_agua_cultura'] ?>" name="data_preser_agua_cultura" id="data_preser_agua_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="depositante_cultura">Depositante:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['depositante_cultura'] ?>" name="depositante_cultura" id="depositante_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="historico_deposito_cultura">Histórico do depósito:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['historico_deposito_cultura'] ?>" name="historico_deposito_cultura" id="historico_deposito_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="forma_envio_cultura">Forma de envio:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['forma_envio_cultura'] ?>" name="forma_envio_cultura" id="forma_envio_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="restricao_cultura">Restrição:</label>
                        <input type="text" style="border:0 none" value="<?php if ($cultura[0]['restricao_cultura'] == 1) {
                                                                            echo ("Sim");
                                                                        } else {
                                                                            echo ("Não");
                                                                        } ?>" name="restricao_cultura" id="restricao_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="status_cultura">Status:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['status_cultura'] ?>" name="status_cultura" id="status_cultura" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="observacao_cultura">Observações:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['observacao_cultura'] ?>" name="observacao_cultura" id="observacao_cultura" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="nome_cidades">Cidade:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['cidade_cultura'] ?>" name="nome_cidades" id="nome_cidades" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-control">
                        <label for="nome_estados">Estado:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['estado_cultura'] ?>" name="nome_estados" id="nome_estados" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-control">
                        <label for="nome_pt_pais">País:</label>
                        <input type="text" style="border:0 none" value="<?php echo $cultura[0]['pais_cultura'] ?>" name="nome_pt_pais" id="nome_pt_pais" disabled>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>