
<aside id="registro">
  <h5>Registro de Usuario</h5>
  <hr>
  <div class="login">
    <form action="<?=base_url?>usuario/save" method="POST">
      <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="Apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="clave" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" value="registrarse"class="btn btn-primary">Registrarse</button>
    </form>
  </div>
</aside>
