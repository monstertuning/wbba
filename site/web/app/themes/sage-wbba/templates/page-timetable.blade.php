@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    @include('partials.page-header')

    @foreach($timetable as $day => $classes)
      @include('partials.content-page-timetable')
    @endforeach

  @endwhile
@endsection
