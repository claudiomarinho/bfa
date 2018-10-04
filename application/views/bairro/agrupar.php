<?php
/**
 * Created by PhpStorm.
 * User: dimas.filho
 * Date: 11/06/2018
 * Time: 16:39
 */
?>
<style>
    tr > td { height: 80px; text-align: center; }
    .multiselect-parent {
        width: 100%;
        cursor: pointer!important;
    }

    .multiselect-parent .dropdown-toggle {
        width: 100%;
    }

    .multiselect-parent .dropdown-menu {
        width: 100%;
    }
    /* make hover background same as the normal background for disabled */
    .dropdown-menu li > a[disabled].option:hover {
        background-color: white;
        background-image: none;
    }

    /* make option text light grey for disabled */
    .dropdown-menu a[disabled].option {
        color: #ccc;
        text-decoration:line-through;
    }
</style>
<div ng-app="appPrincipal" ng-controller="BairroCtrl" ng-init="init('<?php echo $coMunicipioIbge; ?>')" ng-cloak>
    <section class="content-header">
        <h1>Agrupar <strong>bairros</strong>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="overlay" ng-if="progress">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong><i class="fa fa-object-group"></i> Defina um nome para o grupo de bairros e selecione os bairros a serem agrupados:</strong>
                        </h3>
                    </div>
                    <form name="grupoBairros" ng-submit="agrupar()" novalidate>
                        <div class="box-body">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="novoBairro"><strong>Defina um nome para os Grupos de Bairros </strong></label>
                                    <ui-select required name="novoBairro" id="novoBairro" on-select="selecionando($item)"
                                               tagging="tagTransform" ng-model="selecionados.novo" theme="bootstrap"
                                               style="width: 100%; text-transform: uppercase">
                                        <ui-select-match allow-clear="{{!!allowClear}}"
                                                         placeholder="Digite um novo nome ou selecione para agrupar os bairros">
                                            {{$select.selected.NO_AREA_BAIRRO | uppercase}}
                                        </ui-select-match>

                                        <ui-select-choices repeat="b in bairrosVinculados | filter:$select.search | uppercase" >
                                            <div ng-if="b.isTag"
                                                 ng-bind-html="b.NO_AREA_BAIRRO +' <small>(NOVO GRUPO)</small>'| highlight: $select.search"></div>
                                            <div ng-if="!b.isTag"
                                                 ng-bind-html="b.NO_AREA_BAIRRO | highlight: $select.search"></div>
                                        </ui-select-choices>
                                    </ui-select>
                                    <!--                            <input type="text" class="form-control input-lg" id="novoBairro" maxlength="60" placeholder="Novo nome para os bairros selecionados">-->
                                </div>
                                <div class="form-group" ng-show="showBairros">
                                    <label for="bairros"><strong>Selecione os bairros a serem agrupados ({{selecionados.bairros.length}} selecionados) </strong></label>
                                    <small class="text-sm">(Multipla escolha)</small>
                                    <strong ng-if="selecionados.bairros.length > 0" class="text-blue"><br/>Bairros Selecionados: </strong><small ng-repeat="b in selecionados.bairros" class="text-blue">{{b.NO_BAIRRO}}
                                        <span ng-if="selecionados.bairros.length-1 !== $index">, </span>
                                    </small>
                                    <div ng-dropdown-multiselect="" class="multiselect-parent" name="bairrosAgrupados" translation-texts="translateOptions" options="bairros" selected-model="selecionados.bairros" extra-settings="multiselectOptions" events="customEvents" ></div>
                                </div>
                            </div>
                            <div class="col-md-3" style="display: flex; align-items: center; height: 100%; margin-top: 2vh;">
                                <button type="submit" class="btn btn-primary center-block btn-lg" ng-disabled="progress"><i class='fa fa-object-group'></i> Agrupar </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" ng-if="dtOptions != undefined && dtColumns.length > 0">
                <div class="box-header with-border">
                    <h2><strong>Lista de grupo de bairros:</strong></h2>
                </div>
                <!--TABELA DE INFORMAÇÕES-->
                <div class="box box-solid box-primary">
                    <div class="box-header with-border" style="text-align: right;">
                        <strong>Legenda: </strong>&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i> Ajustar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> Copiar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-print"></i> Imprimir &nbsp;&nbsp;&nbsp;<i class="fa fa-file-excel-o"></i> Exportar Excel &nbsp;&nbsp;&nbsp;<i class="fa fa-times"></i> Excluir
                    </div>
                    <div class="box-body">
                        <table cellpadding="0" width="100%" datatable dt-instance="dtInstanceCallback"
                               dt-options="dtOptions" dt-columns="dtColumns" id="datatable"
                               class="table table-striped table-responsive table-condensed table-hover"></table>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="box-header with-border center-block">
                <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()" ng-disabled="progress">
                    <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
                </button>
            </div>
        </div>
    </section>
</div>
