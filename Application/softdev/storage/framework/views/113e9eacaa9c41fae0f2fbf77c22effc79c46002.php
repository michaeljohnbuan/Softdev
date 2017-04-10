  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="<?php echo e(route('searchalternative.update',$searchalternative->id)); ?>" method="post">
      <input name="_method" type="hidden" value="PATCH">
      <?php echo e(csrf_field()); ?>

      <div class="form-group<?php echo e(($errors->has('place')) ? $errors->first('place') : ''); ?>">
        <input type="text" name="place" class="form-control" placeholder="Enter Place Here" value="<?php echo e($searchalternative->place); ?>">
        <?php echo $errors->first('place','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('alternative')) ? $errors->first('place') : ''); ?>">
        <input type="text" name="alternative" class="form-control" placeholder="Enter Alternative Here" value="<?php echo e($searchalternative->alternative); ?>">
        <?php echo $errors->first('alternative','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>