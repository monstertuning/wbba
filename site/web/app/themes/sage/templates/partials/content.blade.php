<div class="list-item">
  <a href="{!! $permalink !!}">
    <article class="{!! $post_class !!}">
      @if (has_post_thumbnail())
        <div class="post-image thumb featured">
          {!! $featured_image !!}
        </div>
      @endif
      <header>
        {{--@debug('dump')--}}
        {{--<pre>@php print_r($post) @endphp </pre>--}}
        <h2 class="entry-title">{!! $post['post_title'] !!}</h2>
        @if(MedusaContentSuite\Config\Globals::showEntryMetaOnArchive())
          @include('partials/entry-meta')
        @endif
      </header>
      <div class="entry-summary">
        {!! $post_excerpt !!}
      </div>
    </article>
  </a>
</div>
