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
          @forelse($meta as $m)
              {{ $m }}
          @empty
              Nope
          @endforelse
      @else
          Nope!
      @endif

          <br>

  </div>
</header>
