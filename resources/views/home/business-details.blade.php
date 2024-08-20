<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Business details') //


<!--- adding the css and js files --->
@section('links')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
   <link rel="stylesheet" href="/css/home/businessDetails.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
  

@endsection

<!--- adding the main-content --->


@section('content')

<div class="container" style="margin-top:90px;">
  
    <div class="row">
        <div class="col-md-8">

         <img src="https://placehold.co/600x400.png" alt="user-photo">

        </div>
        <div  class="col-md-4">
         
     
           <div class='wanted_info'>

           <p>Business Name</p>

                <p><i class="fa fa-map-marker"></i> Business location:</p>

                <p><i class="fa fa-envelope"></i> Business Email:</p>

                <p> <i class="fa fa-phone"></i>   Business Contact:</p>

                <p>Founded:</p>

                <p>Business worth:</p>

                <p>Founder/Founders: <a href="">John doe</a> </p>

                <p>Joined :</p>

                <p>Last seen online</p>

                   
</div><br>

                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet quis sunt, delectus labore dolorem veritatis perferendis voluptate reprehenderit quam molestias facere veniam vitae beatae dolorum nam, minima maiores. Voluptas!</p>

        </div>


        
    </div>

</div><br>
<div class="more_pictures">
<ul>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

</ul>

</div>


<div class="btn-links">

<a onclick="report()"><i class="fa fa-flag"></i> Report Business</a>

<a  onclick="openModal()"><i class="fa fa-envelope"></i> Send Message </a>

</div>


<br><br><br>

<span class="share"><i class="fa fa-share-alt"></i> Share</span>

<br>
<div class="more-info">

<!-------------------------To be hidden till person accept read-invite ----->
 



<h6>Business details</h6><br>
<br>
             <!-- <table>
    
                <tbody>
                    
                 <tr>
                    <td>Name</td>
                    <td>Catherine Isidiaka</td>
                </tr>

                <tr>
                    <td>Sex</td>
                    <td>Female</td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>23 years old</td>
                </tr>


                <tr>
                    <td>Height</td>
                    <td>158cm : 5.6ft</td>
                </tr>

                <tr>
                    <td>Updated</td>
                    <td>20/10/2023</td>
                </tr>

                <tr>
                    <td>Location(last seen)</td>
                    <td>Ilupeju iyana opaja ikeja nigeria</td>
                </tr>

                <tr>
                    <td>Location(lived)</td>
                    <td>Catherine Isidiaka</td>
                </tr>

                <tr>
                    <td>Landmark</td>
                    <td>Catherine Isidiaka</td>
                </tr>


                <tr>
                    <td>Hair color</td>
                    <td>Catherine Isidiaka</td>
                </tr>

                
                <tr>
                    <td>Skin color</td>
                    <td>Catherine Isidiaka</td>
                </tr>

                 </tbody>

            </table> -->
<br><br><br>
</div>
<br><br>



@include('components.location')


<h3>Similar Businesses around you<span class="see_more">See more</span></h3><br>
<div class="container images_section">

<ul>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 
</ul>

<br><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nemo voluptatibus repudiandae esse debitis vero, quisquam accusantium. Excepturi fugiat nobis, modi autem dolore, eius minus repellat fuga error voluptatibus odit?</p>


<br><br>



<h3>More Businesses<span class="see_more">See more</span></h3><br>
<div class="menu_wanted_container">

    <div class="menu_wanted">
        <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
         <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
        <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
         <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
         <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
        <img src="https://placehold.co/600x400.png" alt="">
    </div>

    <div class="menu_wanted">
         <img src="https://placehold.co/600x400.png" alt="">
    </div>



</div>





</div>

<!------------------message popup-------------------->

<div class="popup" id="popup">

<a onclick="openModal()" id="closeModal">&times;</a>
  
    <form>

   <h3>Send message</h3>

   <hr>
   <br>

   <input type="text" placeholder="Name" class="form-control">

   <input type="email" placeholder="Email" class="form-control">

   <textarea name="message" id="message" class="form-control" placeholder="...Write message" rows="5" wrap="physical" ></textarea>

   <button class="btn btn-primary">Send message <i class="fas fa-paper-plane"></i></button>



   </form>
</div>


<!------------------report popup-------------------->

<div class="popup-report" id="popup-report">

<a onclick="report()" id="closeModal">&times;</a>
  
    <form>

   <h3>Report Business</h3>

   <hr>
   <br>

   <input type="text" placeholder="Name" class="form-control">

   <input type="email" placeholder="Email" class="form-control">

   <textarea name="report" id="report" class="form-control" placeholder="...Write report" rows="5" wrap="physical" ></textarea><br>

   <button class="btn btn-info">Report <i class="fas fa-paper-plane"></i></button>



   </form>
</div>




@endsection