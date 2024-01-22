<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>

   <meta property="og:title" content="<?=$title?>" />
    <meta property="og:description" content="<?=$description?>" />
    <meta property="og:image" content="<?=$image?>" />
    <meta property="og:image:secure_url" content="<?=$image?>" />


    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/bootstrap.min.css')?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/animate.css')?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/owl.carousel.min.css')?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/themify-icons.css')?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/flaticon.css')?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/magnific-popup.css')?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/slick.css')?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=base_url('public_assets/css/style.css')?>">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu <?php if($title == 'Christiana Bedell Preparatory School'){ echo 'main_menu home_menu';}else{ echo 'single_page_menu';}?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=base_url()?>"> <img src="<?=base_url('public_assets/img/logo.jpg')?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=base_url()?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('about')?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('courses')?>">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url('news')?>">News</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        More
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?=base_url('dahn_profile')?>">Preparitress Profile</a>
                                        <a class="dropdown-item" href="<?=base_url('staff')?>">Our Staff</a>
                                        <a class="dropdown-item" href="<?=base_url('about')?>">School History</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://web.facebook.com/profile.php?id=61555112805996&sk=photos">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="<?=base_url('auth')?>">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

<?= $this->renderSection("main") ?>

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>"At Christiana Bedell Preparatory School, we are dedicated to fostering excellence in education, empowering students with a dynamic blend of academic rigor, innovative programs, and a supportive community, preparing them for success in a rapidly evolving world." </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>"Stay informed and connected – subscribe to our newsletter for the latest updates, exciting events, and insights into the enriching educational journey at Christiana Bedell Preparatory School!"
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> New Georgia Housing Estate, Monrovia, Liberia </p>
                            <p><span> Phone :</span> (+231) 77 707 6616</p>
                            <p><span> Email : </span>christianabedell@yahoo.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;2023 All rights reserved  <i class="ti-heart" aria-hidden="true"></i> by <a href="http:www.christianabedellschool.com" target="_blank">Christiana Bedell Preparatory School</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?=base_url('public_assets/js/jquery-1.12.1.min.js')?>"></script>
    <!-- popper js -->
    <script src="<?=base_url('public_assets/js/popper.min.js')?>"></script>
    <!-- bootstrap js -->
    <script src="<?=base_url('public_assets/js/bootstrap.min.js')?>"></script>
    <!-- easing js -->
    <script src="<?=base_url('public_assets/js/jquery.magnific-popup.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url('public_assets/js/swiper.min.js')?>"></script>
    <!-- swiper js -->
    <script src="<?=base_url('public_assets/js/masonry.pkgd.js')?>"></script>
    <!-- particles js -->
    <script src="<?=base_url('public_assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('public_assets/js/jquery.nice-select.min.js')?>"></script>

    <!-- swiper js -->
    <script src="<?=base_url('public_assets/js/slick.min.js')?>"></script>
    <script src="<?=base_url('public_assets/js/jquery.counterup.min.js')?>"></script>
    <script src="<?=base_url('public_assets/js/waypoints.min.js')?>"></script>
    <!-- custom js -->
    <script src="<?=base_url('public_assets/js/custom.js')?>"></script>
    <script type="text/javascript">
         document.addEventListener('DOMContentLoaded', function () {
        // Get all <li> elements within the .pagination class
        var paginationItems = document.querySelectorAll('.pagination li');

        // Add the .page-item class to each <li> element
        paginationItems.forEach(function (item) {
            item.classList.add('page-item');
        });
    });
    </script>
</body>

</html>