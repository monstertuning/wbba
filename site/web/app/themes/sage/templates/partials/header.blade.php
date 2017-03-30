<header class="banner">
    <div class="container">
        {{--@debug('dump')--}}

        <div class="row">

            <div class="col-sm-3 text-sm-left">
                {{--<div class="site-title">{{ $company_info['site_title'] }}</div>
                <div class="tagline site-description">{{ $company_info['site_description'] }}</div>--}}
                <div class="phone1">{{ $company_info['phone1'] }}</div>

                <div class="slogan1">{{ $company_info['slogan1'] }}</div>

            </div>

            <div class="col-sm-6 text-sm-center">
                <div id="header-image-wrap">
                    <div id="header-image" class="site-logo">
                        <a href="{{ $company_info['site_url'] }}">
                            {!! $company_info['site_logo'] !!}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 text-sm-right">
                <div class="social-icons ">
                    @foreach($company_info['social_links'] as $social_link)
                    <span class="icon-item">
                        <a href="{{ $social_link['link_url'] }}" target="_blank">
                            <i class="{{ $social_link['css_classes'] }}"></i>
                        </a>
                    </span>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="col-sm-12 text-sm-center">
            <div class="tagline site-description">
                {{ $company_info['slogan2'] }}
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row text-sm-center ">
            <div class="mx-auto col-md-12" id="main-nav-wrapper">
                <div class="main-nav">
                    <nav class="nav-primary">
                        @if (has_nav_menu('primary_navigation'))
                            {!! $primary_menu !!}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
