<article class="{!! $post_class !!}">
  <header id="page-header">
    <h1 class="entry-title">{{ $title }}</h1>
    @if(MedusaContentSuite\Config\Globals::showEntryMetaOnSingle())
      @include('partials/entry-meta')
    @endif
    @if(MedusaContentSuite\Config\Globals::showFeaturedImageOnSingle())
    <div class="image featured ">{!! $featured_image_post_portrait !!}</div>
      @endif
  </header>

  <div class="entry-content">
    {!! $content !!}
  </div>
  <footer>
    {!! $link_pages !!}
  </footer>
</article>