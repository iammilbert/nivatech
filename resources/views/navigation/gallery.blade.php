@include('layout/header')

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




<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    @include('layout/gallery-navbar')
</div> 
     
<!-- Start page content -->  
       <div class="container">

            
                  <h3 class="font-40 text-center font-weight-bold mt-5" style="color:olive; font-family:Gebriola">OUR PORTFOLIO</h3>
                        <span class="fables-table-arrow border-2 bg-warning white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
             <div class="row mt-4 my-md-5 pt-5"> 
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                         <div class="image-container zoomOut-effect">
                              <a href="#"><img src="../assets/custom/images/transport.jpg" alt="Niva Project Picture" class="w-100"></a>
                         </div>
                          
                          <h2 class="my-3"><a href="#" style="color:olive" class="font-weight-bold font-26 semi-font gallery-title">Inventory System</a></h2>
                          <div class="row my-2">
                              <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Categories </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : Web Dev. </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Client  </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : Darl Transport </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Date  </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : 18 May 2017 </span>
                              </div>
                          </div>
                          <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                          </p>
                          <a href="" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">See Project</a>   
                       
                    </div>
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/e-learning.jpg" alt="image" class="w-100"></a> 
                         </div>
                          <h2 class="my-3"><a href="#" style="color:olive" class="font-weight-bold fables-second-hover-color font-26 semi-font gallery-title">E-Learning System</a></h2>
                          <div class="row my-2">
                              <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Categories </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : web design </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Client  </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : Darl CloudSoft </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Date  </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : 18 May 2017 </span>
                              </div>
                          </div>
                          <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                          </p>
                          <a href="" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">See Project</a> 
                        
                  </div>
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/bookstore2.jpg" alt="image" class="w-100"></a> 
                         </div>
                          <h2 class="my-3"><a href="#" style="color:olive" class=" fables-second-hover-color font-26 semi-font gallery-title">E-Bookstore Library</a></h2>
                         <div class="row my-2">
                              <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Categories </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : web design </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Client  </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : Scola </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Date  </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : 18 May 2017 </span>
                              </div>
                          </div>
                          <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                          </p>
                          <a href="" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">See Project</a> 
                      
                  </div> 
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/ncce.jpg" alt="image" class="w-100"></a> 
                         </div>
                          <h2 class="my-3"><a href="#" style="color:olive" class=" fables-second-hover-color font-26 semi-font gallery-title">Certificate Management</a></h2>
                          <div class="row my-2">
                              <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Categories </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : web design </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Client  </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : NCCE </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Date  </span>
                                  <span class="font-weight-bold font-14 gallery-subtitle"> : 18 May 2017 </span>
                              </div>
                          </div>
                          <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                          </p>
                          <a href="" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">See Project</a>  
                  </div> 
             </div>  
       </div> 
       <div class="fables-blog-slider py-4 py-lg-5 fables-light-background-color"> 
             <div class="container">
                 <h2 class="fables-main-text-color text-center mt-lg-4 mb-4 mb-lg-5 font-26 bold-font">Other Projects</h2> 
                 <div class="owl-carousel owl-theme nav-slider">
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/cv1.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Ecommerce</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                       </div>
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Point of Sale (POS)</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                      </div> 
                      <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Hospital Management</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>  
                      </div> 
                      <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a> 
                          </div>  
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           CBT Software</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                      </div>  
                     <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Eatery Website</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>    
                       </div>
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Student Management System</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                      </div> 
                      <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Cars Repair</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                      </div> 
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>   
                      </div> 
                      <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>  
                      </div>  
                     <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a> 
                          </div>   
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>    
                       </div>
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>    
                      </div> 
                      <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>  
                      </div> 
                       <div class="text-center"> 
                          <div class="image-container zoomOut-effect">
                             <a href="#"><img src="../assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a> 
                          </div> 
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum 
                          </p>  
                      </div> 
                </div> 
             </div>
        </div>
      
<!-- /End page content -->
    
@include('layout/footer')
    
</body>
</html>