<?php $this->extend('dashboard/partials/layout')?>

<?=$this->section('main')?>
	<div class="row">

		<div class="col-md-8 pt-2">
			<div class="card">
				<div class="card-body">
					<h4 class="text-success mt-2 mb-4">Staff Profiles</h4>
					<?php include("partials/tables/staff_table.php"); ?> 
				</div>
			</div>
		</div>

		<div class="col-md-4 pt-2">
			<?php 
				if($userData['userRole'] == "SUDO"){
					?>
					<div class="card shadow-lg border ">
						<div class="card-header bg-success d-flex justify-content-between text-white">
							<h4>Add A Staff</h4>
						</div>
						<div class="card-body">
							<?php include("partials/forms/add_staff_member_form.php")?>
						</div>
					</div>
					<?php 
				}else{
					?>
						<div class="card">
							<div class="card-body">
								<h3>These are the staff</h3>
								<p>These are the staff whom profile have been added. You  </p>
							</div>
						</div>
					<?php 
				}		
			?>
			
		</div>

	</div>
<?=$this->endSection()?>