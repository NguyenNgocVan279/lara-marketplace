@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Danh sách báo cáo</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã tin đăng</th>
                                            <th>Tên tin đăng</th>
                                            <th>Người báo cáo</th>
                                            <th>Lý do</th>                                            
                                            <th>Nội dung</th>                                            
                                            <th>Xem</th>                                            
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($ads as $ad)
                                            <tr>
                                                <td>{{ $ad->ad_id }}</td>
                                                <td></td>
                                                <td>{{ $ad->email }}</td>
                                                <td>{{ $ad->reason }}</td>
                                                <td>{{ $ad->message }}</td>
                                                <td>
                                                    <a href="#" target="_blank">
                                                        <button class="btn btn-primary">
                                                            Xem
                                                        </button>
                                                    </a>
                                                </td>
                                                
                                                
                                                                                                                           
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
                                            <td>Không có báo cáo nào</td>                                        
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