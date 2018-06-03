@include('dash.layout.header')
<body>
<div id="wrapper">
    @include('dash.layout.nav-bar')
    @include('dash.layout.side-bar')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">@yield('header')</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@yield('content')
</div>
<!-- /#page-wrapper -->

    @include('dash.layout.footer')

</div>