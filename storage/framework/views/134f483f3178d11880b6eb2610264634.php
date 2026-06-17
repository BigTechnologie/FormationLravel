<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Projet Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('welcome')); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('blog.categories')); ?>">Catégories</a>
          </li>

        </ul>

        <?php if(auth()->guard()->check()): ?>

          <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <?php echo method_field('DELETE'); ?>

            <button class="btn btn-danger me-1">
              Logout
            </button>
          </form>
            <?php if(auth()->user()->roles && in_array('ROLE_ADMIN', json_decode(auth()->user()->roles))): ?>
              <a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-success">
                Admin 
              </a>
            <?php endif; ?>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-warning me-1">
              Login  
            </a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-success">
              Register   
            </a>

        <?php endif; ?>
        
      </div>
    </div>
  </nav>
<?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/header.blade.php ENDPATH**/ ?>