@extends('layouts.frontend.main')
@section('content')

<!-- 404 page -->
<div class="container">
    <div class="page-404" id="page-404">
        <div class="page404">
            <div class="row">
                <div class="col-4 offset-2">
                    <img src="{{ asset('images/frontend/404.png') }}" alt="image 404 page">
                </div>
                <div class="col-5">
                    <p class="name">Truy cập của bạn có thể bị lỗi hoặc không tìm thấy nội dung</p>
                    <div class="link-inline-block bounceIn animated">
                        <h2><a href="{{route('home')}}" class=""><i class="fa fa-home fa-lg"></i> &nbspQuay lại trang chủ</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

