              <div class="row">
                  <div class="col-lg-12">
                    <table class="table table-bordered table-condensed table-striped table-hover" id="data">
                      <h1>Clientes de <span class="text-primary">AT&T</span></h1>
                      <br>
                      <thead>
                        <tr>
                          <th>Apellido paterno</th>
                          <th>Apellido materno</th>
                          <th>Nombre</th>
                          <th>Numero</th>
                          <th>Domicilio</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Apellido paterno</th>
                          <th>Apellido materno</th>
                          <th>Nombre</th>
                          <th>Numero</th>
                          <th>Domicilio</th>
                          <th>Acciones</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach ($cliente as $valor): ?>
                          <tr>
                            <td><?php echo $valor['apellido_paterno']; ?></td>
                            <td><?php echo $valor['apellido_materno']; ?></td>
                            <td><?php echo $valor['nombre']; ?></td>
                            <td><?php echo $valor['telefono']; ?></td>
                            <td><?php echo substr($valor['direccion'],0,30).".."; ?></td>
                            <td>
                              <div class="row">
                                    <div class="col-xs-12 col-md-4">
                                          <a class="btn boton-primario btn-block" href="<?php echo base_url();?>index.php/cliente/consulta/<?php echo $valor['telefono']?>"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                          <a class="btn btn-warning btn-block" href="<?php echo base_url();?>index.php/cliente/modificar/<?php echo $valor['telefono']?>"><i class="fa fa-pencil"></i></a>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                          <a class="btn btn-danger btn-block" href="<?php echo base_url();?>index.php/cliente/baja/<?php echo $valor['telefono']?>"><i class="fa fa-user-times"></i></a>
                                    </div>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
    </div>
<script src="<?php echo base_url()?>assets/js/tabla.js" charset="utf-8"></script>
<!-- Modal -->
