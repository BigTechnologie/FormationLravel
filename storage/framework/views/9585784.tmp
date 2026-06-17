

<?php $__env->startSection('title'); ?>
    Register Form 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

    <div class="container">
        

        

        <h1> <?php echo e(__('Register Form')); ?> </h1>

        <form action="<?php echo e(route('register.save')); ?>" method="POST" >

        <?php echo csrf_field(); ?>   
         
        <div class="mb-3">
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
    </div>    
    <div class="mb-3">
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
    </div>    
    
    
    <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> 
        Register
    </button>
 </form>


    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/blog/register.blade.php ENDPATH**/ ?>