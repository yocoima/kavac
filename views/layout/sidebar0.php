<aside id="lateral">
  <?php if(!isset($_SESSION['login']) && (isset($_SESSION['admin'])) && ($_SESSION['admin'])): ?>
    <strong>Bienvenido Administrador</strong>
  <?php endif; ?>

  <?php if(!isset($_SESSION['login'])): ?>
  <h5>Incio de Sesion</h5>
  <hr>
  <?php if(!isset($_SESSION['login']) && (isset($_SESSION['error_login'])) && ($_SESSION['error_login']) == 'Indentifiacion fallida'): ?>
    <strong>Login Fallido: Usario o Contraseña Incorrecta</strong>
  <?php endif; ?>
  <?php Utils::deleteSession('error_login'); ?>
  <div class="login">
    <form method="POST" action="<?=base_url?>usuario/login">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="clave" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary">Iniciar</button>
    </form>
    <br>

  <?php else: ?>
    <p style="text-transform: capitalize;"> Bienvenido <?= $_SESSION['login']->nombre?>  <?= $_SESSION['login']->apellido ?></p>
  <?php endif; ?>
  </div>
  <ul>
  <?php if (isset($_SESSION['admin'])): ?>
    <li> <a href="<?=base_url?>productos/index">Ingresar Productos</a> </li>
    <li> <a href="<?=base_url?>vitrina/index">Vitrina de mis productos</a> </li>
    <li> <a href="#">Gesionar Categorias</a> </li>
  <?php endif; ?>
    <li> <a href="#">Mis pedidos</a> </li>
    <li> <a href="<?=base_url?>usuario/logout">Cerrar Sesion</a> </li>
  </ul>
</aside>
