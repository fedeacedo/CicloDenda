<?php $__env->startSection('content'); ?>

	<div class="products">
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="product">
				<h3><?php echo e($product->name); ?></h3><hr>
				<img src="<?php echo e($product->image); ?>" width="200">
				<div class="product-info">
					<p><?php echo e($product->extract); ?></p>
					<p>Precio: <?php echo e(number_format($product->price,2)); ?> €</p>
					<p> 
						<a href="#">Comprar</a>
						<a href="<?php echo e(route('product-detail', $product->slug)); ?>">Leer más</a> 
					</p>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>