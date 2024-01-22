<?php $this->extend('dashboard/partials/layout')?>

<?=$this->section('main')?>
	<div class="row">

		<div class="col-md-8 pt-2">
			<div class="card">
				<div class="card-header">
					<h3>Edit a published course details</h3>
				</div>
				<div class="card-body">
					<?php include("partials/forms/edit_add_course_post.php")?>
				</div>
			</div>
		</div>

		<div class="col-md-4 pt-2">
			<div class="card shadow-lg">
				<div class="card-header bg-success text-white">
					<h3>Deatils of the post you're about to edit</h3>
				</div>
				<div class="card-body">
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Course Title </h4>
						<?= $courses_data['courseTitle']?>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Course Category </h4>
						<?= $courses_data['courseCategory']?>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Total Students </h4>
						<?= $courses_data['numOfStudents']?>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3 border-bottom">
								<h4 class="text-secondary">Course Image </h4>
								<img src="<?=base_url('public_assets/img/course/'.$courses_data['courseTitle'])?>" class="img-fluid w-100">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 border-bottom">
								<h4 class="text-secondary">Instructor Image </h4>
								<img src="<?=base_url('public_assets/img/course/'.$courses_data['courseTitle'])?>" class="img-fluid w-100">
							</div>
						</div>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Course Details </h4>
						<?= $courses_data['aboutCourse']?>
					</div>

				</div>
			</div>
		</div>

	</div>
<?=$this->endSection()?>