@extends('layouts.app')
@section('content')

<div class="container">        
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @foreach ($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </div>                    
                @endif
                <form action="{{ route('ads.update',$ad->id) }}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            <h4>Chỉnh sửa tin đăng</h3> 
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><b>Bạn có thể tải tối đa 5 ảnh</b></label>
                            <div class="form-inline form-group mt-1">
                                <div class="col-md-2">                                    
                                    <image-preview />
                                </div>
                                <div class="col-md-2">                                    
                                    <first-image />
                                </div>
                                <div class="col-md-2">                                    
                                    <second-image />
                                </div>
                                <div class="col-md-2">                                  
                                    <third-image />
                                </div>
                                <div class="col-md-3">                                  
                                    <forth-image />
                                </div>                     
                            </div>
                            <label for="file" class="mt-2"><b>Chọn danh mục</b></label>
                            <div class="form-inline form-group mt-1">
                                <category-dropdown />                                
                            </div>

                            <div class="form-group">
                                <label for="name">Tiêu đề</label>
                                <input type="text" name="name" class="form-control" value="{{ $ad->name }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea name="description" class="form-control">{{ $ad->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Mức giá</label>
                                <input type="text" name="price" class="form-control" value="{{ $ad->price }}">
                            </div>
                            <div class="form-group">
                                <label for="price_status">Trạng thái giá</label>
                                <select class="form-control" name="price_status">
                                    <option value="negotiable" {{ $ad->price_status == "negotiable" ? 'selected' : '' }}>Thương lượng</option>
                                    <option value="fixed" {{ $ad->price_status == "fixed" ? 'selected' : '' }}>Cố định</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_condition">Trạng thái sản phẩm</label>
                                <select class="form-control" name="product_condition">
                                    <option value="">Lựa chọn</option>
                                    <option value="onsale" {{ $ad->product_condition == "onsale" ? 'selected' : '' }}>Đang hiệu lực</option>
                                    <option value="sold" {{ $ad->product_condition == "sold" ? 'selected' : '' }}>Giao dịch thành công</option>                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Địa chỉ tài sản</label>
                                <input type="text" class="form-control" name="listing_location" value="{{ $ad->listing_location }}">
                            </div>
                            <label for="file" class="mt-2"><b>Chọn địa điểm</b></label>
                            <div class="form-inline form-group mt-1">
                                <address-dropdown />
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Điện thoại liên hệ</label>
                                <input type="number" class="form-control" name="phone_number" value="{{ $ad->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="link">Video về sản phẩm (vd:youtube)</label>
                                <input type="text" class="form-control" name="link" value="{{ $ad->link }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger float-right" type="submit">Cập nhật</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection