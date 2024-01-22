<?php $this->extend('public/partials/layout')?>

<?=$this->section('main')?>

<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Meet Our Dynamic Staff</h2>
                            <p>Home<span>/</span>Staff</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

   <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">          
                   <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active genric-btn primary-border" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Administrators</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link genric-btn primary-border " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Teachers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link genric-btn primary-border" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Supportive</a>
                  </li>
                </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <?php include('partials/administrative_staff.php'); ?>
                  </div>

                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <?php include('partials/teaching_staff.php'); ?>
                  </div>

                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <?php include('partials/supportive_staff.php'); ?>
                  </div>

        </div>

    </section>

    
<?=$this->endSection()?>