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
    @include('layout/about-navbar')
</div> 


<!-- Start page content --> 
   <div class="container mt-5 my-4 my-md-5 overflow-hidden"> 
                <div class="text-center mb-5 bg-dark wow fadeInDown" data-wow-delay="1s">
                    <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative">
                        <span class="mx-4 font-25 font-weight-bold text-uppercase" style="color:olive">WHY NIVA TECHNOLOGY</span>
                    </h3>
                    <h2 class="text-white mt-3 font-20 font-weight-bold text-center">What Makes Us Special</h2> 
                </div> 
        <div class="row mt-4 my-md-5 overflow-hidden">
            <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
                <div class="border p-4">
                    <div class="row text-center text-lg-left">
                        <div class="col-12 col-lg-3 mb-3 mb-md-0">
                            <span class="fables-iconlamp-icon fables-second-text-color fa-3x" style="color:olive"></span>
                        </div>
                        <div class="col-12 col-lg-9">
                            <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading" style="color:olive">We’re Creative</h2>
                            <div class="font-15 fables-forth-text-color">
                               At Niva Technology, creativity is at the core of everything we do. Our team is dedicated to thinking outside the box, pushing boundaries, and crafting innovative solutions tailored to your unique needs. 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
               <div class="border p-4">
                    <div class="row text-center text-lg-left">
                        <div class="col-12 col-lg-3 mb-3 mb-md-0">
                            <span class="fables-icongears-icon fables-second-text-color fa-3x" style="color:olive"></span>
                        </div>
                        <div class="col-12 col-lg-9">
                           <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading" style="color:olive">Highly Customizable</h2>
                           <div class="font-15 fables-forth-text-color">
						We pride ourselves on offering highly customizable solutions tailored to your specific requirements.We believe in collaborating closely with each clients to understand their needs, have great relationship.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
               <div class="border p-4">
                    <div class="row text-center text-lg-left">
                        <div class="col-12 col-lg-3 mb-3 mb-md-0">
                            <span class="fables-iconheadset-icon fables-second-text-color fa-3x" style="color:olive"></span>
                        </div>
                        <div class="col-12 col-lg-9">
                           <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading" style="color:olive">Efficient 24/7 support</h2>
                            <div class="font-15 fables-forth-text-color">
						At Niva Technology, we understand the importance of reliable and efficient support whenever you need it. That's why we're proud to offer round-the-clock assistance, 24 hours a day, 7 days a week.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 

    <div class="container">
            <div class="my-4 my-md-5 overflow-hidden">
               
                <div class="text-center mb-5 bg-dark wow fadeInDown" data-wow-delay="1s">
                    <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative">
                        <span class="mx-4 font-25 font-weight-bold text-uppercase" style="color:olive">SERVICES WE OFFER</span>
                    </h3>
                    <h2 class="text-white mt-3 font-25 font-weight-bold text-center">Provide you the great Services</h2> 
                </div>

                                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fables-about-icon-style"> 
                            <span class="fables-iconmobileApp-icon fables-second-text-color fa-3x" style="color:olive"></span>
                            <h2 class="fables-second-text-color fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">Mobile Apps </h2>
                            <span class="fables-title-border fables-second-background-color"></span>
                            <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>

                        </div>
                    </div>  
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
                       <div class="fables-about-icon-style">
                           <span class="fables-icondevelopment-icon fables-second-text-color fa-3x" style="color:olive"></span>
                           <h2 class="fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">Development</h2>
                           <span class="fables-title-border fables-second-background-color"></span>
                           <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
                       <div class="fables-about-icon-style"> 
                            <span class="fables-iconwebDesign-icon fables-second-text-color fa-3x" style="color:olive"></span>
                           <h2 class="fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">IT Trainning </h2>
                           <span class="fables-title-border fables-second-background-color"></span>
                            <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>
                        </div> 
                    </div>
                </div> 
                    
                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fables-about-icon-style"> 
                            <span class="fables-iconmobileApp-icon fables-second-text-color fa-3x" style="color:olive"></span>
                            <h2 class="fables-second-text-color fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">Mobile Apps </h2>
                            <span class="fables-title-border fables-second-background-color"></span>
                            <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>

                        </div>
                    </div>  
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
                       <div class="fables-about-icon-style">
                           <span class="fables-icondevelopment-icon fables-second-text-color fa-3x" style="color:olive"></span>
                           <h2 class="fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">Development</h2>
                           <span class="fables-title-border fables-second-background-color"></span>
                           <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
                       <div class="fables-about-icon-style"> 
                            <span class="fables-iconwebDesign-icon fables-second-text-color fa-3x" style="color:olive"></span>
                           <h2 class="fables-about-icon-head mt-3 mb-2 font-18 semi-font" style="color:olive">IT Trainning </h2>
                           <span class="fables-title-border fables-second-background-color"></span>
                            <div class="fables-forth-text-color mt-3 font-14">
                                We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
       </div>
       <div class="row overflow-hidden"> 
            <div class="col-12 col-md-6">
                 <div class="image-container translate-effect-right">
                    <img src="../assets/custom/images/mission.jpg" alt="Fables Template" class="img-fluid">
                 </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <span class="fables-iconrocket-icon fa-3x" style="color:olive"></span>
                <h2 class="font-30 font-weight-bold my-4 d-inline-block d-lg-block wow fadeInRight" data-wow-duration="1.5s" style="color:olive">Our Mission</h2>
                <div class="fables-vision-detail fables-forth-text-color wow fadeInRight" data-wow-duration="1.5s">
					
				As a tech company, our mission is to harness the power of technology to simplify complexities, drive innovation, and empower individuals and businesses to thrive in a digital world. We are dedicated to creating cutting-edge solutions that enhance efficiency, connectivity, and productivity while prioritizing security and user experience. Our commitment extends beyond just delivering products; we aim to inspire and enable positive change through technology, making a meaningful impact on society and shaping the future for generations to come. At Niva Technology, we believe in using technology as a force for good, driving progress, and improving lives worldwide.
                </div>
            </div>
      </div>
        
    </div>
   
    
    <div class="container mt-5"> 
       <div class="row overflow-hidden">
            <div class="col-12 col-md-6">
                <span class="fables-iconvision-icon fables-second-text-color fa-4x" style="color:olive"></span>
                <h2 class="font-30 font-weight-bold fables-second-text-color my-4 wow fadeInLeft d-inline d-lg-block" data-wow-duration="1.5s" style="color:olive">Our Vision</h2>
                <div class="fables-forth-text-color mt-4 wow fadeInLeft" data-wow-duration="1.5s">
                   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br> <br>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like 
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="image-container translate-effect-right">
                     <img src="../assets/custom/images/vission.jpg" alt="Fables Template" class="img-fluid">
                </div>
               
            </div>
      </div> 
    </div>


  <div class="container"> 
        <div class="row mt-4 mt-md-5">
            <div class="col-12 text-center wow fadeInDown">
                <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative">
                    <span class="mx-4">Testimonials</span>
                </h3>
                <h2 class="fables-second-text-color mt-3 font-30 font-weight-bold text-center">what people say</h2> 
            </div>
            <div class="text-center mb-4 col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 wow fadeInDown">
We’ve been lucky enough to work with so many industrial Clients . Check out what they’re saying.
                </p>
            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-sm-6 wow fadeInDown" data-wow-delay=".3s">
                 <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-4 rounded position-relative">  
                      <div class="row">
                          <div class="col-12 col-sm-3 text-center image-container shine-effect">
                               <img src="../assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-block-img rounded-circle">  
                          </div>
                          <div class="col-12 col-sm-8">
                              <div class="fables-testimonial-block-info">
                                  <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font">Billy Richards</h3>
                                  <h3 class="fables-fifth-text-color font-italic font-14 mt-2">Chief Manager, Simba Co</h3>
                              </div>
                          </div>
                      </div>
                      <div class="fables-forth-text-color font-italic font-14 semi-font mt-3"> 
                        "Partnering with Niva Technology has been a game-changer for our organization. Their innovative approach to technology solutions and unparalleled dedication to customer satisfaction have helped us stay ahead in today's competitive landscape. From seamlessly integrating new software to providing ongoing support." 
                      </div>
                 </div> 
            </div>
            <div class="col-12 col-sm-6 wow fadeInDown" data-wow-delay=".6s">
                 <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-4 rounded position-relative">  
                      <div class="row">
                          <div class="col-12 col-sm-3 text-center image-container shine-effect">
                               <img src="../assets/custom/images/test4.jpg" alt="Fables Template" class="fables-testimonial-block-img rounded-circle">  
                          </div>
                          <div class="col-12 col-sm-8">
                              <div class="fables-testimonial-block-info">
                                  <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font">Matthew Oki</h3>
                                  <h3 class="fables-fifth-text-color font-italic font-14 mt-2">CEO, FaithTopchoice</h3>
                              </div>
                          </div>
                      </div>
                      <div class="fables-forth-text-color font-italic font-14 semi-font mt-3"> 
                        "Working with Niva Tech. has been nothing short of exceptional. Their team's expertise, professionalism, and commitment to our project's success have truly impressed us. From the initial consultation to the final implementation, Niva Tech. has been there every step of the way, offering innovative solutions tailored to our specific needs."
                      </div>
                 </div> 
            </div>
            <div class="col-12 col-sm-6 wow fadeInDown" data-wow-delay=".9s">
                 <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-4 rounded position-relative">
                      <div class="row">
                          <div class="col-12 col-sm-3 text-center image-container shine-effect">
                               <img src="../assets/custom/images/test3.jpg" alt="Fables Template" class="fables-testimonial-block-img rounded-circle">  
                          </div>
                          <div class="col-12 col-sm-8">
                              <div class="fables-testimonial-block-info">
                                  <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font">James Author</h3>
                                  <h3 class="fables-fifth-text-color font-italic font-14 mt-2">Human Resource Manager, Raadaa Partners Int'l</h3>
                              </div>
                          </div>
                      </div>
                      <div class="fables-forth-text-color font-italic font-14 semi-font mt-3"> 
                            "No matter what issue or questions pops up, you are always there to 
                            assist me. Thank you so much for your excellent assistance and great 
                            customer support through years.  We highly recommend Niva Technology to any business looking for top-notch technology services."
                      </div>
                 </div> 
            </div>
            <div class="col-12 col-sm-6 wow fadeInDown" data-wow-delay="1.2s">
                 <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-4 rounded position-relative"> 
                      <div class="row">
                          <div class="col-12 col-sm-3 text-center image-container shine-effect">
                               <img src="../assets/custom/images/test2.jpg" alt="Fables Template" class="fables-testimonial-block-img rounded-circle">  
                          </div>
                          <div class="col-12 col-sm-8">
                              <div class="fables-testimonial-block-info">
                                  <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font">Timileyin Bayo</h3>
                                  <h3 class="fables-fifth-text-color font-italic font-14 mt-2">Chief Manager, Mikesung Nextwave</h3>
                              </div>
                          </div>
                      </div>
                      <div class="fables-forth-text-color font-italic font-14 semi-font mt-3">"Their dedication to delivering results on time and within budget has made them a trusted partner in our technology journey. We couldn't be happier with the outcome and look forward to continuing our collaboration with Niva Tech. for future projects."
                      </div>
                 </div> 
            </div>
        </div>  
</div>
  <div class="fables-counter-section fables-after-overlay my-3 my-md-5 pt-4 pb-0 py-md-5 bg-rules">
       <div class="container">
           <div class="row">
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="307">0</h2>
                       <h3 class="font-14 semi-font text-white">SATISFIED CLIENTS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="95">0</h2>
                       <h3 class="font-14 semi-font text-white">COMPANY MEMBERS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="55">0</h2>
                       <h3 class="font-14 semi-font text-white">AWWARDS WIN</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="16">0</h2>
                       <h3 class="font-14 semi-font text-white">YEARS EXPIRIENCE</h3>
                   </div>
               </div>
           </div>
       </div>
   </div>
    
    <div class="container"> 
        <div class="fables-team overflow-hidden">
                <h2 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Team</h2> 
                <div class="row my-4 my-lg-5">
                    <div class="col-6 col-md-3 mb-3 wow bounceInDown" data-wow-delay=".3s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                             <div class="image-container shine-effect">
                                  <a href="#"><img class="w-100" src="../assets/custom/images/team3-1.jpg" alt="Card image cap"></a>
                             </div>
                          
                          <div class="card-body">
                            <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-forth-text-color my-1 font-italic">Programmer</p> 
                            <ul class="nav fables-team-social-links mt-3"> 
                                <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 wow bounceInDown" data-wow-delay=".3s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                             <div class="image-container shine-effect">
                                  <a href="#"><img class="w-100" src="../assets/custom/images/team3-2.jpg" alt="Card image cap"></a>
                             </div>
                          
                          <div class="card-body">
                            <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-forth-text-color my-1 font-italic">Programmer</p> 
                            <ul class="nav fables-team-social-links mt-3"> 
                                <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 wow bounceInDown" data-wow-delay=".3s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                             <div class="image-container shine-effect">
                                  <a href="#"><img class="w-100" src="../assets/custom/images/team3-1.jpg" alt="Card image cap"></a>
                             </div>
                          
                          <div class="card-body">
                            <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-forth-text-color my-1 font-italic">Programmer</p> 
                            <ul class="nav fables-team-social-links mt-3"> 
                                <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3 wow bounceInDown" data-wow-delay=".3s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                             <div class="image-container shine-effect">
                                  <a href="#"><img class="w-100" src="../assets/custom/images/team3-2.jpg" alt="Card image cap"></a>
                             </div>
                          
                          <div class="card-body">
                            <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-forth-text-color my-1 font-italic">Programmer</p> 
                            <ul class="nav fables-team-social-links mt-3"> 
                                <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>  

            </div>   
        <div class="row">
            <div class="owl-carousel owl-theme px-6 mt-0 mb-4 my-lg-5" id="fables-partner-carousel">
                  <div> 
                      <img src="../assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-3.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-4.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-3.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-3.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="../assets/custom/images/partner2-4.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>

            </div>
        </div>     
    </div> 
<!-- /End page content -->


@include('layout/footer')
     
    
</body>
</html>