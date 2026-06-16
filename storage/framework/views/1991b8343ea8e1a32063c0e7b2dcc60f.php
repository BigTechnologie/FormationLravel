

<?php $__env->startSection('title'); ?>
    Blog Categorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        
        <h1>Posts for category : <?php echo e($category->name); ?></h1>

        <img src="<?php echo e($category->imageUrl); ?>" height="" alt="">

        <?php echo $__env->make('paginate', ['datas' => $posts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="posts row gx-0">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-item col-md-3">
                    <a href="<?php echo e(route('blog.show', ['id' => $post->id, 'slug' => $post->slug])); ?>" class="m-1 card text-decoration-none">                      
                            <img src="<?php echo e($post->imageUrl); ?>" height="200" alt="">    
                            <div class="post-details p-1">
                                <h4> <?php echo e($post->title); ?> </h4>
                                <p> <?php echo e($post->description); ?> </p>
                                <small><?php echo e($post->created_at->format("d-m-Y H:i:s")); ?></small>
                            </div>   
                    </a>     
                </div>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <?php echo $__env->make('paginate', ['datas' => $posts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/blog/showCategory.blade.php ENDPATH**/ ?>