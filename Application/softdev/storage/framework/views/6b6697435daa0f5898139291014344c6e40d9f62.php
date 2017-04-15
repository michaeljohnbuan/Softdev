<html>
<head></head>
<body>

BALAT KALABAW

<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        <?php echo e($rec->id); ?> 
        <?php echo e($rec->user_name); ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</body>

</html>