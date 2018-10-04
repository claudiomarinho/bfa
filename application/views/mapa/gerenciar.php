<style type="text/css">
    tr > td { height: 50px; text-align: center; }
</style>
<section class="content-header">
    <h1>Mapa de <strong>Acompanhamento</strong>
        <small>Gerenciar</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="MapaAcompanhamentoGerenciarCtrl" ng-init="init();">
    <form class="form-horizontal" name="formMapaAcomp" id="formMapaAcomp" method="post" action="<?php echo host_url(); ?>mapaacompanhamento/mapa">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <i class="fa fa-fw fa-edit"></i>Lista dos<strong> mapas de acompanhamento</strong>
                        </h4>
                    </div>
                    <div class="box-body">                        
                        <div class="row">
                            <div class="col-md-12" ng-if="dtOptions != undefined && dtColumns.length > 0">
                                <!--TABELA DE INFORMAÇÕES-->
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border" style="text-align: right;">
                                        <strong>Legenda: </strong>&nbsp;&nbsp;&nbsp; <i class="fa fa-columns"></i> Ajustar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> Copiar Colunas &nbsp;&nbsp;&nbsp;<i class="fa fa-print"></i> Imprimir &nbsp;&nbsp;&nbsp;<i class="fa fa-file-excel-o"></i> Exportar Excel &nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-download"></i> Gerar mapa &nbsp;&nbsp;&nbsp;<i class="fa fa-times"></i> Excluir mapa &nbsp;&nbsp;&nbsp;
                                    </div>
                                    <div class="box-body">
                                        <table cellpadding="0" width="100%" datatable dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                               dt-columns="dtColumns" id="datatable"
                                               class="row-border hover"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
    <div class="body">
        <div class="box-header with-border center-block">
            <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()" ng-disabled="progress">
                <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
            </button>
        </div>
    </div>
</section>
