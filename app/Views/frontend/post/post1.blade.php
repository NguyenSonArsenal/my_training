@extends('layouts.frontend.main')
@section('content')

<!-- Content: Post detail-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="content__heading">
                    <div class="content__title">
                        <h1 class="color-red">Lời xin lỗi ba chân thành</h1>
                    </div>
                    <div class="content__time"><span>Ngày 24 tháng 3 năm 2019</span></div>
                </div>
                <p>Lời xin lỗi sau tất cả những lần cãi lời ba.</p>
                <img src="{{ asset('images/frontend/posts/my_dad.jpg') }}" width="100%" alt="my dad">
                <p>
                    Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của ba.
                    Đã để ba phải lo lắng cho con. Con muốn có được những sự lựa chọn của riêng con,
                    và con sẽ tự chịu trách nhiệm cho tất cả quyết định đó. Ba ở nhà giữ gìn sức khỏe, để còn yêu thương
                    con vô điều kiện nhé.
                </p>
                <img src="{{ asset('images/frontend/posts/nguyen_son.jpg') }}" width="100%" alt="me">
                <p>Con yêu ba <img src="{{ assets('images/frontend/heart.svg') }}" alt="image name"></p>
                <p>Con gửi tặng ba bài hát mà con rất yêu thích từ một người bạn của con.</p>
                <iframe class="i-frame" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FLTP95%2Fvideos%2F2739552032937125%2F&show_text=0&width=560"
                        style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>
</div>
@stop

