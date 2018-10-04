<style type="text/css">
#backgroundWhite{background-color: #fff; padding:15px; margin:10px; overflow-x: scroll; -webkit-print-color-adjust: exact;}
table tr td {padding:5px; font-size: .9em; border: .4pt solid black; border-spacing: 0;}
table thead tr th {font-size: .8em; border: .4pt solid black; height: 220px!important; padding: 5px!important;}
.width_th {max-width: 55px!important;}
.width_th div{margin-top:95px!important; transform: rotate(-90deg); white-space: nowrap;}
.width_data{max-width: 60px!important;  padding: 10px!important;} 
.linhaFamilia {padding:0pt 10pt 10pt 10pt; font-size: .9em; border-top: 2px solid #000!important; background-color: #ebe9e9; font-weight: bold;height: 40pt; vertical-align: top; text-align: top;}
.eas{ border-right: .5pt solid black;}
.profissional{border-left: none;}
.text_center{text-align: center!important;}
.todos{border:.5pt solid black; height: 15.75pt; text-align: center;}
/*css impressão*/
@media print {
*{background: transparent!important;color:#000!important;}
@page {size: A4 landscape; margin:1.7rem;}
#backgroundWhite{overflow-x: hidden; overflow-y: hidden; margin: 0 auto; background: transparent!important;}
.linhaFamilia {padding:10pt; font-size: .10em; border-top: 1.5pt solid #000!important; background-color: #ebe9e9!important; font-weight: bold; height: 30pt;vertical-align: top;}
.eas{ border-right: .5pt solid black;}
.profissional{border-left: none;}
table thead tr th {padding:5px; font-size: .10em; border: .4pt solid black; border-spacing: 0; height: 160px!important;}
.width_th {max-width: 55px!important;}
.width_th div{margin-top:95px!important; transform: rotate(-90deg); white-space: nowrap;}
.width_data{max-width: 60px!important;  padding: 10px!important;} 
.alturaHeaderPessoa{margin: 0px!important; padding: 0px!important; height: 25px;}
table tr td { padding:5px;  border: .4pt solid black; border-spacing: 0; font-size: 8pt;}
table thead tr th {padding:2pt; font-size: 8pt;}
.text_center{text-align: center!important;}
.todos{border:.5pt solid black; height: 15.75pt; text-align: center;}
/*altura do topo da tabela*/
.topTable{margin-top: 2em!important;margin-left: -.08em!important;}
.print {display: none;}
}
</style>
<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
            </div>
            <div id="backgroundWhite">
                <button class="print btn btn-primary btn-small">GERAR MAPA</button>
                <button class="btn btn-success btn-small no-print">Orientações de preeenchimento</button>
                <table id="tabelao" cellspacing="2" cellpadding="6" width="100%" style="width: 100%!important; height: 0px; border-spacing: 0px; transform: rotate(0deg);">
                    <thead style="width: 100%; border-spacing: 0px; border-collapse: initial;">
                    <tr style="height: 67.5pt;">
                        <td style="height: 67.5pt; border: 0px!important;" colspan="6">
                            <strong> MAPA DE ACOMPANHAMENTO - SISTEMA BOLSA FAM&Iacute;LIA - BFA - 2&ordf; Vig&ecirc;ncia de 2018</strong><br />
                            <strong> Munic&iacute;pio:</strong> <?php echo $resMapa['CO_MUNICIPIO_IBGE']; ?> - <?php echo $resMapa['NO_MUNICIPIO']; ?>
                            <strong> Tipo de mapa:</strong> <?php echo $resTitulo; ?>
                        </td>
                        <td style="border: 0; text-align: right;" colspan="8">
                            <strong>CGAN/DAB/SAS/MS</strong><br />
                            <strong>C&oacute;digo do Mapa: </strong><?php echo $resMapa['CO_SEQ_BFA_MAPA']; ?> <strong>Gerado em: </strong><?php echo $resMapa['DT_CADASTRO']; ?>.
                        </td>
                    </tr>
                    <tr style="margin: 0px!important; padding: 0px!important; height: 25px;" class="alturaHeaderPessoa">
                        <td class="todos" colspan="7" ><strong>TODOS</strong></td>
                        <td class="text_center" colspan="3" ><strong>CRIAN&Ccedil;A</strong></td>
                        <td class="text_center" colspan="4"><strong>MULHER</strong></td>
                    </tr>
                    <tr>
                        <th width="10%" class="text_center">NIS<br />(N&uacute;mero de <br>Identifica&ccedil;&atilde;o Social)</th>
                        <th width="20%" class="text_center">Nome</th>
                        <th class="width_th width_data">
                            <div>
                                Data de nascimento
                            </div>
                        </th>
                        <th class="width_th width_data">
                            <div>
                                Data de acompanhamento (A)
                            </div>
                        </th>
                        <th class="width_th">
                            <div >
                                Ocorr&ecirc;ncia Identificada<br> - N&atilde;o acompanhamento
                            </div>
                        </th>
                        <th class="width_th">
                            <div>Peso em kg (B)</div>
                        </th>
                        <th class="width_th">
                            <div >Estatura em cm (B)</div>
                        </th>
                        <th class="width_th">
                            <div >Ocorr&ecirc;ncia identificada <br/>- N&atilde;o Informa&ccedil;&atilde;o Nutricional</div>
                        </th>
                        <th class="width_th">
                            <div >Vacina&ccedil;&atilde;o em dia? (B)</div>
                        </th>
                        <th class="width_th">
                            <div >Ocorr&ecirc;ncia identificada<br> - N&atilde;o Vacina&ccedil;&atilde;o</div>
                        </th>
                        <th class="width_th">
                            <div >Informa&ccedil;&atilde;o <br />Gestacional (C)</div>
                        </th>
                        <th class="width_th">
                            <div >Se gestante - <br>Realizou o Pr&eacute;-Natal? (D)</div>
                        </th>
                        <th class="width_th">
                            <div >Ocorr&ecirc;ncia identificada<br> - N&atilde;o Pr&eacute;-Natal</div>
                        </th>
                        <th class="width_th width_data">
                            <div >DUM (D)</div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($grupoFamilia as $familia) { ?>
                        <tr class="linhaFamilia">
                            <td>Código Familiar:<br>
                                <span><?php echo $familia['CO_FAMILIA']; ?></span>
                            </td>
                            <td colspan="5">Endereço:
                                <span><?php echo $familia['DS_ENDERECO']; ?></span>
                            </td>
                            <td class="eas" colspan="4">EAS:
                                <span><?php echo $familia['DS_EAS']; ?></span>
                            </td>
                            <td class="profissional" colspan="4">Profissional:
                                <span><?php echo $familia['DS_PROFISSIONAL']; ?></span>
                            </td>
                        </tr>
                        <?php foreach ($familia['PESSOAS'] as $pes) { ?>
                            <tr>
                                <td><?php echo $pes['NU_NIS']; ?></td>
                                <td><?php echo $pes['NO_PESSOA']; ?> <?php echo ($pes['ST_OBRIGATORIO'] === 'SIM') ? '(O)': ''; ?></td>
                                <td><?php echo $pes['DT_NASCIMENTO']; ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
