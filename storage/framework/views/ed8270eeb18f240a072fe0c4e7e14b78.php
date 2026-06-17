

<?php $__env->startSection('title'); ?>
    Login Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

    <div class="container">

        <h1>Login Form</h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login.authenticate')); ?>" method="POST">

            <?php echo csrf_field(); ?>

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
                Login 
            </button>

        </form>


    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/blog/login.blade.php ENDPATH**/ ?>