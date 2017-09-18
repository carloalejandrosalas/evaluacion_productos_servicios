              <div class="row">
                  <div class="col-lg-12">
                          <?php foreach ($cliente as $llave => $valor): ?>
                          <h1>Informacion de <span class="text-info"><?php echo $valor['nombre'];?></span></h1>
                          <br>
                          <div class="row">
                           <div class="col-xs-6">
                             <div class="col-xs-11">
                                <label>Apellido paterno:</label>
                                <p><?php echo $valor['apellido_paterno']; ?></p>
                             </div>
                           </div>
                           <div class="col-xs-6">
                             <div class="col-xs-11">
                                <label>Apellido materno:</label>
                                <p><?php echo $valor['apellido_materno']; ?></p>
                             </div>
                           </div>
                           </div>
                           <br>
                           <div class="row">
                             <div class="col-xs-6">
                                <div class="col-xs-11">
                                  <label>Nombre:</label>
                                  <p><?php echo $valor['nombre']; ?></p>
                                </div>
                             </div>
                             <div class="col-xs-6">
                                <div class="col-xs-11">
                                  <label>Telefono:</label>
                                  <p><?php echo $valor['telefono']; ?></p>
                                </div>
                             </div>
                           </div>
                           <br>
                           <div class="row">
                             <div class="col-xs-6">
                                <div class="col-xs-11">
                                  <label>Domicilio:</label>
                                  <p><?php echo $valor['direccion']; ?></p>
                                </div>
                             </div>
                           </div>
                       <?php endforeach; ?>
                  </div>
              </div>
