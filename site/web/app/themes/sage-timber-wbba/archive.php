<?php
namespace TimberTheme;

use Timber\Timber;

global $wp_query;
global $posts_per_page;

$context = Timber::get_context();

$pt = get_queried_object();
$context['post_type'] = $pt->name;
$context['title'] = esc_html($pt->labels->name);

switch ( $pt->name ){
	case 'testimonials' :
		$posts_per_page = 1;
        break;

	case 'program' :
		$posts_per_page = 20;
        break;
}



$args = array( 
	'posts_per_page' => $posts_per_page, 
	'post_type' => $pt->name,
);

$posts = query_posts( $args );
$posts2 = [];
$x = 0;
if( ! empty( $posts ) ) :
	foreach( $posts as $p ):
		$posts2[$x] = new TimberPost( $p->ID );
		$x++;
	endforeach;
	$context['posts'] = $posts2;
endif;

Timber::render( ["templates/archive-" . $pt->name . ".twig", "templates/archive.twig"], $context );