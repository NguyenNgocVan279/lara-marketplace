@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">            
            <div class="row justify-content-center">                
                <div class="col-md-10">
                    @include('backend.inc.message')
                    <h3 class="mb-3">Tạo danh mục con</h3>
                    <div class="card">
                        <div class="card-body">                            
                            <form class="forms-sample" action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">@csrf
                                <div class="form-group">
                                    <label for="name">Tên danh mục con</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="nhập tên danh mục con">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Thuộc danh mục cha</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="">
                                        <Option value="">Lựa chọn</Option>
                                        @foreach (App\Models\Category::all() as $category)
                                            <Option value="{{ $category->id }}">{{ $category->name }}</Option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection