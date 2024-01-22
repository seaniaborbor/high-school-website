<form action="<?=base_url('/dashboard/courses')?>" method="post" enctype="multipart/form-data">
	<div class="form-group mb-3">
		<label>Course Title</label>
		<input type="text" name="courseTitle" value="<?= set_value('courseTitle')?>" class="form-control" >
		<?php if(isset($validation) && $validation->hasError('courseTitle')) : ?>
           <div class="text-danger"><?=$validation->getError('courseTitle')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Course Image</label>
		<input type="file" name="courseImage"  class="form-control" >
		<?php if(isset($validation) && $validation->hasError('courseImage')) : ?>
           <div class="text-danger"><?=$validation->getError('courseImage')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Article about course</label>
		<textarea id="content" class="form-control" value="<?= set_value('aboutCourse')?>" name="aboutCourse" ></textarea>
		<?php if(isset($validation) && $validation->hasError('aboutCourse')) : ?>
           <div class="text-danger"><?=$validation->getError('aboutCourse')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Course Category</label>
		<select class="form-control" name="courseCategory" >
			<option value="">Choose</option>
			<?php if(isset($all_categories)): ?>
				<?php foreach($all_categories as $cat): ?>
					<option <?=set_select('courseCategory', $cat['post_category'])?> value="<?=$cat['post_category']?>"><?=$cat['post_category']?></option>
				<?php endforeach;?>
			<?php endif; ?>
		</select>
		<?php if(isset($validation) && $validation->hasError('courseCategory')) : ?>
           <div class="text-danger"><?=$validation->getError('courseCategory')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Course Instructor <small><span class="text-success">Choose the name of the instructor's picture to be seen on the website)</span></small></label>
		<select class="form-control" name="instructorPic" >
			<option value="">Choose</option>
			<?php if(isset($all_staff)): ?>
				<?php foreach($all_staff as $inst): ?>
					<option <?=set_select('instructorPic', $inst['profileImg'])?> value="<?=$inst['fullName']?>"><?=$inst['fullName']?></option>
				<?php endforeach;?>
			<?php endif; ?>
		</select>
		<?php if(isset($validation) && $validation->hasError('instructorPic')) : ?>
           <div class="text-danger"><?=$validation->getError('instructorPic')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Course Instructor Picture </label>
		<select class="form-control" name="instructorName" >
			<option value="">Choose</option>
			<?php if(isset($all_staff)): ?>
				<?php foreach($all_staff as $inst): ?>
					<option <?=set_select('instructorName', $inst['fullName'])?> value="<?=$inst['fullName']?>"><?=$inst['fullName']?></option>
				<?php endforeach;?>
			<?php endif; ?>
		</select>
		<?php if(isset($validation) && $validation->hasError('instructorName')) : ?>
           <div class="text-danger"><?=$validation->getError('instructorName')?></div>
        <?php endif; ?>
	</div>

	<div class="form-group mb-3">
		<label>Number of students doing course</label>
		<input type="number" name="numOfStudents"  class="form-control" >
		<?php if(isset($validation) && $validation->hasError('numOfStudents')) : ?>
           <div class="text-danger"><?=$validation->getError('numOfStudents')?></div>
        <?php endif; ?>
	</div>


	<div class="form-group mb-3">
		<button class="btn btn-success">Publish Course</button>
	</div>
</form>