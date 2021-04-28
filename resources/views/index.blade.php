@extends('layouts.app')
@section('content')

  <div class="slider" style="margin-top:-25px;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/slider/slider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/slider/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/slider/slider3.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <span>
      <h1>Xe hơi</h1>
      <a href="#" class="float-right">Xem tất cả</a>
    </span>
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="2500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">
              <img src="/product/car1.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car1.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car1.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car1.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>           
          </div>
          
        </div>
        <div class="carousel-item">
        <div class="row">
            <div class="col-3">
              <img src="/product/car2.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car2.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car2.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>
            <div class="col-3">
              <img src="/product/car2.jpg" class="img-thumbnail" alt="...">
              <p class="text-center card-footer" style="color:#222;">Tên sản phẩm/5.000.000đ</p>
            </div>           
          </div>
        </div>
        
      </div>     

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
@endsection