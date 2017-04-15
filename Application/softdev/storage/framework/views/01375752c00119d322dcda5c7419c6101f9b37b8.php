  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>View Request for Food Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Name of Requester</th>
        <th>Food Type</th>
        <th>Food Level</th>
        <th>Population</th>
        <th>Date</th>
        <th>Evacuation Center Name</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      
      <?php $no=1; ?>
      <?php $__currentLoopData = $viewrequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewrequest): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($viewrequest->user_name); ?></td>
          <td><?php echo e($viewrequest->foodtype); ?></td>
          <td><?php echo e($viewrequest->foodlevel); ?></td>
          <td><?php echo e($viewrequest->population); ?></td>
          <td><?php echo e($viewrequest->date); ?></td>
          <td><?php echo e($viewrequest->evac_name); ?></td>
          <td><?php echo e($viewrequest->address); ?></td>
          <td><?php echo e($viewrequest->status); ?></td>
          <td>
            <form class="" action="<?php echo e(route('viewrequest.destroy',$viewrequest->id)); ?>" method="post">
              <input type="hidden" name="_method" value="Delete">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <a href="<?php echo e(route('viewrequest.edit',$viewrequest->id)); ?>" class="btn btn-primary">Change Status</a><br><br>
              
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('viewrequestmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>