      <div class="row">
            <div class="col-lg-12">
                <h1>Modificar cliente</h1>
                <br>
                <form class="form-horizontal"  id="modificar" method="post">
                  <div class="row">
                      <?php foreach ($cliente as $valor): ?>
                    <div class="col-xs-6">
                      <div class="col-xs-11">
                        <label>Apellido paterno:</label>
                        <input class="form-control" type="text" id="ap_modificar" name="ap_modificar" value="<?php echo $valor['apellido_paterno']?>" required="">
                      </div>
                    </div>

                    <div class="col-xs-6">
                      <div class="col-xs-11">
                        <label>Apellido materno:</label>
                        <input class="form-control" type="text" id="am_modificar" name="am_modificar" value="<?php echo $valor['apellido_materno']?>" required="">
                      </div>
                    </div>
                  </div><!-- row -->
                  <br>

                  <div class="row">
                    <div class="col-xs-6">
                      <div class="col-xs-11">
                        <label>Nombre:</label>
                        <input class="form-control" type="text" id="nombre_modificar" name="nombre_modificar" value="<?php echo $valor['nombre']?>" required="">
                      </div>
                    </div>

                    <div class="col-xs-6">
                      <div class="col-xs-11">
                        <label>Telefono:</label>
                        <input class="form-control" type="number" id="numero_modificar" name="numero_modificar" value="<?php echo $valor['telefono']?>" required="">
                      </div>
                    </div>
                  </div><!-- row-->
                  <br>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="col-xs-11">
                        <label>Direccion:</label>
                        <textarea class="form-control" type="text" id="direccion_modificar" name="direccion_modificar" required="" rows="8" cols="80"><?php echo $valor['direccion']?></textarea>
                      </div>
                    </div>
                  </div><!-- row-->
                  <br>
                  <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-11">
                            <input class="btn btn-warning" type="submit" name="enviar_modificar" value="Modificar">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>


<!-- /#page-content-wrapper -->
