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

    td.details-control {
        cursor: pointer;
        text-align: center;
    }

    .tg {
        border: none;
        width: 100%;
    }

    .tg td {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        padding: 6px;
        overflow: hidden;
        word-break: normal;
    }

    .tg .tg-yw4l {
        vertical-align: top
    }

    .nomefiltro {
        font-weight: bold;
        width: 12%
    }

    .filtro {
        width: 88%
    }

    input[type=checkbox] {
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
        line-height: 25px;
        padding: 0px 15px;
        text-align: center;
    }

    .commands_nav {
        background-color: #e0e0e0;
        border-bottom: 1px solid #999999;
        padding: 4px;
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
</style>
<section class="content-header">
    <h1> Vinculação de <strong>Famílias</strong>
        <small>Consulte as vinculações realizadas ou vincule famílias</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="VinculoFamiliaCtrl"
         ng-init="init('<?php echo $coMunicipioIbge; ?>')" ng-cloak>
    <div class="box-body" style="padding:0!important;">
        <div class="row">
            <form name="grupoBairros">
                <div class="col-md-12">
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border" style="text-align: left;">
                            <strong>GERENCIAR VINCULAÇÕES:</strong>
                            <!--         <button ng-click="clicaaqui()" class="btn btn-warning"><i class="fa fa-edit"></i></button> -->
                        </div>
                        <div class="box-body" style="text-align: left;">
                            <div class="box-header with-border"
                                 style="padding-top:0!important;text-align: left;">
                                <h4><strong>Filtros para pesquisa:</strong></h4>
                            </div>
                            <div class="box-body">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="bairro"><strong>BAIRRO* </strong></label>
                                        <select data-container="body" data-live-search="true"
                                                class="selectpicker bairro" name="filtroBairro"
                                                id="filtroBairro"
                                                ng-model="selectedBairro" data-width="100%" required
                                                ng-options="item_bairro.NO_BAIRRO as item_bairro.NO_BAIRRO for item_bairro in listarbairros track by item_bairro.NO_BAIRRO">
                                            <option value="">- SELECIONE -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="stFamilia"><strong>FAMÍLIAS SEM VÍNCULO?</strong></label>
                                        <input id="semvinculo" type="checkbox" ng-model="semvinculo"
                                               ng-change="checkchange()">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="eas"><strong>EAS</strong></label>
                                        <select data-container="body" data-live-search="true"
                                                class="selectpicker eas" name="filtroEas" id="filtroEas"
                                                ng-model="selectedEas" data-width="100%"
                                                ng-change="listarProfissionaisEasVisiveisFiltro(selectedEas)"
                                                ng-options="eas as eas.NO_EAS_VISIVEL for eas in listareasvisiveis track by eas.CO_SEQ_EAS_VISIVEL"
                                                ng-disabled="semvinculo" required>
                                            <option value="">- SELECIONE -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="profissional"><strong>PROFISSIONAL</strong></label>
                                        <select data-container="body" data-live-search="true"
                                                class="selectpicker profissional" name="filtroProfissional"
                                                id="filtroProfissional"
                                                ng-model="selectedProfissional" data-width="100%"
                                                ng-change="selecionaProfissionalFiltro(selectedProfissional)"
                                                ng-options="profissional as profissional.NO_PROFISSIONAL for profissional in listaprofissionaisfiltro track by profissional.CO_CNS"
                                                ng-disabled="semvinculo" required>
                                            <option value="">- SELECIONE -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="profissional"><strong>NIS</strong></label>
                                        <input name="NIS" class="form-control" placeholder="NIS"
                                               ng-model="nuNIS" name="filtroNis" id="filtroNis"
                                               type="text"
                                               ng-keyup="somenteNumeros(filtroNis,'filtroNis')"
                                               onkeyup="somenteNumeros(this)" ng-model="filtroNis"
                                               maxlength="11">
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        * Campos obrigatórios <br/>
                                        <button id="filtrar" name="filtrar" class="btn btn-primary"
                                                ng-click="reload()" ng-disabled="progress"
                                                style="width:15%;margin-right:10px;"
                                                ng-disabled="vinculacaoAct">Filtrar
                                        </button>
                                        <button id="limparfiltro" name="limparfiltro" class="btn btn-primary"
                                                ng-click="limparfiltro()" ng-disabled="progress" style="width:25%">Refazer pesquisa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="body">
            <div class="box-header with-border center-block">
                <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()"
                        ng-disabled="progress">
                    <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
                </button>
            </div>
        </div>
    </div>
</section>