<?php $__env->startSection('content'); ?>
	<div class="row")> 
		<div class="col-md-12">
			<div class="col-md-12">
      			<h1>View Population Age Groups Here</h1>
    		</div>
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th>Food Manager</th>
						<th>Evacuation Center</th>
						<th>Toddlers and Kids</th>
						<th>Teenagers</th>
						<th>Older People</th>
						<th>Senior Citizens</th>
						<th>Total</th>
						
					</tr>
						<?php echo e(csrf_field()); ?>

						<?php $no=1; ?>
						<?php $__currentLoopData = $agegroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agegroup): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						
						<td><?php echo e($agegroup->user_name); ?></td>
						<td><?php echo e($agegroup->evac_name); ?></td>
						<td><?php echo e($agegroup->toddler_kid); ?></td>
						<td><?php echo e($agegroup->teen); ?></td>
						<td><?php echo e($agegroup->older); ?></td>
						<td><?php echo e($agegroup->seniorcitizen); ?></td>
						<td><?php echo e($agegroup->total); ?></td>
						<td>
							 		

							</td>

						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
				</table>
				<?php echo $agegroups->links(); ?>

			</div>
		</div>
	</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('agegroupsmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>