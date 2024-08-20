<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="/css/dashboard/businessdashboard.css">
    <script src="/js/script.js"></script>
</head>
<body>

       @include('components.hamburger')
    <div class="row" style="overflow: hidden;">
        <div class="col-md-4" id="overlay">

        @include('components.overlay')

        </div>
        <div class="col-md-8" id="details">
            <div class="row" style="">
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

                    </h6>
                </div>
                <!-- <div class="col-md-6">
                    <img id="user_image" src="" alt="User Image">
                    <span id="user_name"></span><br>
                    <small id="user_email"></small>
                    <a href="#">
                        <span class="bell">
                            <i class="fa-solid fa-bell">
                                <span class="notification"></span>
                            </i>
                        </span>
                    </a>
                </div> -->
            </div>
            <div class="container">
                <div id="label">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="request">
                                <h6>Total request</h6>
                                <p>0</p>
                                <i id="deals" class="fa fa-star"></i> <span id="star"><span style="color: red;"> -12.76</span> than last month</span>
                            </div>
                            <div id="request">
                                <h6>Total listings</h6>
                                <p>0</p>
                                <i id="listings" class="fa fa-star"></i> <span id="star"><span style="color: green;"> +343</span> than last month</span>
                            </div>
                            <div id="request">
                                <h6>Done Deals</h6>
                                <p>0</p>
                                <i id="deals" class="fa fa-star"></i> <span id="star"><span style="color: red;"> -12.76</span> than last month</span>
                            </div>
                            <div id="bar-chart">
                                <h6>Bar chart</h6>
                                <canvas id="barChart" style="max-width: 800px;"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="border: 2px solid rgba(0, 0, 0, 0.1); padding: 5px; border-radius: 10px;">
                                <h6>Previous month performance</h6>
                                <div class="chart-container">
                                    <canvas id="pieChart" style=""></canvas>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-6"><i class="fa fa-shopping-cart"></i><span style="font-size: 13px;"> Added to cart</span></div>
                                    <div class="col-md-6 col-6"><i class="fa fa-eye"></i> <span style="font-size: 13px;">Views</span></div>
                                    <div class="col-md-6 col-6"><i class="fa fa-share-alt"></i><span style="font-size: 13px;"> Shares</span></div>
                                    <div class="col-md-6 col-6"><i class="fa fa-comments"></i><span style="font-size: 13px;"> Reviews</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" id="audience">
                            <div style="border: 2px solid rgba(0, 0, 0, 0.1); padding: 5px; border-radius: 10px;">
                                <h6><b>Reached Audience</b></h6>
                                <span><i id="higher" class="fa fa-circle"></i><b> 70% audience</b></span>
                                <br>
                                <span><i id="high" class="fa fa-circle"></i><b> 70% audience</b></span>
                                <div class="progress-circle">
                                    <span class="progress-text">70% Interaction</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="target">
                            <div style="border: 2px solid rgba(0, 0, 0, 0.1); padding: 5px; border-radius: 10px;">
                                <h6><b>Target</b></h6>
                                <span><i id="highest" class="fa fa-circle"></i><b> 50% Target reached</b></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="border: 2px solid rgba(0, 0, 0, 0.1); padding: 5px; border-radius: 10px;">
                                <h6 id="Engagements"><b>Engagements</b></h6>
                                <div class="progress-circle">
                                    <span class="progress-text">70% Interaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
