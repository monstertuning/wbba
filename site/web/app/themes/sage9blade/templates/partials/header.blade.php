<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

      my_global: {{ $my_global or 'Nope' }}<br>
      cunt: {{ $cunt or 'Nope2' }}<br>
      simon: {{ $simon or 'Nope3' }}<br>

  </div>
</header>
