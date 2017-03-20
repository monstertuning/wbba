<div class="timetable">

    <div class="row title">

        <div class="col-sm-12">
            <div class="list-block title">
                <h2>{{ $day  }}</h2>
            </div>
        </div>
    </div>

    <div class="row classes">
        @foreach($classes as $c)
            @php
                extract($c)
            @endphp

            <div class="col-sm-6">
                <a href="{{$program_link}}">
                    <div class="list-block info timetable">
                        <div class="class-name"><span>{{$class_name}}</span></div>
                        <div class="ages">Suitable ages : <span>{{$ages}}</span></div>
                        <div class="time">Class time : <span>{{$c['class']['start_ime']}} - {{$c['class']['finish_time']}}</span></div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>
</div>

