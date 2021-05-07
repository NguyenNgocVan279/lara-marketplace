@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">               
                <div class="card-body">
                    @if ($user->avatar)
                        <img src="{{ Storage::url($user->avatar) }}" width="120" alt="">
                    @else
                        <img src="/img/man.jpg" width="120" class="img-thumbnail" alt="">
                    @endif
                    <p>{{ $user->name }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">                
                <div class="card-body">
                    <div class="row">
                        @forelse ($advertisements as $advertisement)
                            <div class="col-md-3">
                                <a href="{{ route('product.view',[$advertisement->id, $advertisement->slug]) }}">
                                    <img src="{{ Storage::url($advertisement->feature_image) }}" style="height:200px; width:100%;" alt="">
                                    <p class="text-center card-footer" style="color: royal;">
                                        {{ $advertisement->name }} <br>
                                        {{ $advertisement->price }}đ
                                    </p>
                                </a>
                            </div>
                        @empty
                            <p>Không có sản phẩm nào</p>                        
                        @endforelse
                    </div>
                </div>                
            </div>
            {{ $advertisements->links() }} 
        </div>              
    </div>        
</div>

@endsection