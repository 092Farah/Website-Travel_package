<?php $__env->startSection('content'); ?>
<!--==================== HOME ====================-->
<section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img
                src="<?php echo e(asset('frontend/assets/img/blog-hero.jpg')); ?>"
                alt=""
                class="islands__bg"
              />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Our</h2>
                  <h1 class="islands__title">Blog</h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!-- blog -->
      <section class="blog section" id="blog">
        <div class="blog__container container">
          <span class="section__subtitle" style="text-align: center"
            >All Blog</span
          >
          <h2 class="section__title" style="text-align: center">
            Find The Best Travel Story
          </h2>

          <div class="blog__content grid">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="blog__card">
                <div class="blog__image">
                    <img src="<?php echo e(Storage::url($blog->image)); ?>" alt="" class="blog__img" />
                    <a href="<?php echo e(route('blog.show',$blog->slug)); ?>" class="blog__button">
                    <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>

                <div class="blog__data">
                    <h2 class="blog__title"><?php echo e($blog->title); ?></h2>
                    <p class="blog__description">
                        <?php echo e($blog->excerpt); ?>

                    </p>

                    <div class="blog__footer">
                    <div class="blog__reaction"><?php echo e(date('d M Y', strtotime($blog->created_at))); ?></div>
                    <div class="blog__reaction">
                        <i class="bx bx-show"></i>
                        <span><?php echo e($blog->reads); ?></span>
                    </div>
                    </div>
                </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/blogs/index.blade.php ENDPATH**/ ?>