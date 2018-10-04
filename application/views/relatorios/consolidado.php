<style type="text/css">
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 0px !important; /* e.g. change 8x to 4px here */
    }

    table.dataTable tbody td {
        padding: 6px !important; /* e.g. change 8x to 4px here */
    }

    .selected {
        background-color: #B0BED9 !important;
    }

    .centered {
        text-align: center;
    }

    td.details-control { cursor: pointer; text-align: center;}

    .tg  {border: none;width:100%;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:6px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
    .nomefiltro {font-weight:bold;width:20%}
    .filtro {width: 80%}
    input[type=checkbox]
    {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.4); /* IE */
        -moz-transform: scale(1.4); /* FF */
        -webkit-transform: scale(1.4); /* Safari and Chrome */
        -o-transform: scale(1.4); /* Opera */
        margin-left: 3px;
    }


    #header_nav {
        width: 100%;
        background-color: #e0e0e0;
        height: 60px;
        z-index: 1;
        border-top: 1px solid #c0c0c0;
        margin-bottom: 10px;
    }

    .fixed {
        top: 0px;
        position: fixed;
    }
    /*--------------------NAVIGATION--------------------*/
    #navfloat {
        background-color: #e0e0e0;
        width: 100%;
        height: auto;
        text-align: center;
        overflow: hidden;
        margin: auto;
    }
    .hiddencol {
        display: none;
    }
    .alert {
        margin-top: 5px;
        margin-bottom: 1px;
        height: 30px;
        line-height:25px;
        padding:0px 15px;
        text-align: center;
    }
    /*.content_wrapper {
        width: 1024px;
        background-color: #333333;
        padding: 10px;
        margin: 0 auto;
        color: white;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 75%;
    }*/
    .commands_nav {
        background-color: #e0e0e0;
        border-bottom: 1px solid #999999;
        padding:4px;
    }

    .modal {
        text-align: center;
    }

    @media screen and (min-width: 768px) {
        .modal:before {
            display: inline-block;
            vertical-align: middle;
            content: " ";
            height: 100%;
        }
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    progress[value] {
        /* Reset the default appearance */
        -webkit-appearance: none;
        appearance: none;

        width: 100%;
        height: 30px;
    }

    .dataTable th {
        word-wrap: break-word;
    }
    td,th {
        border: 1px solid #000;
    }
    th.wider {
        /*width: 120px !important;*/
    }
    th.rotate {
        height: 140px;
        padding: 0px;
        font-weight: normal;
    }
    th.rotate > div {
        height: 200px;
        writing-mode: vertical-rl;
        transform: rotate(-180deg);
        font-size:0.8em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate2 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate2 > div {
        width: 100px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate3 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate3 > div {
        width: 30px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate4 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate4 > div {
        width: 50px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }



</style>

<script type="text/javascript">
    $(window).load(function() {
            $("#filtroRegiao").change(function () {
                $('#filtroEstado').selectpicker('refresh');
                $('#filtroEstado').selectpicker('render');
            });
            $("#filtroEstado").change(function () {
                $('#filtroMunicipio').selectpicker('refresh');
                $('#filtroMunicipio').selectpicker('render');
            });
        });
</script>

<section class="content-header">
    <h1> Relatório Consolidado
    </h1>
</section>
<br/>

<section class="content" ng-app="appPrincipal" ng-controller="RelatorioConsolidadoCtrl" ng-init="init('530010')" ng-cloak>

    <div class="col">

        <div class="box-body" style="padding:0!important;">

            <div class="form-horizontal">
                <form name="formRelatorios" ng-submit="gerarRelatorio()" validate>


                    <div id="divFiltrosConsolidados" class="row">
                        <div class="col-sm-12" >
                            <div class="box box-solid box-primary">
                                <div class="box-header with-border" style="text-align: left;">
                                    <strong>RELATÓRIOS CONSOLIDADOS DE COBERTURA DAS CONDICIONALIDADES:</strong>
                                    <!--         <button ng-click="clicaaqui()" class="btn btn-warning"><i class="fa fa-edit"></i></button> -->
                                </div>
                                <div class="box-body" style="text-align: left;">
                                    <div class="box-header with-border" style="padding-top:0!important;text-align: left;">
                                        <strong>Filtros comuns:</strong>
                                    </div>
                                    <div class="box-body">

                                        <table class="tg">

                                            <div class="form-horizontal">
                                                <label for="filtroVigencia"><strong>Vigência:</strong></label>
                                                <select data-container="body" data-live-search="true" class="selectpicker"
                                                        data-width="100%" ng-model="selectedVigencia" name="filtroVigencia" id="filtroVigencia" required>
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="22018">2ª vigência de 2018</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroPublicoVisualizar"><strong>Público para visualização:</strong></label>
                                                <select data-container="body" data-live-search="true" class="selectpicker"
                                                        data-width="100%" name="filtroPublicoVisualizar" id="filtroPublicoVisualizar" required>
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="geral">Geral</option>
                                                    <option value="indigenas">Indígenas</option>
                                                    <option value="quilombolas">Quilombolas</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroRegiao"><strong>Selecione uma Região:</strong></label>
                                                <select data-container="body" class="selectpicker" name="filtroRegiao" id="filtroRegiao"
                                                        ng-model="selectedRegiao" title=" " data-width="100%" ng-change="carregaEstados(selectedRegiao)"
                                                        ng-options="item_regiao.CO_REGIAO as item_regiao.NO_REGIAO for item_regiao in listarregiao track by item_regiao.CO_REGIAO"
                                                        >
                                                    <option value="">TODAS AS REGIÕES</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroEstado"><strong>Selecione um estado:</strong></label>
                                                <select data-container="body" class="selectpicker" name="filtroEstado" id="filtroEstado"
                                                        ng-model="selectedEstado" title=" " data-width="100%" ng-change="carregaMunicipios(selectedEstado)"
                                                        ng-options="item_estado as item_estado.NO_UF for item_estado in listarestado | orderBy:'NO_UF' track by item_estado.CO_UF_IBGE"
                                                        ng-disabled="todasRegioes">
                                                    <option value="">TODOS OS ESTADOS</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroMunicipio"><strong>Selecione um município:</strong></label>
                                                <select data-container="body" class="selectpicker" name="filtroMunicipio" id="filtroMunicipio"
                                                        ng-model="selectedMunicipio" title=" " data-width="100%"
                                                        ng-options="item_municipio as item_municipio.NO_MUNICIPIO for item_municipio in listarmunicipios track by item_municipio.CO_MUNICIPIO_IBGE"
                                                        ng-disabled="todosEstados">
                                                    <option value="">TODOS OS MUNICÍPIOS</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroEas"><strong>Selecione um EAS:</strong></label>
                                                <select data-container="body" data-live-search="true" class="selectpicker eas" name="filtroEas" id="filtroEas"
                                                        ng-model="selectedEas" data-width="100%" ng-change="listarProfissionaisEasVisiveisFiltro(selectedEas)"
                                                        ng-options="eas as eas.NO_EAS_VISIVEL for eas in listareasvisiveis track by eas.CO_SEQ_EAS_VISIVEL"
                                                        disabled>
                                                    <option value="">-SELECIONE-</option>
                                                </select>
                                            </div>

                                            <br/>

                                            <div class="form-horizontal">
                                                <label for="filtroDsei"><strong>Selecione um DSEI:</strong></label>
                                                <select name="filtroDsei" id="filtroDsei" class="form-control" ng-disabled="progress"
                                                        ng-model="CO_DSEI">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="{{dsei.CO_DSEI}}" ng-repeat="dsei in listaDsei | orderBy:'CO_DSEI' track by dsei.CO_DSEI">
                                                        {{dsei.NO_PESSOA_JURIDICA}}
                                                    </option>
                                                </select>
                                            </div>

                                            <br/>

                                       <!--     <div class="form-horizontal">
                                                <label for="filtroBairro"><strong>Selecione um Bairro:</strong></label>
                                                    <select data-container="body" data-live-search="true" class="selectpicker bairro" name="filtroBairro" id="filtroBairro"
                                                            ng-model="selectedBairro" title=" " data-width="100%"
                                                            ng-options="item_bairro.NO_AREA_BAIRRO as item_bairro.NO_AREA_BAIRRO for item_bairro in listarbairros track by item_bairro.NO_AREA_BAIRRO"
                                                            >
                                                        <option value="">-SELECIONE-</option>
                                                    </select>
                                            </div> -->


                                        </table>

                                    </div>

                                    <div class="box-header with-border" style="padding-top:0!important;text-align: left;">
                                        <strong>Filtros específicos:</strong>
                                    </div>
                                    <div class="box-body">

                                        <label>
                                            <input type="radio" ng-model="filtroEspecificoConsolidado" name="tpFiltroEspecifico"
                                                   value="consolidadomotdescumprimento" required>
                                            Consolidado de motivo de descumprimento e não acompanhamento
                                        </label><br/>
                                        <label>
                                            <input type="radio" ng-model="filtroEspecificoConsolidado" name="tpFiltroEspecifico"
                                                   value="consolidadoinformacoesesus">
                                            Consolidado de informações importadas  do e-SUS AB
                                        </label><br/>
                                        <label>
                                            <input type="radio" ng-model="filtroEspecificoConsolidado" name="tpFiltroEspecifico"
                                                   value="consolidadoinformacoesgestantes">
                                            Consolidado de informações de gestantes do SISPRENATAL
                                        </label><br/>
                                        <label>
                                            <input type="radio" ng-model="filtroEspecificoConsolidado" name="tpFiltroEspecifico"
                                                   value="consolidadocondicionalidadesdesaude">
                                            Consolidado de cobertura das condicionalidades de saúde
                                        </label><br/>

                                        <!-- <label>
                                            <input type="radio" ng-model="filtroEspecificoConsolidado" id="filtroEspecificoConsolidado" name="tpFiltroEspecifico"
                                                   value="consolidadocoberturaquilombola">
                                            Relatório personalizado
                                        </label>
                                        <input type="button" id="montarRelatorio" name="montarRelatorio" class="btn btn-sm" style="width:auto" data-toggle="modal" data-target="#personalizarRelatorioModal" style="width:25%" value="Montar">
                                        -->
                                        <br/><br/>


                                        <button type="submit" class="btn btn-primary"
                                                style="width:15%;margin-right:10px;">Gerar
                                        </button>

                                        <button id="limparfiltro" name="limparfiltro" class="btn btn-primary" ng-click="limparfiltro()" style="width:25%">Limpar filtros</button>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div id="datatableDiv" class="row">
                        <div class="col-sm-12" >
                            <div class="box box-solid box-primary" style="text-align: left;">
                                <div class="box-header with-border" style="text-align: left;">
                                    <strong>RELATÓRIO:</strong>
                                </div>


                                <table datatable dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                       dt-columns="dtColumns" id="datatable" class="cell-border compact stripe order-column display"></table>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="box-header with-border center-block">
                            <button id="voltar" name="voltar" class="btn btn-primary btn-sm" onClick="window.location='<?php echo host_url(); ?>relatorio'">
                                <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
                            </button>
                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>

    <div id="personalizarRelatorioModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Relatório Personalizado</h4>Escolha as colunas:
                </div>
                <div class="modal-body">

                    <span id="personalizarFiltros"></span>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>


</section>

