@extends('layouts.app')
@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-md-3">                
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: red;">Filter ::</div>
                    <div class="card-body">
                        @foreach ($filterByChildCategories as $filterchildcategory)
                        <p>                            
                            <a href="{{($filterchildcategory->childcategory->slug)??''}}">
                                {{ $filterchildcategory->childcategory->name??''}}
                            </a>                            
                        </p>                        
                        @endforeach                                        
                    </div>
                </div>
                <br>
                <form action="{{url()->current()}}" method="GET">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Giá thấp nhất</label>
                                <input type="text" name="minPrice" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Giá cao nhất</label>
                                <input type="text" name="maxPrice" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>            
            <div class="col-md-9">
                @include('breadcrumb')
                <div class="row">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-3">
                            <a href="{{route('product.view',[$advertisement->id,$advertisement->slug])}}">
                                <img src="{{ Storage::url($advertisement->feature_image) }}" class="img-thumbnail" alt="...">
                                <p class="text-center card-footer" style="color:#222;">{{ $advertisement->name }} <br> {{ $advertisement->price }}đ</p>   
                        </div>
                            </a>
                    @empty
                        Xin lỗi, danh mục này không có sản phẩm nào.
                    @endforelse                                         
                </div>
            </div>
        </div>
    </div>

@endsection
