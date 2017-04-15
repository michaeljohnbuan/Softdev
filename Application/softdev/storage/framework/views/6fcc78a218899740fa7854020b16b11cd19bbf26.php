  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="<?php echo e(route('viewrequestforutensils.update',$viewrequestforutensils->id)); ?>" method="post">
      <input name="_method" type="hidden" value="PATCH">
      <?php echo e(csrf_field()); ?>

      <div class="form-group<?php echo e(($errors->has('status')) ? $errors->first('status') : ''); ?>">
        <input type="text" name="status" class="form-control" placeholder="Enter Status Here" value="<?php echo e($viewrequestforutensils->status); ?>">
        <?php echo $errors->first('status','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('viewrequestforutensilsmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>