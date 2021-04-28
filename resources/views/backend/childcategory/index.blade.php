@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Danh sách danh mục cháu</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>                                            
                                            <th>Tên danh mục</th>
                                            <th>Thuộc danh mục con</th>
                                            <th>Đường dẫn</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($childcategories as $childcategory)
                                            <tr>                                                
                                                <td>{{ $childcategory->name}}</td>
                                                <td class="subcategory_{{ $childcategory->subcategory_id }}">{{ $childcategory->subcategory->name}}</td>
                                                <td>{{ $childcategory->slug}}</td>
                                                <td>
                                                    <a href="{{route('childcategory.edit',[$childcategory->id])}}">                                                   
                                                        <button class="btn btn-sm btn-info"><i class="mdi mdi-table-edit"></i></button>                                                   
                                                    </a>
                                                </td>                                                
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{$childcategory->id}}">
                                                    Delete <i class="mdi mdi-delete"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$childcategory->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{route('childcategory.destroy',[$childcategory->id])}}" method="post">@csrf
                                                            @method('DELETE')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Khi đã xóa bạn sẽ không thể khôi phục lại! Bạn chắc chắn muốn xoá danh mục này?                                                                                                                                                                                                              
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
                                            <td>Không có danh mục cháu nào</td>                                        
                                        @endforelse                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        td.subcategory_1{
            background-color: azure ;
        }
        td.subcategory_2{
            background-color:fuchsia;
        }
        td.subcategory_3{
            background-color: antiquewhite;
        }
        td.subcategory_4{
            background-color: azure ;
        }
        td.subcategory_5{
            background-color: fuchsia;
        }
        td.subcategory_6{
            background-color: cyan;
        }
        td.subcategory_7{
            background-color: darkorchid;
        }
        td.subcategory_8{
            background-color: darkturquoise;
        }
        td.subcategory_9{
            background-color: dimgray;
        }
    </style>
@endsection