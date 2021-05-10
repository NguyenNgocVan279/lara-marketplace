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

  <!--Container slider Nha dat ban-->
  <div class="container mt-5">
    <span>
      <h1>Nhà đất bán</h1>
      <a href="{{ route('category.show',$category->slug) }}" class="float-right">Xem tất cả</a>
    </span>
    <br>
    <div id="carouselExampleFade{{$category->id}}" class="carousel slide" data-ride="carousel" data-interval="2500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @forelse ($firstAds as $firstAd)
              <div class="col-3">
                <a href="{{ route('product.view',[$firstAd->id,$firstAd->slug]) }}">
                  <img src="{{Storage::url($firstAd->feature_image)}}" class="img-thumbnail" style="height: 170px" alt="...">                  
                </a>
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
                <a href="{{ route('product.view',[$secondAd->id,$secondAd->slug]) }}">
                  <img src="{{ Storage::url($secondAd->feature_image) }}" class="img-thumbnail" style="height: 170px" alt="...">
                </a>
                <p class="text-center card-footer" style="color:#222;">{{ $secondAd->name}} <br> {{ $secondAd->price }}đ</p>
              </div>  
            @empty              
            @endforelse                           
          </div>
        </div>        
      </div>    
      <a class="carousel-control-prev" href="#carouselExampleControls{{$category->id}}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls{{$category->id}}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--End Container slider Nha dat ban-->
  <!--Container slider Nha dat cho thue-->
  <div class="container mt-5">
    <span>
      <h1>Nhà đất thuê</h1>
      <a href="{{ route('category.show',$categoryRent->slug) }}" class="float-right">Xem tất cả</a>
    </span>
    <br>
    <div id="carouselExampleFade{{$categoryRent->id}}" class="carousel slide" data-ride="carousel" data-interval="2500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            @forelse ($firstAdsForRent as $firstAdForRent)
              <div class="col-3">
                <a href="{{ route('product.view',[$firstAdForRent->id,$firstAdForRent->slug]) }}">
                  <img src="{{Storage::url($firstAdForRent->feature_image)}}" class="img-thumbnail" style="height: 170px" alt="...">                  
                </a>
                <p class="text-center card-footer" style="color:#222;">{{ $firstAdForRent->name}} <br> {{ $firstAdForRent->price }}đ</p>
              </div> 
            @empty              
            @endforelse                          
          </div>          
        </div>
        <div class="carousel-item">
          <div class="row">
            @forelse ($secondAdsForRent as $secondAdForRent)
              <div class="col-3">
                <a href="{{ route('product.view',[$secondAdForRent->id,$secondAdForRent->slug]) }}">
                  <img src="{{ Storage::url($secondAdForRent->feature_image) }}" class="img-thumbnail" style="height: 170px" alt="...">
                </a>
                <p class="text-center card-footer" style="color:#222;">{{ $secondAdForRent->name}} <br> {{ $secondAdForRent->price }}đ</p>
              </div>  
            @empty              
            @endforelse                           
          </div>
        </div>        
      </div>    
      <a class="carousel-control-prev" href="#carouselExampleControls{{$categoryRent->id}}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls{{$categoryRent->id}}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--End Container slider Nha dat cho thue-->
  
@endsection