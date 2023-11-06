<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <input type="email" name = "email" />
        <input type="password" name="password"/>
        <button>Sign Up</button>

        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


    </form>
    
</body>
</html>
<?php /**PATH C:\Users\giles\Documents\Documents\Code Cumbria\Laravel\codealong\resources\views/welcome.blade.php ENDPATH**/ ?>