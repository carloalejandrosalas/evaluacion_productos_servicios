<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/master.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/js/jquery.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
    <link href="<?php echo base_url()?>assets/css/simple-sidebar.css" rel="stylesheet">
    <title>Red AT&T</title>
  </head>
  <body>
    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a class="navbar-brand" href="bienvenido">
                            <span>
                                <img width="50px" src="<?php echo base_url()?>assets/fotos_recursos/logo_asside.jpg" alt="Logo"> AT&T
                            </span>
                        </a>
                    </li>
                    <li class="sidebar-brand">
                        <p class="texto-primario">
                          <i class="fa fa-hand-peace-o"></i>  Bienvenido <?php echo  $this->session->userdata('username'); ?></b>
                        </p>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/cliente"><i class="fa fa-users"></i> Clientes</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/producto"><i class="fa fa-mobile fa-lg"></i> Productos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-briefcase"></i> Servicios</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o"></i> Encuestas</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money"></i> Ventas</a>
                    </li>
                    <li>
                        <a class="text-primary" href="<?php echo base_url();?>index.php/login/logout"><i class="fa fa-sign-out"></i> Cerrar sesion</a>
                    </li>

                </ul>
            </div>
            <div id="page-content-wrapper">
                      <div class="container-fluid">
                        <div class="panel panel default">
                          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-expand"></i> Desplegar menu</a>
                          <?php if ($titulo=='cliente'): ?>
                                <a href="cliente/alta" class="btn "><i class="fa fa-user-plus"></i> Nuevo cliente</a>
                          <?php endif; ?>
                          <?php if ($titulo=='producto'): ?>
                                <a href="producto/alta" class="btn "><i class="fa fa-mobile fa-lg"></i> Nuevo producto</a>
                          <?php endif; ?>

                          <span class="navbar-text navbar-right">Sistema de evaluacion de servicios y productos</span>
                        </div>
