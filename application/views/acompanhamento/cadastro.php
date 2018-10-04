<style>
    #ui-datepicker-div {
        width: 33vw !important;
    }
    input[type=checkbox] {
        zoom: 1.3;
        vertical-align: bottom;
    }
</style>
<div ng-app="appPrincipal" ng-controller="AcompanhamentoCtrl"
     ng-init="init(<?php echo $individuo['CO_BFA_FAMILIA']; ?>,<?php echo $individuo["CO_SEQ_BFA_PESSOA"]; ?>,<?php echo $individuo["CO_MAPA"]; ?>);"
     ng-cloak>
    <section class="content-header">
        <h1>Acompanhamento do <strong>beneficiário</strong>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <form class="form-horizontal" name="formAcomp2">

                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><strong><i class="fa fa-fw fa-search"></i> Dados do
                                    beneficiário:</strong>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-horizontal">
                                <label class="col-md-12 text-left"><strong>NIS: </strong><?php echo $individuo['NU_NIS_PESSOA']; ?>
                                </label><br/>
                                <label class="col-md-12 text-left"><strong>Nome: </strong><?php echo $individuo['NO_PESSOA']; ?>
                                </label><br/>
                                <label class="col-md-12 text-left"><strong>Data de
                                        Nascimento: </strong><?php echo $individuo['DT_NASCIMENTO']; ?> &nbsp;&nbsp;&nbsp;<strong>Idade: </strong><?php echo $idade['NU_IDADE_ANO']; ?>
                                    anos e <?php echo $idade['NU_IDADE_MES']; ?> meses</label><br/>
                                <label class="col-md-12 text-left"><strong>Sexo: </strong><?php echo $individuo['DS_SEXO']; ?>
                                </label><br/>
                                <label class="col-md-12 text-left"><strong>Endereço: </strong><?php echo $individuo['DS_ENDERECO'];?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-solid box-success" style="height: 200px">
                        <div class="box-header with-border">
                            <h3 class="box-title"><strong><i class="fa fa-fw fa-search"></i> DATA DO
                                    ACOMPANHAMENTO:</strong></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="DT_ACOMPANHAMENTO"> <strong>Informe a data do
                                                    acompanhamento:</strong> *</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="DT_ACOMPANHAMENTO" readonly datepicker
                                                   dtMin="01/07/2018" dtMax="<?php echo date('d/m/Y'); ?>"
                                                   ng-model="formAcomp.DT_ACOMPANHAMENTO" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                   ng-change="consultarIdadeDias(formAcomp.DT_ACOMPANHAMENTO, formAcomp.CO_SEQ_BFA_PESSOA)"
                                                   placeholder="DD/MM/AAAA" class="form-control" required=""
                                                   >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-default">
                        <div class="box-header with-border" ng-show="formAcomp.ST_ACOMPANHADO == 'N' || formAcomp.ST_ACOMPANHADO == undefined">
                            <h3 class="box-title text-green"><strong><i class="fa fa-fw fa-pencil-square-o"></i>
                                    Informações do acompanhamento</strong>
                            </h3>
                        </div>
                        <div class="box-body" ng-show="formAcomp.ST_ACOMPANHADO == 'N' || formAcomp.ST_ACOMPANHADO == undefined">
                            <div class="form-horizontal">
                                <label class=" control-label left" for="ST_ACOMPANHADO"><strong>Beneficiário
                                        acompanhado? *</strong></label><br>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="ST_ACOMPANHADO" class="form-control" ng-disabled="progress || formAcomp.ST_ACOMPANHADO == 'S'"
                                                ng-model="formAcomp.ST_ACOMPANHADO" required="">
                                            <option value="">-SELECIONE-</option>
                                            <option value="S">SIM</option>
                                            <option value="N" ng-show="formAcomp.ST_ACOMPANHADO == 'N' || formAcomp.ST_ACOMPANHADO == undefined">NÃO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--SE BENEFICIÁRIO NÃO É ACOMPANHADO-->
                            <div class="form-horizontal" ng-show="formAcomp.ST_ACOMPANHADO == 'N'">
                                <label class=" control-label left" for="CO_MOTIVO"><strong>Motivo / Ocorrência:
                                        *</strong></label><br>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="CO_MOTIVO" class="form-control" ng-disabled="progress"
                                                ng-model="formAcomp.CO_BFA_MOTIVO_NAO_ACOMP">
                                            <option value="">-SELECIONE-</option>
                                            <option value="{{motivo.CO_BFA_MOTIVO_NAO_ACOMP}}" ng-disabled="progress"
                                                    ng-repeat="motivo in motivosNaoAcomp">{{motivo.CO_BFA_MOTIVO_NAO_ACOMP}} - {{motivo.DS_MOTIVO}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--SE BENEFICIÁRIO FOI ACOMPANHADO-->
                        <div ng-show="formAcomp.ST_ACOMPANHADO == 'S'">
                            <!--Dados do Estabelecimento e Profissional #########################################################################################################################################################################################-->
                            <div class="box-header with-border" ng-show="formAcomp.MOSTRA_EAS == 'S'">
                                <h3 class="box-title text-green"><i class="fa fa-fw fa-hospital-o"></i><strong> Dados do
                                        Estabelecimento e Profissional</strong>
                                </h3>
                            </div>
                            <div class="box-body" ng-show="formAcomp.MOSTRA_EAS == 'S'">
                                <div class="form-horizontal">
                                    <label class=" control-label left" for="CO_CNES"><strong>Estabelecimento (EAS):
                                            *</strong></label><br>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="CO_CNES" class="form-control"
                                                    ng-model="formAcomp.CO_CNES_ATENDIMENTO" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                    ng-change="consultarProfissionais(formAcomp.CO_CNES_ATENDIMENTO)">
                                                <option value="">-SELECIONE-</option>
                                                <option value="{{eas.CO_CNES}}" ng-repeat="eas in easVisiveis">
                                                    {{eas.NO_EAS_VISIVEL}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal">
                                    <label class=" control-label left" for="CO_CNS_PROFISSIONAL"><strong>Profissional
                                            responsável pelo atendimento: </strong></label><br>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="CO_CNS" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                    ng-model="formAcomp.CO_CNS_PROFISSIONAL">
                                                <option value="">-SELECIONE-</option>
                                                <option value="{{cns.CO_CNS}}" ng-repeat="cns in profissionais">
                                                    {{cns.NO_PROFISSIONAL}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Informações Nutricionais #########################################################################################################################################################################################-->
                            <div class="box-header with-border">
                                <h3 class="box-title text-green"><i class="fa fa-fw fa-file"></i><strong> Informações
                                        Nutricionais</strong>
                                </h3>
                                <br>
                                <small class="text-green" ng-show="formAcomp.TP_PESSOA == '4'">
                                    <input type="checkbox" ng-model="infoNutricionais" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'" ng-click="disabledInfoNutri()">
                                    Não desejo informar peso e altura
                                </small>
                            </div>
                            <div class="box-body">
                                <div class="form-horizontal" ng-show="formAcomp.TP_PESSOA == '3'">
                                    <label class=" control-label left" for="ST_ACOMPANHADO"><strong>Dado nutricional
                                            coletado? *</strong></label><br>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="ST_MEDIDAS" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                    ng-model="formAcomp.ST_MEDIDAS">
                                                <option value="">-SELECIONE-</option>
                                                <option value="S">SIM</option>
                                                <option value="N">NÃO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal" ng-show="formAcomp.ST_MEDIDAS == 'S' && !infoNutricionais">
                                    <h4><strong>Peso: {{formAcomp.NU_PESO}}kg</strong></h4>
                                    <label class=" control-label left" for="NU_PESO">
                                        <small style="font-size: 12px"> Use as setas (teclado) para maior precisão
                                        </small>
                                    </label>

                                    <div class="form-group">
                                        <div class="col-md-12" ng-show="formAcomp.ST_SISTEMA == 'S'">
                                            <rzslider rz-slider-model="formAcomp.NU_PESO"
                                                      rz-slider-options="NU_PESO.options">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal" ng-show="formAcomp.ST_MEDIDAS == 'S' && !infoNutricionais">
                                    <h4><strong>Altura: {{formAcomp.NU_ALTURA}}cm</strong></h4>
                                    <label class=" control-label left" for="NU_ALTURA">
                                        <small style="font-size: 12px"> Use as setas (teclado) para maior precisão
                                        </small>
                                    </label><br>
                                    <div class="form-group">
                                        <div class="col-md-12" ng-show="formAcomp.ST_SISTEMA == 'S'">
                                            <rzslider rz-slider-model="formAcomp.NU_ALTURA"
                                                      rz-slider-options="NU_ALTURA.options"></rzslider>
                                            <!--                                            <input name="NU_ALTURA" class="form-control" placeholder="Peso" ng-model="formAcomp.NU_ALTURA" type="text">-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-horizontal" ng-show="formAcomp.ST_MEDIDAS == 'N'">
                                    <label class=" control-label left" for="CO_MOTIVO_MEDIDAS"><strong>Motivo /
                                            Ocorrência: *</strong></label><br>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="CO_MOTIVO_MEDIDAS" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                    ng-model="formAcomp.CO_BFA_MOTIVO_NUTRI_CRIANCA">
                                                <option value="">-SELECIONE-</option>
                                                <option value="{{motAva.CO_BFA_MOTIVO_DESCUMPRIMENTO}}"
                                                        ng-repeat="motAva in motivoAvaliacao">{{motAva.CO_BFA_MOTIVO_DESCUMPRIMENTO}} - {{motAva.DS_MOTIVO}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--SE FOR CRIANÇA #########################################################################################################################################################################################-->
                            <div ng-show="formAcomp.TP_PESSOA == '3'">
                                <!--Informações da Criança #########################################################################################################################################################################################-->
                                <div class="box-header with-border">
                                    <h3 class="box-title text-green"><i class="fa fa-fw fa-medkit"></i><strong>
                                            Informações da Criança</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-horizontal">
                                        <label class=" control-label left" for="ST_VACINACAO"><strong>Vacinação em Dia?
                                                *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="ST_VACINACAO" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                        ng-model="formAcomp.ST_VACINACAO">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="S">SIM</option>
                                                    <option value="N">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--SE VACINAÇÃO NÃO ESTÁ EM DIA -->
                                    <div class="form-horizontal" ng-show="formAcomp.ST_VACINACAO == 'N'">
                                        <label class=" control-label left" for="CO_MOTIVO_VACINA"><strong>Motivo /
                                                Ocorrência: *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="CO_BFA_MOTIVO_VACINACAO" class="form-control"
                                                        ng-model="formAcomp.CO_BFA_MOTIVO_VACINACAO" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="{{motVac.CO_BFA_MOTIVO_DESCUMPRIMENTO}}"
                                                            ng-repeat="motVac in motivoVacinas">{{motVac.CO_BFA_MOTIVO_DESCUMPRIMENTO}} - {{motVac.DS_MOTIVO}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--SE FOR MULHER E APTA A SER GESTANTE #########################################################################################################################################################################################-->
                            <div ng-show="formAcomp.TP_PESSOA == '4'">
                                <!--Informações da mulher #########################################################################################################################################################################################-->
                                <div class="box-header with-border">
                                    <h3 class="box-title text-green"><i class="fa fa-fw fa-venus"></i><strong>
                                            Informações da Mulher</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-horizontal">
                                        <label class=" control-label left" for="ST_GESTANTE"><strong>É gestante?
                                                *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="ST_GESTANTE" class="form-control"
                                                        ng-model="formAcomp.ST_GESTANTE" ng-change="verificaGestante();" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="S">SIM</option>
                                                    <option value="N">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--SE É GESTANTE -->
                                    <div class="form-horizontal" ng-show="formAcomp.ST_GESTANTE == 'S'">
                                        <label class=" control-label left" for="DT_DUM" id="labelDUM"><strong>DUM:
                                                *</strong></label><br>
                                        <label class=" control-label left" ng-show="formAcomp.DT_ACOMPANHAMENTO == undefined || formAcomp.DT_ACOMPANHAMENTO == ''">Informe a Data do Acompanhamento</label>
                                        <div class="form-group">
                                            <div class="col-md-12" ng-show="formAcomp.DT_ACOMPANHAMENTO != undefined">
                                                <input type="text" name="DT_ULTIMA_MENSTRUACAO" readonly datepicker ng-disabled="formAcomp.ST_SISTEMA == 'N'"
                                                       dtMin="{{dtMinDumJs}}" dtMax="{{dtMaxDumJs}}"
                                                       ng-model="formAcomp.DT_ULTIMA_MENSTRUACAO"
                                                       placeholder="DD/MM/AAAA" class="form-control"
                                                       ng-show="showCampoDUM" destroy="true">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal" ng-show="formAcomp.ST_GESTANTE == 'S'">
                                        <label class=" control-label left" for="ST_PRENATAL"><strong>Teve acesso ao
                                                Pré-Natal? *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="ST_PRE_NATAL" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                        ng-model="formAcomp.ST_PRE_NATAL">
                                                    <option value="I">-SELECIONE-</option>
                                                    <option value="S">SIM</option>
                                                    <option value="N">NÃO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-horizontal"
                                         ng-show="formAcomp.ST_GESTANTE == 'S' && formAcomp.ST_PRE_NATAL == 'N'">
                                        <label class=" control-label left" for="CO_MOTIVO_PRE_NATAL"><strong>Motivo /
                                                Ocorrência: *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="CO_BFA_MOTIVO_PRE_NATAL" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                        ng-model="formAcomp.CO_BFA_MOTIVO_PRE_NATAL">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="{{motPN.CO_BFA_MOTIVO_DESCUMPRIMENTO}}"
                                                            ng-repeat="motPN in motivoPreNatal">{{motPN.CO_BFA_MOTIVO_DESCUMPRIMENTO}} - {{motPN.DS_MOTIVO}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--SE FOR INDIGENA #########################################################################################################################################################################################-->
                            <div ng-show="formAcomp.ST_RESIDE_INDIGENA == '1'">
                                <!--Informações do Indigena #########################################################################################################################################################################################-->
                                <div class="box-header with-border">
                                    <h3 class="box-title text-green"><i class="fa fa-fw fa-hospital-o"></i><strong>
                                            Informações do indígena</strong>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-horizontal">
                                        <label class=" control-label left" for="CO_PESSOA_JURIDICA"><strong>Selecione o
                                                distrito sanitário (DSEI): *</strong></label><br>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <select name="CO_DSEI" class="form-control" ng-disabled="progress || formAcomp.ST_SISTEMA == 'N'"
                                                        ng-model="formAcomp.CO_DSEI">
                                                    <option value="">-SELECIONE-</option>
                                                    <option value="{{dsei.CO_DSEI}}" ng-repeat="dsei in listaDsei">
                                                        {{dsei.NO_PESSOA_JURIDICA}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-horizontal">
                            <div class="box-header with-border center-block">
                                <button name="salvar" class="btn btn-success btn-lg center-block" ng-show="formAcomp.ST_SISTEMA != 'N'"
                                        ng-click="salvar(formAcomp2.$valid)" ng-disabled="formAcomp2.$invalid || progress"><i
                                            class="fa fa-fw fa-download"></i> Salvar Acompanhamento
                                </button>
                                <br/>
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
            </form>
        </div>
    </section>
</div>