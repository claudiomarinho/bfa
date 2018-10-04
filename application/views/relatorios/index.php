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
    .nomefiltro {font-weight:bold;width:20%}
    .filtro {width: 80%}
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

    .dataTable th {
        word-wrap: break-word;
    }
    td,th {
        border: 1px solid #000;
    }
    th.wider {
        /*width: 120px !important;*/
    }
    th.rotate {
        height: 140px;
        padding: 0px;
        font-weight: normal;
    }
    th.rotate > div {
        height: 200px;
        writing-mode: vertical-rl;
        transform: rotate(-180deg);
        font-size:0.8em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate2 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate2 > div {
        width: 100px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate3 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate3 > div {
        width: 30px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }
    th.rotate4 {
        height: 10px;
        font-weight: normal;
    }
    th.rotate4 > div {
        width: 50px;
        font-size:0.9em;
        font-family: Arial, Helvetica, sans-serif
    }



</style>


<section class="content-header">
    <h1> Relatórios gerenciais
        <small>Escolha um tipo de relatório.</small>
    </h1>
</section>
<br/>


    <div class="col">

        <div class="box-body" style="padding:0!important;">
            <div class="form-horizontal">
                    <div id="divTipoRelatorio" class="row">
                        <div class="box-body" style="margin-left: 10px">

                                <button id="escolheConsolidado" name="escolheConsolidado" class="btn btn-primary" onClick="window.location='<?php echo host_url(); ?>relatorio/consolidado'" style="width:30%;margin:10px;">Relatório Consolidado</button>


                                <button id="escolheIndividualizado" name="escolheConsolidado" class="btn btn-primary" onClick="window.location='<?php echo host_url(); ?>relatorio/individualizado'" style="width:30%;margin:10px;" disabled>Relatório Individualizado</button>

                        </div>

                    </div>
            </div>
        </div>

    </div>


