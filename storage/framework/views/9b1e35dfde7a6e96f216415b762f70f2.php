<?php $__env->startSection('content'); ?>
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="<?php echo e(asset('frontend/assets/img/bali.jpg')); ?>" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title">Package Travel</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">All</span>
          <h2 class="section__title" style="text-align: center">
            Package Travel
          </h2>

          <div class="popular__all">
            <?php $__currentLoopData = $travel_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="popular__card">
                <a href="<?php echo e(route('travel_package.show', $travel_package->slug)); ?>">
                    <img
                    src="<?php echo e(Storage::url($travel_package->galleries->first()->images)); ?>"
                    alt=""
                    class="popular__img"
                    />
                    <div class="popular__data">
                    <h2 class="popular__price"><span>$</span><?php echo e(number_format($travel_package->price,2)); ?></h2>
                    <h3 class="popular__title"><?php echo e($travel_package->location); ?></h3>
                    <p class="popular__description"><?php echo e($travel_package->type); ?></p>
                    </div>
                </a>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/travel_packages/index.blade.php ENDPATH**/ ?>