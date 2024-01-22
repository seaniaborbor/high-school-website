   <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Alumni Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <?php if(isset($testimonials_rescent)) :?>
                         <?php foreach (array_chunk($testimonials_rescent, 2) as $group) : ?>
                                        <div class="testimonial_slider">
                                            <div class="row">
                                            <?php foreach ($group as $item) : ?>
                                                     <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                                        <div class="testimonial_slider_text">
                                                            <p><?=$item->customer_testimoney?></p>
                                                            <h4><?=$item->customer_name?></h4>
                                                            <h5> <?=$item->customer_title?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-2 col-sm-4">
                                                        <div class="testimonial_slider_img">
                                                            <img src="<?=base_url('public_assets/img/testimonials/'.$item->customer_pic)?>" alt="#">
                                                        </div>
                                                    </div>      
                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                            
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>