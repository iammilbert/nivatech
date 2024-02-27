@include('layout/header')

<body>

    
<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>


<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    @include('layout/register-navbar')
</div> 
<!-- /End Fables Navigation -->  

     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
               <p class="font-30 font-weight-bold semi-font fables-main-text-color mt-1" style="color:#454636">NIVA SIGNUP SYSTEM</p>
               <em>Create a new account</em>
               <form class="mt-5">
                  <div class="form-row form-group">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Last name">
                        </div>
                    </div>
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input type="email" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email"> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password">
                      </div>
                    
                  </div> 
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password">
                      </div>
                    
                  </div> 
                  <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color font-16 semi-font py-3" style="background-color:#454636">Register Now</button>
                

                  <a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 mb-lg-5 d-block">Forgot Password ?</a>

                   <p class="fables-forth-text-color mt-1">Already have an account ?  <a href="{{route('nivatech.auth')}}" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Login</a></p>

                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->
    

@include('layout/footer')
    
</body>
</html>