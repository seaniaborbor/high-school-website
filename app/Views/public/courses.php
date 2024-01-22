<?php $this->extend('public/partials/layout')?>

<?=$this->section('main')?>

 <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Vocational Courses</h2>
                            <p>Home<span>/</span>Courses</p>
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
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Vocational Education</p>
                        <h2>Courses</h2>
                    </div>
                </div>
            </div>
            <?php // print_r($few_courses); ?>
            <div class="row">
                <?php if(isset($all_courses)): ?>
                
                    <?php foreach($all_courses as $fwcs) : ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="<?=base_url('public_assets/img/cource/'.$fwcs->courseImage)?>" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="<?=base_url('courses-deatils/'.$fwcs->courseId)?>" class="btn_4"><?=$fwcs->courseCategory?></a>
                                <h4><?=$fwcs->numOfStudents?><br>Students</h4>
                                <a href="<?=base_url('courses-deatils/'.$fwcs->courseId)?>"><h3><?=$fwcs->courseTitle?></h3></a>
                                <?=substr($fwcs->aboutCourse, 0, 125)?></p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="public_assets/img/staff/<?=$fwcs->instructorPic?>" height="50" width="50" class='rounded-circle' alt="">
                                        <div class="author_info_text">
                                            <p>Instructed by:</p>
                                            <h5><a href="#"><?=$fwcs->instructorName?></a></h5>
                                        </div>
                                    </div>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>

                    </div>
                </div>
    </section>
    <!--::blog_part end::-->

    
<?=$this->endSection()?>