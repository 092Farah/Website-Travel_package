<?php $__env->startSection('content'); ?>
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
          <?php $__currentLoopData = $travel_package->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="islands swiper-slide">
              <img src="<?php echo e(Storage::url($gallery->images)); ?>" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h2 class="islands__subtitle">Explore</h2>
                  <h1 class="islands__title"><?php echo e($gallery->name); ?></h1>
                </div>
              </div>
            </section>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
          <div class="controls__container swiper-wrapper">
           <?php $__currentLoopData = $travel_package->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img
              src="<?php echo e(Storage::url($gallery->images)); ?>"
              alt=""
              class="controls__img swiper-slide"
            />
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
            <?php echo $travel_package->description; ?>

            </div>
            <div class="package-travel">
              <h3>Booking Now</h3>
              <div class="card">
                <form action="<?php echo e(route('booking.store')); ?>" method="post">
                  <?php echo csrf_field(); ?> 
                  <input type="hidden" name="travel_package_id" value="<?php echo e($travel_package->id); ?>">
                  <input type="text" name="name" placeholder="Your Name" />
                  <input type="email" name="email" placeholder="Your Email" />
                  <input type="number" name="number_phone" placeholder="Your Number" />
                  <input
                    placeholder="Pick Your Date"
                    class="textbox-n"
                    type="text"
                    name="date"
                    onfocus="(this.type='date')"
                    id="date"
                  />
                  <button type="submit" class="button button-booking">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center"
            >Package Travel</span
          >
          <h2 class="section__title" style="text-align: center">
            The Best Tour For You
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

    <?php if(session()->has('message')): ?>
      <div id="alert" class="alert">
        <?php echo e(session()->get('message')); ?>

        <i class='bx bx-x alert-close' id="close"></i>
      </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style-alt'); ?>
<style>
  .alert {
    position:absolute;
    top: 120px;
    left:0;
    right:0;
    background-color: var(--second-color);
    color: white;
    padding: 1rem;
    width: 70%;
    z-index: 99;
    margin: auto;
    border-radius: .25rem;
    text-align: center;
  }

  .alert-close {
    font-size: 1.5rem;
    color: #090909;
    position: absolute;
    top: .25rem;
    right: .5rem;
    cursor: pointer;
  }
  blockquote {
    border-left: 8px solid #b4b4b4;
    padding-left: 1rem;
  }
  .blog__detail ul li {
    list-style: initial;
  }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script-alt'); ?>
<script>
      let galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        slidesPerView: 0,
      });

      let galleryTop = new Swiper('.gallery-top', {
        effect: 'fade',
        loop: true,

        thumbs: {
          swiper: galleryThumbs,
        },
      });

      const close = document.getElementById('close');
      const alert = document.getElementById('alert');
      if(close) {
        close.addEventListener('click', function() {
          alert.style.display = 'none';
        })
      }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/travel_packages/show.blade.php ENDPATH**/ ?>