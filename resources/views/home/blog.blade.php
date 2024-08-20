<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blog')


<!--- adding the css and js files --->
@section('links')
    
<link rel="stylesheet" href="/css/home/blog.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection



<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3>
             E-Direct <span>Blog</span> Updates
            </h3>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  
@endsection


@section('content')
    <div class="blog-post-container">
                        
            <div class="people-container">
                <!-- display content from db--->
                <div class="db-user">
                    <h3 id="txt-trending-post">Trending Blog Posts</h3>

                    <div class="container trending-section">
                        <div class="post">
                            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
                            <div class="post-title"><h3>Post Title 1</h3></div>
                            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                
                        <div class="post">
                            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
                            <div class="post-title"><h3>Post Title 1</h3></div>
                            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                
                        <div class="post">
                            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
                            <div class="post-title"><h3>Post Title 1</h3></div>
                            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                       
                        <div class="post">
                            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
                            <div class="post-title"><h3>Post Title 1</h3></div>
                            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                
                        <div class="post">
                            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
                            <div class="post-title"><h3>Post Title 1</h3></div>
                            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <!--- end of each user item container -->
<br><br><br>

                <!-- show ads-->
            <div class="ads-right">
                <img src="/images/ads/ad1.png" alt="" >
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
                <img src="/images/ads/ads4.png" alt="">

            </div>
            <!-- end of showing ads --->
            </div>

    </div>

    </div>

</div>

 
@endsection