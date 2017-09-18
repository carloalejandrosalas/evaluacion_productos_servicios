              <div class="row">
                  <div class="col-lg-12">
                          <?php foreach ($producto as $llave => $valor): ?>
                          <h1>Informacion de <span class="text-info"><?php echo $valor['producto'];?></span></h1>
                          <br>
                          <div class="row">
                           <div class="col-xs-6">
                             <div class="col-xs-11">
                                <label>Nombre del producto:</label>
                                <p><?php echo $valor['producto']; ?></p>
                             </div>
                           </div>
                           <div class="col-xs-6">
                             <div class="col-xs-11">
                                <label>Precio:</label>
                                <p>$<?php echo $valor['precio']; ?></p>
                             </div>
                           </div>
                           </div>
                           <br>
                           <div class="row">
                             <div class="col-xs-6">
                                <div class="col-xs-11">
                                  <label>Descripcion</label>
                                  <p><?php echo $valor['descripcion']?></p>
                                </div>
                             </div>
                             <div class="col-xs-6">
                                 <div class="col-xs-11">
                                    <label>Codigo barras:</label>
                                    <p><?php echo $valor['codigo_barras']; ?></p>
                                  </div>
                             </div>
                        </div>
                           <br>
                           <div class="row">
                                 <div class="col-xs-6">
                                    <div class="col-xs-11">
                                      <label>Foto:</label>
                                      <p><img width="300px" height="300px" src="<?php echo base_url();?>fotos/<?php echo $valor['foto']; ?>" alt=""></p>
                                    </div>
                                 </div>
                           </div>
                       <?php endforeach; ?>
                  </div>
            </div>
