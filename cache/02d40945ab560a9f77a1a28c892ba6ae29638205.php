<footer class="footer__page container-fluid bg-warning py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer__page-top row mb-5">
                    <div class="footer__page-social col-md-3">
                        <h4>Siga-nos</h4>
                        <div class="footer__page-links">
                            <a href="#">
                                <img src="assets/images/social-icons/facebook.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/images/social-icons/twitter.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/images/social-icons/instagram.svg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="footer__page-contact col-md-3">
                        <h4>Contato</h4>
                        <div class="footer__page-contact--info">
                            <?php $__currentLoopData = $addressFound; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($address->street); ?>, <?php echo e($address->number); ?></span><br>
                            <span><?php echo e($address->city); ?>, <?php echo e($address->state); ?></span><br>
                            <span>Tel.: <?php echo e($address->phone); ?></span><br>
                            <span><?php echo e($address->email); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="footer__page-hours col-md-3">
                        <h4>Horários</h4>
                        <div class="footer__page-hours--info">
                            <span class="text-info font-weight-bold">(Aberto Agora)</span><br>
                            <?php $__currentLoopData = $schedulesFound; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($schedule->day); ?>: <?php echo e($schedule->opening); ?> - <?php echo e($schedule->closing); ?></span><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="footer__page-location col-md-3">
                        <h4>Como chegar</h4>
                        <div class="footer__page-location--info">
                            Mapa
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer__page-bottom">
                    <p class="lead text-center">2020 &copy; Nem todos os direitos são reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\xampp\htdocs\projetos\restaurante\app\views/includes/site/footer.blade.php ENDPATH**/ ?>