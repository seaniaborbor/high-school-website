<?php $this->extend('dashboard/partials/layout')?>

<?=$this->section('main')?>
	<div class="row justify-content-between d-flex">

		<div class="col-md-5 pt-2">
			<div class="card">
				<div class="card shadow-lg ">
				<div class="card-header bg-success d-flex justify-content-between text-white">
					<h3>Edit the profile of staff <?=$staff_data['fullName']?></h3>
				</div>
				<div class="card-body">
					<?php include('partials/forms/edit_staff_member_form.php');?>
				</div>
			</div>
			</div>
		</div>

		<div class="col-md-3 pt-2">
			<div class="card shadow-lg">
				<div class="card-header bg-success text-white  ">
					<h3>Profile summary of <br> <?=$staff_data['fullName']?></h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4 offset-md-4">
							<img src="<?=base_url('public_assets/img/staff/'.$staff_data['profileImg'])?>" class="img-fluid w-100 rounded shadow-small ">
						</div>
					</div>
					<table class="table ">
						<tr>
							<td>Full Name</td>
							<td><?=$staff_data['fullName']?></td>
						</tr>
						<tr>
							<td>Position</td>
							<td><?=$staff_data['position']?></td>
						</tr>
						<tr>
							<td>Qualification</td>
							<td><?=$staff_data['qualification']?></td>
						</tr>
						<tr>
							<td>Pos Category</td>
							<td><?=$staff_data['posCategory']?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?=$staff_data['email']?></td>
						</tr>
						<tr>
							<td>Profile Last Edited Date</td>
							<td><?=$staff_data['createdAt']?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</div>
<?=$this->endSection()?>