<div class="table">
  <div class="table-row header col-sm-12 text-xs-center">
    <h3>{{$post_title}}</h3>
  </div>
  <div class="row table-row">

    @foreach($names as $name)
    <div class="table-cell col-sm-6 text-xs-center">
      {{$name['name']}}
    </div>
    @endforeach

  </div>

</div>
