<div id="home-carousel-news" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        @foreach( $news_slides as $slide )
            <div class="carousel-item @if ($loop->first) active @endif">
                <div class="row">
                    <div class="col-lg-6 text-center image">
                        {!! $slide['image'] !!}
                    </div>
                    <div class="col-lg-6 text-center text">
                        <div class="wrap">
                            <h2>{{ $slide['title'] }}</h2>
                            <p class="tease-text">
                                {!! $slide['excerpt'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a class="left carousel-control carousel-control-left" href="#home-carousel-news" role="button" data-slide="prev">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control carousel-control-right" href="#home-carousel-news" role="button" data-slide="next">
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>

</div>
