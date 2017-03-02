featured image : <br>
@php(the_post_thumbnail(array(150,150)))
<article @php(post_class())>
  <br>
  @if (!empty($meta))
    meta : <br>
    <pre>
        {{ var_dump($meta) }}
    </pre>
  @else

  @endif
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/templates/partials/comments.blade.php'))
</article>
