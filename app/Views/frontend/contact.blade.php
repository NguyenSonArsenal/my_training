@extends('layouts.frontend.main')

@section('content')

<!-- Content: Contact -->
<div class="rowx contact" id="contact">
    <div class="container">
        <p class="color-red f18 title"><marquee><strong><i>Đến bao giờ ta lại mới có thể tìm lại được phiên bản tốt nhất của chính bản thân mình.</i></strong></marquee></p>

        <div class="contact-cover">
            <img src="{{ asset('images/frontend/contact/contact_cover.jpg') }}" alt="Nguyen Son Arsenal contact cover">
        </div>

        <div class="contact__list">
            <h3>Thông tin liên lạc và mạng xã hội</h3>
            <ul>
                <li><a href="https://www.facebook.com/nguyen.son.9615"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-google" aria-hidden="true"></i>sonnv.paraline@gmail.com</a>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-skype" aria-hidden="true"></i>nguyensonbk2</a></li>
                <li><a href="https://soundcloud.com/nguyen-son-arsenal"><i class="fa fa-soundcloud"
                                                                           aria-hidden="true"></i>SoundCloud</a>
                </li>
                <li><a href="https://github.com/NguyenSonArsenal"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a>
                </li>
            </ul>
        </div>

        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14899.508146129914!2d105.7948785!3d20.9975656!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc47144c0d111059f!2sC%C3%B4ng+ty+TNHH+Paraline+Vi%E1%BB%87t+Nam!5e0!3m2!1svi!2s!4v1560356837624!5m2!1svi!2s"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@stop

