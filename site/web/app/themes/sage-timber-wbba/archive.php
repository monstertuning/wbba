<?php
$context = \Timber::get_context();
$pt = get_post_type();
$context['post_type'] = $pt;

$postType = get_queried_object();
$context['title'] = esc_html($postType->labels->name);

switch ( $pt ){
	case 'testimonials' :
		$posts_per_page = 1;
        break;

	case 'programs' :
		$posts_per_page = 2;
        break;
}

global $posts_per_page;


$args = array( 
	'posts_per_page' => $posts_per_page, 
	'post_type' => $pt,
);


$posts = query_posts( $args );

$x = 0;
if( ! empty( $posts ) ) :
	foreach( $posts as $p ):
		$posts2[$x] = new TimberPost( $p->ID );
		$x++;
	endforeach;
	$context['posts'] = $posts2;
endif;

Timber::render( ["templates/archive-" . $pt . ".twig", "templates/archive.twig"], $context ); 