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
                            <h2>Meet Our Preparitress</h2>
                            <p>Home<span>/</span>Preparatress Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!--================Blog Area =================-->
    <section class="blog_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
        
                      <section class="sample-text-area">
                      <div class="container box_1170">

                        <h3 class="text-heading">About Rev. Comfort Bedell Marshall</h3>
                        <p class="sample-text mb-3">
                            <b>Reverend Comfort Bedell Marshall</b>, a dedicated Liberian educator and community leader, commenced her early educational journey at the Monrovia Demonstration Elementary School, under the guidance of Principal Mrs. Rebecca Wilson. Subsequently, she pursued her studies at B.W Harris Episcopal High School, where Mr. Emmanuel Johnson served as Principal and Mr. J. Wado Bedell as Vice Principal.
                          </p>
                          <img src="<?=base_url('public_assets/img/dahn1.jpg')?>" class="img-fluid mb-3 rounded">

                          <p class="sample-text mb-3">Continuing her educational pursuits, she attended the College of West Africa, led by Mrs. Cecelia Freeman Bull. Following her high school graduation, Rev. Marshall enrolled at the Lincoln Institute of Secretarial Science, specializing in secretarial science as an elective. Although she reached the junior level at the University of Liberia, personal reasons led to a temporary hiatus in her academic journey.</p>

                          <p class="sample-text mb-3">Embracing employment opportunities, she worked with Fawaz Trading Company as an expediter and bookkeeper. Later, she joined the J. J. Roberts family, serving as a teacher's aide under the leadership of Principal Mrs. Stella Boyou. Recognizing her potential, Mrs. Boyou sponsored her training at the American Cooperative School (ACS) as an early childhood education teacher.</p>

                          <p class="sample-text mb-3">Post-training, Rev. Marshall became the supervisor of the early childhood section at the United Methodist School on 12th Street Sinkor, Monrovia. After the 1980 coup, she joined the School of Prime System (SPS), rising to the position of supervisor for the early childhood section.</p>

                          <p class="sample-text mb-3">Her teaching journey extended to the Monrovia Consolidated School System (MCSS), initially at the Monrovia Demonstration High School and later at the Slipway School under Principal Mrs. Perkins. Active in education associations, she was a member of the National Teachers Association and served as a program officer under Rev. Rudolph Marsh.</p>

                          <p class="sample-text mb-3">Driven by a commitment to higher education, Rev. Marshall pursued two Bachelor degrees with honors at the United Methodist University: a Bachelor of Theology (B.Th) and a Bachelor of Religious Education (BRE). She furthered her studies at the Kofi Anna Graduate School at the University of Liberia, working towards a Master's in Conflict Resolution.</p>
                       <div class="row">
                          <div class="col-6">
                          <img src="<?=base_url('public_assets/img/dahn2.jpg')?>" class="img-fluid mb-3 rounded">
                          </div>
                          <div class="col-6">
                          <img src="<?=base_url('public_assets/img/dahn3.jpg')?>" class="img-fluid mb-3 rounded">
                          </div>
                        </div>
                          <p class="sample-text mb-3">Beyond her roles in education, Rev. Marshall has served in various capacities, including Development Superintendent of Montserrado County, President of the Liberia Marketing Association, President of the Young Women Christian Association (YWCA), Chairperson of FAWE Liberia, Deputy Managing Director for Administration at the National Housing Authority, and Chairperson of the Liberia National Red Cross in Montserrado County. She also founded Christiana Bedell Preparatory School in New Georgia Estate and currently serves as the Assistant Pastor of the New Georgia Baptist Church.</p>
                        </p>
                       
                      </div>
                    </section>
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