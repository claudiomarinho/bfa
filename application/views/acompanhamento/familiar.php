<style type="text/css">
    #datatable tr td {
        text-align: center;
    }

</style>
<section class="content-header">
    <h1> Acompanhamento <strong>familiar</strong>
        <small>Painel de informações da familia</small>
    </h1>
</section>

<section class="content" ng-app="appPrincipal" ng-controller="AcompanhamentoFamiliarCtrl"
         ng-init="init('<?php echo $CO_FAMILIA; ?>')" ng-cloak>
    <div class="box box-solid box-success">
        <div class="box-header with-border">
            <strong>Integrantes da família</strong>
            <div class="pull-right"><strong>Legenda: </strong>&nbsp;&nbsp;&nbsp;
                <i class="fa fa fa-search" aria-hidden="true"></i> Acompanhar &nbsp;&nbsp;&nbsp;

                <i class="fa fa fa-pencil" aria-hidden="true"></i> Editar acompanhamento
            </div>
        </div>

        <!--bloqueia os campos e carrega os integrantes-->
        <div class="overlay" ng-if="beneficiarios.length === 0">
            <i class="fa fa-refresh fa-spin"></i>
        </div>

        <div class="box-body">
            <div class="well" style="display: flex; flex-direction: row">
                <i class="fa fa-fw fa-home" style="font-size: 50px;"></i>
                <h4>
                    <strong>Endereço Familiar:</strong><br>
                    {{endereco}}
                </h4>

            </div>

<div class="row">
    <div class="col-md-12">
            <div class="col-md-4 col-sm-12" style="min-height: 490px!important;" ng-repeat="ben in beneficiarios">
                <div class="box-body box-profile">

                    <img class="profile-user-img img-responsive img-circle" ng-src="<?php echo public_url('img'); ?>/{{ben.DS_SEXO}}.png"  alt="">

                    <h5 class="profile-username text-center">{{ben.NO_PESSOA}}</h5>
                    <p class="text-muted text-center"></p>
                    <p class="text-muted text-center ng-binding"><span ng-if="ben.ST_OBRIGATORIO === '1'"
                                                                       class="label label-danger text-center">Obrigatório</span>
                        <span ng-if="ben.ST_GESTANTE === 'S'"
                              class="label label-info text-center">Gestante</span>
                        <span ng-if="ben.CO_BFA_MOTIVO_NAO_ACOMP === '4'"
                              class="label label-default text-center">Falecido</span>
                    </p>
                    <p class="text-center"> <strong>NIS:</strong> {{ben.NU_NIS}}</p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b><i class="fa fa-fw fa-calendar"></i> Nascimento:</b> <a class="pull-right">{{ben.DT_NASCIMENTO}}</a>
                        </li>
                        <li class="list-group-item" ng-if="ben.DT_ACOMPANHAMENTO">
                            <b><i class="fa fa-fw  fa-calendar"></i> Data do acompanhamento:</b> <a class="pull-right">{{ben.DT_ACOMPANHAMENTO}}</a>
                        </li>
                        <li class="list-group-item" ng-show="ben.CO_SISTEMA_ORIGEM_ACOMP !== null">
                            <b><i class="fa fa-fw fa-laptop"></i> Acompanhado no sistema:</b>
                            <a class="pull-right">
                                <span class="label label-success" ng-if="ben.CO_SISTEMA_ORIGEM_ACOMP === '2'">BOLSA FAMÍLIA</span>
                                <span class="label label-warning" ng-if="ben.CO_SISTEMA_ORIGEM_ACOMP === '5'">SISPRENATAL</span>
                                <span class="label label-primary" ng-if="ben.CO_SISTEMA_ORIGEM_ACOMP === '4'">e-SUS AB</span>
                            </a>
                        </li>

                    </ul>

                    <a ng-if="ben.CO_SISTEMA_ORIGEM_ACOMP === '2'" ng-disabled="progress" style="cursor:pointer"
                       ng-click="acompanhar(ben.CO_SEQ_BFA_PESSOA)"
                       class="btn btn-primary btn-block"><i class="fa fa-pencil-square-o"></i>
                        <strong>Editar </strong></a>

                    <a ng-if="ben.CO_SISTEMA_ORIGEM_ACOMP === '4' || ben.CO_SISTEMA_ORIGEM_ACOMP === '5'" ng-disabled="progress" style="cursor:pointer"
                       ng-click="acompanhar(ben.CO_SEQ_BFA_PESSOA)"
                       class="btn btn-success btn-block"><i class="fa fa-search"></i>
                        <strong>Visualizar </strong></a>

                    <a ng-if="!ben.DT_ACOMPANHAMENTO" ng-disabled="progress" style="cursor:pointer"
                       ng-click="acompanhar(ben.CO_SEQ_BFA_PESSOA)"
                       class="btn btn-success btn-block"><i class="fa fa-pencil"></i>
                        <strong>ACOMPANHAR</strong></a>
                </div>

            </div>
    </div>
</div>


        </div>
    </div>

    <div>
        <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()">
            <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
        </button>
    </div>

</section>
