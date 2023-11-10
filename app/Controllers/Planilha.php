<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CulturaModel;
use App\Models\EspecieModel;
use App\Models\MeioModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xls;

class Planilha extends BaseController
{

    public function data($data){
        if(is_null($data)){
            $data = "00/00/0000";
            $dat = str_replace('/', '-', $data);
            $newdate = strtotime($dat);
            $newformat = date('Y-m-d',$newdate);
        }else{
            if(is_string($data)){
                $data = "00/00/0000";
                $dat = str_replace('/', '-', $data);
                $newdate = strtotime($dat);
                $newformat = date('Y-m-d',$newdate);
            }else{
                $data_real = ($data - 25569) * 86400;
                $datetime = \DateTime::createFromFormat('U', $data_real); 
                $newformat= $datetime->format('Y-m-d');
            }
            
        }
        
        return $newformat;
    }

    public function export(){
        $planilha_object = new CulturaModel();

        $data  = $planilha_object->getDadosCultura();

        $nome_planilha = 'ColeçãoDPUA.xlsx';

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'No DPUA');
        $sheet->setCellValue('B1', 'No de coleção externa');
        $sheet->setCellValue('C1', 'Procedência');
        $sheet->setCellValue('D1', 'Espécie');
        $sheet->setCellValue('E1', 'Autor');

        $sheet->setCellValue('F1', 'Status Taxonômico');
        $sheet->setCellValue('G1', 'Meio Cultivo');
        $sheet->setCellValue('H1', 'Método Preservação');
        $sheet->setCellValue('I1', 'Cultura Descartada');

        $sheet->setCellValue('J1', 'No Cultura Preservada em óleo');
        $sheet->setCellValue('K1', 'No Cultura Preservada em água');
        $sheet->setCellValue('L1', 'Data preservação em óleo');
        $sheet->setCellValue('M1', 'Data preservação em água');

        $sheet->setCellValue('N1', 'Depositante');
        $sheet->setCellValue('O1', 'Histórico do depósito');
        $sheet->setCellValue('P1', 'Tipos de organismo');

        $sheet->setCellValue('Q1', 'Substrato');
        $sheet->setCellValue('R1', 'Município');
        $sheet->setCellValue('S1', 'Estado');
        $sheet->setCellValue('T1', 'País');
        $sheet->setCellValue('U1', 'Restrições');
        $sheet->setCellValue('V1', 'Risco biológico');
        $sheet->setCellValue('W1', 'Aplicações');
        $sheet->setCellValue('X1', 'Forma de envio');
        $sheet->setCellValue('Y1', 'Observações');


        $count = 2;

        foreach($data as $row){

            $sheet->setCellValue('A' . $count, $row['n_dpua_cultura']);
			$sheet->setCellValue('B' . $count, $row['codigo_col_ext_cultura']);
			$sheet->setCellValue('C' . $count, $row['procedencia_especie']);
			$sheet->setCellValue('D' . $count, $row['nome_especie']);
            $sheet->setCellValue('E' . $count, $row['autor_cultura']);

            $sheet->setCellValue('F' . $count, $row['status_tax_especie']);
			$sheet->setCellValue('G' . $count, $row['meio_cultivo']);
			$sheet->setCellValue('H' . $count, $row['metodo_preservacao_cultura']);
			$sheet->setCellValue('I' . $count, $row['cultura_descartada_cultura']);

            $sheet->setCellValue('J' . $count, $row['n_cul_preser_oleo_cultura']);
			$sheet->setCellValue('K' . $count, $row['n_cul_preser_agua_cultura']);
			$sheet->setCellValue('L' . $count, $row['data_preser_oleo_cultura']);
			$sheet->setCellValue('M' . $count, $row['data_preser_agua_cultura']);

            $sheet->setCellValue('N' . $count, $row['depositante_cultura']);
			$sheet->setCellValue('O' . $count, $row['historico_deposito_cultura']);
			$sheet->setCellValue('P' . $count, $row['tipos_org_especie']);

            $sheet->setCellValue('Q' . $count, $row['substrato_especie']);
			$sheet->setCellValue('R' . $count, $row['cidade_cultura']);
			$sheet->setCellValue('S' . $count, $row['estado_cultura']);
            $sheet->setCellValue('T' . $count, $row['pais_cultura']);
			$sheet->setCellValue('U' . $count, $row['restricao_cultura']);
			$sheet->setCellValue('V' . $count, $row['riscos_especie']);
            $sheet->setCellValue('W' . $count, $row['aplicacoes_especie']);
			$sheet->setCellValue('X' . $count, $row['forma_envio_cultura']);
            $sheet->setCellValue('Y' . $count, $row['observacao_cultura']);

			$count++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($nome_planilha);

        header("Content-Type: application/vnd.ms-excel");

		header('Content-Disposition: attachment; filename="' . basename($nome_planilha) . '"');

		header('Expires: 0');

		header('Cache-Control: must-revalidate');

		header('Pragma: public');

		header('Content-Length:' . filesize($nome_planilha));

		flush();

		readfile($nome_planilha);

		exit;
    }

    public function import(){
        $meioModel = new MeioModel();
        $especieModel = new EspecieModel();
        $culturaModel = new CulturaModel();

        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);

        if ($extension == 'csv') {
            $reader = new Csv();
        } elseif ($extension == 'xls') {
            $reader = new Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();

        if (count($sheetdata) > 1) {
            for ($i = 1; $i < count($sheetdata); $i++) {
                $data = [
                    'dpua' => $sheetdata[$i][0]?: "null",
                    'col_ext' => $sheetdata[$i][1]?: "null",
                    'procedencia' => $sheetdata[$i][2] ?: "null",
                    'especie' => $sheetdata[$i][3]?: "null",
                    'autor' => $sheetdata[$i][4]?: "null",
                    'status_tax' => $sheetdata[$i][5] ?: "null",
                    'meio' => $sheetdata[$i][6]?: "null",
                    'metodo' => $sheetdata[$i][7]?: "null",
                    'cultura_desc' => $sheetdata[$i][8]?: "null",
                    'n_cult_pre_oleo' => $sheetdata[$i][9]?: "null",
                    'n_cult_pre_agua' => $sheetdata[$i][10]?: "null",
                    'data_oleo' => $this->data($sheetdata[$i][11]),
                    'data_agua' => $this->data($sheetdata[$i][12]),
                    'depositante' => $sheetdata[$i][13]?: "null",
                    'historico' => $sheetdata[$i][14]?: "null",
                    'tipo_org' => $sheetdata[$i][15] ?: "null",
                    'substrato' => $sheetdata[$i][16] ?: "null",
                    'municipio' => $sheetdata[$i][17]?: "null",
                    'estado' => $sheetdata[$i][18]?: "null",
                    'pais' => $sheetdata[$i][19]?: "null",
                    'status' => $sheetdata[$i][20]?: "null",
                    'risco' => $sheetdata[$i][21] ?: "null",
                    'aplicacoes' => $sheetdata[$i][22] ?: "null",
                    'forma_envio' => $sheetdata[$i][23]?: "null",
                    'observacoes' => $sheetdata[$i][24]?: "null",
                    'restricoes' => 0
                ];

                $data_meio=array(
                    'meio_cultivo'=>$data['meio']
                );
                $verificaMeio = $meioModel->verificaExisteMeio($data_meio['meio_cultivo']);
                if ($verificaMeio) {
                    $meioModel->save($data_meio);
                }

                $data_especie = [
                    'nome_especie' => $data['especie'],
                    'status_tax_especie' => $data['status_tax'],
                    'tipos_org_especie' => $data['tipo_org'],
                    'aplicacoes_especie' => $data['aplicacoes'],
                    'procedencia_especie' => $data['procedencia'],
                    'substrato_especie' => $data['substrato'],
                    'riscos_especie' => $data['risco'],
                ];
                $verificaEspecie = $especieModel->verificaExisteEspecie($data_especie);
                if ($verificaEspecie) {
                    $especieModel->save($data_especie);
                }

                $data_cultura=array(
                    'n_dpua_cultura'=> $data['dpua']
                );
                $verificaCultura = $culturaModel->verificaExisteCultura($data_cultura['n_dpua_cultura']);
                if ($verificaCultura) {
                    // Get the ID of the meio
                    $idMeio = $meioModel->getIdMeio($data['meio'])[0]['id_meio_cultivo'];

                    // Get the ID of the especie
                    $idEspecie = $especieModel->getIdEspecie($data_especie)[0]['id_especie'];

                    // Update the data_cultura array
                    $data_cultura = [
                        'id_especie_cultura' => $idEspecie,
                        'id_meio_cultura' => $idMeio,
                        'n_dpua_cultura' => $data['dpua'],
                        'codigo_col_ext_cultura' => $data['col_ext'],
                        'autor_cultura' => $data['autor'],
                        'metodo_preservacao_cultura' => $data['metodo'],
                        'cultura_descartada_cultura' => $data['cultura_desc'],
                        'n_cul_preser_oleo_cultura' => $data['n_cult_pre_oleo'],
                        'n_cul_preser_agua_cultura' => $data['n_cult_pre_agua'],
                        'data_preser_oleo_cultura' => $this->data($data['data_oleo']),
                        'data_preser_agua_cultura' => $this->data($data['data_agua']),
                        'depositante_cultura' => $data['depositante'],
                        'historico_deposito_cultura' => $data['historico'],
                        'forma_envio_cultura' => $data['forma_envio'],
                        'restricao_cultura' => $data['restricoes'],
                        'status_cultura' => $data['status'],
                        'observacao_cultura' => $data['observacoes'],
                        'cidade_cultura' => $data['municipio'],
                        'estado_cultura' => $data['estado'],
                        'pais_cultura' => $data['pais']
                    ];

                    $culturaModel->save($data_cultura);
                }


            }
            return redirect()->route('dashboard');
        }
    }

    public function export_personalizado(){
        $planilha_object = new CulturaModel();

        $data  = $planilha_object->getDadosCultura();

        $nome_planilha = 'Coleção Personalizada.xlsx';

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'No DPUA');
        $sheet->setCellValue('B1', 'Espécie');
        $sheet->setCellValue('C1', 'Procedência');

        $count = 2;

        foreach($data as $row){
            $sheet->setCellValue('A' . $count, $row['n_dpua_cultura']);
			$sheet->setCellValue('B' . $count, $row['nome_especie']);
			$sheet->setCellValue('C' . $count, $row['procedencia_especie']);

			$count++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($nome_planilha);

        header("Content-Type: application/vnd.ms-excel");

		header('Content-Disposition: attachment; filename="' . basename($nome_planilha) . '"');

		header('Expires: 0');

		header('Cache-Control: must-revalidate');

		header('Pragma: public');

		header('Content-Length:' . filesize($nome_planilha));

		flush();

		readfile($nome_planilha);

		exit;
    }

    public function exportar_nao_ocultados(){
        $planilha_object = new CulturaModel();

        $data  = $planilha_object->getDadosCulturaNaoOcultada();

        $nome_planilha = 'Coleção Não Ocultada.xlsx';

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'No DPUA');
        $sheet->setCellValue('B1', 'No de coleção externa');
        $sheet->setCellValue('C1', 'Procedência');
        $sheet->setCellValue('D1', 'Espécie');
        $sheet->setCellValue('E1', 'Autor');

        $sheet->setCellValue('F1', 'Status Taxonômico');
        $sheet->setCellValue('G1', 'Meio Cultivo');
        $sheet->setCellValue('H1', 'Método Preservação');
        $sheet->setCellValue('I1', 'Cultura Descartada');

        $sheet->setCellValue('J1', 'No Cultura Preservada em óleo');
        $sheet->setCellValue('K1', 'No Cultura Preservada em água');
        $sheet->setCellValue('L1', 'Data preservação em óleo');
        $sheet->setCellValue('M1', 'Data preservação em água');

        $sheet->setCellValue('N1', 'Depositante');
        $sheet->setCellValue('O1', 'Histórico do depósito');
        $sheet->setCellValue('P1', 'Tipos de organismo');

        $sheet->setCellValue('Q1', 'Substrato');
        $sheet->setCellValue('R1', 'Município');
        $sheet->setCellValue('S1', 'Estado');
        $sheet->setCellValue('T1', 'País');
        $sheet->setCellValue('U1', 'Restrições');
        $sheet->setCellValue('V1', 'Risco biológico');
        $sheet->setCellValue('W1', 'Aplicações');
        $sheet->setCellValue('X1', 'Forma de envio');
        $sheet->setCellValue('Y1', 'Observações');


        $count = 2;

        foreach($data as $row){
            $sheet->setCellValue('A' . $count, $row['n_dpua_cultura']);
			$sheet->setCellValue('B' . $count, $row['codigo_col_ext_cultura']);
			$sheet->setCellValue('C' . $count, $row['procedencia_especie']);
			$sheet->setCellValue('D' . $count, $row['nome_especie']);
            $sheet->setCellValue('E' . $count, $row['autor_cultura']);

            $sheet->setCellValue('F' . $count, $row['status_tax_especie']);
			$sheet->setCellValue('G' . $count, $row['meio_cultivo']);
			$sheet->setCellValue('H' . $count, $row['metodo_preservacao_cultura']);
			$sheet->setCellValue('I' . $count, $row['cultura_descartada_cultura']);

            $sheet->setCellValue('J' . $count, $row['n_cul_preser_oleo_cultura']);
			$sheet->setCellValue('K' . $count, $row['n_cul_preser_agua_cultura']);
			$sheet->setCellValue('L' . $count, $row['data_preser_oleo_cultura']);
			$sheet->setCellValue('M' . $count, $row['data_preser_agua_cultura']);

            $sheet->setCellValue('N' . $count, $row['depositante_cultura']);
			$sheet->setCellValue('O' . $count, $row['historico_deposito_cultura']);
			$sheet->setCellValue('P' . $count, $row['tipos_org_especie']);

            $sheet->setCellValue('Q' . $count, $row['substrato_especie']);
			$sheet->setCellValue('R' . $count, $row['nome_cidades']);
			$sheet->setCellValue('S' . $count, $row['nome_estados']);
            $sheet->setCellValue('T' . $count, $row['nome_pt_pais']);
			$sheet->setCellValue('U' . $count, $row['restricao_cultura']);
			$sheet->setCellValue('V' . $count, $row['riscos_especie']);
            $sheet->setCellValue('W' . $count, $row['aplicacoes_especie']);
			$sheet->setCellValue('X' . $count, $row['forma_envio_cultura']);
            $sheet->setCellValue('Y' . $count, $row['observacao_cultura']);
			

			$count++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($nome_planilha);

        header("Content-Type: application/vnd.ms-excel");

		header('Content-Disposition: attachment; filename="' . basename($nome_planilha) . '"');

		header('Expires: 0');

		header('Cache-Control: must-revalidate');

		header('Pragma: public');

		header('Content-Length:' . filesize($nome_planilha));

		flush();

		readfile($nome_planilha);

		exit;
    }

    public function export_ocultados(){
        $planilha_object = new CulturaModel();

        $data  = $planilha_object->getDadosCulturaOcultada();

        $nome_planilha = 'Coleção Ocultada.xlsx';

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'No DPUA');
        $sheet->setCellValue('B1', 'No de coleção externa');
        $sheet->setCellValue('C1', 'Procedência');
        $sheet->setCellValue('D1', 'Espécie');
        $sheet->setCellValue('E1', 'Autor');

        $sheet->setCellValue('F1', 'Status Taxonômico');
        $sheet->setCellValue('G1', 'Meio Cultivo');
        $sheet->setCellValue('H1', 'Método Preservação');
        $sheet->setCellValue('I1', 'Cultura Descartada');

        $sheet->setCellValue('J1', 'No Cultura Preservada em óleo');
        $sheet->setCellValue('K1', 'No Cultura Preservada em água');
        $sheet->setCellValue('L1', 'Data preservação em óleo');
        $sheet->setCellValue('M1', 'Data preservação em água');

        $sheet->setCellValue('N1', 'Depositante');
        $sheet->setCellValue('O1', 'Histórico do depósito');
        $sheet->setCellValue('P1', 'Tipos de organismo');

        $sheet->setCellValue('Q1', 'Substrato');
        $sheet->setCellValue('R1', 'Município');
        $sheet->setCellValue('S1', 'Estado');
        $sheet->setCellValue('T1', 'País');
        $sheet->setCellValue('U1', 'Restrições');
        $sheet->setCellValue('V1', 'Risco biológico');
        $sheet->setCellValue('W1', 'Aplicações');
        $sheet->setCellValue('X1', 'Forma de envio');
        $sheet->setCellValue('Y1', 'Observações');


        $count = 2;

        foreach($data as $row){
            $sheet->setCellValue('A' . $count, $row['n_dpua_cultura']);
			$sheet->setCellValue('B' . $count, $row['codigo_col_ext_cultura']);
			$sheet->setCellValue('C' . $count, $row['procedencia_especie']);
			$sheet->setCellValue('D' . $count, $row['nome_especie']);
            $sheet->setCellValue('E' . $count, $row['autor_cultura']);

            $sheet->setCellValue('F' . $count, $row['status_tax_especie']);
			$sheet->setCellValue('G' . $count, $row['meio_cultivo']);
			$sheet->setCellValue('H' . $count, $row['metodo_preservacao_cultura']);
			$sheet->setCellValue('I' . $count, $row['cultura_descartada_cultura']);

            $sheet->setCellValue('J' . $count, $row['n_cul_preser_oleo_cultura']);
			$sheet->setCellValue('K' . $count, $row['n_cul_preser_agua_cultura']);
			$sheet->setCellValue('L' . $count, $row['data_preser_oleo_cultura']);
			$sheet->setCellValue('M' . $count, $row['data_preser_agua_cultura']);

            $sheet->setCellValue('N' . $count, $row['depositante_cultura']);
			$sheet->setCellValue('O' . $count, $row['historico_deposito_cultura']);
			$sheet->setCellValue('P' . $count, $row['tipos_org_especie']);

            $sheet->setCellValue('Q' . $count, $row['substrato_especie']);
			$sheet->setCellValue('R' . $count, $row['nome_cidades']);
			$sheet->setCellValue('S' . $count, $row['nome_estados']);
            $sheet->setCellValue('T' . $count, $row['nome_pt_pais']);
			$sheet->setCellValue('U' . $count, $row['restricao_cultura']);
			$sheet->setCellValue('V' . $count, $row['riscos_especie']);
            $sheet->setCellValue('W' . $count, $row['aplicacoes_especie']);
			$sheet->setCellValue('X' . $count, $row['forma_envio_cultura']);
            $sheet->setCellValue('Y' . $count, $row['observacao_cultura']);
			

			$count++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($nome_planilha);

        header("Content-Type: application/vnd.ms-excel");

		header('Content-Disposition: attachment; filename="' . basename($nome_planilha) . '"');

		header('Expires: 0');

		header('Cache-Control: must-revalidate');

		header('Pragma: public');

		header('Content-Length:' . filesize($nome_planilha));

		flush();

		readfile($nome_planilha);

		exit;
    }
}
