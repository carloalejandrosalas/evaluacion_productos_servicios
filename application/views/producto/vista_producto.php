    <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered table-condensed table-striped table-hover" id="data">
            <h1>Productos de <span class="text-primary">AT&T</span></h1>
            <br>
            <thead>
              <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Codigo de barras</th>
                <th>Foto</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Descripcion</th>
              <th>Codigo de barras</th>
              <th>Foto</th>
              <th>Acciones</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($producto as $valor): ?>
                <tr>
                  <td><?php echo $valor['producto']; ?></td>
                  <td>$<?php echo $valor['precio']; ?></td>
                  <td><?php echo substr($valor['descripcion'],0,30).".."; ?></td>
                  <td><?php echo $valor['codigo_barras']; ?></td>
                  <td><img width="50px" height="50px" src="<?php echo base_url();?>fotos/<?php echo $valor['foto'];?>" /></td>
                  <td>
                    <div class="row">
                          <div class="col-xs-12 col-md-4">
                                <a class="btn boton-primario btn-block" href="<?php echo base_url();?>index.php/producto/consulta/<?php echo $valor['codigo_barras']?>"><i class="fa fa-search"></i></a>
                          </div>
                          <div class="col-xs-12 col-md-4">
                                <a class="btn btn-warning btn-block" href="<?php echo base_url();?>index.php/producto/modificar/<?php echo $valor['codigo_barras']?>"><i class="fa fa-pencil"></i></a>
                          </div>
                          <div class="col-xs-12 col-md-4">
                                <a class="btn btn-danger btn-block" href="<?php echo base_url();?>index.php/producto/baja/<?php echo $valor['codigo_barras']?>"><i class="fa fa-times"></i></a>
                          </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

<script src="<?php echo base_url()?>assets/js/tabla.js" charset="utf-8"></script>
<!-- Modal -->
