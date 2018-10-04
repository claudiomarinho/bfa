<style type="text/css">
    tr > td {
        height: 50px;
        text-align: center;
    }
</style>
<section class="content-header">
    <h1>Mapa de <strong>acompanhamento</strong>
        <small>Visualizar mapa de acompanhamento gerado</small>
    </h1>
</section>
<div ng-app="appPrincipal" ng-controller="MapaAcompanhamentoFamiliasCtrl" ng-init="init()" ng-cloak>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-fw fa-map-o"></i> Dados do
                            <strong><?php echo $filtros['TITULO']; ?></strong>
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <strong>CÓDIGO DO MAPA: </strong> <?php echo $coSeq; ?> <br/>
                            <strong>Tipo de acompanhamento: </strong><?php echo $filtros['SITUACAO']; ?><br/>
                            <strong>Gerado em: </strong> <?php echo $dtCadastro; ?> <br/>
                            <?php if (isset($filtros['NO_BAIRRO'])) {
                                echo '<strong>Bairro: </strong>' . $filtros['NO_BAIRRO'] . '<br/>';
                            } ?>
                            <?php if (isset($filtros['NO_LOGRADOURO'])) {
                                echo '<strong>Logradouro: </strong>' . $filtros['NO_LOGRADOURO'] . '<br/>';
                            } ?>
                            <?php if (isset($filtros['CO_CNES_ATENDIMENTO'])) {
                                echo '<strong>CNES: </strong>' . $filtros['CO_CNES_ATENDIMENTO'] . ' - ' . $filtros['NO_EAS_VISIVEL'] . '<br/>';
                            } ?>
                            <?php if (isset($filtros['CO_CNS_PROFISSIONAL'])) {
                                echo '<strong>PROFISSIONAL: </strong>' . $filtros['CO_CNS_PROFISSIONAL'] . ' - ' . $filtros['NO_PROFISSIONAL'] . '<br/>';
                            } ?>
                            <?php if (isset($filtros['CO_ETNIA'])) {
                                echo '<strong>Etnia: </strong>' . $filtros['CO_ETNIA'] . '<br/>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-fw fa-list"></i><strong> Indivíduos vinculados a este MAPA:</strong>
                        </h3>
                    </div>
                    <div class="box-body" ng-controller="BfaCtrl">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12" ng-if="dtOptions != undefined && dtColumns.length > 0">
                                    <div class="box-header with-border">
                                        <h2><strong>Resultado da pesquisa:</strong></h2>
                                    </div>

                                    <!--TABELA DE INFORMAÇÕES-->
                                    <div class="box box-solid box-success">
                                        <div class="box-header with-border" style="text-align: right;">
                                            <strong>Legenda: </strong>&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i> Ajustar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> Copiar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-print"></i> Imprimir &nbsp;&nbsp;&nbsp;<i class="fa fa-file-excel-o"></i> Exportar Excel &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-pencil-square-o"></i> Acompanhar &nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="box-body">
                                            <table datatable dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                                   dt-columns="dtColumns" id="datatable" dt-options="dtOptions"
                                                   dt-columns="dtColumns" class="row-border hover"></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="box-header with-border center-block">
                <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()">
                    <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
                </button>
            </div>
        </div>
    </section>
</div>