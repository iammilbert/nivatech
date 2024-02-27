<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="../assets/custom/images/shortcut.png">

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
    @include('layout/contact-navbar')
</div> 
<!-- /End Fables Navigation -->   
 

     
<!-- Start page content --> 
    <div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <span style="background-color:olive" class="fables-iconmap-icon fa-3x text-white rounded-circle d-inline-block p-4"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                            <p class="font-14 fables-forth-text-color">35 Ajose Adeogun St, Mabushi, Abuja 900108, Federal Capital Territory</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <span style="background-color:olive" class="fables-iconmap-icon fa-3x text-white rounded-circle d-inline-block p-4"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                            <p class="font-14 fables-forth-text-color"><a href="mailto:admin@nivatechnology.com">admin@nivatechnology.com</a></p>
                            <p class="font-14 fables-forth-text-color"><a href="to:+2348137950284">+234 813 795 0284</a></p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                            <span style="background-color:olive" class="fables-iconmap-icon fa-3x text-white rounded-circle d-inline-block p-4"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                            <ul class="nav fables-contact-social-links"> 
                                <li><a href="#" target="_blank"><i class=" fa-lg fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-lg fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                                <li><a href="#" target="_blank"><i class="fa-lg fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-lg fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-0 mb-5 my-md-5"> 
                        <h3 class="font-35 font-weight-bold text-center">Contact Us</h3>
                        <p class="mt-3 fables-forth-text-color  text-center">Ready to embark on your next technological journey? Reach out to us today to discover how we can tailor our expertise in trending technologies to meet your specific needs and propel your business forward. Whether you're looking to integrate AI, leverage blockchain, or explore the possibilities of IoT, our team is here to provide personalized guidance and support every step of the way. Don't hesitate to contact us to start transforming your ideas into reality.</p>

                    </div> 
                    
                    
                </div>
            </div>        
               
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-6 wow fadeInLeft">
                    <form class="fables-contact-form">
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3"  placeholder="Name">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" class="form-control rounded-0 p-3" placeholder="Email">
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
                <div class="col-12 col-sm-6 wow fadeInRight">
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=35,%20Ajose%20Adeogun%20street,%20utako,%20Abuja,%20Nigeria+(Niva%20Technology)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe></div>
                </div>
        </div>        
    </div> 
<!-- /End page content -->
    
@include('layout/footer')
    
</body>
</html>