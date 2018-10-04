<section class="content-header">
    <h1>Sistema <strong>Bolsa Família - BFA</strong>
        <small>Resumo dos Acompanhamentos</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="IndicadoresCtrl" ng-init="init();">
    <!-- INICIO INDICADORES-->
    <div class="box box-solid box-primary">
        <div class="box-header with-border">Resumo dos <strong>Acompanhamentos </strong></div>
        <div class="box-body">
            <div class="col-md-12 col-xs-12">
                <div class="box-header with-border" style="text-align: center"></div>
                <div class="box-body">
                    <div id="obrigatorios"></div>
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
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/highcharts.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/exporting.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/drilldown.js"></script>
