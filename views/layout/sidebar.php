<aside id="lateral">
  <h5>Incio de Sesion</h5>
  <hr>
  <div class="login">
  <?php if(!isset($_SESSION['login'])): ?>
    <form method="POST" action="<?=base_url?>usuario/login">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="clave" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php else: ?>
    <p style="text-transform: capitalize;"> Bienvenido <?= $_SESSION['login']->nombre?>  <?= $_SESSION['login']->apellido ?></p>
  <?php endif; ?>
  </div>
</aside>
