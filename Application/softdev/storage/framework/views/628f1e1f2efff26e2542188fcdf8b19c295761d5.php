  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Data</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="<?php echo e(route('viewrequest.update',$viewrequest->id)); ?>" method="post">
      <input name="_method" type="hidden" value="PATCH">
      <?php echo e(csrf_field()); ?>

      <div class="form-group<?php echo e(($errors->has('user_name')) ? $errors->first('user_name') : ''); ?>">
        <input type="text" name="user_name" class="form-control" placeholder="Enter User Name Here" value="<?php echo e($viewrequest->user_name); ?>">
        <?php echo $errors->first('user_name','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('foodtype')) ? $errors->first('foodtype') : ''); ?>">
        <input type="text" name="foodtype" class="form-control" placeholder="Enter Food Type Here" value="<?php echo e($viewrequest->foodtype); ?>">
        <?php echo $errors->first('foodtype','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('foodlevel')) ? $errors->first('foodlevel') : ''); ?>">
        <input type="text" name="foodlevel" class="form-control" placeholder="Enter Food Level Here" value="<?php echo e($viewrequest->foodlevel); ?>">
        <?php echo $errors->first('foodlevel','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('population')) ? $errors->first('population') : ''); ?>">
        <input type="text" name="population" class="form-control" placeholder="Enter Population Here" value="<?php echo e($viewrequest->population); ?>">
        <?php echo $errors->first('population','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('date')) ? $errors->first('date') : ''); ?>">
        <input type="text" name="date" class="form-control" placeholder="Enter Date Here" value="<?php echo e($viewrequest->date); ?>">
        <?php echo $errors->first('date','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('evac_name')) ? $errors->first('evac_name') : ''); ?>">
        <input type="text" name="evac_name" class="form-control" placeholder="Enter Evacuation Center Name Here" value="<?php echo e($viewrequest->evac_name); ?>">
        <?php echo $errors->first('evac_name','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('latitude')) ? $errors->first('latitude') : ''); ?>">
        <input type="text" name="latitude" class="form-control" placeholder="Enter Latitude Here" value="<?php echo e($viewrequest->latitude); ?>">
        <?php echo $errors->first('latitude','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('longtitude')) ? $errors->first('longtitude') : ''); ?>">
        <input type="text" name="longtitude" class="form-control" placeholder="Enter Longitude Here" value="<?php echo e($viewrequest->longtitude); ?>">
        <?php echo $errors->first('longtitude','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('address')) ? $errors->first('address') : ''); ?>">
        <input type="text" name="address" class="form-control" placeholder="Enter Address Here" value="<?php echo e($viewrequest->address); ?>">
        <?php echo $errors->first('address','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group<?php echo e(($errors->has('status')) ? $errors->first('status') : ''); ?>">
        <input type="text" name="status" class="form-control" placeholder="Enter Status Here" value="<?php echo e($viewrequest->status); ?>">
        <?php echo $errors->first('status','<p class="help-block">:message</p>'); ?>

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('viewrequestmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>