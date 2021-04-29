@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Xem Video hướng dẫn đăng tin </h2>
        <div class="row ">
            <div class="col-md-3">
                <div class="card ">

                    <div class="card-body ">
                        <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
                        <p class="text-center"><b>Brian Nguyen</b></p>
                    </div>
                    <hr style="border:2px solid pink;">
                    <div class="vertical-menu">
                        <a href="#">Bảng điều khiển</a>
                        <a href="#">Thông tin cá nhân</a>
                        <a href="#">Tạo tin đăng</a>
                        <a href="#">Tin đã đăng</a>
                        <a href="#">Tin chờ duyệt</a>
                        <a href="#" class="">Hộp thư</a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <form action="#" method="post" enctype="multipart/form-data">@csrf
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            Tạo tin đăng
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><b>Bạn có thể tải tối đa 5 ảnh</b></label>
                            <div class="form-inline form-group mt-1">

                                <div class="col-md-2">
                                    <input type="file" class="" name="feature_image">
                                </div>
                                <div class="col-md-2">
                                    <input type="file" class="" name="first_image">
                                </div>
                                <div class="col-md-2">
                                    <input type="file" class="" name="second_image">
                                </div>
                                <div class="col-md-2">
                                    <input type="file" class="" name="third_image">
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="" name="forth_image">
                                </div>                       

                            </div>
                            <label for="file" class="mt-2"><b>Chọn danh mục</b></label>
                            <div class="form-inline form-group mt-1">
                                <div class="col-md-4">
                                    <select class="form-control" name="category_id">
                                        <option value="">Danh mục cha</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">Danh mục con</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="childcategory_id">
                                        <option value="">Danh mục cháu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Tiêu đề</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Giá bán</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price_status">Trạng thái giá</label>
                                <select class="form-control" name="price_status">
                                    <option value="negotiable">Thương lượng</option>
                                    <option value="fixed">Cố định</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_condition">Tình trạng sản phẩm</label>
                                <select class="form-control" name="product_condition">
                                    <option value="">Lựa chọn </option>
                                    <option value="likenew">Mới</option>
                                    <option value="heavilyused">Đã sử dụng</option>
                                    <option value="new">Vân vân</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Địa chỉ tài sản</label>
                                <input type="text" class="form-control" name="listing_location">
                            </div>
                            <label for="file" class="mt-2"><b>Chọn địa điểm</b></label>
                            <div class="form-inline form-group mt-1">

                                <div class="col-md-4">
                                    <select class="form-control" name="province_id">
                                        <option value=""> Chọn tỉnh/thành</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="district_id">
                                        <option value="">Chọn quận/huyện</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="ward_id">
                                        <option value="">Chọn phường/xã </option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="phone_number">Điện thoại liên hệ</label>
                                <input type="number" class="form-control" name="phone_number">
                            </div>
                            <div class="form-group">
                                <label for="link">Video về sản phẩm (vd:youtube)</label>
                                <input type="text" class="form-control" name="link">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger float-right" type="submit">Đăng tin</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .vertical-menu a {
            background-color: #fff;
            color: #000;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: red;
            color: #fff;
        }

    </style>

@endsection