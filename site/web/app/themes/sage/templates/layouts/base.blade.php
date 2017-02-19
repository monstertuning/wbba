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
<div class="wrap container" role="document">
    <div class="content row">

        <div class="col-md-2 hidden-sm wbba-side-area text-center">
            @foreach ($programs as $program)

                @if( $loop->index < 3)
                    <a href="{{ $program['link'] }}" title="{{ $program['title'] }}">
                        <div class="image">
                            {!! $program['image'] !!}
                        </div>
                    </a>
                    <div class="program-title">{{ $program['title'] }}</div>
                    <div class="program-ages">{{ $program['ages'] }}</div>
                @endif

            @endforeach
        </div>


        <main class="col-xs-12 col-md-8">
            <div class="content">
                @yield('content')
            </div>
        </main>


        <div class="col-md-2 hidden-sm wbba-side-area text-center">
            @foreach ($programs as $program)

                @if( $loop->index > 2 && $loop->index < 6)
                    <a href="{{ $program['link'] }}" title="{{ $program['title'] }}">
                        <div class="image">
                            {!! $program['image'] !!}
                        </div>
                    </a>
                    <div class="program-title">{{ $program['title'] }}</div>
                    <div class="program-ages">{{ $program['ages'] }}</div>
                @endif

            @endforeach
        </div>


    </div>
@php(do_action('get_footer'))
@include('partials.footer')
@php(wp_footer())
</body>
</html>
