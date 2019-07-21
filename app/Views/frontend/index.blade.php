@extends('layouts.frontend.main')

@section('content')
<div class="container">
    <!-- Description: Top page -->
    <div id="home">
        <div id="top" class="text-center">
            <h1><a href="{{ route('profile') }}" class="link-profile"><span class="name">Nguyen Son Arsenal</span></a></h1>
            <h3>
                <span class="sp-break-line fadeInUp animated">Tự nhận mình là người khá hài hước. Cảm ơn bạn đã ghé thăm tường nhà Sơn</span>
            </h3>
            <p class="fadeInDown animated sort-description">
                Bạn chỉ cần siêng thôi, bạn càng dễ đạt được. <br>
                Còn bạn lười, chắc chắn bạn sẽ mãi như thời điểm vô tình đọc được những dòng này.
            </p>
        </div>
        <div class="link-inline-block bounceIn animated">
            <h2><a href="{{ route('contact') }}" class="">Xem thêm</a></h2>
        </div>
    </div>
</div>

<div class="block introduction block-bg ">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="intro-content text-justify">
                    <h2 class="homepage__title color-red">Xin chào</h2>
                    Mình là <b class="color-red">Nguyen Son Arsenal</b>. Tác giả là một người vui tính, sôi nổi, và hòa đồng. Đam mê lập trình web, thích
                    chơi thể thao và đi du lịch. <br><br>
                    Qua blog, tác giả mong muốn được chia sẻ thật nhiều những kiến thức cuộc sống dựa trên những kinh nghiệm,
                    những trải nghiệm thực tế trên con đường đời của chính tác giả cũng như các bài post từ những người bạn của tác giả.
                    Các bài viết đều mang tính cá nhân, và mong muốn lan tỏa sự chia sẻ tới tất cả mọi người.
                    <br><br>
                    Có bất kì liên hệ nào, xin vui lòng ping ngay cho tác giả tại địa chỉ: <a
                            href="https://www.facebook.com/nguyen.son.9615" class="color-red">NguyenSonArsenal</a> <br>
                    Tác giả ngàn lần đội ơn. <3
                </div>
            </div>
            <div class="col-sm-4">
                <div class="user text-center">
                    <img src="{{ asset('images/frontend/posts/nguyen_son.jpg') }}" width="100%" alt="me">
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Content post -->
<div id="blog" class="block blog home__blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('images/frontend/home/1.jpg') }}" alt="image name">
            </div>
            <div class="col-sm-6">
                <h2 class="title color-red">Nhật kí sưu tầm</h2><br>
                <ul class="list">
                    <li>
                        <a class="blog__item" href="{{route('post.show', ['id' => 3])}}">
                            <h4 class="item-title f18">Câu chuyện về quê trên chuyến xe muộn.</h4>
                            <small class="item-time">Ngày 7 tháng 7 năm 2019</small>
                            <p class="item-description">
                                Bài viết được trích từ một người bạn, người em mình mới quen, xin phép được gọi là cô
                                gái...
                            </p>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a class="blog__item" href="{{route('post.show', ['id' => 2])}}">
                            <h4 class="item-title f18">Lạc lối tuổi 24, 2 năm sau ra trường</h4>
                            <small class="item-time">Ngày 5 tháng 5 năm 2019</small>
                            <p class="item-description">
                                Tuổi 24, có người 2 chó, 2 mèo, một khoản nợ kếch xù...
                                CÒN BẢN THÂN TA CŨNG NÊN THAY ĐỔI RỒI, để trời đất luân hồi, cuộc đời "reset"...
                            </p>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a class="blog__item" href="{{route('post.show', ['id' => 1])}}">
                            <h4 class="item-title f18">Lời xin lỗi ba chân thành</h4>
                            <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                            <p class="item-description">
                                Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của
                                ba...
                            </p>
                        </a>
                    </li>
                </ul>
                <div class="text-right">
                    <a class="more color-black-default " href="{{ route('post.index') }}">» Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
