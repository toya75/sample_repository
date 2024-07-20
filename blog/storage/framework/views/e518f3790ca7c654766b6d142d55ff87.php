<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                    </h2>
                    <p class='body'><?php echo e($post->body); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class='paginate'>
            <?php echo e($posts->links()); ?>

        </div>
    </body>
</html><?php /**PATH /home/ec2-user/environment/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>