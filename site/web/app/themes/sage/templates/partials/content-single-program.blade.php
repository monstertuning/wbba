<article class="{!! $post_class !!}">
    <header id="page-header">
        <h1 class="entry-title">{{ $title }}</h1>
        <div class="image featured program">{!! $featured_image_post_header !!}</div>
    </header>

    @if ($meta['prices'])
        <div class="col-sm-6 padding-left-0">
            <div class="list-block prices title">
                <h2>Prices</h2>
            </div>
            <div class="list-block info">
                <div>{!! $meta['prices'] !!}</div>
            </div>
        </div>
    @endif
    <div class="entry-content">
        {!! $content !!}
    </div>
    <footer>
        {!! $link_pages !!}
    </footer>
</article>
