<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<h3 class="mb-30">🌟 **Acknowledging Our Supportive Staff at Christiana Bedell Preparatory School!**</h3>
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url('public_assets/img/staff/professional-cleaners-team-young-black-african-american-smiling-couple-holding-cleaning-tools-vector-illustration-service-161366220.webp')?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p> Beyond the classrooms, our school thrives thanks to the unsung heroes of our supportive staff. From custodians who maintain a clean and welcoming environment to administrative assistants who keep the gears of our operations turning smoothly, each member of our support staff plays a crucial role in the daily life of our institution. Their dedication to ensuring a safe, organized, and positive atmosphere allows our students and teaching staff to flourish. Whether in the front office, maintaining facilities, or offering a helping hand where needed, our supportive staff embodies the spirit of teamwork and excellence. Let's express our gratitude to these invaluable individuals who contribute significantly to the harmonious and effective functioning of Christiana Bedell Preparatory School. 🌈🤝</p>
				</div>
			</div>

			<div class="row mt-3">
				<?php if(isset($supportive_staff)) : ?>
					<?php foreach($supportive_staff as $supportStv) :?>
						<div class="col-md-4 mt-2">
							<div class="card" style="width: 18rem;">
							  <img src="<?=base_url('public_assets/img/staff/'.$supportStv['profileImg'])?>" class="card-img-top" alt="...">
							  <div class="card-body ">
							    <h5 class="card-title"><?=$supportStv['fullName']?></h5>
							    <p class="card-text  text-dark"><?=$supportStv['position']?></p>
							    <p class="card-text text-dark"><?=$supportStv['qualification']?></p>
							    <p class="card-text"><?=$supportStv['profileSummary']?></p>
							  </div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>