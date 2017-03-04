@php
    $args = array(
        'posts_per_page' => 5,
        'post_type' => 'news_article',
    );

    $imgAttr =[
        'class'=>'d-block img-fluid img-responsive'
    ];

    $posts = get_posts( $args );
    $data=[];
    $x = 0;
    $helpers = new MedusaContentSuite\Helpers;


    if( ! empty( $posts ) ){
        foreach( $posts as $p ){
            if(has_post_thumbnail($p->ID)){
                $data[$x]['title'] = get_the_title( $p->ID );
                $data[$x]['link'] = get_permalink( $p->ID );
                $data[$x]['image'] = get_the_post_thumbnail( $p->ID, 'thumb-width-500-height-500-crop', $imgAttr );
                #$data[$x]['image'] = get_the_post_thumbnail( $p->ID, array(400, 400), $imgAttr );
                #$data[$x]['excerpt'] = get_the_excerpt( $p );
                $data[$x]['excerpt'] = $helpers->mmcGetExcerptById( $p->ID, 40, 'read more' );
                #echo $data[$x]['excerpt']."<br>";
                $x++;
            }
        }
    }
@endphp



<div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        @foreach( $data as $article )
            <div class="carousel-item @if ($loop->first) active @endif">
                <div class="row">
                    <div class="col-lg-6 text-center image">
                        {!! $article['image'] !!}
                    </div>
                    <div class="col-lg-6 text-center text">
                        <h2>{{ $article['title'] }}</h2>
                        <p class="tease-text">
                            {!! $article['excerpt'] !!}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach

    </div>


    {{--<a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>--}}

    <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
