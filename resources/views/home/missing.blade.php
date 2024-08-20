<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Missing')


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
        <section class="hero-section hero-section-missing" id="hero-section">
            <div class="hero-content">
            
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

<div class="blacklist-intro" style="text-align: center">
    <h3>Missing persons</h3>

</div>

<div>

   <div class='row' style="background:rgba(192,192,192,0.5);padding:8px;">

        <div class="col-md-6">
      
         <label for="filter_by"><b style="font-size:17px;">Filter by</b></label>&nbsp;&nbsp;&nbsp;<input style="border:1px solid transparent;box-shadow:0px 0px 5px rgba(0,0,0,0.1);font-size:18px;width:85%;" type="search" class="" placeholder="" >



        </div>

        <div class="col-md-6">

          <label for="filter_by"><b style="font-size:17px;">Filter by</b></label>&nbsp;&nbsp;&nbsp;
             <select style="border:1px solid transparent;box-shadow:0px 0px 4px rgba(0,0,0,0.1);width:85%;font-size:18px;" name="" id="" class="">
                <option value=""></option>
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
      <a href=""><img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150"></a><br>
      <figcaption>
      <a href=""><b>Kayode Thomas</b></a>
      </figcaption>
    </figure>

    <figure>
      <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
     <figcaption>
       <b>Kayode Thomas</b>
      </figcaption>
    </figure>

<figure>
    <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
     <figcaption>
     <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
    <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
    <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
    <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
     <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>


<figure>
       <img src='https://estores.ng/assets/icons/logo_e_stores.png' width="180" height="150">
    <figcaption>
      <b>Kayode Thomas</b>
    </figcaption>
</figure>

</div>
</div>



    <!--- end of each user item container -->



 
@endsection