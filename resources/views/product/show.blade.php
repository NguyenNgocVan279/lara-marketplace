@extends('layouts.app')
@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" style="width:550px; height:350px;">
                    <div class="carousel-item active">
                    <img src="{{ Storage::url($advertisement->feature_image)}}" class="d-block w-100" height="100%" width="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ Storage::url($advertisement->first_image)}}" class="d-block w-100" height="100%" width="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ Storage::url($advertisement->second_image)}}" class="d-block w-100" height="100%" width="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ Storage::url($advertisement->third_image)}}" class="d-block w-100" height="100%" width="100%" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ Storage::url($advertisement->forth_image)}}" class="d-block w-100" height="100%" width="100%" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <p>{!! $advertisement->description !!}</p>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">Thông tin bổ sung</div>
                        <p>Tỉnh/thành: {{$advertisement->province->name??''}}</p>
                        <p>Quận/huyện: {{$advertisement->district->name??''}}</p>
                        <p>Xã/phường: {{$advertisement->ward->name??''}}</p>
                        <p>Trạng thái tài sản: {{$advertisement->product_condition}}</p>
                        @if($advertisement->link)
                        <p>Video: <a href="{{$advertisement->link}}">{{$advertisement->link}}</a></p>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        {!! $advertisement->displayVideoFromLink() !!}
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h1>{{$advertisement->name}}</h1>
                <p>Giá: {{$advertisement->price}}đ, {{$advertisement->price_status}}</p>
                <p>Đăng vào lúc: {{$advertisement->created_at->diffForHumans()}}</p>
                <p>Địa chỉ tài sản: {{$advertisement->listing_location}}</p>
                @if(Auth::check())
                    @if(!$advertisement->didUserSavedAd() && auth()->user()->id!=$advertisement->user_id)
                        <save-ad
                        :ad-id="{{$advertisement->id}}"
                        :user-id="{{auth()->user()->id}}"
                        >
                        </save-ad>                    
                    @endif               
                @endif               
               
                <hr>
                @if(!$advertisement->user->avatar)
                    <img src="/img/man.jpg" width="120" alt="">                
                @else
                    <img src="{{ Storage::url($advertisement->user->avatar)}}" width="120">
                @endif                
                <p>
                    <a href="{{route('show.user.ads',[$advertisement->user_id])}}">{{$advertisement->user->name}}</a>   
                </p>
                <p>
                    @if ($advertisement->phone_number)
                        <show-phone-number :phone-number="{{ $advertisement->phone_number }}"></show-phone-number>
                    @endif
                </p>
                <p>
                    <span>
                        @if (Auth()->check())
                            @if(auth()->user()->id!=$advertisement->user_id)
                                <message seller-name="{{$advertisement->user->name}}"
                                    :user-id="{{ auth()->user()->id }}"
                                    :receiver-id="{{ $advertisement->user->id }}"
                                    :ad-id="{{ $advertisement->id }}"
                                ></message>
                            @endif
                        @else
                           <button class="btn btn-danger">Chat với người bán</button> 
                        @endif                        
                    </span>
                    
                    
                </p>
                <p>
                    <span>
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <a href="" data-toggle="modal" data-target="#exampleModal">Báo cáo tin đăng này</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('report.ad') }}" method="post">@csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Báo cáo tin đăng giả mạo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Chọn lý do</label>
                                            <select class="form-control" name="reason" required>
                                                <option value="">Vui lòng chọn</option>
                                                <option value="Fraud">Tin giả</option>
                                                <option value="Duplicate">Trùng tin</option>
                                                <option value="Spam">Spam</option>
                                                <option value="Wrong-category">Sai danh mục</option>
                                                <option value="Offensive">Phản cảm</option>
                                                <option value="Other">Khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email của bạn</label>
                                            @if (Auth::check())
                                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                            @else
                                                <input type="email" name="email" class="form-control">
                                            @endif                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea name="message" class="form-control" required></textarea>
                                        </div>
                                        <input type="hidden" name="ad_id" value="{{ $advertisement->id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-danger">Báo cáo</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </span>
                </p>
                
            </div>
        </div>
    </div>
@endsection