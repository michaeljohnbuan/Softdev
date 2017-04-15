<html>
<head></head>



<body>
PWET NG KALABAW
<?php $__currentLoopData = $myrequest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myrequests): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<h6><?php echo e($myrequest->foodtype); ?></h6>
</body>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
</html>