@extends('layouts.frontend.main')
@section('content')

<!-- Content: List posts -->
<div class="rowx post" id="post">
    <div class="container">
        <p class="color-red f18 title">
            <marquee><strong><i>Mãi là anh em. Hoặc là chúng ta cùng trên một con thuyền, hoặc chúng ta chẳng là gì của nhau. Tôi có quá nhiều bạn rồi.</i></strong></marquee>
        </p>

        <div class="contact-cover">
            <img src="{{ asset('/images/frontend/posts/cover.jpg') }}" alt="Nguyen Son Arsenal posts cover">
        </div>

        <div class="list_post_wrapper">
            <ul class="list_post_ul">
                <li class="list_post_item">
                    <a href="{{ route('post.show', ['id' => 3]) }}" class="item_title">Câu chuyện về quê trên chuyến xe muộn.</a>
                    <br>
                    <small class="item-time">Ngày 7 tháng 7 năm 2019</small>
                    <p class="item-description">
                        Bài viết được trích từ một người bạn, người em mình mới quen, xin phép được gọi em là cô gái...
                    </p>
                </li>

                <li class="list_post_item">
                    <a href="{{ route('post.show', ['id' => 2]) }}" class="item_title">Lạc lối tuổi 24, 2 năm sau ra trường</a>
                    <br>
                    <small class="item-time">Ngày 5 tháng 5 năm 2019</small>
                    <p class="item-description">
                        Tuổi 24, bản thân ta cũng nên thay đổi, để trời đất luân hồi, cuộc đời "reset"...
                    </p>
                </li>

                <li class="list_post_item">
                    <a href="{{ route('post.show', ['id' => 1]) }}" class="item_title">Lời xin lỗi ba chân thành</a>
                    <br>
                    <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                    <p class="item-description">
                        Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của ba...
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop

