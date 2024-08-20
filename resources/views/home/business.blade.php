<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Business')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="/css/home/business.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.9.2/sass.min.js"></script>
   
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3 id="txt-biz">
                Search For Businesses Of <br> Your Choice.
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
    
@endsection

@section('content')

<div class="container">

<h3>List of the Businesses in Nigeria</h3>

     <div class="row">
            
            <div class="col-md-3 criteria">
 
        <h3>Business Categories </h3>
        
        <form action="submit_form.php" method="post">
            <label>Choose IT Department Options:</label>
            <br>
            <input type="checkbox" id="network-admin" name="it-options[]" value="Network Administrator">
            <label for="network-admin">Network Administrator</label>
            <br>
            <input type="checkbox" id="software-engineer" name="it-options[]" value="Software Engineer">
            <label for="software-engineer">Software Engineer</label>
            <br>
            <input type="checkbox" id="database-admin" name="it-options[]" value="Database Administrator">
            <label for="database-admin">Database Administrator</label>
            <br>
            <input type="checkbox" id="security-analyst" name="it-options[]" value="Security Analyst">
            <label for="security-analyst">Security Analyst</label>
            <br>
            <input type="checkbox" id="system-admin" name="it-options[]" value="System Administrator">
            <label for="system-admin">System Administrator</label>
            <br>
            <input type="checkbox" id="it-support" name="it-options[]" value="IT Support Specialist">
            <label for="it-support">IT Support Specialist</label>
            <br>
        </form>
    </div>
    <!-- display content from db--->
    
           <div class="col-md-9 business_list">

        
        

                <div class="row">
                <!-------------------------------------User image-------------------------------->
                         <div class="db-image col-md-6">

                               <div class="founded"><span>Since 03-October-2023</span></div>
                               <img src="/images/business.jpg" alt="property image">
                             <div class="review">
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span> 
                                  <span class="txt-no-review"> No review yet</span>
                                  <span class="txt-review">0 Review</span>


                                  <span id="views">3567</span>  
                             </div>                  
                         </div>
    <!-------------------------------------User details-------------------------------->

 <div  class="col-md-6 bizDetails">



 <!------------------------------------------biz name----------------------------------->
 <div id="bizName"> 
 <span>Business Name: Essential Ng</span>
 </div>

                                     
     <!------------------------------------------biz id----------------------------------->
 

 <div id ="bizId"> 
<span>Business ID: 113454433 </span>
</div>
                                                                           

                                      
       <!------------------------------------------biz category----------------------------------->
                                      
 <div>
<span class="category">Agricultural services, Bankruptcy Lawyer</span>
</div>
                                      
    <!------------------------------------------biz address----------------------------------->
   <div class="bizAddress">
 <span class="fa fa-map-marker"></span> 24, Iyala Street, Alausa, Ikeja
 </div>
                                      
                                                                              
    <!------------------------------------------biz address----------------------------------->
   <div class="bizEmail">                 
    <span class="fa fa-envelope"></span> <span id="user_email">webmasterjdd@gmail.com</span>
</div>   
                                      
                                                                     
 <!------------------------------------------biz address----------------------------------->
                                                                                 
<div class="bizContact">
  <span class="fa fa-phone" class="user-phone-number"></span> 08148413982
 </div>                                      
     
 <br><br>
                                      
  <!------------------------------------------biz status----------------------------------->
<div class="row">
     <div class="col-md-4">
         <div class="user-status">
                                                                             
             <div class="txt-verify"><span>16%</span> Verified</div>
             <div class="progress-bar">
        <div class="progress-bar-fill" style="width: 50%;"></div>
    </div>
         </div>

      </div>
                                      
     <!------------------------------------------biz share----------------------------------->
     <div class="col-md-8">                                   
         <div class="share">
             <span class="fa fa-share-alt"></span>
              <span><a class="btn btn-danger">View business</a></span>
         </div>  
                                                              
     </div>
                                      
</div>






</div>



            <div class="check-status">
                
               
            </div>

                     <div class="ads-right">
                          <img src="/images/ads/ad1.png" alt="" >
                          <img src="/images/ads/ad2.png" alt="">
                          <img src="/images/ads/ads3.png" alt="">
                     </div>



<!-----------------------------------section B ------------------------------->

                     <br><br>
                     <div class="db-image col-md-6">

<div class="founded"><span>Since 03-October-2023</span></div>
<img src="/images/business.jpg" alt="property image">
<div class="review">
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span> 
   <span class="txt-no-review"> No review yet</span>
   <span class="txt-review">0 Review</span>

   <span id="views">3567</span>   
</div>                  
</div>
<!-------------------------------------User details-------------------------------->

<div  class="col-md-6 bizDetails">



<!------------------------------------------biz name----------------------------------->
<div id="bizName"> 
<span>Business Name: Essential Ng</span>
</div>

      
<!------------------------------------------biz id----------------------------------->


<div id ="bizId"> 
<span>Business ID: 113454433 </span>
</div>
                                            

       
<!------------------------------------------biz category----------------------------------->
       
<div>
<span class="category">Agricultural services, Bankruptcy Lawyer</span>
</div>
       
<!------------------------------------------biz address----------------------------------->
<div class="bizAddress">
<span class="fa fa-map-marker"></span> 24, Iyala Street, Alausa, Ikeja
</div>
       
                                               
<!------------------------------------------biz address----------------------------------->
<div class="bizEmail">                 
<span class="fa fa-envelope"></span> <span id="user_email">webmasterjdd@gmail.com</span>
</div>   
       
                                      
<!------------------------------------------biz address----------------------------------->
                                                  
<div class="bizContact">
<span class="fa fa-phone" class="user-phone-number"></span> 08148413982
</div>                                      

<br><br>
       
<!------------------------------------------biz status----------------------------------->
<div class="row">
<div class="col-md-4">
<div class="user-status">
                                              
<div class="txt-verify"><span>16%</span> Verified</div>
<div class="progress-bar">
<div class="progress-bar-fill" style="width: 50%;"></div>
</div>
</div>

</div>
       
<!------------------------------------------biz share----------------------------------->
<div class="col-md-8">                                   
<div class="share">
<span class="fa fa-share-alt"></span>
<span><a class="btn btn-danger">View business</a></span>
</div>  
                               
</div>
       
</div>


</div>



<!-----------------------------------section C ------------------------------->

<br><br>
                     <div class="db-image col-md-6">

<div class="founded"><span>Since 03-October-2023</span></div>
<img src="/images/business.jpg" alt="property image">
<div class="review">
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span>
   <span class="fa fa-star"></span> 
   <span class="txt-no-review"> No review yet</span>
   <span class="txt-review">0 Review</span>


   <span id="views">3567</span>   
</div>                  
</div>
<!-------------------------------------User details-------------------------------->

<div  class="col-md-6 bizDetails">



<!------------------------------------------biz name----------------------------------->
<div id="bizName"> 
<span>Business Name: Essential Ng</span>
</div>

      
<!------------------------------------------biz id----------------------------------->


<div id ="bizId"> 
<span>Business ID: 113454433 </span>
</div>
                                            

       
<!------------------------------------------biz category----------------------------------->
       
<div>
<span class="category">Agricultural services, Bankruptcy Lawyer</span>
</div>
       
<!------------------------------------------biz address----------------------------------->
<div class="bizAddress">
<span class="fa fa-map-marker"></span> 24, Iyala Street, Alausa, Ikeja
</div>
       
                                               
<!------------------------------------------biz address----------------------------------->
<div class="bizEmail">                 
<span class="fa fa-envelope"></span> <span id="user_email">webmasterjdd@gmail.com</span>
</div>   
       
                                      
<!------------------------------------------biz address----------------------------------->
                                                  
<div class="bizContact">
<span class="fa fa-phone" class="user-phone-number"></span> 08148413982
</div>                                      

<br><br>
       
<!------------------------------------------biz status----------------------------------->
<div class="row">
<div class="col-md-4">
<div class="user-status">
                                              
<div class="txt-verify"><span>16%</span> Verified</div>
<div class="progress-bar">
<div class="progress-bar-fill" style="width: 50%;"></div>
</div>
</div>

</div>
       
<!------------------------------------------biz share----------------------------------->
<div class="col-md-8">                                   
<div class="share">
<span class="fa fa-share-alt"></span>
<span><a class="btn btn-danger">View business</a></span>
</div>  
                               
</div>
       
</div>






</div>


  
    <!--- end of each user item container -->


    <!-- show ads-->

<!-- end of showing ads --->
</div>

 
@endsection