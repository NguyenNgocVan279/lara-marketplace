@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('sidebar')
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white" style="background-color: red">Cập nhật thông tin cá nhân</div>
                <div class="card-body">

                </div>
            </div>
           
        </div> 
        <div class="col-md-3">
            @if (session('status') === 'password-updated')
                <div class="alert alert-success">Đổi mật khẩu thành công!</div>
            @endif
            <form action="{{route('user-password.update')}}" method="post">@csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header text-white" style="background-color: red">Thay đổi mật khẩu</div>                    
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mật khẩu hiện tại</label>
                            <input type="text" name="current_password" class="form-controll">
                            @error('current_password')
                                <div>{{ $message }}</div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới</label>
                            <input type="text" name="password" class="form-controll">
                            @error('password')
                                <div>{{ $message }}</div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Xác nhận mật khẩu</label>
                            <input type="text" name="password_confirmation" class="form-controll">
                            @error('password_confirmation')
                                <div>{{ $message }}</div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Cập nhật</button>                           
                        </div>
                    </div>
                </div>
            </form>            
        </div>        
    </div>
</div>

@endsection