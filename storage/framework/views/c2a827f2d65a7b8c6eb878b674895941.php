<?php $__env->startSection('content'); ?>
<div >
    <h3>Create Category</h3>
    <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-success my-1">
            Home
    </a>
    <?php echo $__env->make('categories/categoryForm', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/categories/create.blade.php ENDPATH**/ ?>