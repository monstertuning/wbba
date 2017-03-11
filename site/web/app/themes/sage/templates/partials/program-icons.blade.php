@foreach ($programs as $program)

    @if( $loop->index > $start && $loop->index < $end)
        <div class="mx-auto icon">
            <a href="{{ $program['link'] }}" title="{{ $program['title'] }}">
                <div class="image">
                    {!! $program['image'] !!}
                </div>
            </a>
            <div class="info">
                <div class="title">{{ $program['title'] }}</div>
                <div class="age">{{ $program['ages'] }}</div>
            </div>
        </div>
    @endif

@endforeach