<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add business</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dashboard/add-business.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <br><br><br>
                 <div class="container">

                        <input type="text" class="form-control" placeholder="Any other directory ?">

    <!------------------------------First row----------------------------------------------->
                
                    <div class="row">

                         <div class="col-md-4">
                        
                         <input type="text" class="form-control" placeholder="Business insurance">

                         </div>

                         <div class="col-md-4">
                          
                         <input type="text" class="form-control" placeholder="HMO">

                         </div>

                         <div class="col-md-4">


                         <input type="text" class="form-control" placeholder="Pension">


                         </div>

                    </div>
<!------------------------------Second row----------------------------------------------->
                
                    <div class="row">

                         <div class="col-md-4">
                        
                         <input type="text" class="form-control" placeholder="Bank">

                         </div>

                         <div class="col-md-4">
                          
                         <input type="text" class="form-control" placeholder="car">

                         </div>

                         <div class="col-md-4">


                         <input type="text" class="form-control" placeholder="land">


                         </div>

                    </div>

  <!------------------------------First row----------------------------------------------->
                                
                        <div class="row">

                             <div class="col-md-6">
                        
                                 <p>Pay N5000 for any of this service</p>

                             </div>

                             <div class="col-md-6">
                          
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">Legal advice</span>
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">Account/Tax advice</span>
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">Government advice</span>
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">Registration advice</span>
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">Maintenance</span>
                               <input type="checkbox">&nbsp;<span style="opacity:0.8;">google presence</span>
                             

                             </div>

                        

                        </div>
                 
                       <button class="btn btn-danger" style="float:right;">Submit</button>
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