<style type="text/css">
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 0px !important; /* e.g. change 8x to 4px here */
    }

    table.dataTable tbody td {
        padding: 6px !important; /* e.g. change 8x to 4px here */
    }

    .selected {
        background-color: #B0BED9 !important;
    }

    .centered {
        text-align: center;
    }

    td.details-control { cursor: pointer; text-align: center;}

    .tg  {border: none;width:100%;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:6px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
    .nomefiltro {font-weight:bold;width:12%}
    .filtro {width: 88%}
    input[type=checkbox]
    {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.4); /* IE */
        -moz-transform: scale(1.4); /* FF */
        -webkit-transform: scale(1.4); /* Safari and Chrome */
        -o-transform: scale(1.4); /* Opera */
        margin-left: 3px;
    }


    #header_nav {
        width: 100%;
        background-color: #e0e0e0;
        height: 60px;
        z-index: 1;
        border-top: 1px solid #c0c0c0;
        margin-bottom: 10px;
    }

    .fixed {
        top: 0px;
        position: fixed;
    }
    /*--------------------NAVIGATION--------------------*/
    #navfloat {
        background-color: #e0e0e0;
        width: 100%;
        height: auto;
        text-align: center;
        overflow: hidden;
        margin: auto;
    }
    .hiddencol {
        display: none;
    }
    .alert {
        margin-top: 5px;
        margin-bottom: 1px;
        height: 30px;
        line-height:25px;
        padding:0px 15px;
        text-align: center;
    }
    /*.content_wrapper {
        width: 1024px;
        background-color: #333333;
        padding: 10px;
        margin: 0 auto;
        color: white;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 75%;
    }*/
    .commands_nav {
        background-color: #e0e0e0;
        border-bottom: 1px solid #999999;
        padding:4px;
    }

    .modal {
        text-align: center;
    }

    @media screen and (min-width: 768px) {
        .modal:before {
            display: inline-block;
            vertical-align: middle;
            content: " ";
            height: 100%;
        }
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    progress[value] {
        /* Reset the default appearance */
        -webkit-appearance: none;
        appearance: none;

        width: 100%;
        height: 30px;
    }
</style>


<section class="content-header">
    <h1> Histórico de <strong>Vinculações</strong>
        <small>Consulte as vinculações realizadas ou vincule as famílias sem EAS</small>
    </h1>
</section>
<section class="content" ng-app="appPrincipal" ng-controller="VinculoFamiliaHistoricoCtrl" ng-init="init('<?php echo $coMunicipioIbge; ?>')" ng-cloak>
    <div class="col">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4"  style="padding-left:20px">
                        <table>
                            <tr>
                                <td>
                                    <a class="btn btn-primary center-block" href="<?php echo host_url(); ?>vinculo/familia">Gerenciar vinculações</a>
                                    <!--<button type="button" class="btn btn-primary btn-lg center-block" data-toggle="modal" data-target="#verVinculacoesModal">Visualizar vinculações</button>-->
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br/>
                <div class="box box-solid box-primary">
                    <div class="box-header with-border" style="text-align: left;">
                        <strong>ESTATÍSTICAS:</strong>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <strong>Total de famílias no município: {{dadosEas.length}}</strong><br/><br/>
                                <!-- a serem acompanhados -->
                                <div class="progress-group">
                                    <span class="progress-text">Famílias sem vínculo</span>
                                    <span class="progress-number"><strong>{{dadosEas.length-selecionados.eas.length}}</strong></span>

                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-red" ng-style="{width:percentual.semVinculo+'%'}"></div>
                                    </div>
                                </div>
                                <!-- acompanhados com ocorrência -->
                                <div class="progress-group">
                                    <span class="progress-text">Famílias com vínculo</span>
                                    <span class="progress-number"><strong>{{selecionados.eas.length}}</strong></span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-blue" ng-style="{width:percentual.vinculo+'%'}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <form name="grupoBairros" novalidate>
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="box box-solid box-primary">
                                    <div class="box-header with-border" style="text-align: left;">
                                        <strong>ÚLTIMAS VINCULAÇÕES REALIZADAS:</strong>
                                        <!--         <button ng-click="clicaaqui()" class="btn btn-warning"><i class="fa fa-edit"></i></button> -->
                                    </div>
                                  <!--  <button id="zerarhistorico" name="zerarhistorico" class="btn btn-primary btn-sm" ng-click="zerarHistorico()" style="float:right;margin:10px">Zerar histórico</button> -->
                                    <div class="box-body" style="text-align: left;">
                                        <table datatable dt-instance="dtInstanceCallback" dt-options="dtOptions"
                                               dt-columns="dtColumns" id="datatable" class="cell-border compact stripe order-column"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="tooltip"]').attr('data-original-title', '');
    });
</script>
