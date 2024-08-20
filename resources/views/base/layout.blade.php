<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- use the user system language -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--- set the title for each of the page-->
     <title>@yield('title')</title>

     <!-- adding styling links to each page layout -->
     @yield('links')
     
     <link rel="stylesheet" href="/css/layout/base.css">
     <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">

   
     <!-- link the interna JS file -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  
    
     <script src="/js/script.js" defer></script>
      <!-- adding the flickity library for carousel in home page -->
    
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <!-- header section starts  -->
    <header class="header">
        <a href="{{ url('/') }}" class="logo">
            <img src="images/e-direct-logo.png" alt="E-Direct Logo">
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar desktop-navbar" id="desktop-navbar">
            
          
            <a href="{{ url('/packages') }}">Packages</a>
            <a href="{{ url('/people') }}">People</a>
            <a href="{{ url('/business') }}">Business</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="{{ url('/blacklist') }}">Blacklist</a>
            <a class="btn-person" id="btn-person">Persons <i class="fa fa-caret-down"></i></a>
             <div id="persons" class="persons">
                <div class="personList">
            <a href="{{ url('/missing') }}">Missing persons</a>    
            <a  href="{{ url('/wanted') }}">Wanted persons</a>       
            </div>
                </div>
            <a href="{{ route('login') }}" id="txt-login">Login</a>
            <a href="{{ route('register') }}">Register</a>
            <!-----
                    Run the authentication and show the following menu at the nav bar when user is logged in
                    Dashboard ----
                    Profile ---- Page prepared
                    Account ---
                    logout

                    Also, check for the db-container data changes such as some text changes when user logged in
                    Also, check for all pages and performance for both user and business PERSON
                    Also, navigate through the registration process to see the diiferences in performance
                ----->
            <a href="{{ url('/login') }}" id="txt-portfolio" >List your Business</a>
        </nav>

        <!-- Mobile Navigation -->
        <div class="mobile-view" id="mobile-view">
            <nav class="navbar" id="mobile-navbar">
                <a href="{{ url('/login') }}">Sign in</a>
                <a href="{{ url('/register') }}">Sign Up</a>
            </nav>   
        </div>

                <!-- Menu Icon for the mobile view -->
            <div class="icons" id="icons">
                <div class="menu-icon" id="menu-icon">
                    <div class="fas fa-bars"></div>
                </div>
            </div>

            <!-- Side Navigation -->
            <nav class="sidebar" id="sidebar">
                <a href="#" class="close-button" id="close-button"><i class="fas fa-times"></i></a>
           
           
                <a href="{{ url('/packages') }}">Packages</a>
                <a href="{{ url('/people') }}">People</a>
                <a href="{{ url('/business') }}">Business</a>
                <a href="{{ url('/blog') }}">Blog</a>
                <a href="{{ url('/blacklist') }}" style="color: black">Blacklist</a>
                <a class="btn-person-mobile" id="btn-person-mobile">Persons <i class="fa fa-caret-right"></i></a>
            <div  id="persons-mobile" class="persons-mobile">
                <div class="personList-mobile">
            <a href="{{ url('/missing') }}">Missing persons</a>    
            <a  href="{{ url('/wanted') }}">Wanted persons</a>       
            </div>
            </div>
               
                
                <div class="sidebar-auth" style="display: flex">
                    <a href="{{ url('/login') }}" id="txt-login">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
                
                <a href="{{ url('/login') }}" id="txt-portfolio" style="margin-top: 50px">List your Business</a>
            </nav>

    </header>
      
               
    
    @yield('hero-content')

    <!-- header section ends -->


        <main>
            <section>
                @yield('content')  
            </section>

            @yield('extended-content')
        </main>

        <footer>
          
     <div  class="container newsletter-container">
         <div class="newsletter">
                <div class="newsletter-img"><img src="/images/email-icon.png" alt="Email icon"></div>
                <div class="newsletter-content">  
                    <h4>Subscribe to our Newsletter</h4>
                    <p style="color:white !important">Don't miss out on the latest updates and information.</p>
                    <form action="" method="post">
                        <div class="input-container">
                            <input type="email" name="user-email" id="user-email" class="form-control" placeholder="Your Email" style="background-color:white!important;border-radius:10px;width:100%;">
                            <label style="border-radius:10px;position:absolute;" for="user-email"><a>Subscribe</a></label>
                        </div>
                    </form>
                </div>
              </div>

     </div>
            
            <div class="footer">
                <div class="footer-contents">
                    <div class="about-us">
                        <h3>About</h3>
                        <div class="txt-about-us">
                            <p>
                                Your customers are your most important source of feedback. Essential Direct allows 
                                you to monitor and respond to reviews across platforms quickly from one place.
                            </p>
                        </div>
                    </div>
            
                    <div class="quick-links">
                        <h3>Quick Links</h3>
                        <div class="links">
                      
                            <a href="{{ url('/about') }}">About</a>
                            <a href="{{ url('/packages') }}">Packages</a>
                            <a href="{{ url('/people') }}">People</a>
                            <a href="{{ url('/business') }}">Businesses</a>
                            <a href="{{ url('/blog') }}">Blog</a>
                            <a href="{{ url('/contact') }}">Contact Us</a>
                        </div>
                    </div>
            
                    <div class="services">
                        <h3>Services</h3>
                        <div class="rendered-services">
                            <a href="">E-Jobs</a>
                            <a href="">E-budget Hotel</a>
                            <a href="">E-bnb Hotel</a>
                            <a href="">E-short stay</a>
                            <a href="">E-companion</a>
                            <a href="">E-venue</a>
                            <a href="" style="" >E-direct</a>
                        </div>
                    </div>
            
                    <div class="contact-us">
                       <a href="">Tel: 07000555666</a>
                       <a href="mailto:info@essentialdirect.ng">info@essentialdirect.ng</a>
                       <a href="">Oosh</a>
                       <a href="">Sowa</a>
                    </div>
                </div>

            </div>
           
        </footer>


    

</body>
</html>