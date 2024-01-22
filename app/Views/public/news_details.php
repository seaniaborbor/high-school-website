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
    <!-- breadcrumb start--><?php //print_r($recent_blogs); exit(); ?>

 <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2><?=$blog_to_read[0]->title?></h2>
                            <p>News<span>/</span> <?=$blog_to_read[0]->category?></p>
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
                     <img  src="<?=base_url('public_assets/img/blog/'.$blog_to_read[0]->featureImg)?>" class="img-fluid w-100 d-block" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?=$blog_to_read[0]->title?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i> <?=$blog_to_read[0]->category?></a></li>
                        <li><a href="#"><i class="far fa-comments"></i> <?=count($post_comments)?> Comments</a></li>
                     </ul>
                     <?=$blog_to_read[0]->postbody?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="<?=base_url('/public_assets/img/team/'.$blog_to_read[0]->profileImg)?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?=$blog_to_read[0]->fullName?></h4>
                        </a>
                        <p><?=$blog_to_read[0]->profession?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4><?=count($post_comments)?> Comments</h4>
                  <?php if(isset($post_comments) && count($post_comments) > 0) : ?>
                     <?php foreach($post_comments as $pcomts) : ?>
                          <div class="comment-list">
                           <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">
                                 <div class="thumb">
                                    <img src="<?=base_url('public_assets/img/user.png')?>" alt="">
                                 </div>
                                 <div class="desc">
                                    <p class="comment">
                                       <?=$pcomts['comment']?>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <h5>
                                             <a href="#"><?=$pcomts['name']?></a>
                                          </h5>
                                          <p class="date"><?=$pcomts['posted_at']?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  <?php else: ?>
                        <div class="section-top-border">
                            <h3 class="mb-30">Be the first to leave a reply</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <blockquote class="generic-blockquote">
                                       Hi, be the first to initiate a discussion about this post on our website!
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                  <?php endif; ?>
               </div>
               <div class="comment-form">
                  <?php if(count($post_comments) >  0):  ?>
                     <h3 class="mb-30">Join the conversation, leave a comment too</h3>
                  <?php endif; ?>
                  <form class="form-contact comment_form" method="post" action="" id="commentForm">
                     <?= csrf_field() ?>
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                                 <?php if(isset($validation) && $validation->hasError('comment')) : ?>
                             <div class="text-danger"><?=$validation->getError('comment')?></div>
                          <?php endif; ?>
                           </div>
                           <input type="hidden" name="postId" value="<?=$blog_to_read[0]->blg_id?>">
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                           <?php if(isset($validation) && $validation->hasError('name')) : ?>
                             <div class="text-danger"><?=$validation->getError('name')?></div>
                          <?php endif; ?>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                           <?php if(isset($validation) && $validation->hasError('email')) : ?>
                             <div class="text-danger"><?=$validation->getError('email')?></div>
                          <?php endif; ?>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button btn_1 button-contactForm">Send Message</button>
                     </div>
                  </form>
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
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
    <!--================Blog Area =================-->


    
<?=$this->endSection()?>