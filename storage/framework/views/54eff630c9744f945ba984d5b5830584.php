

<?php $__env->startSection('title'); ?>
    <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <h1><?php echo e($post->title); ?></h1>

    <div class="post-img">
        <img src="<?php echo e($post->imageUrl); ?>" class="img-fluid card" width="100px" height="200px" alt="">
    </div>
    <strong><?php echo e($post->created_at->diffForHumans()); ?></strong>
    <div class="post-content text-justify">
        <?php echo e($post->content); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/blog/show.blade.php ENDPATH**/ ?>