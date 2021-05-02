<div class="card ">
    <div class="card-body ">
        @if (!auth()->user()->avatar)
            <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
        @else
            <img src="{{ Storage::url(auth()->user()->avatar) }}" style="width:100%;" >
        @endif
        
        <p class="text-center"><b>{{ auth()->user()->name }}</b></p>
    </div>
    <hr style="border:2px solid pink;">
    <div class="vertical-menu">
        <a href="#">Bảng điều khiển</a>
        <a href="{{ route('profile') }}" class="{{request()->is('profile')?'active':''}}">Thông tin cá nhân</a>
        <a href="{{route('ads.create')}}" class="{{request()->is('ads/create')?'active':''}}">Tạo tin đăng</a>
        <a href="{{route('ads.index')}}" class="{{request()->is('ads')?'active':''}}">Tin đã đăng</a>
        <a href="#">Tin chờ duyệt</a>
        <a href="#" class="">Hộp thư</a>
    </div>

</div>