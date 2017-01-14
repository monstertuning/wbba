<?php

namespace TimberTheme;

/* Template Name: LC Blogs Home Page */
use Timber\Timber;

$value = get_option( 'mmc')['company_bg_image'];
#var_dump($value);

$context = Timber::get_context( );
$context['post'] = new \TimberPost();

$args = array( 
	'posts_per_page' => 5, 
	'post_type' => 'news_articles',
	#'meta' =>'_cmb_news_article_options_featured_news_article',
	'meta_query'    => array(
	    #'relation' => 'OR',
	    array(
	        'key'       => '_cmb_news_article_options_featured_news_article',
	        'value'     => 'yes',
	        'compare'   => 'LIKE',
	    ),
	)
);

$news_articles = query_posts( $args );

//var_dump($news_articles);

if( ! empty( $news_articles ) ) :

	$x = 0;
    $news_articles2 = [];

	foreach( $news_articles as $n ):
        $a = get_the_post_thumbnail( $n->ID, '400square' );

        if($a){
            $news_articles2[$x] = new \TimberPost( $n->ID );
            #$news_articles2[$x]->image = new TimberImage( $n->ID, '400square' );
            $news_articles2[$x]->image = get_the_post_thumbnail( $n->ID, '400square' );
            $x++;
        }



	endforeach;

	$context['news_articles'] = $news_articles2;

endif;





$args = array( 
	'posts_per_page' => 5, 
	'post_type' => 'program',
);

$programs = query_posts( $args );

$programs2=[];
$x = 0;

if( ! empty( $programs ) ) :

	foreach( $programs as $p ):

        if(has_post_thumbnail($p->ID)){
            $programs2[$x] = new \TimberPost( $p->ID );
            $programs2[$x]->image = get_the_post_thumbnail( $p->ID, 'thumb-width-750-height-500-crop' );
            $x++;
        }
	endforeach;

	$context['programs'] = $programs2;
    #var_dump($programs2);
endif;



Timber::render(['templates/page-home.twig'], $context);