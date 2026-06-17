    <?php $__env->startSection('styles'); ?>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php $__env->stopSection(); ?>
    <div class="row">
    <div class="col-md-8">
        <form action="<?php echo e(isset($user) ? route('admin.user.update', ['user' => $user->id]) : route('admin.user.store')); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <?php if(isset($user)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text"  placeholder="Name ..."  name="name" value="<?php echo e(old('name', isset($user) ? $user->name : '')); ?>" class="form-control" id="name" aria-describedby="nameHelp" required/>

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
        <label for="email" class="form-label">Email</label>
        <input type="text"  placeholder="Email ..."  name="email" value="<?php echo e(old('email', isset($user) ? $user->email : '')); ?>" class="form-control" id="email" aria-describedby="emailHelp" required/>

        <?php $__errorArgs = ['email'];
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
    </div>    
        
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Password ..." value="<?php echo e(old('password', isset($user) ? $user->password : '')); ?>" class="form-control" id="password" aria-describedby="passwordHelp" required/>

        <?php $__errorArgs = ['password'];
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
        <label for="email" class="form-label">Email</label>
        <input type="text"  placeholder="Email ..."  name="email" value="<?php echo e(old('email', isset($user) ? $user->email : '')); ?>" class="form-control" id="email" aria-describedby="emailHelp" required/>

        <?php $__errorArgs = ['email'];
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
        <label for="token" class="form-label">Token</label>
        <input type="text"  placeholder="Token ..."  name="token" value="<?php echo e(old('token', isset($user) ? $user->token : '')); ?>" class="form-control" id="token" aria-describedby="tokenHelp" required/>

        <?php $__errorArgs = ['token'];
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
        <label for="created_at" class="form-label">Created_at</label>
        <input type="text"  placeholder="Created_at ..."  name="created_at" value="<?php echo e(old('created_at', isset($user) ? $user->created_at : '')); ?>" class="form-control" id="created_at" aria-describedby="created_atHelp" required/>

        <?php $__errorArgs = ['created_at'];
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
        <label for="id" class="form-label">Id</label>
        <input type="text"  placeholder="Id ..."  name="id" value="<?php echo e(old('id', isset($user) ? $user->id : '')); ?>" class="form-control" id="id" aria-describedby="idHelp" required/>

        <?php $__errorArgs = ['id'];
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
        <label for="user_id" class="form-label">User_id</label>
        <input type="text"  placeholder="User_id ..."  name="user_id" value="<?php echo e(old('user_id', isset($user) ? $user->user_id : '')); ?>" class="form-control" id="user_id" aria-describedby="user_idHelp" required/>

        <?php $__errorArgs = ['user_id'];
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
        <label for="ip_address" class="form-label">Ip_address</label>
        <input type="text"  placeholder="Ip_address ..."  name="ip_address" value="<?php echo e(old('ip_address', isset($user) ? $user->ip_address : '')); ?>" class="form-control" id="ip_address" aria-describedby="ip_addressHelp" required/>

        <?php $__errorArgs = ['ip_address'];
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
        <label for="user_agent" class="form-label">User_agent</label>
        <input type="text"  placeholder="User_agent ..."  name="user_agent" value="<?php echo e(old('user_agent', isset($user) ? $user->user_agent : '')); ?>" class="form-control" id="user_agent" aria-describedby="user_agentHelp" required/>

        <?php $__errorArgs = ['user_agent'];
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
        <label for="payload" class="form-label">Payload</label>
        <input type="text"  placeholder="Payload ..."  name="payload" value="<?php echo e(old('payload', isset($user) ? $user->payload : '')); ?>" class="form-control" id="payload" aria-describedby="payloadHelp" required/>

        <?php $__errorArgs = ['payload'];
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
        <label for="last_activity" class="form-label">Last_activity</label>
        <input type="text"  placeholder="Last_activity ..."  name="last_activity" value="<?php echo e(old('last_activity', isset($user) ? $user->last_activity : '')); ?>" class="form-control" id="last_activity" aria-describedby="last_activityHelp" required/>

        <?php $__errorArgs = ['last_activity'];
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
    </div>    
    <a href="<?php echo e(route('admin.user.index')); ?>" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> <?php echo e(isset($user) ? 'Update' : 'Create'); ?></button>
 </form>
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
    <?php $__env->stopSection(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/users/userForm.blade.php ENDPATH**/ ?>