<aside id="registro">
<h3 class="text-center" >Gestion de Productos</h3>
<hr>

<div class="container">
  <div class="row">
    <div class="col">
      <h4>Ingresar Productos</h4>
      <hr><br>

      <div class="ingreso">
        <form action="<?=base_url?>productos/ingresar" method="POST">
          <div class="form-group">
            <label for="Nombre">Descripcion del Producto</label>
            <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripcion">
          </div>
          <div class="form-group">
            <label for="Apellido">Precio</label>
            <input type="text" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Precio">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stock">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Oferta</label>
            <input type="text" name="oferta" class="form-control" id="exampleInputPassword1" placeholder="Oferta">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Imagen</label>s
            <input type="text" name="imagen" class="form-control" id="exampleInputPassword1" placeholder="Imagen">
          </div>
          <button type="submit" value="ingresar" class="btn btn-primary">Ingresar</button>
        </form>
      </div>
      <br>
      <hr>

    </div>
    <div class="col">
      <h4>Productos Cargados en Sistema</h4>
      <hr><br>
      <div class="">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Oferta</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($prod = $productos->fetch_object()): ?>
              <tr>
                <td style="text-transform: capitalize;"><?= $prod->descripcion; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->precio; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->stock; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->oferta; ?></td>
              </tr>

            </tbody>
            <?php endwhile; ?>
          </table>
        </div>

    </div>
  </div>
</div>
</aside>
