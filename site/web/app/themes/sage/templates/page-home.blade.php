@extends('layouts.base')

@section('content')
@while(have_posts()) @php(the_post())
@include('partials.page-header')
<div class="list-block">
  @include('partials.content-page')
</div>
@include('partials.slider-news')
@endwhile
@endsection
