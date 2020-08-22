<section class="main__page-welcome text-center text-white d-flex flex-column justify-content-center">
	<?php $__currentLoopData = $flashyImageFound; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flashImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1 class="display-1 text-shadow"><?php echo e($flashImage->title); ?></h1>
    <h3 class="display-4 text-shadow"><?php echo e($flashImage->subtitle); ?></h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section><?php /**PATH C:\xampp\htdocs\projetos\restaurante\app\views/includes/site/welcome.blade.php ENDPATH**/ ?>