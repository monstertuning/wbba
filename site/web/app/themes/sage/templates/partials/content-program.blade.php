content-program!!<article class="{!! $post_class !!}">
  {{--@php print_r($posts) @endphp--}}
  @if (has_post_thumbnail())
  <div class="post-image thumb featured">
    @php(the_post_thumbnail(array(120,120)))
  </div>
  @endif
  <header>
    <h2 class="entry-title"><a href="{!! $permalink !!}">{!! $post['post_title'] !!}</a></h2>
    @if(MedusaContentSuite\Config\Globals::showEntryMetaOnArchive())
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    {!! $post['post_excerpt'] !!}
  </div>

</article>
