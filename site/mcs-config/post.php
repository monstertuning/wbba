<?php

$config = array( );


//PT - News Articles
	$prefix = '_news_article_';
	$labels = array(
		'name'               => _x( 'News Articles', 'post type general name' ),
		'singular_name'      => _x( 'News Article', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'News Article' ),
		'add_new_item'       => __( 'Add New News Article' ),
		'edit_item'          => __( 'Edit News Article' ),
		'new_item'           => __( 'New News Article' ),
		'all_items'          => __( 'All News Articles' ),
		'view_item'          => __( 'View News Article' ),
		'not_found'          => __( 'No News Articles entry found' ),
		'not_found_in_trash' => __( 'No News Articles entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'News Articles',
	);

	$rewrite = array(
        'slug' =>'news_article',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our News Articles and News Articles data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'news_article',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'News Articles',
		'can_export' => true,

	);

	$types = 'news_articles';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








//PT - Galleries
	$prefix = '_photo_gallery_';
	$labels = array(
		'name'               => _x( 'Photo Gallery', 'post type general name' ),
		'singular_name'      => _x( 'Photo Gallery', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Photo Gallery' ),
		'add_new_item'       => __( 'Add New Photo Gallery' ),
		'edit_item'          => __( 'Edit Photo Gallery' ),
		'new_item'           => __( 'New Photo Gallery' ),
		'all_items'          => __( 'All Photo Galleries' ),
		'view_item'          => __( 'View Photo Gallery' ),
		'not_found'          => __( 'No Photo Galleries entry found' ),
		'not_found_in_trash' => __( 'No Photo Galleries entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Photo Galleries',
	);

	$rewrite = array(
        'slug' =>'photo_gallery',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Photo Galleries and Photo Galleries data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'galleries',
		'hierarchical' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Gallerys',
		'can_export' => true,

	);

	$types = 'photo_galleries';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








//PT - Coaches
	$prefix = '_coach_';
	$labels = array(
		'name'               => _x( 'Coaches', 'post type general name' ),
		'singular_name'      => _x( 'Coach', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Coach' ),
		'add_new_item'       => __( 'Add New Coach' ),
		'edit_item'          => __( 'Edit Coach' ),
		'new_item'           => __( 'New Coach' ),
		'all_items'          => __( 'All Coaches' ),
		'view_item'          => __( 'View Coach' ),
		'not_found'          => __( 'No Coaches entry found' ),
		'not_found_in_trash' => __( 'No Coaches entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Coaches',
	);

	$rewrite = array(
        'slug' =>'coach',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Coaches and Coaches data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'coach',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Coaches',
		'can_export' => true,

	);

	$types = 'coaches';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








//PT - Fighters
	$prefix = '_fighter_';
	$labels = array(
		'name'               => _x( 'Fighters', 'post type general name' ),
		'singular_name'      => _x( 'Fighter', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Fighter' ),
		'add_new_item'       => __( 'Add New Fighter' ),
		'edit_item'          => __( 'Edit Fighter' ),
		'new_item'           => __( 'New Fighter' ),
		'all_items'          => __( 'All Fighters' ),
		'view_item'          => __( 'View Fighter' ),
		'not_found'          => __( 'No Fighters entry found' ),
		'not_found_in_trash' => __( 'No Fighters entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Fighters',
	);

	$rewrite = array(
        'slug' =>'fighter',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Fighters and Fighters data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'fighter',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Coaches',
		'can_export' => true,

	);

	$types = 'fighters';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








//PT - Instructors
	$prefix = 'Instructor';
	$labels = array(
		'name'               => _x( 'Instructors', 'post type general name' ),
		'singular_name'      => _x( 'Instructor', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Instructor' ),
		'add_new_item'       => __( 'Add New Instructor' ),
		'edit_item'          => __( 'Edit Instructor' ),
		'new_item'           => __( 'New Instructor' ),
		'all_items'          => __( 'All Instructors' ),
		'view_item'          => __( 'View Instructor' ),
		'not_found'          => __( 'No Instructors entry found' ),
		'not_found_in_trash' => __( 'No Instructors entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Instructors',
	);

	$rewrite = array(
        'slug' =>'instructor',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Instructors and Instructors data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'Instructor',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Coaches',
		'can_export' => true,

	);

	$types = 'instructors';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );









//PT - Programs
	$prefix = '_program_';
	$labels = array(
		'name'               => _x( 'Programs', 'post type general name' ),
		'singular_name'      => _x( 'Program', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Program' ),
		'add_new_item'       => __( 'Add New Program' ),
		'edit_item'          => __( 'Edit Program' ),
		'new_item'           => __( 'New Program' ),
		'all_items'          => __( 'All Programs' ),
		'view_item'          => __( 'View Program' ),
		'not_found'          => __( 'No Programs entry found' ),
		'not_found_in_trash' => __( 'No Programs entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Programs',
	);

	$rewrite = array(
        'slug' =>'program',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Programs and Program data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'attributes', 'thumbnail', 'author' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'fighter',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Coaches',
		'can_export' => true,

	);

	$types = 'programs';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








//PT - Testimonial Articles
	$prefix = '_testimonial_';
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'not_found'          => __( 'No Testimonials entry found' ),
		'not_found_in_trash' => __( 'No Testimonials entry found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials',
	);

	$rewrite = array(
        'slug' =>'testimonial',
        'with_front' => true,
        'feed' => true,
        'pages' => true
	);

	$columns = array(
		'config'=>array(

		),
		'fields'=>array(

		),
	);

	$args = array(
		'labels'        => $labels,
		'rewrite'        => $rewrite,
		'description'   => 'Holds our Testimonials and Testimonials data',
		'public'        => true,
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor' ), //'excerpt', , 'comments', 'page-attributes'
		'has_archive'   => 'testimonial',
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'menu_icon' => 'dashicons-admin-page',
		#'capability_type' => null, #array('news', 'news'), #plural
		#'capabilities' => null,
		#'map_meta_cap' => null,
		#'register_meta_box_cb' => null,
		#'taxonomies' => null,
		#'query_var' => 'Testimonials',
		'can_export' => true,

	);

	$types = 'testimonials';
	
	$extras = array(
		'sidebars'=>false,
		//'list_page'=>739,
		'mu_main_site_only'=>false,
		'sub_site_only'=>false,
		'columns'=>$columns,
		'default_category_tax'=>true,
		//'is_product_pt'=>false,
		'show_in_nav_menu'=>true,
		'nav_menu_position'=>1,
		'show_posts_in_nav_menu'=>true,
		'create_dummy_posts'=>false,
		'url_query_vars'=>array( 'page_id' ),
	);

	$config[] = array ( 'args' => $args, 'types' => $types, 'extras' => $extras );








return $config;