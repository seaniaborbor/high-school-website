
    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>News/Events</p>
                        <h2>Our Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php //print_r($latest_blog_post); ?>
   
            <?php if(isset($latest_blog_post)) : ?>
                <?php foreach($latest_blog_post as $lbp) : ?>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?=base_url('public_assets/img/blog/'.$lbp->featureImg)?>" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="<?=base_url('/news-deatils/'.$lbp->blg_id)?>" class="btn_4"><?=$lbp->category?></a>
                                <a href="<?=base_url('/news-deatils/'.$lbp->blg_id)?>">
                                    <h5 class="card-title"><?=$lbp->title?></h5>
                                </a>
                                <p><?=substr($lbp->postbody, 0, 125).'...'?></p>
                                <ul>
                                    <li><a href="<?=base_url('/news-deatils/'.$lbp->blg_id)?>" class="btn btn-outline-secondary bg-white text-dark rounded-pill">Read More</a></li>
                                    <li> <span class="ti-comments"></span><?=$lbp->comment_count?> Comments</li>
                                </ul>
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