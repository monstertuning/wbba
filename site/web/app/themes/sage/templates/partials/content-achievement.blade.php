<div class="tableX">
    <div class="table-rowX header col-sm-12 text-xs-center">
        <h3>{{$post_title}}</h3>
    </div>

    @foreach($names as $k => $name)

        <div class="table-cellX col-sm-6 text-xs-center name">
            <div class="wrap">
                {{$name['name']}}
            </div>
        </div>

    @endforeach

</div>
