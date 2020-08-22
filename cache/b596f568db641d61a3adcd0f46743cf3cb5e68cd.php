<section class="main__page-about container py-5 my-5">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <div class="about__title mb-5 text-uppercase">
                <h1>Sobre Nós</h1>
            </div>
            <div class=" about__info d-flex">
                <div class="col-md-12">
                    <div class="about__info-text row">
                        <div class="col-md-6">
                            <p class="lead">
                                <?php $__currentLoopData = $aboutPage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($about->description); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="about__info-image">
                                <?php $__currentLoopData = $aboutPage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                
                                <img src="assets/images/<?php echo e($about->photo); ?>"
                                    alt="Bruxo's Bar - Boteco Baiano em Minas Gerais" class="img-fluid">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section><?php /**PATH C:\xampp\htdocs\projetos\restaurante\app\views/includes/site/about.blade.php ENDPATH**/ ?>