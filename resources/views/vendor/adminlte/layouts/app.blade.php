<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
     @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-red-light sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <div class="content-wrapper">

        @yield('content-header-title')

        <section class="content">
            @yield('main-content')
        </section>
    </div>

    @include('adminlte::layouts.partials.footer')

</div>
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
