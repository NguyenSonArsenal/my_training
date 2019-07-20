<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.elements.structures._head')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- sidebar menu -->
        @include('layouts.backend.elements.structures._sidebar')
        <!-- /sidebar menu -->

        <!-- top navigation -->
        @include('layouts.backend.elements.structures._navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
            @include('layouts.backend.elements._modal')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.backend.elements.structures._footer')
        <!-- /footer content -->
    </div>
</div>

@include('layouts.backend.elements.structures._footer_js')

</body>
</html>
