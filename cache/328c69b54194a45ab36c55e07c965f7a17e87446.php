<section class="main__page carousel slide container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cardápio</h1>
            </div>
        </div>
    </div>
    <div class="container pt-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mt-3">
                <a href="#">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="assets/images/cardapio/<?php echo e($product->photo); ?>" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="text-center"><?php echo e($product->subtitle); ?></h6>
                            <h3 class="text-center">
                                <a href="#"><?php echo e($product->title); ?></a>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\projetos\restaurante\app\views/includes/site/menu.blade.php ENDPATH**/ ?>