<article class="{!! $post_class !!}">
  <header id="page-header">
    <h1 class="entry-title">{{ $title }}</h1>
  </header>

  <div class="entry-content">
    {!! $content !!}

    @foreach($gallery_images as $img)
      <a href="{{ $img['display_url'] }}" data-lightbox="gallery" class="gallery-link">
        {!! $img['thumb'] !!}
      </a>
    @endforeach
  </div>

</article>