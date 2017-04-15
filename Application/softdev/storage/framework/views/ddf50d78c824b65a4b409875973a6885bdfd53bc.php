		
<?php $__env->startSection('content'); ?>
	<div class="row")> 
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default"> 
				<div class="panel-heading"> 
				Create Affected Population Age groups 
				</div>

				<div class="panel-body">
				<form action="/agegroups" method="POST">
					<?php echo e(csrf_field()); ?>

					<div class="form-group"> 
						<label for="evac_name">Evacuation Center:
						</label>
						<input type="text" name="evac_name" class="form-control">
					</div>
					<div class="form-group"> 
						<label for="toddler_kid">Toddlers and kids (11 yrs old and below):
						</label>
						<input type="number" name="toddler_kid" class="form-control">
					</div>

					<div class="form-group"> 
						<label for="teen">Teenagers (12 to 18 yrs old):</label>

						<input type="number" name="teen" class="form-control">
					</div>

					<div class="form-group"> 
						<label for="older">Older people (19 to 50 yrs old):</label>
						<input type="number" name="older" class="form-control">
					</div>

					<div class="form-group"> 
						<label for="seniorcitizen"> Senior Citizens (60 yrs old and above):</label>
						<input type="number" name="seniorcitizen" class="form-control">
					</div>

					<input type="submit" class="btn btn-success pull-right">
					</form>
				</div>
			</div>
		</div>
	</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>