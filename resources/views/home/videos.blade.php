

<!DOCTYPE html>
<html lang="en">
<head>

<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Videos')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/home/videos.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection


</head>
<body>

<br>
<br>




<h3>Short Videos</h3><br>


<br>
<div class="container">



<div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0"></iframe>
  </div>

</div>



</body>
</html>
