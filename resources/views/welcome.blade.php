@extends('base.layout')

@section('title', 'Essential Direct')


@section('links')
    <link rel="stylesheet" href="/css/home/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


@endsection
 -->

!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3 id="home-title">
                We tell you more about People, Businesses & Places In Nigeria Than Any Other Directory. 
            </h3>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  


    <div class="search-hero-container">
        <div class="search-form">
            <form action="" method="post">
            <input type="text" placeholder="Search for a place, business, category or user">
            </form>
        </div>

        <div class="choose-user">
            <form action="">
                
                <select name="" id="">
                    <option value="">Business</option>
                    <option value="">User</option>
                </select>
            </form>
        </div>

        <div class="txt-search">
            <i class="fas fa-search"></i>Search
        </div>
        
    </div>

                  <div >
                    <h1 style="text-align: center;">The world is going <span style="color:red;font-size:31px;font-weight:bold;">e</span> so are we</h1>

                    <h4  style="text-align: center;font-size:15px;opacity:0.6;">List of essential group brands</h4>


                </div>

    
@endsection





<!-- adding the contents or body of the image --->
@section('content')

        <div class="highlight">
            <div class="highlight-item">
               <img src="/images/car.png" alt="car image">
                <p> e-Cars</p>

            </div>

            <div class="highlight-item">
                <img src="/images/hotel.png" alt="hotel image">
                 <p> e-Hotels</p>
             </div>

             <div class="highlight-item">
                <img src="/images/businessman.png" alt="jobs image">
                 <p> e-Jobs</p>
             </div>

             <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>

              <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>

              <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>

              <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>

              <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>


        </div>

        <!--- ===== TOP NOTCH SECTION === --->



<div class="container">
<br><br>

<div class="row">
    
<div  class="col-md-6">
   
    <div id="request">

   <h3>Make a request</h3>

   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  .</p> 

  <button style="border:1px solid white; color:white;font-weight:bold;font-size:15px; background-color:red;" class="btn btn-request">Request</button>


</div>

</div>


<br>

<div class="col-md-6"  style="background: linear-gradient(to top right,darkred,red);padding: 10px;"  id="reportDiv">
 
    <h3 style="color: white;">Report a business scam</h3>  

     <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  .</p>  

   <button class="btn btn-report"  style="border:1px solid white; color:red;font-weight:bold;font-size:15px; background-color:white;" >Report</button>

</div>
<br><br>
</div>

</div>


<div>

<br><br>

<div style="background:linear-gradient(to top right,#392121,#7e3c3c);" class="row">
    
<div class="col-md-6" style="padding: 10px;color:white !important;"> 
    
<h3 style="font-weight: bold;">Register now to get your business listed on Essential direct</h3><br>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.</p><br><br>

<button class="btn btn-register" style="color:white !important;background-color:red;font-weight:bold;">Register now</button>

</div>

<div id="woman_laptop" class="col-md-6">
    
<img src="/images/woman_laptop.jpg">

</div>

</div>


<br>




<div class="row" style="margin-top:18px;">
    
<div  class="col-md-3">
   
    <div id="request">

   <h3>Make a request</h3>

   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua.
  .</p> 

  <button style="border:1px solid white; color:white;font-weight:bold;font-size:15px; background-color:red;" class="btn btn-request">Request</button>


</div>

</div>




<div class="col-md-3"  style="background: linear-gradient(to top right,darkred,red);padding: 10px;"  id="reportDiv">
 
    <h3 style="color: white;">Report a business scam</h3>  

     <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. 
  .</p>  

   <button class="btn btn-report"  style="border:1px solid white; color:red;font-weight:bold;font-size:15px; background-color:white;" >Report</button>

</div>




<div  class="col-md-3">
   
    <div id="request">

   <h3>Make a request</h3>

   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua.
  .</p> 

  <button style="border:1px solid white; color:white;font-weight:bold;font-size:15px; background-color:red;" class="btn btn-request">Request</button>


</div>

</div>








<div class="col-md-3"  style="background: linear-gradient(to top right,darkred,red);padding: 10px;"  id="reportDiv">
 
    <h3 style="color: white;">Report a business scam</h3>  

     <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. 
  .</p>  

   <button class="btn btn-report"  style="border:1px solid white; color:red;font-weight:bold;font-size:15px; background-color:white;" >Report</button>

</div>
















</div>













<br>


<br>












<h1 style="font-weight:bold;text-align: center;font-size:28px;">E-direct in numbers</h1>

<div style="text-align: center;">

<ul style="list-style-type: none;">

<li style="display: inline-block;margin:10px 13px;">
      
      <h3 style="font-size:18px;"><strong>53,074</strong></h3> <br>

      <h5  style="font-size:14px;"><small>Registered businesses</small> </h5>

    </li>

      <li  style="display: inline-block;margin:10px 13px;color:red !important">
          
       <h3  style="font-size:18px;"><strong>201,905</strong></h3> <br> 

      <h5  style="font-size:14px;"><small>Blacklisted companies</small></h5>

      </li>

        <li style="display: inline-block;margin:10px 13px;">
            
       <h3  style="font-size:18px;"><strong>9,122</strong></h3> <br>

      <h5  style="font-size:14px;"><small>Verified businesses</small> </h5>


        </li>




</ul>
</div><br>

<h3 style="font-size:24px;"><b>Other Essential solutions</b></h3><br>

<div id="menu">
  
<div class="menu_sub">
     <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-registry</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p>

</div>
<div class="menu_sub">
    
    <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-Certified</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p>


</div>

<div class="menu_sub">
   
    <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-Autos</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p> 

</div>

<div class="menu_sub">
   
    <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-legal</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p> 

</div>

<div class="menu_sub">
   
    <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-stores</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p> 

</div>


<div class="menu_sub">
   
    <div style="height:50px;"> <p style="visibility:hidden;">1</p></div>
    <h4>E-resources</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. </p> 

</div>


</div>


<div style="position: relative;">

<div id="draggable" class="direction">

 <div id="direction_sub">

 <strong>Wanted</strong>

 <h3 id="counter1"></h3>



</div>

  <div id="direction_sub">

    <strong>Divorced</strong>

   <h3 id="counter2" ></h3>
 
</div>

  <div id="direction_sub">

    <strong>Registered marriage</strong> 

    <h3 id="counter3"></h3>

  </div>


  <div id="direction_sub">

    <strong>Death</strong> 

    <h3 id="counter4"></h3>

  </div>


  <div id="direction_sub">

    <strong>Public notice</strong> 

    <h3 id="counter5"></h3>

  </div>


  <div id="direction_sub">

    <strong>Change of name</strong>

     <h3 id="counter6">130</h3>

   </div>


  <div id="direction_sub">

    <strong>Celebration</strong> 

    <h3 id="counter7"></h3></div>


  <div id="direction_sub">

    <strong>Birthday wishes</strong>

     <h3 id="counter8"></h3>

   </div>


  <div id="direction_sub">

    <strong>Counterfeit</strong> 

    <h3 id="counter9"></h3>

  </div>


  <div id="direction_sub">

    <strong>Career</strong>

     <h3 id="counter10"></h3>

   </div>

  <div id="direction_sub">

    <strong>Employed</strong>

     <h3 id="counter11"></h3>

   </div>

  <div id="direction_sub">

    <strong>Unemployed</strong>

     <h3 id="counter12"></h3>

   </div>

  <div id="direction_sub">

    <strong>Accidents</strong>

     <h3 id="counter13"></h3>

   </div>

 <div id="direction_sub">

  <strong>Lost & Found</strong>

   <h3 id="counter15"></h3></div>

  <div id="direction_sub">

    <strong>Reported store</strong>

     <h3 id="counter16"></h3>

   </div>

  <div id="direction_sub">

    <strong>Stolen Vehicle</strong> 

    <h3 id="counter17"></h3>

  </div>

  <div id="direction_sub">

    <strong>Missing person</strong> 

    <h3 id="counter18"></h3>

  </div>

</div>

</div>









        <div class="db-container">
            <!-- display content from db--->
            <div class="db-user">
                <h3><b>Top notch businesses in Nigeria</b></h3>

                <div class="db-data-container">
   <div class="row">
       
   <div class="col-md-6">
    
    <small>Since 03-October-2023</small>
    
    <figure>
        
       <img style="width:100%;height:150px;" src="/images/business.jpg" alt="property image">



<figcaption>Business ID: 112761020 &nbsp;<span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                3,567 </figcaption>

    </figure>

   
   </div>

    <div class="col-md-4">
    <h2>James Restaurant</h2> 
    <p>Agricultural Services, Bankrupty Lawyer, Baby sitter</p>

     <br><br>

    <span><i class="fa fa-map-marker"></i> Ikeja, Lagos </span><br>

    <span><i class="fa fa- envelope"></i> Odo.samuel202@gmail.com </span><br>


    </div>

     <div class="col-md-2">
     <br>
    <span>43%</span> Verified
    
    <div class="progress" style="width: 100%;background-color:white;border:1px solid red; border-radius: 4px;overflow: hidden;">
  <div class="progress-bar" style="width:20% !important;height: 20px;background-color:red;transition: width 0.3s ease-in-out;"></div>

</div>
<span style="font-style:inherit;">Joined 2010</span><br><br><br><br>

<i class="fa fa-share-alt"></i>&nbsp; <a style="background-color: red;color:white;padding:8px;border-radius:10px;font-size:px;" href="">View business</a>

     </div>


   </div>      

   </div>           

<br><br>








 <div class="row">
       
   <div class="col-md-6">
    
    <small>Since 03-October-2023</small>
    
    <figure>
        
       <img style="width:100%;height:150px;" src="/images/business.jpg" alt="property image">



<figcaption>Business ID: 112761020 &nbsp;<span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                3,567 </figcaption>

    </figure>

   
   </div>

    <div class="col-md-4">
    <h2><b>Bekky Laundry</b></h2> 
    <p>Agricultural Services, Bankrupty Lawyer, Baby sitter</p>

     <br><br>

    <span><i class="fa fa-map-marker"></i> Ikeja, Lagos </span><br>

    <span><i class="fa fa- envelope"></i> Odo.samuel202@gmail.com </span><br>


    </div>

     <div class="col-md-2">
     <br>
    <span>100%</span> Verified
    
    <div class="progress" style="width: 100%;background-color:white;border:1px solid green; border-radius: 4px;overflow: hidden;">
  <div class="progress-bar" style="width:100% !important;height: 20px;background-color:green;transition: width 0.3s ease-in-out;"></div>

</div>
<span style="font-style:inherit;">Joined 2010</span><br><br><br><br>

<i style="font-size: 21px;" class="fa fa-share-alt"></i>&nbsp; <a style="background-color: red;color:white;padding:8px;border-radius:10px;font-size:px;" href="">View business</a>

     </div>
</div>  



<br><br>







 <div class="row">
       
   <div class="col-md-6">
    
    <small>Since 03-October-2023</small>
    
    <figure s>
        
       <img style="width:100%;height:150px;" src="/images/business.jpg" alt="property image">



<figcaption>Business ID: 112761020 &nbsp;<span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                3,567 </figcaption>

    </figure>

   
   </div>

    <div class="col-md-4">
    <h2><b>Charlie support cars</b></h2> 
    <p>A.C GAS, A.C REPAIR service, Accessories repair</p>

     <br><br>

    <span><i class="fa fa-map-marker"></i> Ikeja, Lagos </span><br>

    <span><i class="fa fa- envelope"></i> Odo.samuel202@gmail.com </span><br>


    </div>

     <div class="col-md-2">
     <br>
    <span>87%</span> Verified
    
    <div class="progress" style="width: 100%;background-color:white;border:1px solid green; border-radius: 4px;overflow: hidden;">
  <div class="progress-bar" style="width:87% !important;height: 20px;background-color:green;transition: width 0.3s ease-in-out;"></div>

</div>
<span style="font-style:inherit;">Joined 2010</span><br><br><br><br>

<i style="font-size: 21px;" class="fa fa-share-alt"></i>&nbsp; <a style="background-color: red;color:white;padding:8px;border-radius:10px;font-size:px;" href="">View business</a>

     </div>
</div>  

</div>

<br><br>

<div class="db-ads">
                <img src="/images/ads/ad1.png" alt="">
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
                <img src="/images/ads/ads4.png" alt="">
                
            </div>

                                
                            </div>
                        </div>
                    </div>



<h3><b>See more</b></h3><br>

<h4><b>Top Topic</b></h4><br>

<div class="main">


 
 <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>   


  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
</p>

 </div>  


  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
     
<img src="">
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
  <img src="">   
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
  <img src="">   
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  



</div><br><br>



<h4><b>Top Topic</b></h4><br>

<div id="main">
 <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>   


  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
</p>

 </div>  


  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
 <img src="">    
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
     
<img src="">
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
  <img src="">   
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  

  <div class="main_sub">
  <img src="">   
<h4>Business news</h4><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
.</p>

 </div>  
</div>

</div>







<br>

<h2><b>Short videos</b></h2>

<div class="video-container">

<div class="video">

  <!-- <video controls src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s"/> -->

<video controls src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s">
    <source src="" type="video/mp4">
  <span><i class="fa fa-heart"></i> 203</span>  <span>5345 views</span>
  </video>




<video controls src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s">
    <source src="" type="video/mp4">
  <span><i class="fa fa-heart"></i> 203</span>  <span>5345 views</span>
  </video>



<video controls>
    <source src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s" type="video/mp4">
  <span><i class="fa fa-heart"></i> 203</span>  <span>5345 views</span>
  </video>



<video controls>
    <source src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s" type="video/mp4">
   <span><i class="fa fa-heart"></i> 203</span>  <span>5345 views</span>
  </video>


<video controls>
    <source src="https://youtu.be/U-xjYyIOPAs?si=2Srt08WvWRhbwm6s" type="video/mp4">
  <span><i class="fa fa-heart"></i> 203</span>  <span>5345 views</span>  

</video>

</div>


</div>

</div>

<br>

<br>

<h3><b>People</b></h3><br>

<div>
    
<table class="table-responsive" style="border-collapse:separate;border-spacing:10px 5px;"><tbody>
 
 <tr>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      

    </td>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      
</td>


    <td>
        <div class="row">
          <div class="col-md-6">
             
             <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   
           </div><br>
      </td>

 </tr>  



<tr>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      

    </td>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      
</td>


    <td>
        <div class="row">
          <div class="col-md-6">
             
             <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   
           </div><br>
      </td>

 </tr>  


<tr>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      

    </td>

    <td>
        <div class="row">
          <div class="col-md-6">
             
               <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            </div>   


        </div><br>
      
</td>


    <td>
        <div class="row">
          <div class="col-md-6">
             
             <div style="box-shadow:0px 0px 3px rgba(0,0,0,0.4);padding:20px 8px;background-color:rgba(192,192,192,0.5);"> <p style="visibility: hidden;padding:8px;">1</p> </div>

          </div> 

            <div class="col-md-6">
               
               <h3><b>Marlian Zino</b></h3> 

               <p style="font-size:12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>


            </div>   

           </div><br>
      </td>

 </tr>  



</tbody></table>


</div>
<br><br>

<h3>Connect with businesses you may like<span style="float:right;">See more</span></h3><br>



<div class="businesses">
    
<div class="businesses_sub">
    
<img src="/images/restaurant.jpg"><br>

<h4>Restaurants</h4>

<p>5 Followers</p>

<button class="btn-danger">Follow</button>

</div>


<div class="businesses_sub">
    
<img src="/images/laundry.jpg"><br>

<h4>Laundry</h4>

<p>5 Followers</p>

<button class="btn-danger">Follow</button>

</div>


<div class="businesses_sub">
    
<img src="/images/car_dealers.jpg"><br>

<h4>Car dealers</h4>

<p>5 Followers</p>

<button class="btn-danger">Follow</button>

</div>


<div class="businesses_sub">
    
<img src="/images/pet_supply.jpg"><br>

<h4>Pet supply</h4>

<p>5 Followers</p>

<button class="btn-danger">Follow</button>

</div>



<div class="businesses_sub">
    
<img src="/images/transportation.jpg"><br>

<h4>Transportation</h4>

<p>5 Followers</p>

<button class="btn-danger">Follow</button>

</div>





</div>







                    <div class="check-status">
                        
                       
                    </div>
                  
                </div>
            </div>
            <!--- end of each user item container -->

            <!-- show ads-->
       
            <!-- end of showing ads --->
        </div>
<br><br>
   <h1 style="font-size:26px;"><b>Top Business Categories</b></h1>


        <!---- ==== Start of TOP NOTCH BUSINESS CATEGORY ===== ---->
        <div class="business-category-section">
              <!-- show ads-->
              <div class="db-ads-left">
                <img id="img-ad" src="/images/ads/ad1.png" alt="" >
                <img id="img-ad" src="/images/ads/ad2.png" alt="">
                <img id="img-ad" src="/images/ads/ads3.png" alt="">
                <img  id="img-ad" src="/images/ads/ads4.png" alt="">
                <img id="img-ad"  src="/images/ads/ads4.png" alt="" >
                <img  id="img-ad" src="/images/ads/ad2.png" alt="">
            </div>
            <!-- end of showing ads --->

            <div class="business-post-category">
             

                <div class="business-category-items">
                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-piggy-bank"></i> <br>
                            <a href="">Account & Finance</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-tractor"></i> <br>
                            <a href="">Agriculture & Farming</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-briefcase"></i> <br>
                            <a href="">Artisans- General Businesses</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-film"></i> </i> <br>
                            <a href="">Art & Entertainment</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-car"></i>  <br>
                            <a href="">Automative</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heart"></i> <br>
                            <a href="">Beauty & Personal Care</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-trophy"></i> <br>
                            <a href="">Betting & casino</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-briefcase"></i> <br>
                            <a href="">Business Service</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-car"></i> <br>
                            <a href="">Car Dealer</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-comments"></i> <br>
                            <a href="">Communication</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-building"></i> <br>
                            <a href="">Companies</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-graduation-cap"></i> <br>
                            <a href="">Education & Learning</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-bolt"></i> <br>
                            <a href="">Energy & Utilities</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-cogs"></i> <br>
                            <a href="">Enginering</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-music"></i> <br>
                            <a href="">Entertainment & Media</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-calendar-alt"></i> <br>
                            <a href="">Event & Conference</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-tshirt"></i> <br>
                            <a href="">Fashion & Clothing</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-utensils"></i> <br>
                            <a href="">Food & Restaurant</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-landmark"></i> <br>
                            <a href="">Government</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heartbeat"></i>  <br>
                            <a href="">Health & Medicine</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-home"></i>  <br>
                            <a href="">Home & Real Estate</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-laptop"></i>  <br>
                            <a href="">IT & Computers</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-balance-scale"></i> <br>
                            <a href="">Legal services</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shopping-cart"></i> <br>
                            <a href="">Merchants</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-building"></i> <br>
                            <a href="">Non-Profit Organizations</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-user-check"></i> <br>
                            <a href="">Online influencers</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heart"></i> <br>
                            <a href="">Personal Care</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-paw"></i> <br>
                            <a href="">Pet Supply</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-mobile-alt"></i>  <br>
                            <a href="">Phones & Laptops</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-praying-hands"></i> <br>
                            <a href="">Religion & Spirituality</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-graduation-cap"></i> <br>
                            <a href="">Schools</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shield-alt"></i> <br>
                            <a href="">Security & Emergency</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shopping-cart"></i>  <br>
                            <a href="">Shopping</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-futbol"></i> <br>
                            <a href="">Sports</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-globe"></i> <br>
                            <a href="">Tourism & Hospitality</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-bus"></i> <br>
                            <a href="">Transportation</a>
                        </div>
                    </div>

                </div>
            </div>

             <!-- show ads-->
             <div class="db-ads-right">
                <img src="/images/ads/ad1.png" alt="">
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
                <img src="/images/ads/ads4.png" alt="">
                <img src="/images/ads/ads4.png" alt="" >
                <img src="/images/ads/ad2.png" alt="" >
            </div>
            <!-- end of showing ads --->
        </div>
         <!---- ====End of TOP NOTCH BUSINESS CATEGORY ===== ---->


         <!--- ==== TOP RECOMMENDED SECTION --- === ---->
<div class="recommended-items-container">
            <h3>Top Recommended <br> Businesses</h3>

  <a class="btn btn-danger" href="">Browse All Business Category</a>

    @section('extended-content')
          
    <div style="background-color:white !important" class="show-items-container">
        <div class="item-list">
           
            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>James Restaurant</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>Laundry</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>Charlie support cars</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   


            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>  





        </div>
        
        <div class="item-list-ads"><img src="/images/e-direct-img.jpg" alt=""></div>
    </div>
    
    
    
    <div class="txt-why-container">
        <div class="txt-why-essential">
            <h3 style="text-align: center;">Why you should list your business on Essential Nigeria</h3>
            
        </div>
    </div>


   <div class="container">
     <br><p>
                Over 50 million people use Edirect to discover great businesses and services and also find or locate missed or lost 
                contacts and loved ones. Join the fastest growing force of over 2 milion businesses who have taken advantage of this 
                online platform to reach more customers and service consumers helping them enhance the reach of their business. 
                EDIRECT CONNECTING THE WOLRD OF SERVICE AND PERSONS.
            </p>
    </div>          
    

  <div id="section_maximize" class="container row">
    
<div  class="col-md-4">
<br>
  <div style="background-color: red; color:white !important;padding: 20px; border-radius: 17px;">
  
      <h3><b>Maximize</b> Your Online <b>Business</b></h3>

      
</div>

<p>
         Improve social media presence, get reviews  and grow your business reputation online.  



            </p>

</div>




<div class="col-md-4">
 <br> 
<div  style="background-color: rgba(0,0,0,0.8);padding:20px 10px;color:white; border-radius: 17px;">

   <h3><b>Create</b> Your Own Website <b>In Minutes</b></h3>

</div>


<p>
         Improve social media presence, get reviews  and grow your business reputation online.  



            </p>

</div>



<div  class="col-md-4">
 <br> 
<div  style="background-color: rgba(0,0,0,0.8);padding: 20px;color:white; border-radius: 17px;">

<h3>Stay in Touch <b>With Ease</b></h3>

</div>


<p>
         Improve social media presence, get reviews  and grow your business reputation online.  



            </p>


</div>







  </div>

    <h3 id="txt-trending-post">Groups you may like</h3>
    <div class="trending-post-section">
        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>IT News</h3></div>
            <br>
            <p><span>1 member </span>&nbsp;&nbsp;<span>0 posts today</span></p>
            <button class="btn btn-danger">Join</button>
            
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Tech group</h3></div>
            <br>
            <p><span>1 member </span>&nbsp;&nbsp;<span>0 posts today</span></p>
            <button class="btn btn-danger">Join</button>
           
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Group</h3></div>
            <br>
            <p><span>1 member </span>&nbsp;&nbsp;<span>0 posts today</span></p>
            <button class="btn btn-danger">Join</button>
            
        </div>
       
        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Essential staff</h3></div>
            <br>
            <p><span>1 member </span>&nbsp;&nbsp;<span>0 posts today</span></p>
            <button class="btn btn-danger">Join</button>
            
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Health group</h3></div>
            <br>
            <p><span>1 member </span>&nbsp;&nbsp;<span>0 posts today</span></p>
            <button class="btn btn-danger">Join</button>
            
        </div>
    </div>
    <br>
    
  





    @endsection
</div>

    
@endsection