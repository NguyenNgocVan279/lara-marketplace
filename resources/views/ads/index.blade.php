@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                @include('backend.inc.message')
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
                        <th scope="col">Xoá</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($ads as $key=>$ad )
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td style="width: 130px; height:100px;">
                                <!--Use bootstrap 4.6->component->courosel-->
                                <div id="carouselExampleControls{{$ad->id}}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="{{ Storage::url($ad->feature_image) }}" width="100" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ Storage::url($ad->first_image) }}" width="100" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ Storage::url($ad->second_image) }}" width="100" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ Storage::url($ad->third_image) }}" width="100" class="d-block w-100">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{ Storage::url($ad->forth_image) }}" width="100" class="d-block w-100">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls{{$ad->id}}" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls{{$ad->id}}" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--End Use bootstrap 4.6->component->courosel-->
                            </td>
                            <td>{{ $ad->name }}</td>
                            <td style="color: blue;">{{ $ad->price }} đ</td>
                            <td>
                                @if($ad->published == 1)
                                    <span class="badge badge-success">Published</span>
                                @else
                                    <span class="badge badge-danger">Pending</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('ads.edit',$ad->id) }}"><button class="btn btn-primary">Sửa</button></a>                                
                            </td>
                            <td><button class="btn btn-info">Xem</button></td>
                            <td>                              
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$ad->id}}">
                                Xoá
                              </button>                              
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <form action="{{ route('ads.destroy',[$ad->id]) }}" method="post">@csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xác nhận trước khi xoá</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Khi đã xoá bạn sẽ không thể khôi phục lại tin đăng. Bạn chắc chắn muốn xoá không?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không xoá</button>
                                        <button type="submit" class="btn btn-danger">Có, muốn xoá</button>
                                      </div>
                                    </div>
                                  </form>                                
                                </div>
                              </div>
                            </td>                                                      
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