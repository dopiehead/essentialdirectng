@extends('base.layout')

@section('title', 'About Founder')

<!--- adding the css and js files --->
@section('links')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home/aboutfounder.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection


@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3>
                <small> Founder's profile</small> 
            </h3>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  
@endsection



@section('content')
    <div class="about-founder">

     <div class="container">

         <div class="row">

             <div class="col-md-6 im-home" >
         
               <img src="/images/people/ceo.jpg" alt="founder">

             </div>

             <div class="col-md-6">

               <p class="full_name">Full name:<span>John Doe</span></p>

               <p>Born:<span>04/14/1980</span></p>

               <p>Place of Birth:<span>Brazil</span></p>

               <p>Spouse:<span>Jane Doe</span></p>

               <p>Organizations founded:<span><a href="">ShopLeft</a></span></p>

               <p>Education:</p>

               <p>Networth:</p>

               <p>Country of Residence:Nigeria</p>

               <p>Nationality:Nigerian</p>

               <p>Social networks:</p><br>

               <span class="social_network"><i class="fab fa-facebook"></i><i class="fab fa-instagram"></i><i class="fab fa-twitter"></i> <i class="fab fa-linkedin"></i></span><a class="btn btn-success" onclick="openModal()">Send message  <i class="fas fa-paper-plane"></i></a>


             </div>


         </div>
      

         <div class="container pictures-container" >
            

         <h2>Lifestyle</h2><br><br>

         <h5>Cars</h5><br>
           
         
             <ul>
   
                  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

             </ul>




             <h5>Houses</h5><br>


             
             <ul>
   
                  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

             </ul>

<br>
<h3>Profession / Business & Achievements</h3>
<br>
   
         
             <ul>
   
                  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

                 <li><img src="https://placehold.co/600x400.png" alt="image-x"></li> 

             </ul>


         </div>
  

   



        <p class="txt-founder">

             

            John doe is a subsidiary brand of the essential group, it is owned and controlled by the Essential group. 
            Edirect reaches an approximate of 22 million unique visitors monthly from within Nigeria and across Africa. 
            The site presents an opportunity for business owners and consumers of services to meet online where all business 
            details are collated and recorded by data analysts professionals who do their due diligence to make sure that all 
            businesses are genuine and functional. Edirect also serve as a person’s directory helping user find lost contacts or 
            verifying new contacts. It also helps in quick identification of a person and make easy his or her location. 
            It’s our mission to help as much as possible businesses to list on our business directory to enjoy wide range of customers, 
            bring their location to light and create an avenue where business transactions can commence, take place and be concluded 
            online without the stress of having to move around to get satisfaction. We also intend to create an avenue where every 
            enlisted member can use as point of reference, with his or her information completely collected whoever might be looking 
            into reaching out to such enlisted member can be rest assured they are contacting the actual person(s). 
            Essential Direct is a trusted and verified business directory in Nigeria. All listed local business and data 
            are manually collected to ensure genuine and high-quality data. You can find every essential needs of yours ranging 
            from trusted dealers, local business, restaurants, company data (name, address, phone number, products, services) and 
            every other detail. Our mission is to create a world’s information platform that is universally accessible.
        </p>
    </div>
<br><br>


<div class="tableParent row">

<h2>Frequently Asked Questions(F.A.Q)</h2>

    <div class="col-md-6">


         <table class="Qtable">

               <tbody>

             <tr>
           
                 <td>
                     <span class="btn-accordion">How did John Doe make his money? <i class="fa fa-caret-down"></i></span>

                      <p class="accordion-dropdown active-accordion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque eaque reiciendis beatae, nisi iste sit aliquam quidem consectetur repellat.</p>
                 </td>

                 </tr>

             <tr>
          
                 <td>
                
                      <span class="btn-accordion">Who is John Doe, the richest man in America?  <i class="fa fa-caret-down"></i></span>

                      <p class="accordion-dropdown active-accordion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque eaque reiciendis beatae, nisi iste sit aliquam quidem consectetur repellat.</p>
                 </td>
           
             </tr>


             <tr>
          
                 <td>
            
                  <span class="btn-accordion">Who is John Doe, the richest man in America?  <i class="fa fa-caret-down"></i></span>

                  <p class="accordion-dropdown active-accordion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque eaque reiciendis beatae, nisi iste sit aliquam quidem consectetur repellat.</p>
                 
                </td>
       
             </tr>


             <tr>
          
                 <td>
            
                  <span class="btn-accordion">Who is John Doe, the richest man in America?  <i class="fa fa-caret-down"></i></span>

                  <p class="accordion-dropdown active-accordion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque eaque reiciendis beatae, nisi iste sit aliquam quidem consectetur repellat.</p>
                 
                </td>
       
             </tr>

             </tbody>
         
        
         </table>

    
     




     </div>
    

     <div class="col-md-6 ads" >


     </div>


  
    </div>

  <br><br>

 <h3>Similar Founders </h3>   

    <div class="menu_wanted_container">

<div class="menu_wanted">
    <img src="https://placehold.co/600x400.png" alt="">
    <h4>Bill Gates</h4>
</div>

<div class="menu_wanted">
     <img src="https://placehold.co/600x400.png" alt="">
     <h4>Steve Jobs</h4>
</div>

<div class="menu_wanted">
    <img src="https://placehold.co/600x400.png" alt="">
    <h4>Mark Zuckerberg</h4>
</div>

<div class="menu_wanted">
     <img src="https://placehold.co/600x400.png" alt="">
     <h4>Ashley Segun </h4>
</div>

<div class="menu_wanted">
     <img src="https://placehold.co/600x400.png" alt="">
     <h4>Warren Buffet</h4>
</div>

<div class="menu_wanted">
    <img src="https://placehold.co/600x400.png" alt="">
</div>

<div class="menu_wanted">
     <img src="https://placehold.co/600x400.png" alt="">
</div>



</div>


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



    
   
        
    
@endsection
