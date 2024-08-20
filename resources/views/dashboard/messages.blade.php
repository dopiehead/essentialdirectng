<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Messages</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/css/dashboard/messages.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <script src="/js/script.js" defer></script>
 
</head>
<body>
      @include('components.hamburger')

    <div class="row">
        <div class="col-md-4" id="overlay">

        @include('components.overlay')

        </div>
        <div class="col-md-8" id="details">
            
            <div class="row">
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
            <br><br>
                 <div class="">



                 <div style="text-align:center;">

                 <button class="btn btn-primary">Mark as read</button>&nbsp;

                 <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>

                 </div>

                 <br>
                     <div id="label">

                      <br>

                     <div class="">

                       <span class="inbox">inbox(0)</span><br>

                     </div>
                          <br>
                          
                          <table>
                            
                           <thead>

                                 <tr>
                                     
                                        <th>Action</th>

                                        <th>From</th>

                                        <th>Subject</th>

                                        <th>Date</th>

                                 </tr>

                           </thead>

                           <tbody>
                           <tr>
                                     
                                     <td><input type="checkbox"></td>

                                     <td>Adewale</td>

                                     <td>My guy Musa</td>

                                     <td>Aug 8 2024</td>

                              </tr>

                           </tbody>


                        


                          </table> 

                       






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
