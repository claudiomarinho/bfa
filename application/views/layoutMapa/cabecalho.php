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
    <link href="<?php echo public_url('css'); ?>/skins/skin-blue.css" rel="stylesheet" type="text/css"/>
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


    <style>
        [ng\: cloak

        ]
        ,
        [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x- ng-cloak {
            display: none !important;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124187493-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124187493-1');
    </script>


</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="pre-loader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top" >
<!--            <div class="container">-->
                <a class="navbar-brand"><b>BOLSA FAMÍLIA</b> Mapa de Acompanhamento</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="javascrit:window.close()">
                    <i class="fa fa-close"></i>
                </button>
<!--            </div>-->
        </nav>
    </header>