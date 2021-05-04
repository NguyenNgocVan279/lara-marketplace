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
      <h1>Nhà đất bán</h1>
      <a href="#" class="float-right">Xem tất cả</a>
    </span>
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="2500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @forelse ($firstAds as $firstAd)
              <div class="col-3">
                <img src="{{Storage::url($firstAd->feature_image)}}" class="img-thumbnail" style="height: 170px" alt="...">
                <p class="text-center card-footer" style="color:#222;">{{ $firstAd->name}} <br> {{ $firstAd->price }}đ</p>
              </div> 
            @empty              
            @endforelse                          
          </div>          
        </div>
        <div class="carousel-item">
          <div class="row">
            @forelse ($secondAds as $secondAd)
              <div class="col-3">
                <img src="{{ Storage::url($secondAd->feature_image) }}" class="img-thumbnail" style="height: 170px" alt="...">
                <p class="text-center card-footer" style="color:#222;">{{ $secondAd->name}} <br> {{ $secondAd->price }}đ</p>
              </div>  
            @empty              
            @endforelse                           
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