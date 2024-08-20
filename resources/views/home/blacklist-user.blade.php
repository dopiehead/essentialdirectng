<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blacklist')


<!--- adding the css and js files --->
@section('links')
<link rel="stylesheet" href="/css/home/blacklistDetails.css">
    <link rel="stylesheet" href="/css/home/blacklist.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" src="/js/script.js">
    <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
@endsection

<!--- adding the main-content --->


@section('content')

<div class="container" style="margin-top:90px;">

    <div class="row">
        <div class="col-md-8">

         <img src="https://placehold.co/600x400.png" alt="user-photo">

        </div>
        <div  class="col-md-4">
           <h5>Catherine Isidiaka</h5>

           <div class='wanted_info'>
                <p>for more information about this person</p><br>
                    <strong>Call 09087655646</strong>
</div><br><br>

                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet quis sunt, delectus labore dolorem veritatis perferendis voluptate reprehenderit quam molestias facere veniam vitae beatae dolorum nam, minima maiores. Voluptas!</p>

        </div>
    </div>

</div>

<br><br>

<div class="share">
      <i class="fa fa-share-alt"></i> <span>Share</span>
</div>
<div class="more-info">

         <h6>User details</h6><br>

             <table>

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

            </table>

</div>
<br><br>
<div class="container images_section">

<ul>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>

  <li><img src="https://placehold.co/600x400.png" alt="image-x"></li>
</ul>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nemo voluptatibus repudiandae esse debitis vero, quisquam accusantium. Excepturi fugiat nobis, modi autem dolore, eius minus repellat fuga error voluptatibus odit?</p>

<br>
<br>

<h4 id="review_heading">Reviews <i class='fa fa-comments'></i></h4><br><br>

<div class="menu_wanted_container">

<div class="reviews">

<span id="signature">B</span>&nbsp;&nbsp;<span>Belgore</span><br>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
 Totam quia quae neque hic.<br>
</p>

</div>


<div class="reviews">

<span id="signature">B</span>&nbsp;&nbsp;<span>Belgore</span><br>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
 Totam quia quae neque hic.<br>
</p>

</div>

</div>

<br>
<br>

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


@endsection
