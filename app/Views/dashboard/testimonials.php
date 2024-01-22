<?php $this->extend('dashboard/partials/layout')?>

<?=$this->section('main')?>
	<div class="row">

		<div class="col-md-8 pt-2">
			<div class="card">
				<div class="card-body">
					<h4 class="text-success mt-2 mb-4">Customers Testimonials</h4> 
					<?php include('partials/clients_testemonials.php')?>
				</div>
			</div>
		</div>

		<div class="col-md-4 pt-2">
			<div class="card shadow-lg ">
				<div class="card-header bg-success d-flex justify-content-between text-white">
					<h4>Post Testimonial</h4>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">
					    Help 
					</button>
				</div>
				<div class="card-body">
					<?php include('partials/forms/add_testimonial_form.php')?>
				</div>
			</div>
		</div>

	</div>
<?=$this->endSection()?>