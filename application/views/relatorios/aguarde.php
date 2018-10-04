<section class="content-header">
    <h1>Relatórios <strong>Gerenciais</strong>
        <small>Escolha um tipo de relatório.</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title"><i class="fa fa-fw fa-search"></i>Selecione o <strong>Tipo de Relatório:</strong></h4>
                </div>
                <div class="row">
                    <div class="box-body">
                        <div class="col-md-4 col-md-6">
                            <div class="info-box bg-blue-gradient">
                                <span class="info-box-icon"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" style="font-size: 16px; padding:5px 0 5px 0"
                                          title="Consolidado">Consolidados</span>
                                   <span class="info-box-text">
                                        <a class="btn btn-primary showSingle" href="<?php echo host_url(); ?>relatorio/" disabled=""><strong>SELECIONAR RELATÓRIO</strong></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($this->session->userdata['autenticado']) {
                            ?>
<!--                            <div class="col-md-4 col-md-6">-->
<!--                                <div class="info-box bg-yellow-gradient">-->
<!--                                    <span class="info-box-icon"><i class="glyphicon glyphicon-warning-sign"></i></i></span>-->
<!--                                    <div class="info-box-content">-->
<!--                                        <span class="info-box-text" style="font-size: 16px; padding:5px 0 5px 0"-->
<!--                                              title="Restritos">Restritos</span>-->
<!--                                        <span class="info-box-text">-->
<!--                                            <a class="btn btn-warning showSingle" href="--><?php //echo host_url(); ?><!--relatorio/individualizado"><strong>SELECIONAR-->
<!--                                                    RELATÓRIO</strong></a>-->
<!--                                        </span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="col-md-4 col-md-6">
                                <div class="info-box bg-green-gradient">
                                    <span class="info-box-icon"><i class="glyphicon glyphicon-object-align-bottom"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text" style="font-size: 16px; padding:5px 0 5px 0"
                                              title="Gráficos">Indicadores Gráficos</span>
                                        <span class="info-box-text">
                                            <a class="btn btn-success showSingle"
                                               href="<?php echo host_url(); ?>welcome/indicadores"><strong>SELECIONAR
                                                    RELATÓRIO</strong></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

