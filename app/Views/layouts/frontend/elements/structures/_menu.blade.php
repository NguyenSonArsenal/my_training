<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/frontend/layout/favicon.png') }}" alt="Logo">
            <span class="company-name color-red">NguyenSonArsenal</span><br>
            <img src="{{ asset('images/frontend/layout/favicon.png') }}" alt="Logo" class="opacity-0">
            <small class="f12 color-red">Sương gió phủ đời trai</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-expanded="false">
            <img src="{{ asset('images/frontend/layout/menu.png') }}" alt="image name">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav navbar-right ml-auto">
                <li class="nav-item" data-scroll="home">
                    <a class="nav-item__link nav-item__link_home <?php getMenuActive('home') ?>" href="{{route('home')}}">
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="nav-item" data-scroll="home">
                    <a class="nav-item__link nav-item__link_home <?php getMenuActive('post') ?>" href="{{route('post.index')}}">
                        <span>Chém gió</span>
                    </a>
                </li>
                <li class="nav-item" data-scroll="about">
                    <a class="nav-item__link nav-item__link_about <?php getMenuActive('profile') ?>" href="{{route('profile')}}">
                        <span>PR bản thân</span>
                    </a>
                </li>
                <li class="nav-item" data-scroll="partner">
                    <a class="nav-item__link nav-item__link_partner <?php getMenuActive('contact') ?>" href="{{route('contact')}}">
                        <span>Liên hệ</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>