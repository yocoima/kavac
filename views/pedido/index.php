<aside id="registro">

<?php if (isset($_SESSION['login'])): ?>
<h1>Comfirmar pedido</h1>
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
