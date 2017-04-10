<?php $__env->startSection('content'); ?>
	<div class="row")> 
		<div class="col-md-12">
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>User ID</th>
						<th>User Full Name</th>
						<th>Food Type</th>
						<th>Food Level</th>
						<th>Population</th>
						<th>Date Needed</th>
						<th>Evacuation Name</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Address</th>
						<th>Status</th>
					</tr>
					<?php echo e(csrf_field()); ?>

						<?php $no=1; ?>
						<?php $__currentLoopData = $food_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_request): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<td><?php echo e($no++); ?></td>
						<td><?php echo e($food_request->user_id); ?></td>
						<td><?php echo e($food_request->user_name); ?></td>
						<td><?php echo e($food_request->foodtype); ?></td>
						<td><?php echo e($food_request->foodlevel); ?></td>
						<td><?php echo e($food_request->population); ?></td>
						<td><?php echo e($food_request->date); ?></td>
						<td><?php echo e($food_request->evac_name); ?></td>
						<td><?php echo e($food_request->latitude); ?></td>
						<td><?php echo e($food_request->longtitude); ?></td>
						<td><?php echo e($food_request->address); ?></td>
						<td><?php echo e($food_request->status); ?></td>
						<td>
						<form class="" action="<?php echo e(route('foodrequests.destroy', $food_request->id)); ?>" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<a href="<?php echo e(route('foodrequests.edit', $food_request->id)); ?>" class="btn btn-primary">Edit</a>
						<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');" name="name" value="delete">
							</form>  		

							</td>

						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
				</table>
			</div>
		</div>
	</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('agegroupsmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>