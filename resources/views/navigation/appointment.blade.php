<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="../assets/logo/logo.jpg">

    <title>Niva | Technology</title>
    
    <!-- animate.css-->  
    <link href="../assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="../assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="../assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="../assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="../assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="../assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="../assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="../assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="../assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="../assets/custom/css/custom-responsive.css" rel="stylesheet">
</head>

<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>


<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    @include('layout/appointment-navbar')
</div> 
<!-- /End Fables Navigation -->   
 

     
<!-- Start page content --> 
    <div class="container"> 
                <div class="text-center mt-5 mb-5 bg-dark wow fadeInDown" data-wow-delay="1s">
                    <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative">
                        <span class="mx-4 font-25 font-weight-bold text-uppercase" style="color:olive">NIVA Appointment</span>
                    </h3>
                    <h2 class="text-white mt-3 font-20 font-weight-bold text-center">Let's Make It a Reality</h2> 
                </div>  
                   <div class="row mb-4 mt-4 my-lg-5">
                   <div class="col-12 col-sm-3 text-center circles">
                       <span class="text-dark font-weight-bold font-15">Monday</span>
                       <span style="background-color:olive" class="fables-gallery-circle fables-second-before"></span>
                   </div>
                   <div class="col-12 col-sm-3 text-center circles">
                       <span class="text-dark font-weight-bold font-15">Tuesday</span>
                       <span style="background-color:olive"  class="fables-gallery-circle fables-second-before"></span>
                   </div>
                   <div class="col-12 col-sm-3 text-center circles">
                       <span class="text-dark font-weight-bold font-15">Wednesday</span>
                       <span style="background-color:olive" class="fables-gallery-circle fables-second-before"></span>
                   </div>

                    <div class="col-12 col-sm-3 text-center circles">
                       <span class="text-dark font-weight-bold font-15">Thursday</span>
                       <span style="background-color:olive" class="fables-gallery-circle fables-second-before"></span>
                   </div>
               </div>
               <h2 class="text-uppercase mt-3 mb-2 font-30 text-center font-weight-bold"> Appointment Form</h2>
               <p class="text-center mb-4 font-15">Ensure you fill the form properly and submit</p>
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-12 col-md-8 offset-2 wow fadeInLeft">
                    <form class="fables-contact-form">
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3"  placeholder="Full Name">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" class="form-control rounded-0 p-3" placeholder="Email">
                      </div>
                      <div class="form-group"> 
                        <input type="date" class="form-control rounded-0 p-3">   
                      </div>

                    <div class="form-group"> 
                        <input type="number" name="tel" class="form-control rounded-0 p-3" placeholder="Phone number">   
                      </div>
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3" placeholder="Subject">   
                      </div>
                      <div class="form-group"> 
                          <textarea class="form-control rounded-0 p-3" placeholder="Message" rows="3"></textarea>
                      </div>                       
                      <button style="background-color:olive" type="submit" class="btn rounded-0 text-white btn-block p-3">Send</button>
                    </form>
                </div>
        </div>        
    </div> 
<!-- /End page content -->


@include('layout/footer')
    
</body>
</html>