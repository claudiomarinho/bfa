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
    .tg td{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;padding:6px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
    .nomefiltro {font-weight:bold;width:35%;}
    .filtro {width: 70%}
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

    .bootstrap-select>.dropdown-toggle {
        width: 65%!important;
        padding-right: 25px;
        z-index: 1;
    }
</style>
<script type="text/javascript">
    $(window).load(function(){
        $('#vincularTodosModal').on('shown.bs.modal', function (e) {
            var profissional = '';
            if ($('#filtroProfissionalParaVincular option:selected').text() != '-SELECIONE-') {
                profissional = "<br/> <b>PROFISSIONAL:</b> " + $('#filtroProfissionalParaVincular option:selected').text();
            }
            bootbox.confirm({
                title: "Confirma vinculação de todas as famílias ao:",
                message: "<b>EAS:</b> " + $('#filtroEasParaVincular option:selected').text() + profissional,
                buttons: {
                    confirm: {
                        label: '<i class="fa fa-success"></i> Sim',
                        className: "btn-primary pull-left"
                    },
                    cancel: {
                        label: '<i class="fa fa-times"></i> Não',
                        className: "btn-default pull-right"
                    }
                },
                callback: function (result) {
                    if (result){
                        $('#vinculartodos').click();
                    } else {
                        $("#vincularTodosModal").modal('hide');
                    }
                }
            });

        })

        $('#desvincularTodosModal').on('shown.bs.modal', function (e) {
            bootbox.confirm({
                title: "Confirma desfazer vinculação de todas as famílias?",
                message: " ",
                buttons: {
                    confirm: {
                        label: '<i class="fa fa-success"></i> Sim',
                        className: "btn-primary pull-left"
                    },
                    cancel: {
                        label: '<i class="fa fa-times"></i> Não',
                        className: "btn-default pull-right"
                    }
                },
                callback: function (result) {
                    if (result){
                        $('#desvinculartodos').click();
                    } else {
                        $("#desvincularTodosModal").modal('hide');
                    }
                }
            });
        })

        var elementPosition = $('#header_nav').offset();
        var originalWidth;

        $(window).scroll(function () {
                if ($(window).scrollTop() > elementPosition.top) {
                    $('#header_nav').css('position', 'fixed').css('top', '0');
                    $('#header_nav').css('width', originalWidth);
                } else {
                    $('#header_nav').css('position', 'relative');
                    $('#header_nav').css('width', '100%')
                    originalWidth = $('#header_nav').css('width');
                }
        });

    });
</script>
<section class="content-header">
    <h1> Vinculação de <strong>Famílias</strong>
        <small>Consulte as vinculações realizadas ou vincule famílias</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="VinculoFamiliaCtrl" ng-init="init('<?php echo $coMunicipioIbge; ?>')" ng-cloak>

    <div class="col">
            <div class="box-body" style="padding:0!important;">
                <div class="form-horizontal">
                    <form name="grupoBairros" novalidate>
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="box box-primary">
                                    <div class="overlay" ng-if="progress">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                    <div class="box-header with-border" style="text-align: left;">
                                        <strong><i class="fa fa-fw fa-search"></i> Selecione os filtros para pesquisa:</strong>
                                        <!--         <button ng-click="clicaaqui()" class="btn btn-warning"><i class="fa fa-edit"></i></button> -->
                                    </div>
                                    <div class="box-body" style="text-align: left;">
                                        <small>* Campos obrigatórios</small>

                                        <div class="box-body">
                                            <table class="tg">
                                                <tr>
                                                    <td class="nomefiltro" style="text-align: right">Tipo de pesquisa: *</td>
                                                    <td class="filtro">
                                                        <input type="radio" value="1" ng-disabled="pesquisado" ng-model="tipoPesquisa" name="tipoPesquisa"> Bairro
                                                        <input type="radio" value="2" ng-disabled="pesquisado" ng-model="tipoPesquisa" name="tipoPesquisa"> NIS
                                                    </td>
                                                </tr>
                                                <tr ng-show="tipoPesquisa == '1'">
                                                    <td class="nomefiltro" style="text-align: right">Bairro: *</td>
                                                    <td class="filtro">
                                                        <select ng-disabled="progress" data-container="body" data-live-search="true" class="selectpicker bairro" name="filtroBairro" id="filtroBairro"
                                                                ng-model="selectedBairro" data-width="100%" required=""
                                                                ng-options="item_bairro.NO_BAIRRO as item_bairro.NO_BAIRRO for item_bairro in listarbairros track by item_bairro.NO_BAIRRO" size="70">
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr ng-show="tipoPesquisa == '1'">
                                                    <td class="nomefiltro" style="text-align: right">Famílias sem vínculo?</td>
                                                    <td class="filtro">
                                                        <input id="semvinculo" type="checkbox" ng-model="semvinculo" ng-change="checkchange()">
                                                    </td>
                                                </tr>

                                                <tr ng-show="tipoPesquisa == '1'">
                                                    <td class="nomefiltro"  style="text-align: right">EAS: </td>
                                                    <td class="filtro">
                                                        <select ng-disabled="progress"  data-container="body" data-live-search="true" class="selectpicker eas" name="filtroEas" id="filtroEas"
                                                                ng-model="selectedEas" data-width="100%" ng-change="listarProfissionaisEasVisiveisFiltro(selectedEas)"
                                                                ng-options="eas as eas.NO_EAS_VISIVEL for eas in listareasvisiveis track by eas.CO_SEQ_EAS_VISIVEL"
                                                                ng-disabled="semvinculo" required>
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr ng-show="tipoPesquisa == '1'">
                                                    <td class="nomefiltro"  style="text-align: right">Profissional: </td>
                                                    <td class="filtro">
                                                        <select ng-disabled="progress" data-container="body" data-live-search="true" class="selectpicker profissional" name="filtroProfissional" id="filtroProfissional"
                                                                ng-model="selectedProfissional" data-width="100%" ng-change="selecionaProfissionalFiltro(selectedProfissional)"
                                                                ng-options="profissional as profissional.NO_PROFISSIONAL for profissional in listaprofissionaisfiltro track by profissional.CO_CNS"
                                                                ng-disabled="semvinculo" required>
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr ng-show="tipoPesquisa == '2'">
                                                    <td class="nomefiltro"  style="text-align: right">Nis: *</td>
                                                    <td class="filtro">
                                                        <input name="NIS" ng-disabled="progress || pesquisado" class="form-control" placeholder="NIS" ng-model="nuNIS" name="filtroNis" id="filtroNis" type="text"  onkeyup="somenteNumeros(this)" ng-model="filtroNis" minlength="11" maxlength="11" style="width: 65%!important;">
                                                    </td>
                                                </tr>

                                            </table>
                                                <br><br>

                                              <div  ng-show="tipoPesquisa" style=" display: flex;  justify-content: center; ">

                                                  <button id="limparfiltro" ng-if="pesquisado" name="limparfiltro" class="btn btn-primary" ng-click="limparfiltro()" style="margin-right: 5px;" ng-disabled="progress">Refazer pesquisa</button>
                                                <button id="filtrar" ng-if="!pesquisado" name="filtrar" class="btn btn-lg btn-primary" ng-click="reload()"  ng-disabled="vinculacaoAct || progress">Pesquisar</button>


                                                </div>

                                        </div>

                                    </div>

                                    <div id="header_nav">
                                        <nav id="navfloat" ng-show="vinculacaoAct">
                                            <div class="alert alert-danger" id="alerteas" ng-show="alertSelectEas">
                                                <a class="close" onclick="$('.alert').hide()">×</a>
                                                <small><strong>Selecione um EAS para iniciar a vinculação e em seguida selecione um profissional.</strong></small>
                                            </div>
                                            <div class="alert alert-warning" id="alertprofissional" ng-show="alertSelectProfissional">
                                                <a class="close" onclick="$('.alert').hide()">×</a>
                                                <small><strong>Profissional não selecionado! A seleção de um profissional é importante para os indicadores do PMAQ/AB.</strong></small>
                                            </div>
                                            <table class="tg" style="margin-top:7px!important;">
                                                <tr>
                                                    <td class="nomefiltro" style="width:10vw">Vincular ao EAS: </td>
                                                    <td class="filtro" style="float:left;width:28vw">
                                                        <select data-container="body" data-live-search="true" class="selectpicker easparavincular" name="filtroEasParaVincular" id="filtroEasParaVincular"
                                                                ng-model="selectedEasParaVincular" data-width="100%" ng-change="listarProfissionaisEasVisiveisVincular(selectedEasParaVincular)"
                                                                ng-options="easparavincular as easparavincular.NO_EAS_VISIVEL for easparavincular in listareasvisiveis track by easparavincular.CO_SEQ_EAS_VISIVEL"
                                                                required>
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </td>
                                                    <td class="nomefiltro" style="width:10vw">Vincular ao Profissional: </td>
                                                    <td class="filtro" style="float:left;width:28vw">
                                                        <select data-container="body" data-live-search="true" class="selectpicker profissionalparavincular" name="filtroProfissionalParaVincular" id="filtroProfissionalParaVincular"
                                                                ng-model="selectedProfissionalParaVincular" data-width="100%" ng-change="selecionaProfissionalVincular(selectedProfissionalParaVincular)"
                                                                ng-options="profissionalparavincular as profissionalparavincular.NO_PROFISSIONAL for profissionalparavincular in listaprofissionaisvincular track by profissionalparavincular.CO_CNS"
                                                                required>
                                                            <option value="">Selecione</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </nav>
                                        <div class="commands_nav">
                                            <input type="button" name="vinculartodos" class="btn btn-primary btn-xs" ng-click="vincularTodosFamilia()" ng-disabled="alertSelectEas || progress" value="Vincular todos">
                                            <input type="button" ng-disabled="progress || todasFamilias.length == 0"  name="desvinculartodos" class="btn btn-primary btn-xs" ng-click="vincularTodosFamilia(false)" value="Desfazer vinculação de todos" style="">
<!--                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#vincularTodosModal" ng-disabled="alertSelectEas">Vincular todos</button>-->
<!--                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#desvincularTodosModal" ng-disabled="alertSelectEas">Desfazer vinculação de todos</button>-->
                                        </div>

                                    </div>
                                    <br/>
                                    <div ng-if="dtOptions != undefined && dtColumns.length > 0">
                                        <div style="position:relative;margin-left:20px;margin-top:45px;margin-bottom:-45px;">
                                            <strong>Vinculações feitas nesta lista: {{numvinculacao}}</strong>
                                        </div>
                                        <div class="box-body" style="text-align: left;">
                                            <table datatable dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                               dt-columns="dtColumns" id="datatable" class="cell-border compact stripe order-column"></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <div class="body">
            <div class="box-header with-border center-block">
                <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()" ng-disabled="progress">
                    <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
                </button>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="tooltip"]').attr('data-original-title', '');
    });
</script>

