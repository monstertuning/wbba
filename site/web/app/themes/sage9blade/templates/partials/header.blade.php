<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

      my_global: {{ $my_global or 'Nope' }}<br>
      cunt: {{ $cunt or 'Nope' }}<br>
      metaPrefix: {{ $metaPrefix or 'Nope' }}<br>
      metaFieldKeys:
      @if(!empty($metaFieldKeys))
          @forelse($metaFieldKeys as $f)
              {{ $f }}
          @empty
              Nope
          @endforelse
      @else
          Nope!
      @endif
      <br>

      meta:
      @if(!empty($meta))
          @forelse($meta as $k => $v)
              @if (gettype($v) == 'string' || gettype($v) == 'integer' || gettype($v) == 'boolean')
                  {{$k}}({{gettype($v)}}) : {{$v}}<br>
              @elseif(gettype($v) == 'array')
                  {{$k}}({{gettype($v)}}) :<br>
                  @foreach($v as $k2 => $v2)
                      @if (gettype($v2) == 'string' || gettype($v2) == 'boolean')
                          {{$k2}}({{gettype($v2)}}) : {{$v2}}<br>
                      @elseif(gettype($v2) == 'array')
                          {{$k2}}({{gettype($v2)}}) : <br>
                          @foreach($v2 as $k3 => $v3)
                              {{$k3}}({{gettype($v3)}}) : {{$v3}}<br>
                          @endforeach
                      @endif
                  @endforeach
              @endif
          @empty
              Nope
          @endforelse
      @else
          Nope!
      @endif

          <br>

  </div>
</header>
