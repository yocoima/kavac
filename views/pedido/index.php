<aside id="registro">

<?php if(isset($_SESSION['login']) && ($_SESSION['direccion']) == "existe"):?>
<h1>Sus direcciones existentes </h1>
<form class="" action="index.html" method="post">
	<?php while ($dir = $pedidos->fetch_object()): ?>
	<div class="form-check">
		<input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="<?= $dir->id; ?>" aria-label="...">
		<strong> Comuna:</strong> <?= $dir->comuna; ?> <br>
		<strong>Calle o Av:</strong> <?= $dir->calle; ?> <br>
		<strong>Numero:</strong> <?= $dir->numero_calle; ?> <br>
		<strong>Piso o Casa:</strong> <?= $dir->numero_casa_apto; ?>
		<hr>
	</div>
<?php endwhile; ?>
<button type="submit" class="btn btn-primary">Usar esta direecion</button>	
</form>

<h1>Agregar una Nueva Direccion</h1>
<p>
	<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
</p>
<br/>

<h5>Dirección para el envio:</h5>
<form action="<?=base_url.'pedido/confirmar'?>" method="POST">
	<div class="form-group">
		<label for="comuna">Comuna</label>
		<input type="text" name="comuna" class="form-control" aria-describedby="emailHelp" placeholder="Comuna" required>
	</div>
	<div class="form-group">
		<label for="calle">Calle</label>
		<input type="text" name="calle" class="form-control" aria-describedby="emailHelp" placeholder="Calle" required>
	</div>
	<div class="form-group">
		<label for="numero">Numero</label>
		<input type="text" name="numero" class="form-control" aria-describedby="emailHelp" placeholder="Calle" required>
	</div>
	<div class="form-group">
		<label for="casa_apto">Casa o Apto</label>
		<input type="text" name="casa_apto"class="form-control" aria-describedby="emailHelp" placeholder="Casa o Apto" required>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php elseif (isset($_SESSION['login']) ):?>
<h1>Agregar Nueva Direccion</h1>
	<p>
		<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
	</p>
	<br/>

	<h5>Dirección para el envio:</h5>
  <form action="<?=base_url.'pedido/confirmar'?>" method="POST">
  <div class="form-group">
    <label for="comuna">Comuna</label>
    <input type="text" name="comuna" class="form-control" aria-describedby="emailHelp" placeholder="Comuna" required>
  </div>
  <div class="form-group">
    <label for="calle">Calle</label>
    <input type="text" name="calle" class="form-control" aria-describedby="emailHelp" placeholder="Calle" required>
  </div>
  <div class="form-group">
    <label for="numero">Numero</label>
    <input type="text" name="numero" class="form-control" aria-describedby="emailHelp" placeholder="Calle" required>
  </div>
  <div class="form-group">
    <label for="casa_apto">Casa o Apto</label>
    <input type="text" name="casa_apto"class="form-control" aria-describedby="emailHelp" placeholder="Casa o Apto" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php else: ?>
	<h1>Necesitas estar identificado</h1>
	<p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif; ?>

</aside>
