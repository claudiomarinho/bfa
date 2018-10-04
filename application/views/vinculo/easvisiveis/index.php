<style>
    tr > td {
        height: 75px;
        text-align: center;
    }

    .multiselect-parent {
        width: 100%;
        background-color: #FFF;
    }

    .multiselect-parent .dropdown-toggle {
        width: 100%;
    }

    .multiselect-parent .dropdown-menu {
        width: 100%;
    }

    /* make option text light grey for disabled */
    .dropdown-menu a[disabled].option {
        text-decoration: line-through;
    }
</style>
<section class="content-header">
    <h1>Gerenciar <strong>EAS</strong>
        <small>Utilize a tela abaixo para gerenciar os EAS visíveis ao sistema</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="EasCtrl" ng-init="init()" ng-cloak>


    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <strong>Total de EAS no município: {{dadosEas.length}}</strong>
        </div>
        <div class="box-body">
            <!-- a serem acompanhados -->
            <div class="progress-group">
                <span class="progress-text">EAS não visíveis</span>
                <span class="progress-number"><strong>{{dadosEas.length-selecionados.eas.length}}</strong></span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-red"
                         ng-style="{width:percentual.semVinculo+'%'}"></div>
                </div>
            </div>
            <!-- acompanhados com ocorrência -->
            <div class="progress-group">
                <span class="progress-text">EAS visíveis</span>
                <span class="progress-number"><strong>{{selecionados.eas.length}}</strong></span>

                <div class="progress sm">
                    <div class="progress-bar progress-bar-blue" ng-style="{width:percentual.vinculo+'%'}"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="box box-solid">
        <div class="box-body">

            <div class="row">
                <form name="grupoBairros" class="form-horizontal" ng-submit="salvar()" novalidate>
                    <div class="col-md-5">

                        <div class="box box-primary box-solid">
                            <div class="overlay" ng-if="dadosEas.length === 0">
                                <i class="fa fa-refresh fa-spin"></i>
                            </div>
                            <div class="box-header with-border">
                                <i class="fa fa-exchange"></i> Selecione os <strong>EAS para ficarem visiveis</strong>
                            </div>
                            <div class="box-body">


                                <div class="form-group">
                                    <label for="bairros" class="col-md-12 control-label"
                                           style="text-align: left; "><strong>Selecione os
                                            EAS: </strong></label><br><br>

                                    <div class="col-md-12">
                                        <div ng-dropdown-multiselect="" class="multiselect-parent col-md-6"
                                             name="easAgrupados" translation-texts="translateOptions"
                                             disabled="progress"
                                             options="dadosEas" events="customEvents" selected-model="selecionados.eas"
                                             extra-settings="multiselectOptions">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; justify-content: center">
                                    <br><br>
                                    <button ng-if="selecionados.eas.length > 0" type="submit"
                                            class="btn btn-primary btn-lg "
                                            ng-disabled="progress">Salvar seleção
                                    </button>

                                </div>

                                <small style="display: flex; justify-content: center; text-align: center">
                                    *Os EAS que possuem famílias vinculadas não podem ser removidos.<br> Utilize o
                                    módulo VINCULAR FAMÍLIAS caso queira alterar os vínculos das famílias.
                                </small>
                                <br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row" ng-if="selecionados.eas.length > 0 || selecionados.easVinculo.length > 0">
                            <div class="col-md-12">
                                <div class="box box box-success box-solid"
                                     ng-if="(selecionados.eas.length - selecionados.easVinculo.length)> 0">
                                    <div class="box-header with-border">
                                        <strong><i class="fa fa-hospital-o"></i> EAS visíveis sem famílias vinculadas
                                            ({{selecionados.eas.length - selecionados.easVinculo.length}}
                                            visíveis)</strong> <input type="text"
                                                                      class="pull-right text-black input-sm"
                                                                      placeholder="Pesquisa"
                                                                      ng-model="pesquisaEasSelecionado">
                                    </div>
                                    <div class="box-body" style=" overflow-y: scroll; height: 12vh;  padding:2%;">
                                        <small ng-repeat="b in selecionados.eas | filter:pesquisaEasSelecionado">
                                            <span ng-if="!b.disabled"> {{b.NO_FANTASIA_CO_CNES}}</span>
                                            <span ng-if="!b.disabled && (selecionados.eas.length)-1 !== $index"><br></span>
                                        </small>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box box box-warning box-solid"
                                     ng-if="selecionados.easVinculo.length > 0">
                                    <div class="box-header with-border">
                                        <strong><i class="fa fa-hospital-o"></i> EAS visíveis com famílias vinculadas
                                            ({{selecionados.easVinculo.length}} visíveis) </strong>
                                        <input type="text" class="pull-right text-muted input-sm"
                                               placeholder="Pesquisa" ng-model="pesquisaEasSelecionadoVinculados">
                                    </div>
                                    <div class="box-body" style=" overflow-y: scroll; height: 12vh; padding:2%;">
                                        <small ng-repeat="b in selecionados.easVinculo | filter:pesquisaEasSelecionadoVinculados">
                                            <span>{{b.NO_FANTASIA_CO_CNES}}</span>
                                            <span ng-if="selecionados.easVinculo.length-1 !== $index"><br></span>
                                        </small>
                                        <br><br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>

    <div class="footer">
        <div class="box-header with-border center-block">
            <button id="voltar" name="voltar" class="btn btn-primary btn-sm" ng-click="voltar()"
                    ng-disabled="progress">
                <i class="fa fa-fw  fa-arrow-left" aria-hidden="true"></i> Voltar
            </button>
        </div>
    </div>


</section>
