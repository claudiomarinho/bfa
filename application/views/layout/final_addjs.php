<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<?php if (isset($this->session->userdata['MSG_RETORNO'])) { ?>
    <script>

        var msgRetorno = '<?php echo $this->session->userdata['MSG_RETORNO']; ?>';
        var urlRetorno = '<?php echo isset($this->session->userdata['URL_RETORNO']) ? $this->session->userdata['URL_RETORNO'] : ''; ?>';
        $(function () {
            bootbox.alert({
                message: msgRetorno,
                closeButton: false,
                onEscape: false,
                callback: function () {
                    if (urlRetorno != '') {
                        window.location.href = urlRetorno
                    }
                }
            })
        });
    </script>
    <?php
} ?>
<script>
    if (localStorage.getItem('msgAlert') !== null) {
        let msgRetorno = localStorage.getItem('msgAlert');
        localStorage.removeItem('msgAlert');
        $(function () {
            bootbox.alert({
                message: '<span class="text-blue">'+msgRetorno+'</span>',
                closeButton: false,
                onEscape: false
            });
            setTimeout(function () {
                bootbox.hideAll();
            }, 3000);
        });

    }
</script>
<!-- REQUIRED JS SCRIPTS -->
<link href="<?php echo public_url('js'); ?>/plugins/icheck/flat/flat.css" rel="stylesheet">
<link href="<?php echo public_url('js'); ?>/plugins/icheck/flat/green.css" rel="stylesheet">
<script src="<?php echo public_url('js'); ?>/plugins/icheck/icheck.js"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo public_url('js'); ?>/jquery-ui.min.js"></script>
<script src="<?php echo public_url('js'); ?>/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo public_url('js'); ?>/bootbox.min.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="<?php echo public_url('js'); ?>/app.min.js" type="text/javascript"></script>

<script src="<?php echo public_url('js/angular'); ?>/loading-bar.js"></script>
<script src="<?php echo public_url('js/angular'); ?>/diretivaCarregando.js"></script>
<script src="<?php echo public_url('js/angular'); ?>/angular-animate.min.js"></script>
<script src="<?php echo public_url('js/angular'); ?>/angular-sanitize.min.js"></script>
<script src="<?php echo public_url('js/angular'); ?>/ui-bootstrap-tpls-0.10.0.min.js" type="text/javascript"></script>
<script src="<?php echo public_url('js/angular/i18n'); ?>/angular-locale_pt-br.js" type="text/javascript"></script>

<script src="<?php echo public_url('js'); ?>/sortable.js"></script>
<script src="<?php echo public_url('js'); ?>/pluginCarregarCombos.js"></script>
<script src="<?php echo public_url('js'); ?>/angularjs-dropdown-multiselect.js"></script>
<script src="<?php echo public_url('js'); ?>/sprintf.js"></script>
<script src="<?php echo public_url('js'); ?>/app/mensagens.js"></script>
<script src="<?php echo public_url('js'); ?>/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo public_url('js'); ?>/bootstrap-select.js"></script>
<script src="<?php echo public_url('js'); ?>/nya-bootstrap-select.js"></script>
<script>
    bootbox.setDefaults({
        locale: "br"
    });
    $('#fixarbox').affix({});
    jQuery(function ($) {
        $.datepicker.regional['pt-BR'] = {
            closeText: 'Fechar',
            prevText: '&#x3c;Anterior',
            nextText: 'Pr&oacute;ximo&#x3e;',
            currentText: 'Hoje',
            monthNames: ['Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho',
                'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
                'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            dayNames: ['Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    });
</script>
<script>
    (function ($) {
        $.fn.selectpicker.defaults = {
            noneSelectedText: '- Selecione -',
            noneResultsText: 'Nenhum registro encontrado',
            countSelectedText: 'Selecionado {0} de {1}',
            maxOptionsText: ['Limite excedido (máx. {n} {var})', 'Limite do grupo excedido (máx. {n} {var})', ['itens',
                'item'
            ]],
            multipleSeparator: ', ',
            selectAllText: 'Selecionar Todos',
            deselectAllText: 'Desmarcar Todos'
        };
    })(jQuery);
</script>

<!-- DataTables -->
<!-- <script src="<?php echo public_url('js'); ?>/datatables/node_modules/datatablesnet/js/jquery.dataTables.js"></script> -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- <link rel="stylesheet" href="<?php echo public_url('js'); ?>/datatables/node_modules/datatablesnetdt/css/jquery.dataTables.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<link rel="stylesheet"
      href="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/css/angular-datatables.min.css">
<link rel="stylesheet"
      href="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/bootstrap/datatables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css">

<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/angular-datatables.min.js"></script>
<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"></script>
<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/tabletools/angular-datatables.tabletools.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo public_url('js'); ?>/datatables/node_modules/jszip.min.js"></script>
<script src="<?php echo public_url('js'); ?>/datatables/node_modules/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo public_url('js'); ?>/datatables/node_modules/pdfmake/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="<?php echo public_url('js'); ?>/datatables/node_modules/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/buttons/angular-datatables.buttons.min.js"></script>
<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/fixedheader/angular-datatables.fixedheader.min.js"></script>
<script src="//mgcrea.github.io/angular-strap/dist/angular-strap.js" data-semver="v2.3.8"></script>
<script src="//mgcrea.github.io/angular-strap/dist/angular-strap.tpl.js" data-semver="v2.3.8"></script>
<script src="//mgcrea.github.io/angular-strap/docs/angular-strap.docs.tpl.js" data-semver="v2.3.8"></script
    <!-- icheck -->
<script src="<?php echo public_url('js'); ?>/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/angular/angular-resource.min.js"></script>
<link rel="stylesheet" href="https://rawgit.com/seiyria/bootstrap-slider/master/dist/css/bootstrap-slider.css">
<link rel="stylesheet" href="https://rawgit.com/rzajac/angularjs-slider/master/dist/rzslider.css    ">
<script src="https://rawgit.com/seiyria/bootstrap-slider/master/dist/bootstrap-slider.js"></script>
<script src="https://rawgit.com/rzajac/angularjs-slider/master/dist/rzslider.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css">
<script src="https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js"></script>
<script
    src="<?php echo public_url('js'); ?>/datatables/node_modules/angular-datatables/dist/plugins/scroller/angular-datatables.scroller.min.js"></script>

<script src="<?php echo base_url('public/js'); ?>/app/app.module.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/app.directive.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/app.filter.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/app.service.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/app.function.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/BfaCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/BairroCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/AcompanhamentoCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/AcompanhamentoFamiliarCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/AcompanhamentoMapaCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/VinculoFamiliaCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/EasCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/EasVisiveisCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/IndividuoCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/MapaAcompanhamentoCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/MapaAcompanhamentoFamiliasCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/RelatorioCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/IndicadoresCtrl.js" type="text/javascript"></script>
<script src="<?php echo base_url('public/js'); ?>/app/telas/MapaAcompanhamentoGerenciarCtrl.js" type="text/javascript"></script>

<script>
    startCountdown(1200);
    angular.element(document).ready(function () {
        angular.bootstrap(document.getElementById("corpoGeral"), ['appPrincipal']);
        if ($(".pre-loader").length > 0)
        {
            $(".pre-loader").fadeOut("slow");
        }
    });
</script>

</body>
</html>