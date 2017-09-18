<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <div class="panel panel default">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-expand"></i> Desplegar menu</a>
                <span class="navbar-text navbar-right">Sistema de evaluacion de servicios y productos</span>
              </div>
              <h1>Baja cliente</h1>
              <br>
                <p>
                  ¿Esta seguro de dar baja a <b>
                  <?php foreach ($cliente as $valor): ?>
                     <?php echo $valor['apellido_paterno']." ".$valor['apellido_materno']." ".$valor['nombre']." - ".$valor['telefono']; ?>?
                 </b></p>
                     <form class="form-horizontal" action="" method="post">
                         <input name="numero_baja" id="telefono_baja" type="hidden" value="<?php echo $valor['telefono']; ?>">
                         <input type="submit" href="cliente/baja" class="btn btn-danger" value="Si, dar de baja" />
                    </form>
                  <?php endforeach; ?>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
