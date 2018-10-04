<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <base href="<?php echo host_url(); ?>"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo public_url('css'); ?>/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/img/favicon.ico'); ?>"/>
    <link href="<?php echo public_url('css'); ?>/AdminLTE.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo public_url('css'); ?>/alteraTemplateEleicao.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/skins/skin-blue.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/jquery.steps.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo public_url('css'); ?>/loading-bar.css" media="all"/>
    <link href="<?php echo public_url('css'); ?>/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo public_url('css'); ?>/animate.css" rel="stylesheet" type="text/css"/>

    <!--iCHECK CSS-->
    <link href="<?php echo public_url('css/icheck/minimal'); ?>/green.css" rel="stylesheet">

    <script src="<?php echo public_url('js'); ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo public_url('js/angular'); ?>/angular.js"></script>
    <script src="<?php echo public_url('js'); ?>/html5shiv.min.js"></script>
    <script src="<?php echo public_url('js'); ?>/respond.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/js'); ?>/plugins/bootstrap-toggle/angular-bootstrap-toggle.min.css">
    <link rel="stylesheet" href="<?php echo base_url('public/js/selectize/css'); ?>/selectize.bootstrap3.css">
    <!-- ui-select files -->
    <script src="<?php echo base_url('public/js/selectize/js'); ?>/select.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/js/selectize/css'); ?>/select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">
    <script src="<?php echo base_url('public/js'); ?>/plugins/bootstrap-toggle/angular-bootstrap-toggle.min.js"></script>
    <script type="text/javascript">
        var URL = "<?php echo host_url(); ?>";
    </script>

    <style type="text/css">
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
            display: none !important;
        }
        table.dataTable, table.dataTable.no-footer {
            margin: 0 !important;
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
<body class="skin-blue sidebar-mini sidebar-collapse">
<div class="pre-loader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<!-- GOVERNO FEDERAL -->
<div id="barra-brasil">
    
    <div style="background-color: #D0F1FD; height: 100%;">
        <img src="<?php echo public_url('img'); ?>/bg_topo_eleicao.png"/>
    </div>
</div>
<!-- GOVERNO FEDERAL -->
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <a href="<?php echo host_url(); ?>" id="" class="logo">
            <span class="logo-mini"><b><?php echo $title_system_mini; ?></b></span>
            <span class="logo-lg"><b><?php echo $title_system; ?></b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Alternar navegação</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <?php
                    if ($this->session->userdata['NO_PESSOA_MINI']) {
                        ?>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo public_url('img').'/bandeiras/'.strtolower($this->session->userdata['SG_UF'].'.png'); ?>" class="user-image" alt="Estado"/>
                                <span class="hidden-xs"><?php echo $this->session->userdata['NO_PESSOA_MINI']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?php echo public_url('img').'/bandeiras/'.strtolower($this->session->userdata['SG_UF'].'.png'); ?>" class="img-circle"
                                         alt="Estado"/>
                                    <p style="font-size: 14px;">
                                        <?php echo $this->session->userdata['NO_PESSOA']; ?>
                                        <br/><span
                                            style="font-size: 90%; font-weight: bold;"><?php echo $this->session->userdata['DS_GRUPO']; ?></span>
                                        <br/><span
                                            style="font-size: 80%;"><?php echo $this->session->userdata['NO_MUNICIPIO'] . " - " . $this->session->userdata['SG_UF']; ?></span>
                                    </p>
                                    <br/>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left" <?php echo $perfil === false ? '' : ''; ?>>
                                        <!--                                    <a ng-click="" class="btn btn-default btn-flat">Perfil</a>-->
                                        <a href="<?php echo host_url("login/sair"); ?>"
                                           class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo host_url("login/sair"); ?>"
                                           class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="dropdown user user-menu">
                            <li class="user-footer">
                            <a href="<?php echo EGESTORLOGIN; ?>" >
                                <i class="fa fa-key"></i>
                                <span class="hidden-xs">Acesso Restrito</span>
                            </a>
                            </li>
                        </li>

                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>