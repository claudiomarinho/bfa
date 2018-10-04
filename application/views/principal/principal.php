<style type="text/css">
    #datatable tr td {
        text-align: center;
    }
</style>
<div ng-app="appPrincipal">
    <section class="content-header">
        <h1>Sistema <strong>Bolsa Família - BFA</strong>
            <small>Escolha uma das opções abaixo.</small>
        </h1>
    </section>
    <section class="content">
    <?php
    if ($this->session->userdata['CO_GRUPO'] == 4 || $this->session->userdata['CO_GRUPO'] == 15) {
    ?>
        <div class="row">
            <div class="col-md-12" ng-controller="BfaCtrl"  ng-init="getMunicipios(<?php echo substr($this->session->userdata['CO_MUNICIPIO_IBGE'],0,2); ?>);">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border ">ACESSO ESTADUAL<strong>
                                - <?php if (isset($this->session->userdata['NO_MUNICIPIO_SELECIONADO'])) {
                                    echo 'Município: ' . $this->session->userdata['NO_MUNICIPIO_SELECIONADO'];
                                } else {
                                    echo 'Selecione o Município:';
                                } ?></strong></h2></div>
                    <div class="box-body">
                        <label class="text-right control-label" for="">Município:</label>
                        <select class="selectpicker " name="coMunicipioIbge" id="coMunicipioIbge"
                                ng-model="municipioIbge" ng-change="adicionarSessao(municipioIbge)"
                                ng-options="m.CO_MUNICIPIO_IBGE as m.NO_MUNICIPIO_ACENTUADO|uppercase for m in municipios track by m.CO_MUNICIPIO_IBGE"
                                data-container="body" data-live-search="true" data-size="10">
                            <option value="">-SELECIONE-</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($this->session->userdata['NO_MUNICIPIO_SELECIONADO'])) {
        ?>
            <!--INICIO INDICADORES-->
            <div class="box box-solid box-primary" ng-controller="IndicadoresCtrl" ng-init="init();">
                <div class="box-header with-border">
                    Resumo dos <strong>Acompanhamentos </strong>
                </div>
                <div class="box-body">
                    <div class="col-md-12 col-xs-12">
                        <div class="box-header with-border" style="text-align: center"></div>
                        <div class="box-body">
                            <div id="obrigatorios"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    <?php
    } else {
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-fw fa-check"></i>Acesso <strong>rápido</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="form-horizontal">
                            <?php
                            if ($this->session->userdata['CO_GRUPO'] == 8 || $this->session->userdata['CO_GRUPO'] == 2){
                            ?>
                                <a class="btn btn-lg" style="width: 150px;" href="<?php echo host_url(); ?>bairro">
                                    <!--<span class="badge bg-purple">891</span>-->
                                    <i class="fa fa-object-group" style="font-size: 40px"></i><br/>
                                    Agrupar <br/>bairros
                                </a>
                                <a class="btn btn-lg" style="width: 150px;" href="<?php echo host_url(); ?>eas" >
                                    <!--<span class="badge bg-purple">891</span>-->
                                    <i class="fa fa-hospital-o" style="font-size: 40px"></i>
                                    <br/> Gerenciar EAS<br/> do sistema
                                </a>
                                <a class="btn btn-lg" style="width: 150px;" href="<?php echo host_url(); ?>vinculo/familia">
                                    <!--<span class="badge bg-purple">891</span>-->
                                    <i class="fa fa-users" style="font-size: 40px"></i><br/>
                                    Vinculação de <br/> Famílias
                                </a>
                            <?php
                            }
                            ?>
                            <a class="btn btn-lg text-green" style="width: 150px;" href="<?php echo host_url(); ?>mapaacompanhamento">
                                <!--<span class="badge bg-purple">891</span>-->
                                <i class="fa fa-map-o" style="font-size: 40px"></i><br/>
                                Gerar mapas de <br/>acompanhamento
                            </a>
                            <a class="btn btn-lg text-green" style="width: 150px;" href="<?php echo host_url(); ?>acompanhamento">
                                <!--<span class="badge bg-purple">891</span>-->
                                <i class="fa fa-pencil-square-o" style="font-size: 40px"></i><br/>
                                Acompanhar<br/> beneficiários
                            </a>
                            <a class="btn btn-lg" style="width: 150px;" href="<?php echo host_url(); ?>relatorio">
                                <!--<span class="badge bg-purple">891</span>-->
                                <i class="fa fa-list-alt" style="font-size: 40px"></i><br/>
                                Relatórios<br/> gerenciais<br/>
                            </a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </section>
</div>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/highcharts.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/exporting.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/drilldown.js"></script>

<script src="<?php echo base_url('public/js'); ?>/plugins/bootstrap-notify-master/bootstrap-notify.min.js" type="text/javascript"></script>
<script>
    $.notify({
        // options
        icon: 'glyphicon glyphicon-warning-sign',
        title: 'ATENÇÃO! <br>',
        message: '<p><br>Devido a mudança de plataforma do sistema, nesta vigência (2ª vigência de 2018), antes de imprimir os mapas de acompanhamento:' +
        '<br>' +
        'TODOS OS MUNICÍPIOS: é necessário AGRUPAR BAIRROS e SELECIONAR AS EAS VISÍVEIS.' +
        '<br>' +
        'MUNICÍPIOS QUE UTILIZAM MAPA DE ACOMPANHAMENTO POR EAS: é necessário realizar a vinculação das famílias ao EAS.' +
        '<br>' +
        'O Manual de Cadastro de Gestores do Programa e Técnicos no Bolsa Família (BFA) no e-Gestor AB e o Passo a Passo de Como Inserir os dados de acompanhamento no Sistema BFA no e-Gestor AB estão na ABA DOCUMENTOS.</p>'
    },{
        // settings
        element: 'body',
        position: null,
        type: "danger",
        allow_dismiss: true,
        newest_on_top: false,
        showProgressbar: false,
        placement: {
            from: "bottom",
            align: "center"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 600000,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutDown'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: 'class',
        template: '<div data-notify="container" class="col-xs-10 col-sm-10 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '</div>'
    });
</script>