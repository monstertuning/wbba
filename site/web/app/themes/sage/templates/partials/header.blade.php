<header class="banner">

    {{--<div class="container">

        <div class="col-sm-3">
            <div class="tagline">{{ tagline }}</div>
            <div class="phone1">{{ phone1 }}</div>
        </div>

        <div class="col-sm-6">
            <div id="header-image-wrap">
                <div id="header-image">
                    <a href="{{ site.url }}">
                        {{ site_logo }}
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 text-right">
            <div class="social-icons ">
                {% for social_link in social_links %}
                <div class="icon-item">
                    <a href="{{ social_link.link_url }}" target="_blank">
                        <i class="{{ social_link.css_classes }}"></i>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>

    </div>--}}
    <div class="container">
        {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}

        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>

    </div>
</header>
