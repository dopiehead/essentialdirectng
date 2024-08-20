<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blacklist')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/blacklist.css">
    <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section hero-section-wanted" id="hero-section">
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
    <h3>Wanted persons</h3>

</div>

<div>

   <div class='row' style="background:rgba(192,192,192,0.5);padding:8px;">

        <div class="col-md-6">
      
         <label for="filter_by"><b style="font-size:17px;">Filter by</b></label>&nbsp;&nbsp;&nbsp;<input style="border:1px solid transparent;box-shadow:0px 0px 5px rgba(0,0,0,0.1);font-size:18px;width:85%;" type="search" class="" placeholder="" >



        </div>

        <div class="col-md-6">

          <label for="filter_by"><b style="font-size:17px;">Filter by</b></label>&nbsp;&nbsp;&nbsp;
             <select style="border:1px solid transparent;box-shadow:0px 0px 4px rgba(0,0,0,0.1);width:85%;font-size:18px;" name="" id="" class="">
                <option value="">Newest</option>
                <option value=""></option>
                <option value=""></option>
             </select>


        </div>





    </div>


</div>
<br>
<div>
<h6>
    <span>
        <b style="font-size:17px;">Sort by</b>
    </span>
<b style="font-size:17px;">
    <select  style="float:right;border:1px solid transparent;box-shadow:0px 0px 4px rgba(0,0,0,0.1);" name="" id="">
       <option value="newest">Newest</option>
       <option value="oldest">Oldest</option>
    </select>
</b>
</h6>
</div>

<div class="container">

<div id='missing-layout'>
    <figure>
      <a  href="{{ route('home.wantedpersondetails')}}"><img src='https://placehold.co/600x400/000000/FFFFFF/png'></a><br>
      <figcaption>
      <a href="{{ route('home.wantedpersondetails')}}"><b>Catherine Isidiaka</b></a>
      </figcaption>
    </figure>

    <figure>
    <a href="{{ route('home.wantedpersondetails')}}"><img src='https://placehold.co/600x400/000000/FFFFFF/png'></a>
     <figcaption>
     <a href="/wantedpersonddetails.blade.php"><b>Kayode Thomas</b></a>
      </figcaption>
    </figure>

<figure>
    <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
     <figcaption>
     <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
    <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
    <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
    <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
     <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://placehold.co/600x400/000000/FFFFFF/png'>
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

</div>
</div>

<br><br><br>

    <!--- end of each user item container -->



 
@endsection