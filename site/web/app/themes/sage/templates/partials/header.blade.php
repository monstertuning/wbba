<header class="banner">

    <div class="container">
        <div class="row">

            <div class="col-sm-3 text-sm-left">
                <div class="tagline ">{{ $tagline }}</div>
                <div class="phone1">{{ $phone1 }}</div>
            </div>

            <div class="col-sm-6 text-sm-center">
                <div id="header-image-wrap">
                    <div id="header-image">
                        <a href="">
                            {!! $site_logo !!}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 text-sm-right">
                <div class="social-icons ">
                    @foreach($social_links as $social_link)
                    <div class="icon-item">
                        <a href="{{ $social_link['link_url'] }}" target="_blank">
                            <i class="{{ $social_link['css_classes'] }}"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row text-sm-center ">
            <div class="mx-auto" id="menu-wrapper">
                {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}

                {{--<nav class="nav-primary">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                    @endif
                </nav>--}}

                <nav class="nav-primary">
                    @if (has_nav_menu('primary_navigation'))
                        {!! $primary_menu !!}
                    @endif
                </nav>

            </div>

        </div>

    </div>
</header>
