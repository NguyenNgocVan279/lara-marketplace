@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Xác Nhận Địa Chỉ E-mail') }}</div>

                <div class="card-body">
                    @if (session('sent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Trước khi tiếp tục, vui lòng kiểm tra email và xác nhận.') }}
                    {{ __('Nếu bạn vẫn chưa nhận được email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click vào đây để yêu cầu một đường link xác nhận khác') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection