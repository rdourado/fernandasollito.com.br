<?php

// My Template Tags

function my_img_url( $filename )
{
	echo get_bloginfo( 'template_url' ) . "/img/{$filename}";
}

function my_home_url()
{
	echo home_url( '/' );
}

function my_logo()
{
	global $post;
	$home  = home_url( '/' );
	$name  = get_bloginfo( 'name' );
	$t_url = get_bloginfo( 'template_url' );
	$img   = "<img alt='{$name}' class='logo-img' height='40' src='{$t_url}/img/logo.png' width='807'>";
	echo is_front_page() ? "<h1 class='logo'>{$img}</h1>" : "<div class='logo'><a href='{$home}'>{$img}</a></div>";
}

function my_nav_menu()
{
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container' 	  => 'nav',
			'container_class' => 'nav',
			'fallback_cb' 	  => false
		)
	);
}

function my_foot_menu( $menu_class = 'foot-menu' )
{
	wp_nav_menu(
		array(
			'theme_location'  => 'secondary',
			'container' 	  => '',
			'menu_class'	  => $menu_class,
			'fallback_cb' 	  => false
		)
	);
}

function my_acf_image( $size )
{
	global $post;
	$image = get_sub_field( 'image' );
	if ( $image ) {
		$alt    = $image['alt'];
		$thumb  = $image['sizes'][$size];
		$width  = $image['sizes']["{$size}-width"];
		$height = $image['sizes']["{$size}-height"];
		echo "<img src='{$thumb}' alt='{$alt}' width='{$width}' height='{$height}'>";
	}
}

function my_thumb_src()
{
	global $post;
	$thumbID = get_post_thumbnail_id( $post->ID );
	if ( $thumbID ) {
		echo wp_get_attachment_url( $thumbID );
	}
}

function my_pin_url()
{
	global $post;
	$url = urlencode( get_permalink() );
	$thumb_id = get_post_thumbnail_id();
	if ( $thumb_id )
	{
		$thumb = wp_get_attachment_image_src( $thumb_id, 'large', true );
		$img = urlencode( $thumb[0] );
		echo "https://pinterest.com/pin/create/button/?url={$url}&amp;media={$img}&amp;description=";
	}
}

function my_fb_url()
{
	global $post;
	$url = urlencode( get_permalink() );
	echo "https://www.facebook.com/sharer/sharer.php?u={$url}";
}

// Setup

function my_scripts()
{
	// CSSs
	wp_enqueue_style( 'my-theme-css', get_template_directory_uri() . '/css/screen.css', array(), filemtime( TEMPLATEPATH . '/css/screen.css' ) );

	// JSs
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'my-theme-js', get_template_directory_uri() . '/js/interface.js', array( 'jquery' ), filemtime( TEMPLATEPATH . '/js/interface.js' ), true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_setup()
{
	register_nav_menus( array(
		'primary' => 'Menu',
		'secondary' => 'Informações Úteis'
	) );
	add_image_size( 'slide', 1020, 472, true );
	add_image_size( 'my-thumb', 68, 46, true );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'my_setup' );

function my_widgets_init()
{
	for ($i = 1; $i <= 3; $i++) {
		register_sidebar( array(
			'name'          => "Rodapé Coluna {$i}",
			'id'            => "footer-{$i}",
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	register_sidebar( array(
		'name'          => 'Blog',
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Shop',
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	for ($i = 1; $i <= 2; $i++) {
		register_sidebar( array(
			'name'          => "Social Coluna {$i}",
			'id'            => "social-{$i}",
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	register_sidebar( array(
		'name'          => "Social Rodapé",
		'id'            => "social-3",
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'my_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Sliders',
		'menu_title'	=> 'Sliders',
		// 'menu_slug' 	=> 'sliders',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));
}

// WooCommerce

function my_woocommerce_related_products_args( $args = array() )
{
	$args['posts_per_page'] = $args['columns'] = 3;
	return $args;
}

add_filter( 'woocommerce_related_products_args', 'my_woocommerce_related_products_args' );

function loop_columns()
{
	return 3;
}

add_filter( 'loop_shop_columns', 'loop_columns' );
