<aside id="registro">

<h1>Carrito de la compra</h1>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<table class="table">
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Accion</th>
		<th>Eliminar</th>
	</tr>
	<?php
		foreach($carrito as $indice => $elemento):
		$prod = $elemento['producto'];
	?>

	<tr>
		<td>
			<?php if ($prod->imagen != null): ?>
				<img style="width: 100px; height:100px;" class="img-thumbnail" src="<?= base_url ?>uploads/img/<?= $prod->imagen ?>"/>
			<?php else: ?>
				<img style="width: 100px; height:100px;" class="img-thumbnail" src="<?= base_url ?>assets/img/img_no_disponible.jpeg"/>
			<?php endif; ?>
		</td>
		<td>
      <?=$prod->descripcion?>
		</td>
		<td>
			<?=$prod->precio?> $
		</td>
		<td>
			<?=$elemento['unidades']?>
		</td>
    <td>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group btn-group-sm" role="group" aria-label="First group">
          <a href="<?=base_url?>carrito/up&index=<?=$indice?>" type="button" class="btn btn-secondary">+</a>
          <a href="<?=base_url?>carrito/down&index=<?=$indice?>" type="button" class="btn btn-secondary">-</a>
        </div>

    </td>
		<td>
			<a href="<?=base_url?>carrito/borrarUno&index=<?=$indice?>" class="button button-carrito button-red">Quitar producto</a>
		</td>
	</tr>

	<?php endforeach; ?>
</table>
<hr>
<div>
  <a href="<?=base_url?>carrito/borrarTodos" class="button button-delete button-red">Vaciar carrito</a>
</div>
<br>
<div>
	<?php $stats = Utils::statsCarrito(); ?>
	<h4>Precio total: <?=$stats['total']?> $</h4>
</div>
<div>
  <a href="<?=base_url?>pedido/index" class="btn btn-secondary">Confirmar pedido</a>
</div>

<br/>

<?php else: ?>
	<p>El carrito está vacio, añade algun producto</p>
<?php endif; ?>

</aside>
