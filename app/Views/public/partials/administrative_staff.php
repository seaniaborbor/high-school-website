<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<h3 class="mb-30">🌟 **Meet Our Administrative Team at Christiana Bedell Preparatory School!**</h3>
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url('public_assets/img/staff/male-lawyer-concept-illustration_114360-14510.jpg')?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p>Behind the scenes at Christiana Bedell Preparatory School, a dedicated administrative team works tirelessly to ensure the smooth functioning and success of our educational institution. From the efficient handling of admissions to the meticulous management of finances, this team forms the backbone of our operations. Their commitment to providing a nurturing and enriching environment is reflected in every aspect of our school life. Together, they contribute to the vibrant tapestry that makes Christiana Bedell a place where learning and growth thrive. Join us in recognizing the invaluable contributions of our administrative team, whose passion and dedication shape the foundation of our school's success. 🏫✨</p>
				</div>
			</div>

			<div class="row mt-3">
				<?php if(isset($administrative_staff)) : ?>
					<?php foreach($administrative_staff as $adminstaff) :?>
						<div class="col-md-4 mt-2">
							<div class="card" style="width: 18rem;">
							  <img src="<?=base_url('public_assets/img/staff/'.$adminstaff['profileImg'])?>" class="card-img-top" alt="...">
							  <div class="card-body ">
							    <h5 class="card-title"><?=$adminstaff['fullName']?></h5>
							    <p class="card-text  text-dark"><?=$adminstaff['position']?></p>
							    <p class="card-text text-dark"><?=$adminstaff['qualification']?></p>
							    <p class="card-text"><?=$adminstaff['profileSummary']?></p>
							  </div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>