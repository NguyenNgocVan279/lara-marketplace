@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">            
            <div class="row justify-content-center">                
                <div class="col-md-10">
                    @include('backend.inc.message')
                    <h3 class="mb-3">Sửa danh mục cháu</h3>
                    <div class="card">
                        <div class="card-body">                            
                            <form class="forms-sample" action="{{ route('childcategory.update',[$childcategory->id]) }}" method="post" enctype="multipart/form-data">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Tên danh mục cháu</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') ?? $childcategory->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id">Thuộc danh mục con</label>
                                    <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" id="">
                                        <Option value="">Lựa chọn</Option>
                                        @foreach (App\Models\Subcategory::all() as $subcategory)
                                            <Option value="{{ $subcategory->id }}" {{ $childcategory->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</Option>
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
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
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection