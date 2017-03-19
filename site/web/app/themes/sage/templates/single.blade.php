@extends('layouts.base')

@section('content')

    @while(have_posts()) @php(the_post())
    @unless (empty($meta))
        @php (extract($meta))
    @endunless
    @include('partials/content-single-'.get_post_type())
    @endwhile

@endsection
