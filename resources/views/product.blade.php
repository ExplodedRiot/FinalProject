@extends('master');
@section("content")
<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-item">
  <img src="img\slide\slide1.jpg" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>Check Out Our Latest Item!</h5>
    <p>Get Your Sneakers With Best Prices!</p>
  </div>
</div>
</div>
@endsection