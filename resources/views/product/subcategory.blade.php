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
                            <a href="#">{{ $filterchildcategory->childcategory->name??''}}</a>                            
                        </p>                        
                        @endforeach                                        
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-3">
                            <img src="{{ Storage::url($advertisement->feature_image) }}" class="img-thumbnail" alt="...">
                            <p class="text-center card-footer" style="color:#222;">{{ $advertisement->name }} <br> {{ $advertisement->price }}đ</p>   
                        </div>
                    @empty
                        Xin lỗi, danh mục này không có sản phẩm nào.
                    @endforelse                                         
                </div>
            </div>
        </div>
    </div>

@endsection
