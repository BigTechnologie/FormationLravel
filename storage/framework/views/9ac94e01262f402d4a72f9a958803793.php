<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div >
        <h3>Show Post</h3>

        <a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-success my-1">
            Home
        </a>
        <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
                    <tr>
        <th>Title</th> 
        <td><?php echo e($post->title); ?></td>
</tr>
    <tr>
        <th>Slug</th> 
        <td><?php echo e($post->slug); ?></td>
</tr>
    <tr>
        <th>Description</th> 
        <td><?php echo e($post->description); ?></td>
</tr>
    <tr>
        <th>Content</th> 
        <td><?php echo $post->content; ?></td>
</tr>
    <tr>
        <th>ImageUrl</strong></th>
        <td>
            <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
                <img src="<?php echo e(Str::startsWith($post->imageUrl, 'http') ? $post->imageUrl : Storage::url($post->imageUrl)); ?>"
                     alt="Prévisualisation de l'image"
                     style="max-width: 100px; display: block;">
            </div>
        </td>
     </tr>
    <tr>
        <th>IsPublished</th> 
        <td>
            <div class="form-check form-switch">
                <input name="isPublished" disabled id="isPublished" value="true" data-bs-toggle="toggle"  <?php echo e($post->isPublished == 'true' ? 'checked' : ''); ?> class="form-check-input" type="checkbox" role="switch" />
            </div>
        </td>
    </tr>
	
            </tbody>
        </table>

        <div>
            <a href="<?php echo e(route('admin.post.edit', ['id' => $post->id])); ?>" class="btn btn-primary my-1">
                <i class="fa-solid fa-pen-to-square"></i>  Edit
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/posts/show.blade.php ENDPATH**/ ?>