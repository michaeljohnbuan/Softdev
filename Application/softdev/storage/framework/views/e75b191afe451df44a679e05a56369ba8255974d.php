  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <h1>Search Alternatives Here</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Place</th>
        <th>Alternative</th>
        <th>Actions</th>
      </tr>
      <a href="<?php echo e(route('searchalternative.create')); ?>" class="btn btn-info pull-right">Create New Data</a><br><br>
      <?php $no=1; ?>
      <?php $__currentLoopData = $searchalternatives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchalternative): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
          <td><?php echo e($no++); ?></td>
          <td><?php echo e($searchalternative->place); ?></td>
          <td><?php echo e($searchalternative->alternative); ?></td>
          <td>
            <form class="" action="<?php echo e(route('searchalternative.destroy',$searchalternative->id)); ?>" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <a href="<?php echo e(route('searchalternative.edit',$searchalternative->id)); ?>" class="btn btn-primary">Edit</a>
              <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    </table>
    <?php echo $searchalternatives->links(); ?>

  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>