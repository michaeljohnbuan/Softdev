  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Create Data</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="<?php echo e(route('searchalternative.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group<?php echo e(($errors->has('place')) ? $errors->first('place') : ''); ?>">
          <input type="text" name="place" class="form-control" placeholder="Enter Place Here">
          <?php echo $errors->first('place','<p class="help-block">:message</p>'); ?>

        </div>
        <div class="form-group<?php echo e(($errors->has('alternative')) ? $errors->first('place') : ''); ?>">
          <input type="text" name="alternative" class="form-control" placeholder="Enter Alternative Here">
          <?php echo $errors->first('alternative','<p class="help-block">:message</p>'); ?>

        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save">
        </div>
      </form>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>