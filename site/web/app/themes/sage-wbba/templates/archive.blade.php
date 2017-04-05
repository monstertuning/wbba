@extends('layouts.base')

@section('content')

    @include('partials.page-header')

    <div class="row">
        @forelse($posts as $post)
            @php(extract($post))
            @unless (empty($post['post_meta']))
                @php (extract($post['post_meta']))
            @endunless
            @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
        @empty
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
        @endforelse

        {!! get_the_posts_navigation() !!}

    </div>

@endsection
