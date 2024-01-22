<form action="<?=base_url('/dashboard/staff')?>" method="post" enctype="multipart/form-data">
	<div class="form-group mb-3">
		<label>Staff Member Full Name</label>
		<input type="text" name="fullName" value="<?= set_value('fullName')?>" class="form-control" >
		<?php if(isset($validation) && $validation->hasError('fullName')) : ?>
           <div class="text-danger"><?=$validation->getError('fullName')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Email Address</label>
		<input type="email" name="email" value="<?= set_value('email')?>" class="form-control" >
		<?php if(isset($validation) && $validation->hasError('email')) : ?>
           <div class="text-danger"><?=$validation->getError('email')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Qualification (seperate each with a comma)</label>
		<input type="text" name="qualification" value="<?= set_value('qualification')?>" class="form-control" >
		<?php if(isset($validation) && $validation->hasError('qualification')) : ?>
           <div class="text-danger"><?=$validation->getError('qualification')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Profile Image</label>
		<input type="file" name="profileImg"  class="form-control" >
		<?php if(isset($validation) && $validation->hasError('profileImg')) : ?>
           <div class="text-danger"><?=$validation->getError('profileImg')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Position</label>
		<input type="text" name="position" value="<?= set_value('position')?>"  class="form-control" >
		<?php if(isset($validation) && $validation->hasError('position')) : ?>
           <div class="text-danger"><?=$validation->getError('position')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Profile Summary (225 characters max)</label>
		<input type="text" name="profileSummary" value="<?= set_value('profileSummary')?>"  class="form-control" >
		<?php if(isset($validation) && $validation->hasError('profileSummary')) : ?>
           <div class="text-danger"><?=$validation->getError('profileSummary')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Staff Category</label>
		<select name="posCategory" class="form-control form-control-lg">
			<option value="">Choose</option>
			<option value="Administrative">Administrative Staff</option>
			<option value="Teaching">Teaching Staff</option>
			<option value="Supportive">Supportive Staff</option>
		</select>
	</div>


	<div class="form-group mb-3">
		<button class="btn btn-success">Add Team Member</button>
	</div>
</form>