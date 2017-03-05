<article @php(post_class())>
  @if (has_post_thumbnail())
  <div class="post-image thumb featured">
    @php(the_post_thumbnail(array(120,120)))
  </div>
  @endif
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @if(MedusaContentSuite\Config\Globals::showEntryMetaOnArchive())
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>

</article>
