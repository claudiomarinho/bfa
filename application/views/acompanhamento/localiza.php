<style type="text/css">
    tr > td { height: 50px; text-align: center; }
</style>
<div ng-app="appPrincipal"  ng-controller="BfaCtrl">
    <section class="content-header">
        <h1><strong>Acompanhamento</strong>
            <small>Preencha as informações para localizar o beneficiário</small>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h4 class="box-title"><i class="fa fa-fw fa-search"></i> Localize o <strong>beneficiário para
                                acompanhar:</strong></h4>
                    </div>
                    <div class="box-body">
                        <div class="form-horizontal">
                            <label class="text-left-xs col-xs-12 col-md-4 control-label" for="NO_PESSOA"></label>
                            <div class="col-xs-12 col-md-6">
                                <h4 style="margin:0px; line-height: 0px; padding: 0px; "><input type="radio" name="TP_ACOMPANHAMENTO" value="1"  ng-model="stAcompanhamento"/> Pesquisar por <strong>beneficiário</strong></h4>
                            </div>
                            <label class="text-left-xs col-xs-12 col-md-4 control-label" for="NO_PESSOA"></label>
                            <div class="col-xs-12 col-md-6">
                                <h4><input type="radio" name="TP_ACOMPANHAMENTO" value="2" ng-model="stAcompanhamento"/> Pesquisar por <strong>mapa</strong></h4>
                            </div>
                        </div>
                        
                        <br/><br/><!--PESQUISA POR BENEFICIARIO-->
                        <div class="form-horizontal" ng-show="stAcompanhamento == '1'" ng-controller="IndividuoCtrl"
                             ng-init="init()" ng-cloak>
                            <br/><br/>
                            <form id="frmLocaliza" method="post" class="form-horizontal">

                                <div class="form-group">
                                    <label class="text-left-xs col-xs-12 col-md-4 control-label"
                                           for="NU_NIS">NIS:</label>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" name="NU_NIS" placeholder="Número Identificação Social"
                                               id="NU_NIS" class="form-control"
                                               ng-keyup="somenteNumeros(dadosBeneficiario.NU_NIS,'NU_NIS')"
                                               onkeyup="somenteNumeros(this)" ng-model="dadosBeneficiario.NU_NIS"
                                               maxlength="11">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-left-xs col-xs-12 col-md-4 control-label"
                                           for="NO_PESSOA">Nome:</label>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" name="NO_PESSOA"
                                               placeholder="Nome do indivíduo a ser localizado"
                                               ng-model="dadosBeneficiario.NO_PESSOA"
                                               id="NO_PESSOA" class="form-control" onkeyup="maiuscula(this)"
                                               maxlength="120">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-left-xs col-xs-12 col-md-4 control-label"
                                           for="DT_NASCIMENTO">Data de Nascimento:</label>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" name="DT_NASCIMENTO" data-mask="00/00/0000"
                                               data-mask-selectonfocus="true" ng-model="dadosBeneficiario.DT_NASCIMENTO"
                                               placeholder="DD/MM/YYYY" id="DT_NASCIMENTO" class="form-control"
                                               year="true" month="true" datepicker dtMin="01/01/1900"
                                               dtMax="<?php echo date('d/m/Y'); ?>"
                                               autocomplete="off" maxlength="10">
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <button type="submit" name="" class="btn btn-success btn-lg" ng-disabled="progress"
                                            ng-click="consultarBeneficiario()">
                                        Pesquisar
                                    </button>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12" ng-if="dtOptions != undefined && dtColumns.length > 0">
                                    <div class="box-header with-border">
                                        <h2><strong>Resultado da pesquisa:</strong></h2>
                                    </div>
                                    <!--TABELA DE INFORMAÇÕES-->
                                    <div class="box box-solid box-success">
                                        <div class="box-header with-border" style="text-align: right;">
                                            <strong>Legenda: </strong>&nbsp;&nbsp;&nbsp; <i class="fa fa-columns"></i> Ajustar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> Copiar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-print"></i> Imprimir &nbsp;&nbsp;&nbsp;<i class="fa fa-file-excel-o"></i> Exportar Excel &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-pencil-square-o"></i> Acompanhar &nbsp;&nbsp;&nbsp; <i
                                                class="fa fa-calendar"></i> Acompanhamento Familiar &nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="box-body">
                                            <table cellpadding="0" width="100%" datatable
                                                   dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                                   dt-columns="dtColumns" id="datatable"
                                                   class="row-border hover"></table>
<!--                                                   class="table table-striped table-responsive table-condensed table-hover"></table>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/><br/><!--PESQUISA POR MAPA-->
                        <div class="form-horizontal" ng-show="stAcompanhamento == '2'" ng-controller="AcompanhamentoMapaCtrl" ng-init="init()" ng-cloak>
                            <form id="frmLocaliza" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="text-left-xs col-xs-12 col-md-4 control-label"
                                           for="NU_NIS">Código do Mapa:</label>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" name="CO_SEQ_BFA_MAPA" placeholder="Código do mapa"
                                               ng-model="dadosMapa.CO_SEQ_BFA_MAPA"
                                               onkeyup="somenteNumeros(this)" id="CO_SEQ_BFA_MAPA" class="form-control" maxlength="12">
                                    </div>
                                </div>
                                <div style="text-align: center">
                                    <button type="submit" name="" class="btn btn-success btn-lg" ng-disabled="progress"
                                            ng-click="consultarMapa()">
                                        Pesquisar
                                    </button>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12" ng-if="dtOptions != undefined && dtColumns.length > 0">
                                    <div class="box-header with-border">
                                        <h2><strong>Resultado da pesquisa:</strong></h2>
                                    </div>
                                    <!--TABELA DE INFORMAÇÕES-->
                                    <div class="box box-solid box-success">
                                        <div class="box-header with-border" style="text-align: right;">
                                            <strong>Legenda: </strong>&nbsp;&nbsp;&nbsp; <i class="fa fa-columns"></i> Ajustar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> Copiar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-print"></i> Imprimir &nbsp;&nbsp;&nbsp;<i class="fa fa-file-excel-o"></i> Exportar Excel &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-external-link"></i> Acessar mapa &nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="box-body">
                                            <table cellpadding="0" width="100%" datatable
                                                   dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                                   dt-columns="dtColumns" id="datatable"
                                                   class="row-border hover"></table>
                                        </div>
                                    </div>
                                </div>
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
            </div>
        </div>
    </section>
</div>