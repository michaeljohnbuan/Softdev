  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>View Request for Utensils Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Name of Requester</th>
        <th>Utensils For</th>
        <th>Population</th>
        <th>Date</th>
        <th>Evacuation Center Name</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
      
      <?php $no=1; ?>
      <?php $__currentLoopData = $viewrequestsforutensils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewrequestforutensils): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($viewrequestforutensils->user_name); ?></td>
          <td><?php echo e($viewrequestforutensils->utensilsfor); ?></td>
          <td><?php echo e($viewrequestforutensils->population); ?></td>
          <td><?php echo e($viewrequestforutensils->date); ?></td>
          <td><?php echo e($viewrequestforutensils->evac_name); ?></td>
          <td><?php echo e($viewrequestforutensils->address); ?></td>
          <td><?php echo e($viewrequestforutensils->status); ?></td>
          <td>
            <form class="" action="<?php echo e(route('viewrequestforutensils.destroy',$viewrequestforutensils->id)); ?>" method="post">
              <input type="hidden" name="_method" value="Delete">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <a href="<?php echo e(route('viewrequestforutensils.edit',$viewrequestforutensils->id)); ?>" class="btn btn-primary">Change Status</a><br><br>
              
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('viewrequestmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>