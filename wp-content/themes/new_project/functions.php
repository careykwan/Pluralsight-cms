<?php 

if ( ! function_exists( 'carey_setup' ) ) :

	function carey_setup() {
		// let wordpress handle the title-tags
		add_theme_support( 'title-tag' );
	}

endif;

add_action('after_setup_theme', 'carey_setup');

/* Register menus */

function register_carey_menu() {
	register_nav_menus(
		array(
				'primary' => __('Primary Menu'),
				'footer' => __('Footer Menu'),
			)
	);
}

add_action('init', 'register_carey_menu');

/* Add our stylesheets */

function carey_scripts() {

	// Enqueue main stylesheet
	wp_enqueue_style('carey_styles', get_stylesheet_uri() );
	// Enqueue google fonts, Raleway
	wp_enqueue_style('carey_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}

add_action('wp_enqueue_scripts', 'carey_scripts');

/* Register Wigit areas */

function carey_widget_init() {
	register_sidebar ( array (
			'name' => __('Main Sidebar', 'carey' ),
			'id' => 'main-sidebar',
			'description' => __('Widgets added here will appear in all pages using the Two Column Template.', 'carey'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		));
}

add_action('widgets_init', 'carey_widget_init');

/* remove version in meta tag */

// function sample_remove_version() {
// 	return '';
// }

// add_filter('the_generator', sample_remove_version);

/* Creating a custom post */

function sample_custom_post(){
	$labels =array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No Items Found',
		'not_found_in_trash' => 'Empty Bin',
		'parent_item)colon' => 'Parent item'

		);

	$args=array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'support' => array(
            'title',
            'editor',
            'exerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category', 'post_tag'),
            'menu_position' => 5,
            'exclude_from_search' => false
        );

        register_post_type('portfolio', $args);
}
add_action('init', 'sample_custom_post');


if (isset($_POST['submit'])) {
		
		global $wbdb;
		
		$data_array = array (
					
					'Name'=>$_POST['fullName'],
					'Email'=>$_POST['email'],
					'Password'=>$_POST['password']

						);

		$table_name='contactform';

		$Result=$wpdb->insert($table_name, $data_array,$format=NULL);

		if($Result==1){
			echo "form submitted succesfully";
		}else {
			echo "Error in from submission";
			}		
}

if (isset($_POST['enter'])) {
		
		global $wbdb;
		
		$data_array_two = array (
					
					'name'=>$_POST['id'],
					'email'=>$_POST['address'],
					'phone'=>$_POST['phone'],
					'product'=>$_POST['product'],
					'colour'=>$_POST['colour'],

						);

		$table_name_two='order_form';

		$Result_two=$wpdb->insert($table_name_two, $data_array_two,$format=NULL);

		if($Result_two==1){
			echo "form submitted succesfully";
		}else {
			echo "Error in from submission";
			}		
}







