@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Danh sách danh mục con</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>                                            
                                            <th>Tên danh mục</th>
                                            <th>Thuộc danh mục cha</th>
                                            <th>Đường dẫn</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($subcategories as $subcategory)
                                            <tr>                                                
                                                <td>{{ $subcategory->name}}</td>
                                                <td class="category_{{ $subcategory->category_id }}">{{ $subcategory->category->name}}</td>
                                                <td>{{ $subcategory->slug}}</td>
                                                <td>
                                                    <a href="{{route('subcategory.edit',[$subcategory->id])}}">                                                   
                                                        <button class="btn btn-sm btn-info"><i class="mdi mdi-table-edit"></i></button>                                                   
                                                    </a>
                                                </td>                                                
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{$subcategory->id}}">
                                                    Delete <i class="mdi mdi-delete"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$subcategory->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <form action="{{route('subcategory.destroy',[$subcategory->id])}}" method="post">@csrf
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
                                            <td>Không có danh mục con nào</td>                                        
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
        td.category_1{
            background-color: azure ;
        }
        td.category_2{
            background-color:fuchsia;
        }
        td.category_3{
            background-color: antiquewhite;
        }
        td.category_4{
            background-color: azure ;
        }
        td.category_5{
            background-color: fuchsia;
        }
        td.category_6{
            background-color: cyan;
        }
        td.category_7{
            background-color: darkorchid;
        }
        td.category_8{
            background-color: darkturquoise;
        }
        td.category_9{
            background-color: dimgray;
        }
    </style>
@endsection