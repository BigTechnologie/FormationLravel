<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div >
        <h3>Show Category</h3>

        <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-success my-1">
            Home
        </a>
        <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                    <tr>
        <th>Name</th> 
        <td><?php echo e($category->name); ?></td>
</tr>
    <tr>
        <th>Description</th> 
        <td><?php echo e($category->description); ?></td>
</tr>
    <tr>
        <th>ImageUrl</strong></th>
        <td>
            <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
                <img src="<?php echo e(Str::startsWith($category->imageUrl, 'http') ? $category->imageUrl : Storage::url($category->imageUrl)); ?>"
                     alt="Prévisualisation de l'image"
                     style="max-width: 100px; display: block;">
            </div>
        </td>
     </tr>
	
            </tbody>
        </table>

        <div>
            <a href="<?php echo e(route('admin.category.edit', ['id' => $category->id])); ?>" class="btn btn-primary my-1">
                <i class="fa-solid fa-pen-to-square"></i>  Edit
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/categories/show.blade.php ENDPATH**/ ?>