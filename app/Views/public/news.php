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

 <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Latest News</h2>
                            <p>Home<span>/</span>news</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                          <?php if(isset($all_posts)) :?>
                            <?php foreach($all_posts as $nwspst) :?>
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?=base_url('public_assets/img/blog/'.$nwspst['featureImg'])?>" alt="">
                                        <a href="<?=base_url('/news-deatils/'.$nwspst['blog_id'])?>" class="blog_item_date">
                                            <h3><?=getDay($nwspst['createdAt'])?></h3>
                                            <p><?=getAbbreviatedMonth($nwspst['createdAt'])?></p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="<?=base_url('/news-deatils/'.$nwspst['blog_id'])?>">
                                            <h2><?=$nwspst['title']?></h2>
                                        </a>
                                        <?=substr($nwspst['postbody'],0,250)?>...</p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="far fa-user"></i> <?=$nwspst['category']?></a></li>
                                            <li><a href="#"><i class="far fa-comments"></i> <?=$nwspst['comment_count']?> Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?= $pager->links() ?>
                            </ul>
                        </nav>
                        <script type="text/javascript">
                     $(document).ready(function() {
                        // Add the .page-item class to elements with the .pagination class
                            $('.pagination').addClass('page-item');
                        });
                    </script>
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
    <!--================Blog Area =================-->


    
<?=$this->endSection()?>