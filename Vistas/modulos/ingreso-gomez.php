<div class="login-box">
<div class="login-logo">
    <a href=""><b>Con Ingles</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar como Gomez Palacio</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Usuario-Ing" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Clave-Ing" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

     

        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    <?php 
        $ingreso = new GomezPalacioC();
        $ingreso -> IngresarGomezPalacioC();      
    
    ?>

    
    </form>

    
  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->