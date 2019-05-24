<aside id="registro">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 1200px; height: 400px;" src="<?=base_url?>uploads/img/promo1.jpg" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width: 1200px; height: 400px;" src="<?=base_url?>uploads/img/dispensador.jpg" alt="...">
    </div>
    <div class="carousel-item">
      <img style="width: 1200px; height: 400px;" src="<?=base_url?>uploads/img/bidon_10.jpg" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr>

  <h1 style="text-align: center;">Nuestros productos</h1>
  <br><hr>

  <!-- Button trigger modal -->
<?php while ($prod = $productos->fetch_object()): ?>

  <div class="product">
    <div class="card" style="width: 15rem;">
      <?php if($prod->imagen != null): ?>
  		<img style="width: 230px; height:230px;" class="card-img-top" src="<?=base_url?>uploads/img/<?=$prod->imagen ?>">
      <?php else: ?>
      <img style="width: 230px; height:230px;" class="card-img-top" src="<?=base_url?>assets/img/img_no_disponible.jpeg" />
      <?php endif; ?>
      <h5 style="text-transform: capitalize;"><?= $prod->descripcion; ?></h5>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg#myModal<?=$prod->id ?>">
        Ver Mas
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="myModal<?=$prod->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 style="text-transform: capitalize; text-align: left;" class="modal-title" id="exampleModalLabel"><?= $prod->descripcion; ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php if($prod->imagen != null): ?>
          		<img style="width: 600px; height:600px;" src="<?=base_url?>uploads/img/<?=$prod->imagen ?>">
              <?php else: ?>
              <img style="width: 600px; height:600px;" src="<?=base_url?>assets/img/img_no_disponible.jpeg" />
              <?php endif; ?>
              <h6 style="text-transform: capitalize; text-align: left;" >Precio :<?= $prod->precio; ?></h6>
              <h6 style="text-transform: capitalize; text-align: left;" >Estock :<?= $prod->stock; ?></h6>
              <h6 style="text-transform: capitalize; text-align: left;" >Oferta :<?= $prod->oferta; ?></h6>
              <a href="<?=base_url?>carrito/añadir&id=<?=$prod->id?>" class="btn btn-outline-primary">Comprar</a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>

</aside>
