<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/master.css">
    <script src="<?php echo base_url()?>/assets/js/jquery.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js" charset="utf-8"></script>
    <title>Red AT&T</title>
  </head>
  <body>
  <div class="container">
    
    <div class="text-center">
      <img src="<?php echo base_url()?>/assets/fotos_recursos/logo_at&t.png" width="150px">
    </div>


    <form id="iniciar-sesion"  method="post">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" id="username" name="username" class="form-control" placeholder="Usuario" required="" autofocus="">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <input type="submit" name="enviar" class="btn boton-primario btn-block" value="Iniciar sesion">
        </div>
      </div>
    </form>
    
  </div>
  <script>
    $('#iniciar-sesion').submit(function(event){
      event.preventDefault();

      var data = {
        username:$('#username').val(),
        password:$('#password').val()
      };

      console.log(data);

      $.post('<?php echo base_url()?>login/proceso',data,function(respuesta){
        alert(respuesta);
        if(respuesta == 1){
          alert('Bienvenido');
        }
        else{
          alert('verifique su nombre de usuario o contaseña que esten correctos');
        }
      });
    });
  </script>
</body>
</html>
