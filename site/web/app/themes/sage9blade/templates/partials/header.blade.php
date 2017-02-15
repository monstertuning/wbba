<header class="banner">
    <div class="container">
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>





        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>




        {{--programs: {{ var_dump($programs) or 'Nope' }}<br>--}}

        {{--meta: {{ var_dump( $meta ) or '' }}<br>--}}

        @if(!empty($meta))
            {{--meta: {{ var_dump($meta) or ''}}<br>--}}
        @else

        @endif

        <br>

    </div>
</header>
