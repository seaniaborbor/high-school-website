<div class="whole-wrap">
	<div class="container box_1170">
		<div class="section-top-border">
			<h3 class="mb-30">🌟 **Meet Our Inspirational Teaching Staff at Christiana Bedell Preparatory School!**</h3>
			<div class="row">
				<div class="col-md-3">
					<img src="<?=base_url('public_assets/img/staff/online-learning-concept-african-teacher-illustration-166735929_iconl.webp')?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-9 mt-sm-20">
					<p> Within the heart of our educational community, our teaching staff stands as a beacon of inspiration, shaping the minds of our students and fostering a love for learning. Led by a team of passionate educators, each dedicated teacher brings a unique set of skills and a genuine commitment to nurturing the potential within every student. Their innovative teaching methods, combined with a deep understanding of individual learning needs, create an atmosphere of academic excellence and personal growth. Whether guiding students through complex subjects or instilling a love for creativity and discovery, our teaching staff goes above and beyond to make each lesson memorable. Join us in celebrating the remarkable contributions of our teaching team, who play a pivotal role in shaping the future leaders and thinkers of tomorrow. 🍎📚</p>
				</div>
			</div>

			<div class="row mt-3">
				<?php if(isset($teaching_staff)) : ?>
					<?php foreach($teaching_staff as $tchingStv) :?>
						<div class="col-md-4 mt-2">
							<div class="card" style="width: 18rem;">
							  <img src="<?=base_url('public_assets/img/staff/'.$tchingStv['profileImg'])?>" class="card-img-top" alt="...">
							  <div class="card-body ">
							    <h5 class="card-title"><?=$tchingStv['fullName']?></h5>
							    <p class="card-text  text-dark"><?=$tchingStv['position']?></p>
							    <p class="card-text text-dark"><?=$tchingStv['qualification']?></p>
							    <p class="card-text"><?=$tchingStv['profileSummary']?></p>
							  </div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>