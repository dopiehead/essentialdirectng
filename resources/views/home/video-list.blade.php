<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blacklist')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/video-list.css">
    <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section hero-section-videolist" id="hero-section">
            <div class="hero-content">
            
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
    
@endsection

@section('content')

<div class="blacklist-intro" style="text-align: center">
    <h3>Short videos</h3>

</div>


<div id="videolisting" class="container">

    <div class="row">

         <div class="col-md-5">
         
                <i class="fa fa-play"></i>

             <video>
            

                  <source src="https://youtu.be/oIX-UdkR7n8" type="video/mp4">



             </video>


        </div>


        <div class="col-md-7">
         
        <br><br>
                <div class="img">

                   <img src="/images/adewale.jpg" alt=""> 24m

                </div>

     

                 <div class="share">

                      <i class="fa fa-download"></i>

                      <i class="fa fa-share-alt"></i>

                      <i class="fa fa-comments"></i>

                    <i class="fa fa-heart"></i>

                 </div>

              <p><strong>Micheal Ose </strong>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa consequatur sunt facilis ea, qui accusantium quisquam necessitatibus, commodi nihil reprehenderit eius vitae nostrum eveniet quasi optio esse. At, minima magni.</p>

         </div>

     </div>



                           <br><br>




                           <div class="row">

<div class="col-md-5">


         <i class="fa fa-play"></i>


    <video>

          <source src="https://youtu.be/oIX-UdkR7n8" type="video/mp4">

    </video>


</div>


<div class="col-md-7">
                       
<br><br>

       <div class="img">

          <img src="/images/adewale.jpg" alt=""> 24m

       </div>



        <div class="share">

             <i class="fa fa-download"></i>

             <i class="fa fa-share-alt"></i>

             <i class="fa fa-comments"></i>

             <i class="fa fa-heart"></i>

        </div>

     <p><strong>Micheal Ose </strong>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa consequatur sunt facilis ea, qui accusantium quisquam necessitatibus, commodi nihil reprehenderit eius vitae nostrum eveniet quasi optio esse. At, minima magni.</p>

    </div>

</div>

<br><br>



<div class="row">

<div class="col-md-5">
     
              <i class="fa fa-play"></i>            

        <video>

             <source src="https://youtu.be/oIX-UdkR7n8" type="video/mp4">

        </video>


</div>


<div class="col-md-7">  

                      <br><br>

       <div class="img">

               <img src="/images/adewale.jpg" alt="">24m

       </div>



        <div class="share">

             <i class="fa fa-download"></i>

             <i class="fa fa-share-alt"></i>

             <i class="fa fa-comments"></i>

             <i class="fa fa-heart"></i>

        </div>

     <p><strong>Micheal Ose </strong>  
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa consequatur sunt facilis ea, qui accusantium quisquam necessitatibus, commodi nihil reprehenderit eius vitae nostrum eveniet quasi optio esse. At, minima magni.</p>

</div>

</div>




 </div>



    <!--- end of each user item container -->



 
@endsection