<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div id="logo">
    <img src="<?=base_url?>assets/img/logo.png" alt="Logo Kavac">
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="list-group list-group-horizontal">
            <li class="list-group">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            </li>
            <li class="list-group">
              <button class="form-control mr-sm-2 btn btn-primary" type="submit">Buscar</button>
            </li>
            <li class="list-group">
              <a class="form-control mr-sm-2 btn btn-primary" href="<?=base_url?>usuario/registro" role="button">Registro</a>
            </li>
            <li class="list-group">
              <a class="form-control mr-sm-2 btn btn-outline-dark" href="<?=base_url?>usuario/logout" role="button">Logout</a>
            </li>
        </form>
    </ul>
  </div>
</nav>
