@include('layouts.frontend.elements.structures._head')

<body>
<div id="loading" style="display: none">
    <img id="loading-image" src="<?php asset('images/loading.gif')?>" alt="Loading...">
</div>
<div class="hidden" id="http-host-alias"><?php assets() ?></div>
<div id="wrapper">
        <!-- menu -->
        @include('layouts.frontend.elements.structures._menu')
        <!-- /menu -->

        <!-- page content -->
        <div class="content_wrapper" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.frontend.elements.structures._footer')
        <!-- /footer content -->
</div>

@include('layouts.frontend.elements.structures._footer_js')

</body>
</html>
