<article class="{!! $post_class !!}">
    <header id="page-header">
        <h1 class="entry-title">{{ $title }}</h1>
        <div class="image featured program">{!! $featured_image_post_header !!}</div>
    </header>

    <div class="entry-content">
        {{--@debug('dump')--}}
        {!! $content !!}
    </div>

    @unless (empty($prices))
        <div class="col-sm-12 padding-left-0">
            <div class="list-block prices title">
                <h2>Prices</h2>
            </div>
            <div class="list-block info">
                <div>{!! $prices !!}</div>
            </div>
        </div>
    @endunless

    <footer>
        {!! $link_pages !!}
    </footer>
</article>
