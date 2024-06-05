<?php $__env->startSection('content'); ?>
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="<?php echo e(Storage::url($blog->image)); ?>" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle"><?php echo e($blog->title); ?></h2>
                  <h1 class="islands__title"><?php echo e(date('d M Y',strtotime($blog->created_at))); ?></h1>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!-- blog -->
      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
              <?php echo $blog->description; ?>

              <div class="blog__footer" style="margin-top: 2rem;">
                <div class="blog__reaction"><?php echo e(date('d M Y', strtotime($blog->created_at))); ?></div>
                <div class="blog__reaction">
                  <i class="bx bx-show"></i>
                  <span><?php echo e($blog->reads); ?></span>
                </div>
              </div>
            </div>
            <div class="package-travel">
              <h3>Favorite Places</h3>
              <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('blog.category', $category->slug)); ?>"><?php echo e($category->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              <h3 style="margin-bottom: 1rem">Popular Trip</h3>
              <?php $__currentLoopData = $travel_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="popular__card" style="margin-bottom: 1rem">
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
        </div>
      </section>

      <section class="blog" id="blog">
        <div class="blog__container container">
          <span class="section__subtitle" style="text-align: center"
            >Related Blog</span
          >
          <h2 class="section__title" style="text-align: center">
            Find The Best Places
          </h2>

          <div class="blog__content grid">
            <?php $__currentLoopData = $relatedBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="blog__card">
              <div class="blog__image">
                <img src="<?php echo e(Storage::url($relatedBlog->image)); ?>" alt="" class="blog__img" />
                <a href="<?php echo e(route('blog.show', $relatedBlog->slug)); ?>" class="blog__button">
                  <i class="bx bx-right-arrow-alt"></i>
                </a>
              </div>

              <div class="blog__data">
                <h2 class="blog__title"><?php echo e($relatedBlog->title); ?></h2>
                <p class="blog__description">
                  <?php echo e($relatedBlog->excerpt); ?>

                </p>

                <div class="blog__footer">
                  <div class="blog__reaction"><?php echo e(date('d M Y', strtotime($relatedBlog->crated_at))); ?></div>
                  <div class="blog__reaction">
                    <i class="bx bx-show"></i>
                    <span><?php echo e($relatedBlog->reads); ?></span>
                  </div>
                </div>
              </div>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-alt'); ?>
<style>
  blockquote {
    border-left: 8px solid #b4b4b4;
    padding-left: 1rem;
  }
  .blog__detail ul li {
    list-style: initial;
  }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/blogs/show.blade.php ENDPATH**/ ?>