<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="<?php echo e(route('admin.profile.show')); ?>" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        <?php echo e(__('Dashboard')); ?>

                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        <?php echo e(__('Users')); ?>

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.bookings.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        <?php echo e(__('Booking')); ?>

                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('admin.travel_packages.index')); ?>" class="nav-link">
                    <i class="nav-icon fa fa-hotel"></i>
                    <p>
                        <?php echo e(__('Travel Package')); ?>

                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Blog
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.categories.index')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.blogs.index')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Blog</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar --><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>