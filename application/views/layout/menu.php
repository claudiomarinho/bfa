<aside class="main-sidebar">
    <section class="sidebar">
        <?php
        if ($this->session->userdata['autenticado']) {
            if ($this->session->userdata['CO_GRUPO'] == 8 || $this->session->userdata['CO_GRUPO'] == 2) {
                if ($this->session->userdata['NO_PESSOA_MINI']) {
                    ?><!-- Menu AUTENTICADO GESTOR MUNICIPAL-->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img
                                src="<?php echo public_url('img') . '/bandeiras/' . strtolower($this->session->userdata['SG_UF'] . '.png'); ?>"
                                class="img-circle" alt="User Image"/>
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata['NO_PESSOA_MINI']; ?></p>
                            <!-- Status -->
                            <a href="#"><i
                                    class="fa fa-circle text-success"></i><?php echo $this->session->userdata['NO_MUNICIPIO'] . " - " . $this->session->userdata['SG_UF']; ?>
                            </a>
                        </div>
                    </div>
                    <!-- Menu AUTENTICADO GESTOR MUNICIPAL-->
                    <ul class="sidebar-menu">
                        <li class="header">NAVEGAÇÃO</li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>principal" id=""><i class='fa fa-home'></i> <span>Inicio</span></a>
                        </li>
                        <li id="" class="treeview">
                            <a href="#" id="treeMenu">
                                <i class="fa fa-exchange"></i>
                                <span>Gerenciadores</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li id="painelMenu"><a href="<?php echo host_url(); ?>bairro" id=""><i class='fa fa-object-group'></i> <span>Agrupar Bairros</span></a></li>
                                <li id="painelMenu"><a href="<?php echo host_url(); ?>eas" id=""><i class='fa fa-hospital-o'></i><span>Gerenciar EAS</span></a></li>
                                <li id="painelMenu"><a href="<?php echo host_url(); ?>vinculo/familia" id=""><i class='fa fa-users'></i> <span>Vincular Famílias</span></a></li>
                            </ul>
                        </li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>mapaacompanhamento" id=""><i class='fa fa-map'></i><span>Mapa de Acompanhamento</span></a></li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>acompanhamento" id=""><i class='fa fa-pencil-square-o'></i> <span>Acompanhamento</span></a></li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>relatorio" id="" ><i class='fa fa-bar-chart'></i> <span>Relatórios</span></a></li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>documentos" id="" ><i class="fa fa-file"></i> <span>Documentos</span></a></li>
                        <li id="painelMenu"><a href="<?php echo host_url(); ?>suporte" id="" ><i class="fa fa-envelope-o"></i> <span>Suporte e Fale Conosco</span></a></li>
                    </ul>
                <?php
                }
            } else if($this->session->userdata['CO_GRUPO'] == 17) {
                ?><!-- Menu AUTENTICADO TECNICO MUNICIPAL-->
                <ul class="sidebar-menu">
                    <li class="header">NAVEGAÇÃO</li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>principal" id=""><i class='fa fa-home'></i> <span>Inicio</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>mapaacompanhamento" id=""><i class='fa fa-map'></i><span>Mapa de Acompanhamento</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>acompanhamento" id=""><i class='fa fa-pencil-square-o'></i> <span>Acompanhamento</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>relatorio" id="" ><i class='fa fa-bar-chart'></i> <span>Relatórios</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>documentos" id="" ><i class="fa fa-file"></i> <span>Documentos</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>suporte" id="" ><i class="fa fa-envelope-o"></i> <span>Suporte e Fale Conosco</span></a></li>
                </ul>
                <?php
            } else {
            ?><!-- Menu AUTENTICADO ESTADUAL-->
                <ul class="sidebar-menu">
                    <li class="header">NAVEGAÇÃO</li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>principal" id=""><i class='fa fa-home'></i> <span>Inicio</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>relatorio" id="" ><i class='fa fa-bar-chart'></i> <span>Relatórios</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>documentos" id="" ><i class="fa fa-file"></i> <span>Documentos</span></a></li>
                    <li id="painelMenu"><a href="<?php echo host_url(); ?>suporte" id="" ><i class="fa fa-envelope-o"></i> <span>Suporte e Fale Conosco</span></a></li>
                </ul>
             <?php
            }
        } else {
            ?>
            <!-- Menu NÃO AUTENTICADO-->
            <ul class="sidebar-menu">
                <li class="header">NAVEGAÇÃO</li>
                <li id="painelMenu"><a href="<?php echo host_url(); ?>relatorio" id="" ><i class='fa fa-bar-chart'></i> <span>Relatórios</span></a></li>
                <li id="painelMenu"><a href="<?php echo host_url(); ?>documentos" id="" ><i class="fa fa-file"></i> <span>Documentos</span></a></li>
                <li id="painelMenu"><a href="<?php echo host_url(); ?>suporte" id="" ><i class="fa fa-envelope-o"></i> <span>Suporte e Fale Conosco</span></a></li>
            </ul>
            <?php
            }
        ?>
    </section>
</aside>
