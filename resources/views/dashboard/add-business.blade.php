<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add business</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dashboard/add-business.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
     <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
     <!-- link the internal JS file -->
  
     <script src="/js/script.js" defer></script>

      <!-- font awesome cdn link  -->
   
</head>
<body>
     @include('components.hamburger')
<div class="row">

    <div class="col-md-4" id="overlay">

    @include('components.overlay')

     </div>


     <div class="col-md-8 " id="details">

         <div class="container">


         <div class="col-md-6">
               <h6>Hello, username

                    <a href="#">
                        <span class="bell">
                            <i class="fa-solid fa-bell">
                                <span class="notification"></span>
                            </i>
                        </span>
                    </a> 

                    </h6> 
                </div>
                <!-- <div class="col-md-6  col-x-6">
                    <img id="user_image" src="" alt="">
                    
                </div> --> 
            </div>
            <br>

        <div id="slide">

                                 <br>

             <h4>Add Business</h4><br>

              <a href="" class="btn btn-danger">Business</a><br><br>

              <h6>Select your business categories</h6><br>

                  <div  id="output"  class="output">
                      

                 
                  </div>

                                              <br>


            <div class="categories-parent">
                <button class="button" id="Artists">Artists</button>
                <button class="button" id="Attractions">Attractions</button>
                <button class="button" id="Auditions">Auditions</button>
                <button class="button" id="Assurance services">Assurance services</button>
                <button class="button" id="Audit and accounting">Audit and accounting</button>
                <button class="button" id="Auditors">Auditors</button>
                <button class="button" id="Auto repair">Auto repair</button>
                <button class="button" id="Auto services">Auto services</button>
                <button class="button" id="Auto Parts -New & Used">Auto Parts -New & Used</button>
                <button class="button" id="Auto A.C Repair">Auto A.C Repair</button>
                <button class="button" id="Baking">Baking</button>
                <button class="button" id="Broker">Broker</button>
                <button class="button" id="Baking Equipment">Baking Equipment</button>
                <button class="button" id="Baby Sitters">Baby Sitters</button>
                <button class="button" id="Cars">Cars</button>
                <button class="button" id="Cutting edge">Cutting edge</button>
            </div><br>

            <div class="row">

              

                <div class="col-md-6" id="b_image">

                    <h5>Business image</h5>

                        <input type="file"><br><br>
                </div>

                <div class="col-md-6">
                <br><br>
                    <h6><b>Social media links</b></h6>

                     <input type="text" name="add-social" style="border:1px rgba(0,0,0,0.3)"><button style="border-radius:none;"><i class="fa fa-plus"></i></button>
                
                
                     </div>
            </div>




            <div class="row">

                 <div class="col-md-6">

                   <input type="text" class="form-control" placeholder="Business name">

                 </div>

                 <div class="col-md-6">

                   <input type="text" class="form-control" placeholder="Business address">

                 </div>

            </div>



             <div class="row">

                <div class="col-md-4">

                   <select name="" id="" class="form-control">
                     <option value="">State</option>
                     <option value=""></option>
                     <option value=""></option>
                   </select>

                </div>

                <div class="col-md-4">

                     <select name="" id="" class="form-control">
                          
                     <option value="">City</option>
                     <option value=""></option>
                     <option value=""></option>

                     </select>


                 </div>

                <div class="col-md-4">


                    <select name="" id="" class="form-control">

                    <option value="">Business line</option>
                     <option value=""></option>
                     <option value=""></option>

                    </select>

                </div>

            </div>






            <div class="row">

                <div class="col-md-4">

                   <input type="text" class="form-control" placeholder="Date of establishment">

                </div>

                <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Number of staff">


                 </div>

                <div class="col-md-4">


                <input type="text" class="form-control" placeholder="Business property status (optional)">

                </div>

            </div>


            <div class="row">

                <div class="col-md-4">

                   <input type="text" class="form-control" placeholder="Business reg No (optional)">

                </div>

                <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Business Email">


                 </div>

                <div class="col-md-4">


                <input type="text" class="form-control" placeholder="Business website">

                </div>

            </div>



          <button class="btn btn-success">Save</button> <button id="slideButton" onclick="()" class="btn btn-danger">Next</button>
             
        </div>

        

    <br>
  


    <!-------------------------------- Slide(2)------------------------------------->
   <div id="slide_2">

       <div class="row">

         <div class="col-md-6">

             <input type="text" class="form-control" placeholder="Business Previous Location (Optional)">

          </div>

         <div class="col-md-6">

            <input type="text" class="form-control" placeholder="Business Nearest Bus-stop">


          </div>

       

        </div>

        <div class="row">

         <div class="col-md-4">

             <input type="text" class="form-control" placeholder="Landmark">

          </div>

         <div class="col-md-4">

            <input type="text" class="form-control" placeholder="Number of staff">


          </div>

           <div class="col-md-4">

            <input type="text" class="form-control" placeholder="Business property status">


          </div>

       

        </div>


        <div class="row">

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Tin No">


            </div>

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Tax registered">


            </div>

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Services rendered">


            </div>





        </div>

        <div class="row">

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Target audience">


            </div>

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Number of staffs">


            </div>

            <div class="col-md-4">

               <input type="text" class="form-control" placeholder="Business property staffs">


            </div>





        </div>



        <!------------------------------Contact information-------------------------------->
        
               <h5>Contact Person information</h5>

        <div class="row">
        
         <div class="col-md-4">
         
         <input type="text" class="form-control" placeholder="Name">

         </div>

         <div class="col-md-4">

         <input type="text" class="form-control" placeholder="Phone">

         </div>

         <div class="col-md-4">
        
         <input type="text" class="form-control" placeholder="Position">

        </div>

       

        </div>

        <div class="row">
         
           <div class="col-md-4">
        
              <input type="text" placeholder="No of staff" class="form-control">
          
            </div>
           
        </div>


        <!------------------Owners information----------------->
        
        <div class="row">
         
         <div class="col-md-4">
      
            <input type="text" placeholder="Name" class="form-control">
        
          </div>

          <div class="col-md-4">
      
           <input type="text" placeholder="Id" class="form-control">
  
           </div>

           <div class="col-md-4">
      
           <input type="text" placeholder="Phone" class="form-control">
  
           </div>
         
        </div>

        <div class="row">

            <div class="col-md-4">
      
             <input type="text" placeholder="Sales of marketing Budget" class="form-control">
  
            </div>

            <div class="col-md-4">

               <input type="text" placeholder="Time at present Location" class="form-control">

            </div>

             <div class="col-md-4">

                   <input type="text" placeholder="means of advertisement" class="form-control">

            </div>

    <div class="row">

            <div class="col-md-4">
      
             <input type="text" placeholder="Business Need" class="form-control">
  
            </div>

            <div class="col-md-4">

               <input type="text" placeholder="Additional Service" class="form-control">

            </div>

             <div class="col-md-4">

                   <input type="text" placeholder="Whatsapp" class="form-control">

            </div>
   
    </div>


    
    <div class="row">

            <div class="col-md-6">
      
             <input type="text" placeholder="Account Number" class="form-control">
  
            </div>

            <div class="col-md-6">

               <input type="text" placeholder="Bank Name" class="form-control">

            </div>

         
    </div>
     
    <div class="container"><a class="btn btn-success">Save</a> <a id="previousButton2"  class="btn btn-danger">Previous</a><a id="slideButton2"  class="btn btn-danger">Next</a>
</div>    
   
   
  </div>

  </div>

  <!-----------------Slide_3---------------------->

  <div id="slide_3" class="slide_3">
   
    <div class="row"> 

        <div class="col-md-6" id="b_type">

            <h6>Type of business</h6>

         </div> 

         <div class="col-md-6" id="checkbox_text">

         <input type="checkbox">Sole Trader

         <input type="checkbox">Private

         <input type="checkbox">Limited

         <input type="checkbox">Partnership

          <input type="checkbox">Government

        </div>

    </div>   

        <div class="row">

            <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Number of Trainee/ Apprentice">

            </div>

            <div class="col-md-4">
            
             <input type="text" class="form-control" placeholder="Expected Constumer">


            </div>

            <div class="col-md-4">

             <input type="text" class="form-control" placeholder="Business property status (optional)">



            </div>


        </div>
    

      



        <div class="row"> 

            <div class="col-md-4">
                <h6>Type of Business Premies</h6>
            </div>

             <div class="col-md-8"  id="checkbox_text">
             
              <input type="checkbox"> Shops
              <input type="checkbox"> Office
              <input type="checkbox"> Mail
              <input type="checkbox"> Tenant
              <input type="checkbox"> Home owner
              <input type="checkbox"> Family
              <input type="checkbox"> House
              <input type="checkbox"> Land
              <input type="checkbox"> Container
              <input type="checkbox"> Shared
              <input type="checkbox"> Road and street
              <input type="checkbox"> Lease Hold

             </div>


        </div>






        <div class="row" id="business_place">
            
            <div class="col-md-3">
             
              <input type="text" class="form-control" placeholder="Average Business Rent">
              
            </div>

            <div class="col-md-3">

           <input type="text" class="form-control" placeholder="Value of property">
            
            </div>

            <div class="col-md-3">

            <label for="from">From</label>

              <select name="" class="" id="">
               
                <option value="">Opening Hours</option>

              </select>
           

            </div>


            <div class="col-md-3">

            <label for="to">To</label>

              <select name="" class="" id="">
 
                <option value="">Closing Hours</option>

              </select>

            </div>
        
        
         </div>
        
        

        <div class="row">

           <div class="col-md-4">

            <input type="text" class="form-control" placeholder="Internet provider"> 

           </div>

           <div class="col-md-4">

           <input type="text" class="form-control" placeholder="Projected annual income"> 


           </div>

           <div class="col-md-4">

           <input type="text" class="form-control" placeholder="Projected monthly income"> 



           </div>


        </div>

        <div class="row">

          <div class="col-md-4">

          <input type="text" class="form-control" placeholder="Source of staff Requirement"> 


          </div>

          <div class="col-md-4">

          <input type="text" class="form-control" placeholder="Office / Shop Needs"> 


          </div>


        </div>
         
        <div class="row">

            <div class="col-md-6">

               <small>Looking for Additional Staff?</small> 
           
                 <input type="checkbox" checked> Yes <input type="checkbox"> No
         
                  <br>Kindly state yes

            </div>

        

            <div class="col-md-6">

             <small>Looking for Business financing?</small> 
           
                <input type="checkbox" checked> Yes <input type="checkbox"> No
            
                  <br>Kindly state yes

            </div>

        </div><br><br>


               <input type="text" class="form-control" placeholder="Source of Business product / Service">

        <div class="row">

         
           <div class="col-md-4">
         
               <input type="text" class="form-control" placeholder="Business Needs">

           
           </div>

            <div class="col-md-4">

                 <input type="text" class="form-control" placeholder="Connect to">

            </div>

             <div class="col-md-4">
               
                 <input type="text" class="form-control" placeholder="Are you on google?">

            </div>
         

        </div>


       <button class="btn btn-success">Save</button> <button id="previousButton3"  class="btn btn-danger">Previous</button>
     

       </div>

    </div>




</div>  

<script>
 $('#openOverlay').on('click',function(e){
 
 e.preventDefault();
 
 $("#overlay-content").toggle();
 
 });
</script>



</body>
</html>