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
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="" method="post">@csrf
                <div class="card">
                    <div class="card-header text-white" style="background-color: red">Thay đổi mật khẩu</div>                    
                    <div class="card-body">
                        <div class="form-group">
                            <label>Mật khẩu hiện tại</label>
                            <input type="password" name="current_password" class="form-controll">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới</label>
                            <input type="password" name="new_password" class="form-controll">
                        </div>
                        <div class="form-group">
                            <label>Xác nhận mật khẩu</label>
                            <input type="password" name="confirm_password" class="form-controll">
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