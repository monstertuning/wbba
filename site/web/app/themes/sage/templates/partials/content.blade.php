{{--@debug('controller')--}}
<div class="list-item">
  <a href="{!! $permalink !!}">
    <article class="{!! $post_class !!}">
      @unless (empty($featured_image))
        <div class="post-image thumb featured">
          {!! $featured_image !!}
        </div>
      @endunless
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
