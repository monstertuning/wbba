<?php
#SIEDEV

/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

$sage_includes = [
	'lib/timber.php', 			// Twig magic
  'lib/assets.php',    	// Scripts and stylesheets
  'lib/extras.php',    	// Custom functions 
  'lib/setup.php',     	// Theme setup
  'lib/titles.php',    	// Page titles
  'lib/customizer.php' // Theme customizer,
];

foreach( $sage_includes as $file ){
  
  if ( ! $filepath = locate_template( $file ) ){
    trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
  }

  require_once $filepath;
}

unset($file, $filepath);


     
#siedev

require_once('functions-wbba-widgets.php');



add_action( 'delete_attachment', 'protect_media_from_deletion' );

function protect_media_from_deletion( $postid ){

  $protected = get_post_meta( $postid, '_cmb_media_options_protected_media', true ); 

  if( ! empty( $protected ) ) :
    if( ! empty( $protected ) ) :
      if( $protected == 'yes' ) :
        wp_die("Sorry, you can't delete this.");
        return false;
      endif;    
    endif;
  endif;
}


function timber_set_product( $post ) {
    global $product;
    if ( is_woocommerce() ) {
        $product = get_product($post->ID);
    }
}



function get_custom_excerpt( $post, $count ){

  $permalink = get_permalink( $post->ID );
  
  $content = $post->post_content;
  $content = strip_tags( $content );

  $excerpt = substr( $content, 0, $count );
  $excerpt = $excerpt . '... <a href="' . $permalink . '"><span class="btn read-more">read more</span></a>';

  return $excerpt;
}









function wp_get_archives_array( $archive_str ){

  $archi = explode( '</li>' , $archive_str );
  $links = array();

  foreach( $archi as $link ) {
    $link = str_replace( array( '<li>' , "\n" , "\t" , "\s" ), '' , $link );
    if( '' != $link )
      $links[] = $link;
    else
      continue;
  }

  return $links;

}



