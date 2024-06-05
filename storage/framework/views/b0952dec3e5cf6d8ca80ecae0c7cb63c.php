<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0"><?php echo e(__('Form Create')); ?></h1>
                    <a href="<?php echo e(route('admin.travel_packages.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action="<?php echo e(route('admin.travel_packages.store')); ?>">
                            <?php echo csrf_field(); ?> 
                            <div class="form-group row border-bottom pb-4">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" value="<?php echo e(old('type')); ?>" id="type" placeholder="example: 4D5N">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="Location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                <input text="text" class="form-control" id="Location" name="location" value="<?php echo e(old('location')); ?>" placeholder="example: Bali, Indonesia">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                <input text="number" class="form-control" id="price" name="price" value="<?php echo e(old('price')); ?>" placeholder="example: 300">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" name="type" id="description" cols="30" rows="7" placeholder="Description text..."><?php echo e(old('description')); ?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
.ck-editor__editable_inline {
    min-height: 200px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PEMWEB LARAVEL\travel-website-laravel\resources\views/admin/travel_packages/create.blade.php ENDPATH**/ ?>