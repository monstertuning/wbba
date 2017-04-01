<!doctype html>
<html @php(language_attributes())>
@include('partials.head')
<body @php(body_class())>
<!--[if IE]>
<div class="alert alert-warning">
    {!! __('You are using an <strong>outdated</strong> browser. Please <a href="http://browse_happy.com/">upgrade your
    browser</a> to improve your experience.', 'sage') !!}
</div>
<![endif]-->
@php(do_action('get_header'))
@include('partials.header')
<div class="main-wrapper wrap container" role="document">
    <div class="row">
        <div class="col-md-2 hidden-sm-down wbba-side-area text-sm-center">
            @include('partials.program-icons', ['start' => -1, 'end' => 3])
        </div>
        <main class="col-sm-12 col-md-8">
            <div id="content">
                @yield('content')
            </div>
        </main>
        <div class="col-md-2 hidden-sm-down wbba-side-area text-sm-center">
            @include('partials.program-icons', ['start' => 2, 'end' => 6])
        </div>
    </div>
@php(do_action('get_footer'))
@include('partials.footer')
@php(wp_footer())
</div>
{!! $google_map !!}

</body>
</html>
