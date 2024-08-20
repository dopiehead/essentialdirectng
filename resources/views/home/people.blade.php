<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'People')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/people.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section searchPeople" id="hero-section">
            <div class="hero-content">
            <h6>
                Search For <span>People</span> Of Your Choice.
            </h6>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  


    <div class="search-hero-container">
        <div class="search-form">
        
            <input type="text" placeholder="Search for a place, business, category or user">
            </form>
        </div>

        <div class="choose-user">
         
                
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

<div class="container">
  
<div class="peopleBody">

<h4 id="heading">List of people of Nigeria</h4>


<br><br><br>

<div class="row container">

     <div class="col-md-6">


         <div class="row">

             <div class="col-md-6">

                 <img src="/images/people/download.jpg" alt="avatar">

             </div>

             <div class="col-md-6">

                 <h6>James Ayetemimowa</h6>

                 <small>Professional Legal Practioner</small><br>

                 <b>User ID: &nbsp; 1112751020</b> <br>
                 
                 <b>Tel:08109*****</b><br><br>

                 <span><i class="fa fa-map-marker"></i> ikeja, Lagos</span><br>

                 <span><i class="fa fa-envelope"></i></span>

             </div>

         </div>


    </div>

     <div class="col-md-6">
 
      <b>43%</b> Verified

        <div class="progress" style="width:80%;background-color:#ddd">

              <div class="progress-bar" style="width:43%;height:20px;#4caf50;"></div>

        </div>


       2 months ago<br><br><br>


       <a href="" class="btn btn-danger">View</a>


    </div>



</div>



<br><br>



<div class="row">

    <div class="col-md-6">


        <div class="row ">

            <div class="col-md-6">

                <img src="/images/people/download1.jpg" alt="avatar">

            </div>

            <div class="col-md-6">

                <h6>Ada Ekere</h6>

                <small>Professional Legal Practioner</small><br>

                <b>User ID: &nbsp; 1112751020</b> <br>
                 
                 <b>Tel:08109*****</b><br><br>

                 <span><i class="fa fa-map-marker"></i> ikeja, Lagos</span><br>

                 <span><i class="fa fa-envelope"></i></span>

            </div>

        </div>


   </div>

    <div class="col-md-6">

     <b>21%</b> Verified

       <div class="progress" style="width:80%;background-color:#ddd;border:1px solid red;">

             <div class="progress-bar" style="width:21%;height:20px;background-color:red !important;"></div>

       </div>


      2 months ago<br><br><br>


      <a href="" class="btn btn-danger">View</a>


   </div>



</div>


<br><br>



<div class="row">

    <div class="col-md-6">


        <div class="row">

            <div class="col-md-6">

                <img src="/images/people/download2.jpg" alt="avatar">

            </div>

            <div class="col-md-6">

                <h6>Odo Samuel Ikechukwu</h6>

                <small>Professional Legal Practioner</small><br>

                <b>User ID: &nbsp; 1112751020</b> <br>
                 
                 <b>Tel:08109*****</b><br><br>

                 <span><i class="fa fa-map-marker"></i> ikeja, Lagos</span><br>

                 <span><i class="fa fa-envelope"></i></span>

            </div>

        </div>


   </div>

    <div class="col-md-6">

     <b>100%</b> Verified

       <div class="progress" style="width:80%;background-color:#ddd">

             <div class="progress-bar" style="width:100%;height:20px;#4caf50;"></div><span id="check"><i class="fa fa-check"></i></span>

       </div>


      2 months ago<br><br><br>


      <a href="" class="btn btn-danger">View</a>


   </div>



</div>



<br><br>



<div class="row">

    <div class="col-md-6">


        <div class="row">

            <div class="col-md-6">

                <img src="/images/people/download3.jpg" alt="avatar">

            </div>

            <div class="col-md-6">

                <h6>Okorie Mercy</h6>

                <small>Professional Legal Practioner</small><br>

                <b>User ID: &nbsp; 1112751020</b> <br>
                 
                 <b>Tel:08109*****</b><br><br>

                 <span><i class="fa fa-map-marker"></i> ikeja, Lagos</span><br>

                 <span><i class="fa fa-envelope"></i></span>

            </div>

        </div>


   </div>

    <div class="col-md-6">

     <b>100%</b> Verified

       <div class="progress" style="width:80%;background-color:#ddd">

             <div class="progress-bar" style="width:100%;height:20px;#4caf50;"></div><span id="check"><i class="fa fa-check"></i></span>

       </div>


      2 months ago<br><br><br>


      <a href="" class="btn btn-danger">View</a>


   </div>



</div>



<br><br>







</div>

<div class="pagination container" id="pagination">


<span class="previous">&lt;&lt;  previous</span>  <span id="number">1</span>  2  Next <span class="next"> &gt;&gt;</span>
 

</div>

    <!--- end of each user item container -->


    <!-- show ads-->
 <div class="d-ads-left">
    <img src="/images/ads/ad1.png" alt="" >
    <img src="/images/ads/ad2.png" alt="">
    <img src="/images/ads/ads3.png" alt="">
    <img src="/images/ads/ads4.png" alt="">
    <img src="/images/ads/ads4.png" alt="" style="height: 100%">
   
</div>
<!-- end of showing ads --->
</div>

 
@endsection