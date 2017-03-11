<article @php(post_class())>
    <header id="page-header">
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        <div class="image featured program">{!! $featured_image !!}</div>
    </header>

    @if ($meta['prices'])
        <div class="list-block prices title">
            <h2>Prices</h2>
        </div>
        <div class="list-block  info">
            <div>{!! $meta['prices'] !!}</div>
        </div>
    @endif

    <div class="entry-content">
        @php(the_content())
    </div>
    <footer>
        {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
