<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <base href="<?php echo host_url(); ?>"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo public_url('css'); ?>/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/img/favicon.ico'); ?>"/>
    <link href="<?php echo public_url('css'); ?>/AdminLTE.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo public_url('css'); ?>/alteraTemplate.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/skins/skin-yellow.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/jquery.steps.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo public_url('css'); ?>/loading-bar.css" media="all"/>
    <link href="<?php echo public_url('css'); ?>/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

    <!--iCHECK CSS-->
    <link href="<?php echo public_url('css/icheck/minimal'); ?>/yellow.css" rel="stylesheet">

    <script src="<?php echo public_url('js'); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo public_url('js/angular'); ?>/angular.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/PrincipalApp.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/MicronutrientesCtrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/VitaminaaD1Ctrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/VitaminaaD2Ctrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/VitaminaaMetaCtrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/VitaminaaPerdaCtrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/FerroD1Ctrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/FerroD2Ctrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/NutrisusCtrl.js"></script>
    <script src="<?php echo public_url('js/telas'); ?>/RelatorioFerroCtrl.js"></script>
    <script type="text/javascript">
        var URL = "<?php echo host_url(); ?>";
        var URLBASE = "<?php echo substr(base_url(), 0, -4); ?>";
    </script>

    <style>
        [ng\: cloak

        ]
        ,
        [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x- ng-cloak {
            display: none !important;
        }
    </style>

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top" >
<!--            <div class="container">-->
                <a class="navbar-brand"><b>MICRONUTRIENTES</b> Relatório</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="javascrit:window.close()">
                    <i class="fa fa-close"></i>
                </button>
<!--            </div>-->
        </nav>
    </header>