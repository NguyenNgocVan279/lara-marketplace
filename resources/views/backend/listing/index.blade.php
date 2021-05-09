@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Danh sách tin đăng</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Người đăng</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên tin đăng</th>                                            
                                            <th>Đường dẫn</th>
                                            <th>Ngày đăng</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Xem</th>
                                            {{-- <th>Sửa</th> --}}
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($ads as $ad)
                                            <tr>
                                                <td>
                                                    @if ($ad->user->avatar)
                                                        <img src="{{ Storage::url($ad->user->avatar) }}" width="120">
                                                    @else
                                                        <img src="/img/man.jpg" width="120">
                                                    @endif
                                                    <a href="{{ route('show.user.ads',$ad->user->id) }}" target="_blank">{{ $ad->user->name }}</a>
                                                </td>
                                                <td><img src="{{ Storage::url($ad->feature_image)}}" alt="{{$ad->slug}}"></td>
                                                <td>{{ $ad->name}}</td>
                                                <td>{{ $ad->slug}}</td>
                                                <td>{{ $ad->created_at->format('Y-m-d') }}</td>
                                                <td>{{ $ad->updated_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <a href="{{ route('product.view',[$ad->id,$ad->slug]) }}" target="_blank">
                                                        <button class="btn btn-primary">Xem</button>
                                                    </a>
                                                </td>    
                                                {{-- <td>
                                                    <a href="{{route('advertisement.edit',[$ad->id])}}">                                                   
                                                        <button class="btn btn-info"><i class="mdi mdi-table-edit"></i></button>                                                   
                                                    </a>
                                                </td>        --}}                                                                                     
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$ad->id}}">
                                                    Delete <i class="mdi mdi-delete"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{ route('ads.destroy',$ad->id) }}" method="post">@csrf
                                                            @method('DELETE')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Khi đã xóa bạn sẽ không thể khôi phục lại!                                                                                                                                                                                                               
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                        <button type="submit" class="btn btn-danger">Xoá</button>
                                                                    </div>
                                                                </div>
                                                            </form> 
                                                        </div>
                                                    </div>                                                                                                    
                                                </td>
                                            </tr>
                                        @empty
                                            <td>Không có tin đăng nào</td>                                        
                                        @endforelse                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                    
                </div>
                {{ $ads->links() }}
            </div>            
        </div>        
    </div>
@endsection