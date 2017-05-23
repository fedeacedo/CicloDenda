 

<?php $__env->startSection('content'); ?>
	
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td><?php echo e(Auth::user()->name . " " . Auth::user()->last_name); ?></td></tr>
					<tr><td>Usuario:</td><td><?php echo e(Auth::user()->user); ?></td></tr>
					<tr><td>Correo:</td><td><?php echo e(Auth::user()->email); ?></td></tr>
					<tr><td>Dirección:</td><td><?php echo e(Auth::user()->address); ?></td></tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e(number_format($item->price,2)); ?> €</td>
							<td><?php echo e($item->quantity); ?></td>
							<td><?php echo e(number_format($item->price * $item->quantity,2)); ?> €</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: <?php echo e(number_format($total, 2)); ?> €
					</span>
				</h3><hr>
				<p>
					<a href="<?php echo e(route('cart-show')); ?>" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>

					<a href="<?php echo e(route('payment')); ?>" class="btn btn-warning">
						Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
					</a>
				</p>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>