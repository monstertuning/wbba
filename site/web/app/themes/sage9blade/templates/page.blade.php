@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())page
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
