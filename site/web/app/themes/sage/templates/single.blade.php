@extends('layouts.base')

@section('content')
    {{--@debug('dump')--}}
    @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
    @endwhile
@endsection
