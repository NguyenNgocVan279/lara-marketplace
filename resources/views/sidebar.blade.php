<div class="card ">
    <div class="card-body ">
        @if (!auth()->user()->avatar)
            <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
        @endif
        @if(auth()->user()->avatar && !auth()->user()->fb_id)
            <img src="{{ Storage::url(auth()->user()->avatar) }}" style="width:100%;" >
        @endif
        @if(auth()->user()->fb_id)
        <img src="{{auth()->user()->avatar}}" style="width:100%;" >
        @endif        
        <p class="text-center"><b>{{ auth()->user()->name }}</b></p>
    </div>
    <hr style="border:2px solid pink;">
    <div class="vertical-menu">
        <a href="#">Bảng điều khiển</a>
        <a href="{{ route('profile') }}" class="{{request()->is('profile')?'active':''}}">Thông tin cá nhân</a>
        <a href="{{route('ads.create')}}" class="{{request()->is('ads/create')?'active':''}}">Tạo tin đăng</a>
        <a href="{{route('ads.index')}}" class="{{request()->is('ads')?'active':''}}">Tin đã đăng</a>
        <a href="{{ route('ads.pending') }}" class="{{request()->is('ads-pending')?'active':''}}">Tin chưa hoàn thiện</a>
        <a href="{{route('messages')}}" class="{{request()->is('messages')?'active':''}}">Hộp chat</a>
        <a href="{{route('saved.ads')}}" class="{{request()->is('saved-ads')?'active':''}}">Tin đã lưu xem sau</a>        
    </div>

</div>