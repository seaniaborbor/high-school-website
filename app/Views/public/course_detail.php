<?php $this->extend('public/partials/layout')?>

<?=$this->section('main')?>

<?php 

function getAbbreviatedMonth($timestamp) {
    // Convert timestamp to desired format (M for abbreviated month in word)
     $dateTime = new DateTime($timestamp);

    // Get the abbreviated month
    return $dateTime->format('M');
}

function getDay($timestamp) {
    // Convert timestamp to get the day
   $dateTime = new DateTime($timestamp);

    // Get the day
    return $dateTime->format('d');
}

?>
    <!-- breadcrumb start--><?php // print_r($course_details); exit(); ?>

 <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>lorem</h2>
                            <p>News<span>/</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start--><?php //print_r($blog_to_read); //exit(); ?>
<!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img w-100">
                     <img  src="<?=base_url('public_assets/img/cource/'.$course_details['courseImage'])?>" class="img-fluid w-100 d-block" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?=$course_details['courseTitle']?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#">Instructed By: <?=$course_details['instructorName']?></a></li>
                        <li><a href="#"><i class="far fa-comments"></i> <?=$course_details['numOfStudents']?> of students</a></li>
                     </ul>
                     <?=$course_details['aboutCourse']?>
                  </div>
            </div>
          </div>

            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                 
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <?php if(isset($recent_blogs)) : ?>
                       <?php foreach($recent_blogs as $rcntBlgs): ?>
                        <div class="media post_item">
                           <img src="<?=base_url('public_assets/img/blog/'.$rcntBlgs['featureImg'])?>" height="80" width="80" alt="post">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3><?=$rcntBlgs['title']?></p></h3>
                              </a>
                              <p><?=$rcntBlgs['createdAt']?></p>
                           </div>
                        </div>
                       <?php endforeach; ?>
                      <?php endif; ?>
                  </aside>

               </div>
             </div>

             <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                             <h3 class="widget_title">About the Christiana Bedell Preparatory School</h3>
                              <img src="<?=base_url('public_assets/img/79112749_108326897323613_7292809500300410880_n.jpg')?>" class="img-fluid w-100">
                            <p>
                                It all started right after the first cease-fire of the Liberian Civil Conflict, as a tutorial session for my neighbors and the community kids, including my son in my Livingroom. I observed that the daily routine of the kids was just to eat and spend the rest of the day idle, as most parents could not afford to take their kids long distances for schooling.
                            </p>
                              <a href="<?=base_url('about/')?>" class="btn_1 mb-3 ">Read Full Article</a>
                         </aside>

                    </div>
                </div>

           
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
    <!--================Blog Area =================-->


    
<?=$this->endSection()?>