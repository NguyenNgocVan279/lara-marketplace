@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h4>Danh sách danh mục</h4>
            <div class="row justify-content-center">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên danh mục</th>
                                            <th>Đường dẫn</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($categories as $category)
                                            <tr>
                                                <td><img src="{{ Storage::url($category->image)}}" alt="{{$category->slug}}"></td>
                                                <td>{{ $category->name}}</td>
                                                <td>{{ $category->slug}}</td>
                                                <td>
                                                    <a href="{{route('category.edit',[$category->id])}}">                                                   
                                                        <button class="btn btn-info"><i class="mdi mdi-table-edit"></i></button>                                                   
                                                    </a>
                                                </td>
                                                
                                                <td><button class="btn btn-danger"><i class="mdi mdi-delete"></i></button></td>
                                            </tr>
                                        @empty
                                            <td>Không có danh mục nào</td>
                                        
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
@endsection