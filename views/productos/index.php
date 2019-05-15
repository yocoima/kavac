<aside id="registro">
<h3 class="text-center" >Gestion de Productos</h3>
<hr>

<div class="container">
  <div class="row">
    <div class="col">

      <?php if(isset($edit) && isset($producto_edit)): ?>
      <h4>Editar Producto <?=$producto_edit->descripcion?></h4>
      <?php $url_acction= base_url."productos/editar=&id".$producto_edit->id;?>
      <?php else:?>
      <h4>Ingresar Nuevos Productos</h4>
      <?php $url_acction= base_url."productos/ingresar";?>
      <?php endif;?>
      <hr><br>

      <div class="ingreso">
        <form action="<?=$url_acction?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="descripcion">Descripcion del Producto</label>
            <input type="text"
                   name="descripcion"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Descripcion"
                   value="<?=isset($producto_edit) && is_object($producto_edit) ? $producto_edit->descripcion :'';?>">
          </div>
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text"
                   name="precio"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Precio"
                   value="<?=isset($producto_edit) && is_object($producto_edit) ? $producto_edit->precio :'';?>">
          </div>
          <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text"
                   name="stock"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Stock"
                   value="<?=isset($producto_edit) && is_object($producto_edit) ? $producto_edit->stock :'';?>">

          </div>
          <div class="form-group">
            <label for="oferta">Oferta</label>
            <input type="text"
                   name="oferta"
                   class="form-control"
                   id="exampleInputPassword1"
                   placeholder="Oferta"
                   value="<?=isset($producto_edit) && is_object($producto_edit) ? $producto_edit->oferta :'';?>">
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label>
            <?php if(isset($producto_edit) && is_object($producto_edit) && !empty($producto_edit->imagen)): ?>
                    <img src="<?=base_url?>uploads/img<?=$producto_edit->imagen?>" class="img-thumbnail">
            <?php endif; ?>
            <input type="file"
                   name="imagen"
                   class="form-control"
                   id="exampleInputPassword1"
                   placeholder="Imagen">
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
      <?php if(isset($_SESSION['delete']) && ($_SESSION['delete']) == 'complete'):?>
          <div class="toast alert-success" id="toast1" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
              Producto eliminado correctamente.
          </div>
        <script>
        $(document).ready(function(){
          $('.toast').toast('show');
        });
        </script>
      <?php endif; ?>
      <?php if(isset($_SESSION['delete']) && ($_SESSION['delete']) == 'failed'):?>
        <div class="toast alert-success" id="toast2" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            Error al eliminar el producto.
        </div>
      <script>
      $(document).ready(function(){
        $('.toast').toast('show');
      });
      </script>
      <?php endif; ?>
      <?php Utils::deleteSession('delete'); ?>
      <div class="">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Oferta</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($prod = $productos->fetch_object()): ?>
              <tr>
                <td style="text-transform: capitalize;"><?= $prod->descripcion; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->precio; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->stock; ?></td>
                <td style="text-transform: capitalize;"><?= $prod->oferta; ?></td>
                <td><a href="<?=base_url?>productos/editar&id=<?=$prod->id;?>" class="btn btn-secondary btn-sm">Editar</a> </td>
                <td><a href="<?=base_url?>productos/eliminar&id=<?=$prod->id;?>" class="btn btn-danger btn-sm">Eliminar</a> </td>
              </tr>

            </tbody>
            <?php endwhile; ?>
          </table>
        </div>

    </div>
  </div>
</div>
</aside>
