@extends('layouts.base')

@section('content')

    @include('partials.page-header')

    <div>

        @if (!$posts)
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {{--{!! get_search_form(false) !!}--}}

        @elseif
            @foreach($posts as $post)









                @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()), $post)
            @endforeach
        @endif

        {!! get_the_posts_navigation() !!}
    </div>

@endsection
