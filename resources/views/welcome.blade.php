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
 
 <div class="fables-transparent py-3 py-lg-0">
    @include('layout/navbar')
</div>  

     
<!-- Start Header -->
<div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules" style="background-image: url(../assets/custom/images/index-testimonial.jpg);">
    <div class="container">  
        <div class="row">
            <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                  <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                      <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                          <h1 class="fables-main-text-color font-weight-bold mb-1 upper-case">NIVA TECHNOLOGY
                             <span class="font-30 fables-second-text-color" style="color:olive"><br>CONNECTING YOU TO THE FUTURE</span>
                          </h1>  
                          <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            Whether it's through networking, information dissemination, or collaborative projects, NIVA facilitates engagement with forward-thinking concepts and developments, empowering users to stay at the forefront of progress and innovation.
                          </p>
                        <a href="#" class="btn white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color font-weight-bold" style="background-color:olive; border-color:olive">Our Services</a>
                          <a href="#" class="btn font-weight-bold rounded-0 px-3 px-md-4 py-2" style="border-color:olive; color: white;" onmouseover="this.style.backgroundColor='olive';" onmouseout="this.style.backgroundColor='olive';">Learn More</a>   
                      </div> 
                      <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                          <h1 class="fables-main-text-color font-weight-bold mb-1">WE'RE FUN-DAMENTALLY
                             <span class="fables-second-text-color" style="color:olive"><br>TECH TASTIC</span>
                          </h1>  
                          <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            A positive attitude towards embracing technological advancements and integrating them into various aspects of life. Technology can be both fun and fundamental.
                          </p>
                          <a href="#" class="btn white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color font-weight-bold" style="background-color:olive; border-color:olive">Our Services</a>
                          <a href="#" class="btn font-weight-bold rounded-0 px-3 px-md-4 py-2" style="border-color:olive; color: white;" onmouseover="this.style.backgroundColor='olive';" onmouseout="this.style.backgroundColor='olive';">Learn More</a>  
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- /End Header -->
     

     
                 <div class="text-center mb-5 mt-6 bg-dark wow fadeInDown" data-wow-delay="1s">
                    <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative" id="services">
                        <span class="mx-4 font-25 font-weight-bold text-uppercase" style="color:olive">SERVICES WE OFFER</span>
                    </h3>
                    <h2 class="text-white mt-3 font-25 font-weight-bold text-center">Unlocking your potential, one service at a time</h2> 
                </div>
<!-- Start page content -->    
       <div class="container card">
             <div class="row my-3 my-md-5 overflow-hidden">
                  <div class="col-12 mb-3 col-sm-6 col-lg-3 text-center mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                      <span class="fa fa-desktop fa-3x" style="color:olive"></span>
                      <h2 class="fables-main-text-color font-18 my-2 font-weight-bold">SOFTWARE DEVELOPMENT</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        Our team of skilled developers is passionate about bringing your vision to life. We combine cutting-edge technologies with industry best practices to deliver tailor-made solutions that exceed expectations. With a commitment to quality, efficiency, and collaboration, we ensure that every project is executed with precision and finesse.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness2 fa-3x" style="color:olive"></span>
                      <h2 class="text-center fables-main-text-color font-18 my-2 font-weight-bold">DESIGN</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        Partner with us, and let's embark on a journey to design excellence together. With our passion for creativity, dedication to quality, and commitment to collaboration, we'll help you stand out in a crowded digital landscape. Let's create designs that inspire, captivate, and leave a lasting impact on the world.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness3 fa-3x" style="color:olive"></span>
                      <h2 class="text-center fables-main-text-color font-18 my-2 font-weight-bold">MARKETING</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        Our approach to marketing is rooted in authenticity, transparency, and innovation. We craft compelling narratives that highlight the unique benefits of your software solutions, leveraging a mix of digital channels, social media platforms, and targeted campaigns to reach the right audience at the right time.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness4 fa-3x" style="color:olive"></span>
                      <h2 class="text-center fables-main-text-color font-18 my-2 font-weight-bold">SOFTWARE MAINTENANCE</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        Our approach to software maintenance is proactive, comprehensive, and tailored to your specific needs. We offer a range of services designed to keep your software in peak condition, including regular health checks, proactive monitoring, and timely updates. With a dedicated team of experts at your disposal.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fa fa-globe fa-3x" style="color:olive"></span>
                      <h2 class="text-center fables-main-text-color font-18 my-2 font-weight-bold">WEB HOSTING</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        Our web hosting services offer a robust platform designed to meet the needs of websites of all sizes and complexities. With state-of-the-art data centers, lightning-fast servers, and industry-leading security measures, we provide the reliability and performance your website demands.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fas fa-graduation-cap fa-3x" style="color:olive"></span>
                      <h2 class="text-center font-18 my-2 font-weight-bold">IT TRAINING</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        From hands-on workshops and online courses to personalized coaching and certification programs, our experienced trainers provide engaging and practical learning experiences that empower your team to excel. With a focus on real-world application and measurable outcomes.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fa fa-users fa-3x" style="color:olive"></span>
                      <h2 class="text-center font-18 my-2 font-weight-bold">CONSULTANCY</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                        From strategic planning and organizational restructuring to process optimization and technology implementation, our consultants work hand in hand with you to develop practical strategies and executable roadmaps that deliver measurable results. With a focus on innovation and continuous improvement.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fa fa-building fa-3x" style="color:olive"></span>
                      <h2 class="text-center font-18 my-2 font-weight-bold">INTERNSHIP</h2>
                      <p class="text-justify card-body fables-forth-text-color font-15">
                     Whether you're interested in software development, design, marketing, IT training, consultancy, or any other area of our business, our internship programs offer a supportive and inclusive environment where you can thrive. We believe in investing in our interns.<br>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                      </p>
                       
                  </div>
            </div> 
            
       </div>
       <div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
           <div class="container-fluid p-5 position-relative z-index">
             <div class="row">
                <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
                    <img src="../assets/logo/logo.jpg" alt="" class="w-100" styl="height:400px">
                </div>
                <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s" styl="height:400px">
                    <h2 class="font-30 font-weight-bold fables-second-text-color mb-4">WHY CHOOSE US</h2>
                    <div id="accordion">
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block 
 position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  EXPERTISE
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              Our team comprises seasoned professionals with extensive experience in the tech industry. From software development to IT training, we bring a wealth of knowledge and expertise to every project.
                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  INNOVATION
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              We thrive on innovation, constantly pushing the boundaries to develop cutting-edge solutions that set new standards in the industry. Whether it's pioneering technologies or innovative approaches, we're always one step ahead.
                              </div>
                            </div>
                          </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingfive">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                QUALITY ASSURANCE
                                </button>
                              </h5>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              Quality is non-negotiable. We adhere to the highest standards of quality assurance, ensuring that every project is delivered to the highest level of excellence, on time and within budget.
                              </div>
                            </div>
                          </div>

                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingsix">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                CUSTOMERS SATISFACTION
                                </button>
                              </h5>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              Our ultimate goal is customer satisfaction. We go above and beyond to ensure that our clients are happy with the results, providing ongoing support and guidance every step of the way.
                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  TAILORED SOLUTIONS
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              We understand that every client is unique, which is why we offer customized solutions tailored to your specific needs and objectives. Whether you're a startup or an enterprise, we have the expertise to help you succeed.
                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  COLLABORATION
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              Collaboration is at the heart of everything we do. We believe in working closely with our clients, listening to their needs, and collaborating to develop solutions that exceed expectations.
                              </div>
                            </div>
                          </div>

                    

                         <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="heading8">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn font-weight-bold fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                  TRANSPARENCY
                                </button>
                              </h5>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                              Transparency is key to building trust and fostering strong relationships. We believe in open communication, honesty, and transparency in all our dealings, ensuring that our clients are always informed and empowered.
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
             </div>

           </div>
       </div>
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center"> 
                   <h2 class="fables-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4" style="color:olive">We are Creative Agency</h2>
                   <p class="fables-forth-text-color">
                   At our creative agency, we specialize in transforming your ideas into captivating experiences that resonate with your audience. With a blend of strategic thinking, artistic flair, and cutting-edge technology, we're dedicated to bringing your vision to life and helping your brand stand out in today's competitive market. Let's collaborate to unleash the full potential of your brand and leave a lasting impression on your customers.
                   </p> 
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
    


       <div class="fables-price-bg fables-after-overlay py-4 py-lg-5 my-4 my-lg-5 bg-rules overflow-hidden"> 
           <div class="container-fluid position-relative z-index">
               <h2 class="white-color font-35 font-weight-bold text-center mb-4 mb-md-5">Our Course Plan</h2> 
               <div class="row">
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="bg-blue py-4">
                              <h5 class="white-color font-weight-bold position-relative fables-third-after table-title">COMPUTER APPRECIATION</h5>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"> <span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">1 Months, 2 Months & 3 Months</p> 
                              <span class="fables-table-arrow border-2 bg-blue white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
Involves gaining knowledge about fundamental computer concepts, including hardware components, software functionalities, basic troubleshooting, security considerations, and proficiency in common productivity tools.
                              </p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Start Now</a>
                          </div>
                       </div>

                   </div>
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="fables-second-background-color py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-26 table-title">WEB DESIGN</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months & 3 months</p> 
                              <span class="fables-table-arrow border-2 fables-second-background-color white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
Learning Visual design principles, HTML/CSS, responsive design, UX/UI design, accessibility, web typography, information architecture, interaction design, prototyping, SEO, and basic web development concepts.
                              </p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Purchase Now</a>
                          </div>
                       </div>

                   </div>
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="bg-primary py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title">WEB DEVELOPMENT.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months - 3 months</p> 
                              <span class="fables-table-arrow border-2 bg-primary white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">

You'll learn HTML, CSS, JavaScript for front-end, PHP or Node.js, databases, React or vue or Angular frameworks, APIs, version control, deployment, and best practices for creating responsive, scalable, and secure web applications.
                              </p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Purchase Now</a>
                          </div>
                       </div>

                   </div>

                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table mb-5 ">
                          <div class="bg-info py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-26 table-title">FRONT END DEV.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months - 3 months</p> 
                              <span class="fables-table-arrow border-2 bg-info rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
UI and client-side functionality of websites or web applications using HTML, CSS, and JavaScript. Frameworks like React, Angular, or Vue.js will aid development, while responsive design ensures compatibility across devices. 
                              </p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Start Now</a>
                          </div>
                       </div>

                   </div>
               </div>


                <div class="row">
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="bg-warning py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title">BACK END DEV.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"> <span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">1 Month - 2 months</p> 
                              <span class="fables-table-arrow border-2 bg-warning white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
Server-side technologies and database management, including languages like Python, Ruby, Java, Laravel, or Node.js, frameworks like Django, Flask, Ruby on Rails, Spring Boot, or Express.js, database management systems such as MySQL, PostgreSQL, MongoDB, or Firebase, API design and integration, authentication and authorization mechanisms, server optimization and scalability.
                              </p>
                              <a href="#" style="background-color:olive"class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Start Now</a>
                          </div>
                       </div>

                   </div>
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="bg-success py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-26 table-title">GRAPHICS DESIGN.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months - 3 months</p> 
                              <span class="fables-table-arrow border-2 bg-success white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
Creating visual assets and elements that enhance the aesthetic appeal and user experience of websites or digital products, including skills such as graphic manipulation using tools like Adobe Photoshop or Illustrator, understanding principles of color theory, typography, and layout design, creating logos, icons, and illustrations, collaborating with web developers.</p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Start Now</a>
                          </div>
                       </div>

                   </div>
                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="bg-secondary py-4">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title">UI/UX.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months - 3 months</p> 
                              <span class="fables-table-arrow border-2 bg-primary white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                We offer clear navigation, engaging visual design, responsive layout, interactive elements, personalization options, accessibility features, and accessible support resources. These components collectively ensure a seamless and intuitive learning experience that captivates users and facilitates their educational journey effectively. understanding HTML and using Figma for Designs
                              </p>
                              <a href="#" style="background-color:olive" class="bth white-color-hover white-color fables-btn-rounded px-4 py-2">Start Now</a>
                          </div>
                       </div>

                   </div>

                   <div class="col col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                       <div class="table-border-light fables-second-hover-border colored-table">
                          <div class="py-4" style="background-color:olive">
                              <h2 class="white-color font-weight-bold position-relative fables-third-after font-26 table-title">MARKETING.</h2>
                              <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                              <p class="white-color font-13 mb-4">2 Months - 3 months</p> 
                              <span style="background-color:olive" class="fables-table-arrow border-2 white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                          </div> 
                          <div class="bg-white py-4">
                              <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
Strategies to promote and drive traffic to websites or digital products, including conducting market research and audience analysis, developing compelling content and messaging, implementing SEO (Search Engine Optimization) techniques to improve search engine visibility, utilizing social media and email marketing campaigns to engage with audiences, analyzing website analytics and user behavior to optimize performance.
                              </p>
                              <a href="#" style="background-color:olive" class="btn white-color white-color-hover fables-btn-rounded px-4 py-2">Purchase Now</a>
                          </div>
                       </div>

                   </div>
               </div>
           </div>  
       </div>
       
       <div class="container mb-4 mb-md-5"> 
            <div class="row">
               <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                   <div class="text-center">
                       <h2 class="fables-main-text-color font-35 font-weight-bold mb-4">Latest Works</h2>
                       <p class="fables-forth-text-color">

                        Discover our latest works, where creativity meets innovation to deliver exceptional results that exceed expectations. From captivating branding strategies to immersive digital experiences, each project showcases our commitment to excellence and our passion for pushing boundaries in the ever-evolving landscape of design and marketing. Explore our portfolio and envision how we can elevate your brand to new heights.

                       </p>
                   </div>
               </div>
           </div> 
                 
               <div class="gallery-filter">
                    <div class="portfolioFilter my-3 clearfix">
                      <a href="#" data-filter="*" class="current">ALL</a>
                      <a href="#" data-filter=".webDesign" class="fables-forth-text-color">Web Design</a>
                      <a href="#" data-filter=".appDesign" class="fables-forth-text-color">Mobile App</a>
                      <a href="#" data-filter=".brand" class="fables-forth-text-color">Web Development</a>
                      <a href="#" data-filter=".development" class="fables-forth-text-color">Mobile App</a>
                    <a href="#" data-filter=".ux/ui" class="fables-forth-text-color">UI/UX Design</a>
                    </div> 
                    <div class="portfolioContainer row filter-masonry"> 
                          <div class="drawings places col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="../assets/custom/images/nieves.jpg" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="../assets/custom/images/nieves.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div>

                          <div class="webDesign brand food col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="../assets/custom/images/transport.jpg" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="../assets/custom/images/transport.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div>
                         <div class="webDesign brand objects col-sm-6 col-md-3 mb-2">
                             <div class="filter-img-block position-relative image-container translate-effect-right"> 
                                 <img src="../assets/custom/images/bookstore.jpg" alt="image" class="w-100"> 
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a  data-fancybox="gallery" href="../assets/custom/images/bookstore.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>

                          </div>    
                          <div class="appDesign brand col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="../assets/custom/images/e-learning.jpg" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="../assets/custom/images/e-learning.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div>

                          <div class="webDesign brand col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="../assets/custom/images/bookstore2.jpg" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="../assets/custom/images/bookstore2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div> 
                          <div class="webDesign brand col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="../assets/custom/images/ncce.jpg" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="../assets/custom/images/ncce.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div> 
                          
                       
                    </div> 
                    <div class="text-center">
                        <a href="#" class="btn fables-main-border-color fables-main-text-color mt-md-4 px-5 py-2 fables-btn-rounded fables-main-hover-background-color white-color-hover">Show All Projects</a>
                    </div>
               </div> 
       </div>
       <div class="fables-testimonial fables-after-overlay py-5 bg-rules">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-8">
                       <div class="fables-contact-caption-txt"> 
                           <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">We are the best business consulting company ever!!</h3>  
                           <p class="fables-third-text-color position-relative z-index font-weight-light">
                            As a business consulting company, we pride ourselves on delivering unparalleled expertise, tailored solutions, and measurable results to our clients. With a team of seasoned professionals who are dedicated to understanding your unique challenges and goals, we provide strategic guidance and actionable recommendations that drive success. Trust us to be your partner in achieving sustainable growth and maximizing your potential.</p>
                           
                       </div>
                   </div>
                   <div class="col-12 col-md-4 offset-xl-2 col-xl-2 text-center">
                        <a href="contactus1.html" class="btn fables-second-background-color fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Contact us</a> 
                   </div>
               </div>
               
           </div>
       </div>
       <div class="container">
           <div class="row overflow-hidden">
              <div class="col-12">
                  <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">Trending Technologies</h2>
              </div>
               <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/ai.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Artificial Intelligence (AI) and Machine Learning (ML):</a></h2>
                      <p class="fables-forth-text-color font-14">
                        AI and ML continue to revolutionize industries by automating processes, improving decision-making, and enabling predictive analytics.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>
              <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".8s" data-wow-duration="1.5s">  
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/edge.png" alt=""></a>  
                      </div>  
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Edge Computing</a></h2>
                      <p class="fables-forth-text-color font-14">
                         With the proliferation of Internet of Things (IoT) devices, edge computing has gained popularity for processing data closer to the source, reducing latency, and improving efficiency.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>
              <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/5g.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">5G Technology</a></h2>
                      <p class="fables-forth-text-color font-14">
                        The rollout of 5G networks promises faster internet speeds, lower latency, and greater capacity, enabling new applications and services such as autonomous vehicles, augmented reality, and smart cities.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>

              <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/cyber.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Cybersecurity Technologies</a></h2>
                      <p class="fables-forth-text-color font-14">
                      As cyber threats become more sophisticated, there is increasing demand for advanced cybersecurity solutions including AI-based threat detection, zero-trust security models, and encryption technologies.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>
           </div>
     </div>      


    <div class="container">
           <div class="row overflow-hidden">
              <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/robot.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Robotic Process Automation (RPA)</a></h2>
                      <p class="fables-forth-text-color font-14">
                      RPA technology automates repetitive tasks and processes, improving efficiency and reducing human error across industries such as finance, healthcare, and customer service.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>

              <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/iot.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Internet of Things (IoT)</a></h2>
                      <p class="fables-forth-text-color font-14">
                      IoT devices continue to proliferate, connecting everyday objects to the internet and enabling data collection, automation, and remote monitoring across various domains including smart homes, healthcare, agriculture, and industrial IoT.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>

                <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/energy.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Renewable Energy Technologies</a></h2>
                      <p class="fables-forth-text-color font-14">
                      With growing concerns about climate change, renewable energy technologies such as solar, wind, and hydroelectric power are gaining traction as viable alternatives to traditional fossil fuels.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
              </div>

                <div class="col-12 col-md-3 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="../assets/custom/images/crypto.jpg" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">Blockchain and Cryptocurrency</a></h2>
                      <p class="fables-forth-text-color font-14">
                      As cyber threats become more sophisticated, there is increasing demand for advanced cybersecurity solutions including AI-based threat detection, zero-trust security models, and encryption technologies.
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a> 
                  
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

</div>


    <div class="container"> 
         <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-3 my-lg-5">Team</h2>          
         <div class="row overflow-hidden">
            <div class="col-6 col-md-3 mb-4 wow bounceInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                  <div class="image-container shine-effect">
                      <a href="#"><img class="w-100" src="../assets/custom/images/team1.jpg" alt="Card image cap"></a> 
                  </div>
                  <div class="card-body">
                    <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">PRECIUOS MILBERT</a></h5>
                    <p class="font-13 fables-forth-text-color my-1">Project Manager</p> 
                    <ul class="nav fables-team-social-links"> 
                        <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4 wow bounceInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                   <div class="image-container shine-effect">
                      <a href="#"><img class="w-100" src="../assets/custom/images/team2.jpg" alt="Card image cap"></a>
                  </div>
                  <div class="card-body">
                    <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">MICHAEL GABRIEL</a></h5>
                    <p class="font-13 fables-forth-text-color my-1">Full Stack Developer</p> 
                    <ul class="nav fables-team-social-links"> 
                        <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                   <div class="image-container shine-effect">
                      <a href="#"><img class="w-100" src="../assets/custom/images/team3-1.jpg" alt="Card image cap"></a>
                  </div>
                  <div class="card-body">
                    <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">Sir. Timzy</a></h5>
                    <p class="font-13 fables-forth-text-color my-1">Team Lead/Programmer</p> 
                    <ul class="nav fables-team-social-links"> 
                        <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4 wow bounceInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                   <div class="image-container shine-effect">
                       <a href="#"><img class="w-100" src="../assets/custom/images/team3-2.jpg" alt="Card image cap"></a>
                  </div>
                  <div class="card-body">
                    <h5><a href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">JOHN MARTIN</a></h5>
                    <p class="font-13 fables-forth-text-color my-1">Programmer</p> 
                    <ul class="nav fables-team-social-links"> 
                        <li><a href="#" target="_blank"><span class="fables-icongoogle-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconwhatapp-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>   
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                    </ul>
                  </div>
                </div>
            </div>
        </div>  
        <div class="row my-3 my-lg-5">
            
          <div class="owl-carousel owl-theme px-6 my-0" id="fables-partner-carousel">
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
    

<!-- /End Footer 2 Background Image -->


@include('layout/footer')

 
</body>
</html>