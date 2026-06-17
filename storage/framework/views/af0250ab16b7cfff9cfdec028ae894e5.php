    <?php $__env->startSection('styles'); ?>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php $__env->stopSection(); ?>
    <div class="row">
    <div class="col-md-8">
        <form action="<?php echo e(isset($category) ? route('admin.category.update', ['category' => $category->id]) : route('admin.category.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(isset($category)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text"  placeholder="Name ..."  name="name" value="<?php echo e(old('name', isset($category) ? $category->name : '')); ?>" class="form-control" id="name" aria-describedby="nameHelp" required/>

        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error text-danger">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text"  placeholder="Description ..."  name="description" value="<?php echo e(old('description', isset($category) ? $category->description : '')); ?>" class="form-control" id="description" aria-describedby="descriptionHelp" required/>

        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error text-danger">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    <div class="mb-3">
        <button type="button" class="btn btn-success btn-file my-1" onclick="triggerFileInput('imageUrl')">
            Add file :  (ImageUrl)
        </button>
        <input type="file" name="imageUrl" value="<?php echo e(old('imageUrl', isset($category) ? $category->imageUrl : '')); ?>" class="visually-hidden form-control imageUpload" id="imageUrl" aria-describedby="imageUrlHelp"/>

        <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
        </div>
        <?php $__errorArgs = ['imageUrl'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error text-danger">
                <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>    <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> <?php echo e(isset($category) ? 'Update' : 'Create'); ?></button>
 </form>
    </div>
    <div class="col-md-4">
    <a  class="btn btn-danger mt-1" href="<?php echo e(route('admin.category.index')); ?>">
    Cancel
</a>
<button class="btn btn-primary mt-1"> <?php echo e(isset($category) ? 'Update' : 'Create'); ?></button>
    </div>
    </div>

    <?php $__env->startSection('scripts'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });

        $(document).ready(function() {
            $('select').select2();
        });
        function triggerFileInput(fieldId) {
            const fileInput = document.getElementById(fieldId);
            if (fileInput) {
                fileInput.click();
            }
        }

        const imageUploads = document.querySelectorAll('.imageUpload');
        imageUploads.forEach(function(imageUpload) {
            imageUpload.addEventListener('change', function(event) {
                event.preventDefault()
                const files = this.files; // Récupérer tous les fichiers sélectionnés
                console.log(files)
                if (files && files.length > 0) {
                    const previewContainer = document.getElementById('preview_' + this.id);
                    previewContainer.innerHTML = ''; // Effacer le contenu précédent

                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file) {
                            const reader = new FileReader();
                            const img = document.createElement('img'); // Créer un élément img pour chaque image

                            reader.onload = function(event) {
                                img.src = event.target.result;
                                img.alt = "Prévisualisation de l'image"
                                img.style.maxWidth = '100px';
                                img.style.display = 'block';
                            }

                            reader.readAsDataURL(file);
                            previewContainer.appendChild(img); // Ajouter l'image à la prévisualisation
                            console.log({img})
                            console.log({previewContainer})
                        }
                    }
                    console.log({previewContainer})
                }
            });
        });
    </script>
    <?php $__env->stopSection(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/categories/categoryForm.blade.php ENDPATH**/ ?>