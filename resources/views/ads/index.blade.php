@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xem</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($ads as $key=>$ad )
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td><img src="{{ Storage::url($ad->feature_image) }}" width="100" alt=""></td>
                            <td>{{ $ad->name }}</td>
                            <td style="color: blue;">{{ $ad->price }} đ</td>
                            <td>
                                @if($ad->published == 1)
                                    <span class="badge badge-success">Published</span>
                                @else
                                    <span class="badge badge-danger">Pending</span>
                                @endif
                            </td>
                            <td><button class="btn btn-primary">Sửa</button></td>
                            <td><button class="btn btn-info">Xem</button></td>
                            
                        </tr>
                        @empty
                        <td>Bạn chưa có tin đăng nào.</td>
                        @endforelse
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection