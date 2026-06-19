<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulaire d'envoi d'EMAIL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">

        <h1 class="text-center mb-4">Envoyer un Eamil</h1>

        <?php if(session('success')): ?>
            <div class="=alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('send.mail')); ?>" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 650px;"> 
            <?php echo csrf_field(); ?>

            <div>
                <label for="email" class="form-label">Email du destinataire :</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
            </div> 

            <div>
                <label for="message" class="form-label">Message :</label>
                <textarea name="message" id="message" class="form-control" rows="5" required><?php echo e(old('message')); ?></textarea>
            </div>

            <div>
                <label for="attachment" class="form-label"> Pièce jointe :</label>
                <input type="file" name="attachment" id="attachment" class="form-control">
            </div> 

            <div>
                <label for="company_logo" class="form-label" class="form-label"> Logo de l'entreprise affiché en bas de l'email :</label>
                <input type="file" name="company_logo" id="company_logo" class="form-control" accept="image/png,image/jpeg,image/gpg,image/webp">
                <div class="form-text">Optionnel. Si on ne choisi rien, le logo par defaut du projet sera utilisé </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Envoyer</button>

        </form>

    </div>
    
</body>
</html><?php /**PATH C:\Users\Admin Stagiaire\Desktop\FORMATIONS\Formation_Laravel\FormationLravel\resources\views/emails/form.blade.php ENDPATH**/ ?>