<aside id="registro">
  <?php while ($prod = $productos->fetch_object()): ?>
  <div class="container">
    <div class="row">
      <div class="col-8">
          <div class="card" style="width: 15rem;">
            <div class="card" style="width: 15rem;">
              <img src="<?=base_url?>assets/img/producto.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 style="text-transform: capitalize;"><?= $prod->descripcion; ?></h5>
                <h6 style="text-transform: capitalize;"><?= $prod->precio; ?></h6>
                <h6 style="text-transform: capitalize;"><?= $prod->stock; ?></h6>
                <h6 style="text-transform: capitalize;"><?= $prod->oferta; ?></h6>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</aside>
