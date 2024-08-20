<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'People')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/home/people.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/home/groups.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="/js/groups.js"></script>
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section-groups">
            <div class="hero-content">
            <h3>
          About Groups
            </h3>

            <h6>

                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia beatae tempora eaque tempore enim, nesciunt velit iste accusamus fugiat dicta cupiditate ipsa. Aut exercitationem sint laborum ab alias quae sapiente!


            </h6>
            </div>
        </section>
 <!--- end of adding the hero-content--->



@endsection

@section('content')
<div class="container">
    <!-- display content from db--->


     <div class="join_group">
         <a href="" class="">
          Join
          </a>
     </div>

     <br><br><br><br>
     
     <div class="flex justify-start space-x-4">
          <a onclick="openModal()" class="bg-white-500 text-black py-2 px-4 rounded" type="button">Post</a>  <a href="" id="anonymous_post" class="anonymous_post btn btn-red">Anonymous Post</a>  <a href="" id="members" class="members  bg-white-500 text-black py-2 px-4 rounded">Members</a>
     </div>
                              <br>
     <div class="row">

         <div class="col-md-6">
            
             <div class="comment_container">

             <div id='user_image'>

                 <img src="/images/adewale.jpg" alt="Placeholder" style="width:50px;height:50px;border-radius:50%;" class="">
                     <input type="text" class="border border-gray-300 rounded " placeholder="Type something..."><br>
                     <div class="secret_column">
                     <span id="secret"><i class="fa fa-user-secret"></i>Anonymous Post</span> <span><a  href="" class=" btn btn-danger"> Post</a></span>
                     </div>

             </div>
                                                                                                               <br>

                                                                                                   <br>

                     <div id="comment_section">

                         <ul id="real_agent_info">

                                 <li>

                                    <img class="real_agent" src="" alt=""><strong>Anonymous</strong><span></span>

                                 </li>

                                 <li id="real_estate_agent">

                                   <strong >Real Estate Agent</strong>

                                 </li>

                         </ul>



                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem facilis voluptatem ab repudiandae tenetur nobis illum, expedita sequi. Maxime molestias dignissimos ipsam vero maiores non temporibus beatae excepturi soluta modi?</p>



                                                                                                                    <hr>

                         <div class="icons">

                             <span id="like"><i class="fa fa-thumbs-up"></i> like</span>

                             <span id="comment"><i class="fa fa-comment"></i> comment</span>

                    </div>


                                                                                                                     <hr>

                                                                    <br>

                 <span>View More Comment</span> <br><br>

                 <img class="real_agent" src="" alt=""> <span>Anonymous</span><br> <span class="time"></span>

                     <div id="reply">

                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi dolorem, possimus provident beatae modi maiores sed nemo obcaecati quod, deserunt ad culpa atque inventore ab a molestiae veritatis laboriosam.</p>

                     </div>

                     <div class="reply_icons">
                           <span><i class="fa fa-thumbs-up "></i> Like</span>
                           <span><i class="fa fa-comment "></i> Comment</span>

                     </div>
                           <br>


                           <div id='user_image'>

                            <img src="/images/adewale.jpg" alt="Placeholder" style="width:50px;height:50px;border-radius:50%;" class="">
                                <input type="text" class="border border-gray-300 rounded " placeholder="  Type something..."><br>


                        </div>

                       </div>  

                    </div>

                           <br><br>
                          




<!------------------------------------------ members--------------------------------->


                    <div id='user_details' class="user_details" style=''>



                             <div id="figure">

                                 <img src="/images/operator.png" alt="user">

                                 <h6>Mally Cleff</h6>

                                 <span>5 Followers</span>

                                 <button class="btn btn-danger">Connect</button>
                        
                             </div>






                             <div id="figure">

                                    <img src="/images/laundry.jpg" alt="user">

                                     <h6>Mally Cleff</h6>

                                     <span>5 Followers</span>

                                     <button class="btn btn-danger">Connect</button>

                             </div>



                             <div id="figure">
                                       <img src="/images/download.jpg" alt="user">
                                       <h6>Mally Cleff</h6>
                                        <span>5 Followers</span>
                                        <button class="btn btn-danger">Connect</button>

                             </div>


                             <div id="figure">
                                        <img src="/images/user-x.jpg" alt="user">

                                         <h6>Mally Cleff</h6>

                                      <span>5 Followers</span>

                                         <button class="btn btn-danger">Connect</button>

                             </div>






                    </div>



            </div>




            <div id="popup">
            <a onclick="openModal()" id="closeModal">&times;</a>
            <form>
             
            <img class="anonymous_img" src="/images/adewale.jpg"> <input type="text" placeholder="Title">

            <div id="group_button">
            <button class="btn btn-cancel"><i class="fa fa-user-secret" style="opacity:0.7"></i> Cancel</button>
            <button class="btn btn-create">Create</button><br><br>
            </div>
            <label for="">Update group image</label><br>

            <div class="upload_photo">

             <i class="fa fa-upload"></i><br>
              
             <span class="click_to_upload">Click to upload</span><br>


            </div>
                     <br>

            <span class="file_type">GIF</span><span class="file_type">JPEG</span><span class="file_type">JPG</span> > <span>10MB</span>

            <div class="commentator">
            <img class="anonymous_img" src="/images/adewale.jpg" style="margin-top:-10px;">  <textarea name="brief_description" placeholder="Brief description" id="brief_description" cols="39" rows="3" wrap="physical"></textarea>
            </div>
            
            <div class="add_members_background">

            <div id="add_members">

            <span>Add members</span> <i class="fa fa-plus"></i>

            </div>

            </div>


            <div style="display: none;text-align:center;" id="loading-image"><img id="loader" height="50" width="50" src="loading-image.GIF"></div>
            </form>
             </div>


                      <br> 

            




<!----------------- Section b       ----------------->







<div class="col-md-6">


      <div id="group-home">

         <h4>About Group</h4>

          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo dolore eius ipsam quibusdam nesciunt alias? Obcaecati ad facere corrupti temporibus officia, ipsum, excepturi libero quaerat nulla natus illo velit necessitatibus.</p>

         <button class="btn btn-danger">Share Group</button>

     </div>



<!----------------- Other groups       ----------------->


        <div class="other_groups" id="group-home">
              <h4>Other Groups</h4><br>
             <div class="group_inc">
                      <img src="/images/group.jpg" alt="">
                      <h6><b>IT news</b></h6>
                     <span>1 member</span> <span> 0 posts today</span><br>

                     <a class="btn btn-danger" href="">Join</a>
             </div>


            <div  class="group_inc">
                     <img src="/images/group.jpg" alt="">
                         <h6><b>IT news</b></h6>
                              <span>1 member</span> <span> 0 posts today</span><br>
                              
                     <a class="btn btn-danger" href="">Join</a>

            </div>

             <div  class="group_inc">
                     <img src="/images/group.jpg" alt="">
                          <h6><b>IT news</b></h6>
                              <span>1 member</span> <span> 0 posts today</span><br>
                              
                     <a class="btn btn-danger" href="">Join</a>
             </div>

             <div  class="group_inc">
                  <img src="/images/group.jpg" alt="">
                     <h6><b>IT news</b></h6>
                     <span>1 member</span> <span> 0 posts today</span><br>

                     <a class="btn btn-danger" href="">Join</a>
              </div>

        </div>

</div>







</div>







<!-- end of showing ads --->
</div>


@endsection
