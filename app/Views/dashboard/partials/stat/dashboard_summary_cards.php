  <div class="container">
    <div class="row">
        <div class="alert alert-warning alert-dismissible mt-5 mb-5 fade show" role="alert">
  <strong>Inportant Warning </strong> Please report <a href="">here</a> if you notice that some links are not working.

  <strong><br> Again!</strong> When you publish a news article, please be aware that no one will receive the notification because the plugin for that is not activated yet. You must consider subscribing at <b> $15.00 </b> per year
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

        <div class="col-md-6 mt-3">
            <div class="card">
                  <div class="card-body text-center">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=base_url('public_assets/img/creative-writing.png')?>" class="img-fluid">                          
                        </div>
                        <div class="col-8">
                              <h5>Total Blog Post</h5>
                              <h2 class="display-1"><?=count($total_blogPost)?></h2>
                              <a href="<?=base_url('/dashboard/blog')?>" class="btn-success btn btn-lg ">Manage News</a>
                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">
            <div class="card">
                  <div class="card-body text-center">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=base_url('public_assets/img/online-learning.png')?>" class="img-fluid">                          
                        </div>
                        <div class="col-8">
                              <h5>Total Courses</h5>
                              <h2 class="display-1"><?=count($total_courses)?></h2>
                              <a href="<?=base_url('/dashboard/courses')?>" class="btn-success btn btn-lg ">Manage Courses</a>

                        </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">
            <div class="card">
                  <div class="card-body text-center">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=base_url('public_assets/img/organizational.png')?>" class="img-fluid">                          
                        </div>
                        <div class="col-8">
                              <h5>Total Team Members</h5>
                              <h2 class="display-1"><?=count($total_team)?></h2>
                              <a href="<?=base_url('/dashboard/team')?>" class="btn-success btn btn-lg ">Manage Staff</a>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                  <div class="card-body text-center">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="<?=base_url('public_assets/img/staff.png')?>" class="img-fluid">                          
                        </div>
                        <div class="col-8">
                              <h5>Total Staff</h5>
                              <h2 class="display-1"><?=count($total_staff)?></h2>
                              <a href="<?=base_url('/dashboard/staff')?>" class="btn-success btn btn-lg ">Manage Staff</a>
                        </div>
                    </div>
                  </div>
            </div>
        </div>




    </div>
  </div>