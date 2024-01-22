<?php 
    $userData = session()->get('userData');
    //print_r($userData);
    /* Array ( [id] => 4 [fullName] => Deddeh H. Kollie [email] => fake@gmail.com [passwd] => $2y$10$w6gXy41pYWIpiurglirfpebCtR86ahAUPPFvzwXrYLmUj2rlEfAYe [profession] => Member, Board of Directors [fbHandle] => http://facebook.com/tarnuevvefd [xHandle] => [linkinHandle] => [profileImg] => 1703993164_6a5e0959fbb2d83ca446.png [createdAt] => 2023-12-24 15:45:49 )
    */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?=base_url('public_assets/css/dashboard-bootstrap.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url('public_assets/css/dashboard_style.css')?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <!-- jQuery -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">

  <!-- Include jQuery from CDN (required by Owl Carousel) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Include Owl Carousel JS from CDN -->
  <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>


    <title>Diverse Media |  </title>
    <style type="text/css">
       .second-text{
            color: #fff !important;
            font-weight: bolder;
        }



        .bg-success, .btn-success{
            background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%) !important;
        }
        .border-success{
            border-color: #008374!important;
        }
        .text-success{
            color:#008374!important;
        }

        .active{
            color:white !important;
        }
        .nav-pills .active{
            background-color: #008374!important;
        }
       
        #hover_profile_img{
            border-radius: 50%;
        }

        .list-group-item .bi{
            color:#red!important;
            font-weight: bolder;
            font-size: 25px !important;
        }
        
        .activate {
            background-color: #fff !important;
            color:#000 !important;
        }
         .nav-pills .active .bi{
            color:white !important;
        }
        tr:hover{
            cursor: pointer;
        }


         .owl-carousel {
      display: flex;
    }

    .owl-item {
      width: 100%;
    }
    .item{
        overflow: hidden;
    }

    .owl-carousel img {
      width: 100%;
      height: auto;
    }
    .tab-pane{
        color: #000 !important;
    }

    /* Reset some default styles */
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

/* Table header styles */
th {
  background-color: #f2f2f2;
  font-weight: bold;
  text-align: left;
  padding: 12px;
  border: 1px solid #ddd;
}

/* Table cell styles */
td {
  padding: 12px;
  border: 1px solid #ddd;
}

/* Alternating row colors */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Hover effect on rows */
tr:hover {
  background-color: #e5e5e5;
}

/* Apply styles to the item within the Owl Carousel */
.owl-item {
  /* Set initial styles */
  border: 3px solid #E4E7DE;
  box-shadow: 0 0 5px rgba(0, 128, 0, 0); /* Dark green shadow */
  transition: all 0.15s, box-shadow 0.3s;
  border-radius: 15px !important;
  overflow: hidden;
}

.bg-light{
    background: #f8f9fa!;
}


    </style>
</head>

<?php 
    function mark_active($typeLink, $passLink)
    {
        if($typeLink == $passLink){
            echo "activate";
        }
    }
?>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class=" shadow-lg " id="sidebar-wrapper" style="background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);" >
            <div class="sidebar-heading  text-center bg-success p-0  mb-0 fs-4 fw-bold text-white text-uppercase ">
                <img src="<?=base_url('public_assets/img/logo.jpg')?>" class="img-fluid w-100" >
            </div>
            <div class="list-group list-group-flush my-0">
                <a href="<?=base_url('/dashboard')?>" class="<?=mark_active('dashboard', $passLink)?> bg-transparent list-group-item list-group-item-action  second-text fw-bold"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                <a href="<?=base_url('/dashboard/blog')?>" class="<?=mark_active('blog', $passLink)?> list-group-item list-group-item-action bg-transparent second-text "><i
                        class="bi bi-pencil me-2"></i>Blog/News</a>

                  <a href="<?=base_url('/dashboard/courses')?>" class="<?=mark_active('courses', $passLink)?> list-group-item list-group-item-action bg-transparent second-text "><i
                        class="bi bi-journals me-2"></i>Manage Courses</a>

                <a href="<?=base_url('/dashboard/staff')?>" class="<?=mark_active('staff', $passLink)?> list-group-item list-group-item-action bg-transparent second-text "><i
                        class="bi bi-luggage me-2"></i>Manage Staff</a>

                <a href="<?=base_url('/dashboard/team')?>" class="<?=mark_active('team', $passLink)?> list-group-item list-group-item-action bg-transparent second-text "><i
                        class="bi bi-person-workspace me-2"></i>Manage Team</a>
     

                
                <a href="<?=base_url('/dashboard/testimonials')?>" class="<?=mark_active('testimonials', $passLink)?> list-group-item list-group-item-action bg-transparent second-text "><i class="bi bi-chat-square-quote me-2"></i>Testimonial</a>
                
            
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="bg-light">
            <nav class="navbar shadow-lg  navbar-expand-lg navbar-light bg-light py-3 mb-3 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-bar-chart-steps text-warning  me-3" id="menu-toggle" style="font-size: 30px"></i>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-success dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="p-2 px-3 img-thumbnail shadow-sm rounded-circle" 
                                style="background-image: url(<?=base_url('public_assets/img/team/'.$userData['profileImg'])?>);
                                background-size: cover; background-position: top;">
                                    </span><?=$userData['fullName']?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="<?=base_url('logout')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid bg-light px-4">
                <?=$this->renderSection('main')?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>


<!-- loan report form  -->
<div class="modal fade" id="loanReport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h3 class="modal-title text-white" id="exampleModalLabel">Generate Report </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form method="post" action="<?=base_url('dashboard/generate/loan_report')?>">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">

    <p class="mb-3 text-dark">Please be aware that this wizard is used to generate financial reports of loan and payment</p>
    <p class="mb-3 text-dark">Choose the date range below. The starting date should be less than the end date</p>
    
    <div class="form-group mb-3">
        <label for="startingDate">Starting Date</label>
        <input type="date" id="startingDate" name="startingDate" class="form-control-lg form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="endingDate">Ending Date</label>
        <input type="date" id="endingDate" name="endingDate" class="form-control-lg form-control" required>
    </div>
    
    <button type="submit" class="btn btn-lg btn-success">Generate Report</button>
</form>

      </div>
    </div>
  </div>
</div>

<!-- club payment report form -->
<div class="modal fade" id="clubPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h3 class="modal-title text-white" id="exampleModalLabel">Generate Club Report </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form method="post" action="<?=base_url('dashboard/generate/club_report')?>">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">

    <p class="mb-3 text-dark">Please be aware that this wizard is used to generate financial reports of club payment</p>
    <p class="mb-3 text-dark">Choose the date range below. The starting date should be less than the end date</p>
    
    <div class="form-group mb-3">
        <label for="startingDate">Starting Date</label>
        <input type="date" id="startingDate" name="startingDate" class="form-control-lg form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="endingDate">Ending Date</label>
        <input type="date" id="endingDate" name="endingDate" class="form-control-lg form-control" required>
    </div>
    
    <button type="submit" class="btn btn-lg btn-success">Generate Report</button>
</form>

      </div>
    </div>
  </div>
</div>
   



    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>



  <!-- Initialize Owl Carousel -->
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true, // Ensure autoplay is set to true
      autoplayTimeout: 4000, // Adjust the autoplay timeout in milliseconds
      autoplayHoverPause: true, // Pause on hover if needed
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      });
    });
  </script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



    <?php if (session()->getFlashdata('success')) : ?>
    <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-success"><i class="bi bi-check2-circle"></i></h2>
                    <h3 class="text-success"><?= session()->getFlashdata('success') ?></h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        </script>

<?php endif; ?>

<?php if(session()->getFlashdata('error')) : ?>
    <!-- The Modal -->
    <div class="modal fade" id="error" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-danger"><i class="bi bi-exclamation-diamond"></i></h2>
                    <h3 class="text-danger">
                        <?= session()->getFlashdata('error') ?: "You've Got Some Error.<br> Fix them and proceed"; ?>
                    </h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Your custom script to show the modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var errorModal = new bootstrap.Modal(document.getElementById('error'));
            errorModal.show();
        });
    </script>
<?php endif; ?>



<!-- At the end of your HTML file, before closing </body> tag -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#example2').DataTable();
        $('#example3').DataTable();
    });
</script>


<!-- Add this script to the end of your HTML body -->
<script>
    // Enable Bootstrap popover
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
</script>

<script>
    // Replace 'editor' with the ID of your textarea
    CKEDITOR.replace('content', {
        allowedContent: true // Enable HTML
    });
</script>

<script type="text/javascript">
     $(document).ready(function(){
        // Target the input of type search and add the specified classes
        $('input[type="search"]').addClass('form-control-lg w-100  border-3 rounded-pill form-control');
         $('.dataTables_filter label, .dataTables_filter input').addClass('w-100 d-block mb-3');
    });


</script>

</body>

</html>