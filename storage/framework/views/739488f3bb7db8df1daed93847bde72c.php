<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0"><?php echo e(__('Travel Package')); ?></h1>
                    <a href="<?php echo e(route('admin.travel_packages.create')); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $travel_packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($travel_package->type); ?></td>
                                        <td><?php echo e($travel_package->location); ?></td>
                                        <td><?php echo e($travel_package->price); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.travel_packages.edit', [$travel_package])); ?>" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>              
                                            <form onclick="return confirm('are you sure ?');" class="d-inline-block" action="<?php echo e(route('admin.travel_packages.destroy', [$travel_package])); ?>" method="post">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>                              
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            <?php echo e($travel_packages->links()); ?>

                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/admin/travel_packages/index.blade.php ENDPATH**/ ?>