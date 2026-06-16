

<?php $__env->startSection('title'); ?>
    Blog home page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <h1> Catégories </h1>

        
        <?php echo $__env->make('paginate', ['datas' => $categories], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="categories row gx-0">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="categorie-item col-md-6">
                    <a href="<?php echo e(route('blog.show.category', ['id' => $category->id])); ?>" class="m-1 card text-decoration-none">    
                            <img src="<?php echo e($category->imageUrl); ?>" height="200" alt="">    
                            <div class="categorie-details p-1">
                                <h4> <?php echo e($category->name); ?> </h4>
                                <div>
                                    Nombre d'Articles : <?php echo e($category->posts->count()); ?>

                                </div>
                                <small><?php echo e($category->created_at->format("d-m-Y H:i:s")); ?></small>
                            </div> 
                    </a>     
                </div>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php echo $__env->make('paginate', ['datas' => $categories], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/blog/categories.blade.php ENDPATH**/ ?>