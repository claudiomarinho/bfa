<style>
    .custom-class {
        width: 85%; /* either % (e.g. 60%) or px (400px) */
    }
</style>
<section class="content-header">
    <h1>Mapa de <strong>Acompanhamento</strong>
        <small>Escolha uma das opções abaixo</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="MapaAcompanhamentoCtrl" ng-init="init();">
    <form class="form-horizontal" name="formMapaAcomp" id="formMapaAcomp" method="post" action="<?php echo host_url(); ?>mapaacompanhamento/mapa">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">

                    <div class="box-header with-border">
                            <h4 class="box-title">
                                <i class="fa fa-fw fa-filter"></i>Filtros para geração dos<strong> mapas de acompanhamento</strong>
                            </h4>
                        <div class="col-md-6 pull-right">
                            <?php
                            if ($this->session->userdata['CO_GRUPO'] == 2 || $this->session->userdata['CO_GRUPO'] == 8) {
                            ?>
                            <!--AGUARDAR PROXIMA VIGÊNCIA-->
<!--                            <a href="--><?php //echo host_url(); ?><!--mapaacompanhamento/gerenciar"-->
<!--                               class="btn btn-primary btn-sm pull-right"><i class="fa fa-fw fa-edit"></i>-->
<!--                                Gerenciar<strong> mapas</strong></a>-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="box-body">
                        <!--SELECIONE O TIPO DE MAPA-->
                        <div class="col-md-12" >
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="1" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias por Bairro
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="2" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias por Estabelecimento de Atenção à Saúde
                                    </div>
                                    <div class="col-xs-12 box-header with-border ">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="3" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa por Unidade Familiar
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="4" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias com o campo Bairro em branco (acompanhamento não obrigatório)
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="5" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias não vinculadas ao EAS
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="6" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias com mulheres vindas no arquivo complementar (acompanhamento não obrigatório)
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="7" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias Quilombolas
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="8" ng-click="consultarPovosIndigenas()" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Mapa de Famílias Indígenas
                                    </div>
                                    <div class="col-xs-12 box-header with-border">
                                        <input type="radio" class="iradio_flat-green" name="TP_MAPA" id="TP_MAPA" value="9" ng-model="tpMapa"/>&nbsp;&nbsp;&nbsp;Código do Mapa
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MAPA TIPO 1 Mapa de Famílias por Bairrro
                            MAPA TIPO 5 Mapa de Famílias não vinculadas ao EAS-->
                        <div class="col-md-12" ng-show="tpMapa == 1 || tpMapa == 5">
                            <div class="box box-solid box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                         Mapa de <strong>Famílias por Bairrro</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Selecione um bairro: *</strong>
                                                    <select id="NO_BAIRRO" name="NO_BAIRRO" ng-model="NO_BAIRRO" ng-disabled="progress" class="form-control" ng-change="consultarListaLogradouros(NO_BAIRRO)" required="">
                                                        <option value="" selected>-SELECIONE-</option>
                                                        <option value="{{bairro.NO_BAIRRO}}" ng-repeat="bairro in bairros">{{bairro.NO_BAIRRO}}</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <br/>
                                                    <strong>Selecione o logradouro:</strong>
                                                    <select id="NO_LOGRADOURO" name="NO_LOGRADOURO" ng-disabled="progress" class="form-control">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="{{logradouro.NO_LOGRADOURO}}" ng-repeat="logradouro in logradouros">{{logradouro.NO_LOGRADOURO}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MAPA TIPO 2 Mapa de Famílias por Estabelecimento de Atenção à Saúde-->
                        <div class="col-md-12" ng-show="tpMapa == 2">
                            <div class="box box-solid box-success" >
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                         Mapa de <strong>Famílias por Estabelecimento de Atenção à Saúde</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Selecione um estabelecimento: *</strong>
                                                    <select name="CO_CNES_ATENDIMENTO" class="form-control" ng-disabled="progress" ng-model="CO_CNES_ATENDIMENTO" ng-change="consultarProfissionais(CO_CNES_ATENDIMENTO)" required="">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="{{eas.CO_CNES}}" ng-repeat="eas in easVisiveis">{{eas.NO_EAS_VISIVEL}}</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <br/>
                                                    <strong>Selecione o profissional:</strong>
                                                    <select name="CO_CNS_PROFISSIONAL" class="form-control" ng-disabled="progress" ng-model="CO_CNS_PROFISSIONAL">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="{{cns.CO_CNS}}" ng-repeat="cns in profissionais">{{cns.NO_PROFISSIONAL}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MAPA TIPO 3 Mapa por Unidade Familiar-->
                        <div class="col-md-12" ng-show="tpMapa == 3">
                            <div class="box box-solid box-success" >
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                         Mapa por <strong>Unidade Familiar</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Informe o NIS: *</strong>
                                                    <input type="text" name="NU_NIS" ng-disabled="progress" placeholder="Número Identificação Social"
                                                           id="NU_NIS" class="form-control" ng-keyup="somenteNumeros(NU_NIS,'NU_NIS')"
                                                           onkeyup="somenteNumeros(this)" ng-model="NU_NIS" maxlength="11" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MAPA TIPO 4 >Mapa de Famílias com o campo Bairro em branco (acompanhamento não obrigatório)-->
                        <div class="col-md-12" ng-show="tpMapa == 4">
                        </div>

                        <!--MAPA TIPO 6 Mapas de Famílias com mulheres vindas no arquivo complementar (acompanhamento não obrigatório)-->
                        <div class="col-md-12" ng-show="tpMapa == 6">
                        </div>

                        <!--MAPA TIPO 7 Mapa de Famílias Quilombolas-->
                        <div class="col-md-12" ng-show="tpMapa == 7">
                        </div>

                        <!--MAPA TIPO 8 Mapa de Famílias Indígenas-->
                        <div class="col-md-12" ng-show="tpMapa == 8">
                            <div class="box box-solid box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                         Mapa de <strong>Famílias Indígenas</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Selecione a Etnia: *</strong>
                                                    <select id="CO_ETNIA" name="CO_ETNIA"  class="form-control" required="" ng-disabled="progress">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="99">TODAS</option>
                                                        <option value="{{povos.NO_POVO_INDIGENA}}" ng-repeat="povos in povosIndigenas">{{povos.NO_POVO_INDIGENA}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MAPA TIPO 9 Mapa por Mapa Gerado-->
                        <div class="col-md-12" ng-show="tpMapa == 9">
                            <div class="box box-solid box-success" >
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        Mapa por <strong>Código</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Informe o código do mapa gerado anteriormente: *</strong>
                                                    <input type="text" name="CO_SEQ_BFA_MAPA" placeholder="Número do código do mapa"
                                                           id="CO_SEQ_BFA_MAPA" class="form-control" ng-keyup="somenteNumeros(CO_SEQ_BFA_MAPA,'CO_SEQ_BFA_MAPA')"
                                                           onkeyup="somenteNumeros(this)" ng-model="CO_SEQ_BFA_MAPA" required="">
                                                    <br/>
                                                </div>

                                                <div class="col-md-12">
                                                    <strong>Selecione o código do mapa gerado anteriormente: *</strong>
                                                    <select name="CO_SEQ_BFA_MAPA" class="form-control selectpicker" ng-disabled="progress" data-live-search="true" data-width="100%" data-size="10" ng-model="CO_SEQ_BFA_MAPA" required="">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="{{mapa.CO_SEQ_BFA_MAPA}}" ng-repeat="mapa in mapas">CÓDIGO: {{mapa.CO_SEQ_BFA_MAPA}} - GERADO EM: {{mapa.DT_CADASTRO}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Situação do acompanhamento do beneficiário-->
                        <div class="col-md-12" ng-show="(tpMapa != 3 && tpMapa != undefined) && (tpMapa != 9 && tpMapa != undefined)">
                            <div class="box box-solid box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                         Situação do <strong>acompanhamento</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <strong>Selecione a situação do acompanhamento: *</strong>
                                                    <select id="ST_ACOMPANHAMENTO" name="ST_ACOMPANHAMENTO" class="form-control" required="" ng-disabled="progress">
                                                        <option value="">-SELECIONE-</option>
                                                        <option value="1">INDIVÍDUOS A SEREM ACOMPANHADOS (SEM INFORMAÇÃO)</option>
                                                        <option value="2">INDIVÍDUOS NÃO ACOMPANHADOS (COM MOTIVO DE NÃO ACOMPANHAMENTO)</option>
                                                        <option value="99">TODOS OS INDIVÍDUOS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 with-border left" id="camposObrigatorios">
                            <strong>*</strong> Campos obrigatórios<br/><br/>
                            <strong class="text-yellow">Antes de gerar o mapa de acompanhamento, imprima abaixo as orientações de preenchimento:</strong>
                        </div>
                    </div>
                    <!--BOTAO GERAR-->
                    <div class="box-footer">
                        <div class="box-body">
                            <a style="margin-right: 10px!important;" href="<?php echo file_url()."orientacoes_preenchimento_mapa.pdf"; ?>" class="btn btn-warning btn-small pull-left" target="_blank"><i class="fa fa-fw fa-map"></i> Orientações para Preenchimento do Mapa de Acompanhamento</a>
<!--                            <a href="#" class="btn btn-info btn-small pull-left" target="_blank"></a>-->
                            <button type="button" class="btn btn-info btn-small" id="btn"><i class="fa fa-print"></i> Como Imprimir o Mapa de Acompanhamento?</button>
                            <button type="submit" id="gerarMapa" ng-disabled="progress" name="gerarMapa" class="btn btn-success btn-lg pull-right" style="margin-right: 8px!important;">
                                <i class="fa fa-fw fa-map-o"></i> Gerar XLS
                            </button>
                            <button type="submit" id="gerarMapa2" ng-disabled="progress" name="gerarMapa" class="btn btn-success btn-lg pull-right" style="margin-right: 8px!important;">
                                <i class="fa fa-fw fa-map-o"></i> Gerar HTML
                            </button>
                            <input type="hidden" name="tipoImpressao" id="tipoImpressao" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="body">
        <div class="box-header with-border center-block">
            <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-disabled="progress" ng-click="voltar()">
                <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog custom-class">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Orientações:</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="<?php echo base_url('public/img'); ?>/impressao.png"/>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="<?php echo base_url('public/js'); ?>/jqvalidate/jquery.validate.js"></script>
<script type="application/javascript" language="JavaScript">
    $(document).ready(function () {
        $('#gerarMapa').on('click',function(){
            $('#tipoImpressao').val('XLS');
        });
        $('#gerarMapa2').on('click',function(){
            $('#tipoImpressao').val('HTML');
        });
        $("#btn").click(function(){
            $("#myModal").modal();
        });

        // INICIO VERIFICA/VALIDA CAMPOS SELECIONADOS OU NÃO
        $("#formMapaAcomp").validate({
            rules: {
                TP_MAPA: "required",
                NU_NIS: {
                    number: true, minlength:11
                }
            },
            messages: {
                TP_MAPA: "Selecione o filtro",
                NU_NIS: "Por favor, preencha o campo com no mímino 11 caracteres"
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                $('#camposObrigatorios').hide();
                $('#gerarMapa').parent().hide();
                // $(".pre-loader").fadeIn("fast");
                bootbox.alert(`<span class="text-blue"><i class="fa fa-spin fa-refresh"></i> &nbsp;<strong>Por favor aguarde, o sistema está gerando o mapa em uma planilha... </strong><br /><small>Essa ação pode demorar alguns minutos. <br>Verifique se o download da planilha foi concluído e clique no botão OK!</small><br><small>A página será recarregada...</small> </span>`, function(){
                    window.location.reload();
                });
                form.submit();
            }
        });
    });
</script>