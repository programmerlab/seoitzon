<?php  
	/* 
	Plugin Name: ProfTeamExtensions
	Plugin URI: http://www.profteamsolutions.com
	Version: 1.8
	Author: ProfTeam
	Description: A plugin that Provide Post Types.
	*/  


/*------------------------------------------------------
Insperia, Add Actions - Started
-------------------------------------------------------*/
add_action( 'plugins_loaded', 'nexu_ext_setup' );


function nexu_ext_setup(){
	add_action('init', 'nexus_register_cpt_services' );
	add_action('init', 'nexus_register_cpt_desktop_services' );
	add_action('init', 'nexus_register_cpt_earth' );
	
	add_action('init', 'nexus_register_menus' );
	add_action('init', 'nexus_register_cpt_team' );
	add_action( 'init', 'nexus_register_cpt_portfolio' );
	add_action( 'init', 'nexus_register_cpt_testimonial' );	

	add_action( 'init', 'create_portfolio_taxonomies');	
}
/*------------------------------------------------------
Insperia, Add Actions - End
-------------------------------------------------------*/




/*------------------------------------------------------
Insperia, Portfolio Categories - Started
-------------------------------------------------------*/
function create_portfolio_taxonomies() {
	
	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Portfolio Categories', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Portfolio Categories' ),
		'all_items'         => __( 'All Portfolio Categories' ),
		'parent_item'       => __( 'Parent Portfolio Categories' ),
		'parent_item_colon' => __( 'Parent Portfolio Categories:' ),
		'edit_item'         => __( 'Edit Portfolio Category' ),
		'update_item'       => __( 'Update Portfolio Category' ),
		'add_new_item'      => __( 'Add New Portfolio Category' ),
		'new_item_name'     => __( 'New Portfolio Category Name' ),
		'menu_name'         => __( 'Portfolio Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfoliocategories' ),
	);

	register_taxonomy( 'portfoliocategories', array( 'portfolio' ), $args );

}
/*------------------------------------------------------
Insperia, Portfolio Categories - End
-------------------------------------------------------*/




/*------------------------------------------------------
Insperia Menu Options - Started
-------------------------------------------------------*/

function nexus_register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' , 'sentient'),
      'extra-menu' => __( 'Extra Menu' , 'sentient')
    )
  );
}

/*------------------------------------------------------
Insperia Menu Options - End
-------------------------------------------------------*/





/*------------------------------------------------------
Insperia, Add Testimonial Option to the Theme - Started
-------------------------------------------------------*/
function nexus_register_cpt_testimonial() {

$labels = array(
	'name' => __( 'Testimonials', 'sentient' ),
	'singular_name' => __( 'testimonial', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New testimonial', 'sentient' ),
	'edit_item' => __( 'Edit testimonial', 'sentient' ),
	'new_item' => __( 'New testimonial', 'sentient' ),
	'view_item' => __( 'View testimonial', 'sentient' ),
	'search_items' => __( 'Search Testimonials', 'sentient' ),
	'not_found' => __( 'No testimonials found', 'sentient' ),
	'not_found_in_trash' => __( 'No testimonials found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent testimonial:', 'sentient' ),
	'menu_name' => __( 'Testimonials', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt' ),

	
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'testimonial', $args );
}

/*------------------------------------------------------
Insperia, Add Testimonial Option to the Theme - End
-------------------------------------------------------*/




/*------------------------------------------------------
Insperia, Add Portfolio Option to the Theme - Started
-------------------------------------------------------*/
function nexus_register_cpt_portfolio() {

$labels = array(
	'name' => __( 'Portfolio', 'sentient' ),
	'singular_name' => __( 'portfolio', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New portfolio', 'sentient' ),
	'edit_item' => __( 'Edit portfolio', 'sentient' ),
	'new_item' => __( 'New portfolio', 'sentient' ),
	'view_item' => __( 'View portfolio', 'sentient' ),
	'search_items' => __( 'Search portfolios', 'sentient' ),
	'not_found' => __( 'No portfolios found', 'sentient' ),
	'not_found_in_trash' => __( 'No portfolios found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent portfolio:', 'sentient' ),
	'menu_name' => __( 'Portfolio', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ,'comments', 'excerpt'),

	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'portfolio', $args );
}

/*------------------------------------------------------
Insperia, Add Portfolio Option to the Theme - End
-------------------------------------------------------*/




/*------------------------------------------------------
Insperia, Add Team Members Option to the Theme - Started
-------------------------------------------------------*/

function nexus_register_cpt_team() {

$labels = array(
	'name' => __( 'Team', 'sentient' ),
	'singular_name' => __( 'Team', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New Team Member', 'sentient' ),
	'edit_item' => __( 'Edit Team Member', 'sentient' ),
	'new_item' => __( 'New Team Member', 'sentient' ),
	'view_item' => __( 'View Team Member', 'sentient' ),
	'search_items' => __( 'Search Team Member', 'sentient' ),
	'not_found' => __( 'No Team Member found', 'sentient' ),
	'not_found_in_trash' => __( 'No Team Member found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent Team Member:', 'sentient' ),
	'menu_name' => __( 'Team', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt' ),

	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'team', $args );
}

/*------------------------------------------------------
Insperia, Add Team Members Option to the Theme - End
-------------------------------------------------------*/



/*------------------------------------------------------
Nexus, Earth Post - Started
-------------------------------------------------------*/

function nexus_register_cpt_earth() {

$labels = array(
	'name' => __( 'Earth Slider', 'sentient' ),
	'singular_name' => __( 'Earth Slider', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New Earth Slider', 'sentient' ),
	'edit_item' => __( 'Edit Earth Slider', 'sentient' ),
	'new_item' => __( 'New Earth Slider', 'sentient' ),
	'view_item' => __( 'View Earth Slider', 'sentient' ),
	'search_items' => __( 'Search Earth Slider', 'sentient' ),
	'not_found' => __( 'No Earth Slider found', 'sentient' ),
	'not_found_in_trash' => __( 'No Earth Slider found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent Earth Slider:', 'sentient' ),
	'menu_name' => __( 'Earth Slider', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'revisions', 'excerpt' ),

	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'earthslider', $args );
}

/*------------------------------------------------------
Nexus, Earth Post - End
-------------------------------------------------------*/



/*------------------------------------------------------
Insperia, Services Post - Started
-------------------------------------------------------*/

function nexus_register_cpt_services() {

$labels = array(
	'name' => __( 'Services', 'sentient' ),
	'singular_name' => __( 'Services', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New Service', 'sentient' ),
	'edit_item' => __( 'Edit Service', 'sentient' ),
	'new_item' => __( 'New Service', 'sentient' ),
	'view_item' => __( 'View Service', 'sentient' ),
	'search_items' => __( 'Search Services', 'sentient' ),
	'not_found' => __( 'No Services found', 'sentient' ),
	'not_found_in_trash' => __( 'No Services found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent Services:', 'sentient' ),
	'menu_name' => __( 'Services', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'revisions', 'excerpt' ),

	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'services', $args );
}

/*------------------------------------------------------
Insperia, Services Post - End
-------------------------------------------------------*/



/*------------------------------------------------------
Nexus, Services Desktop Post - Started
-------------------------------------------------------*/

function nexus_register_cpt_desktop_services() {

$labels = array(
	'name' => __( 'Services Desktop', 'sentient' ),
	'singular_name' => __( 'Services Desktop', 'sentient' ),
	'add_new' => __( 'Add New', 'sentient' ),
	'add_new_item' => __( 'Add New Service Desktop', 'sentient' ),
	'edit_item' => __( 'Edit Service', 'sentient' ),
	'new_item' => __( 'New Service', 'sentient' ),
	'view_item' => __( 'View Service', 'sentient' ),
	'search_items' => __( 'Search Services', 'sentient' ),
	'not_found' => __( 'No Services found', 'sentient' ),
	'not_found_in_trash' => __( 'No Services found in Trash', 'sentient' ),
	'parent_item_colon' => __( 'Parent Services:', 'sentient' ),
	'menu_name' => __( 'Services Desktop', 'sentient' ),
);

$args = array(
	'labels' => $labels,
	'hierarchical' => false,

	'supports' => array( 'title', 'editor', 'author', 'revisions', 'excerpt' ),

	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	  
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
);

register_post_type( 'servicesdesktop', $args );
}

/*------------------------------------------------------
Nexus, Services Desktop Post - End
-------------------------------------------------------*/





if ( ! function_exists( 'optionsframework_mlu_init' ) ) :

function optionsframework_mlu_init () {
	register_post_type( 'optionsframework', array(
		'labels' => array(
			'name' => __( 'Theme Options Media', 'optionsframework' ),
		),
		'public' => true,
		'show_ui' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => false,
		'supports' => array( 'title', 'editor', 'excerpt' ), 
		'query_var' => false,
		'can_export' => true,
		'show_in_nav_menus' => false,
		'public' => false
	) );
}

endif;



add_action( 'init', 'nexus_add_page_cats' );	
function nexus_add_page_cats()
{
    register_taxonomy_for_object_type( 'category', 'post' );
}


/*------------------------------------------------------
Insperia Shortcode - Started
-------------------------------------------------------*/
if(function_exists('nexus_socials')){
	add_shortcode('nexus_socials', 'nexus_socials');
}

if(function_exists('nexus_stripes')){
	add_shortcode('nexus_stripes', 'nexus_stripes');
}

if(function_exists('nexus_animated_numbers')){
	add_shortcode('nexus_animated_numbers', 'nexus_animated_numbers');
}


if(function_exists('nexus_service_widget')){
	add_shortcode('nexus_service_widget', 'nexus_service_widget');
}

if(function_exists('nexus_service_widget_style_two')){
	add_shortcode('nexus_service_widget_style_two', 'nexus_service_widget_style_two');
}

if(function_exists('nexus_service_boxes')){
	add_shortcode('nexus_service_boxes', 'nexus_service_boxes');
}


if(function_exists('nexus_pricing_table')){
	add_shortcode('nexus_pricing_table', 'nexus_pricing_table');
}

if(function_exists('nexus_icon')){
	add_shortcode('nexus_icon', 'nexus_icon');
}


if(function_exists('nexus_earth_slider')){
	add_shortcode('nexus_earth_slider', 'nexus_earth_slider');
}


if(function_exists('nexus_blog')){
	add_shortcode('nexus_blog', 'nexus_blog');
}


if(function_exists('nexus_testimonial')){
	add_shortcode('nexus_testimonial', 'nexus_testimonial');
}

if(function_exists('nexus_portfolio')){
	add_shortcode('nexus_portfolio', 'nexus_portfolio');
}

if(function_exists('nexus_clients')){
	add_shortcode('nexus_clients', 'nexus_clients');
}

if(function_exists('nexus_services')){
	add_shortcode('nexus_services', 'nexus_services');
}

if(function_exists('nexus_services_desktop')){
	add_shortcode('nexus_services_desktop', 'nexus_services_desktop');
}

if(function_exists('nexus_header_with_icon')){
	add_shortcode('nexus_header_with_icon', 'nexus_header_with_icon');
}

if(function_exists('nexus_header_without_icon')){
	add_shortcode('nexus_header_without_icon', 'nexus_header_without_icon');
}

if(function_exists('nexus_lined_header')){
	add_shortcode('nexus_lined_header', 'nexus_lined_header');
}

if(function_exists('nexus_button')){
	add_shortcode('nexus_button', 'nexus_button');
}

if(function_exists('nexus_white_button')){
	add_shortcode('nexus_white_button', 'nexus_white_button');
}

if(function_exists('nexus_section_title')){
	add_shortcode('nexus_section_title', 'nexus_section_title');
}

if(function_exists('nexus_list_items')){
	add_shortcode('nexus_list_items', 'nexus_list_items');
}

if(function_exists('nexus_percentage_bar')){
	add_shortcode('nexus_percentage_bar', 'nexus_percentage_bar');
}

if(function_exists('nexus_homepage_container')){
	add_shortcode('homepage_container', 'nexus_homepage_container');
}

if(function_exists('nexus_homepage_container_wide')){
	add_shortcode('homepage_container_wide', 'nexus_homepage_container_wide');
}

if(function_exists('nexus_homepage_container_end')){
	add_shortcode('homepage_container_end', 'nexus_homepage_container_end');
}


if(function_exists('nexus_team_members')){
	add_shortcode('nexus_team_members', 'nexus_team_members');
}


if(function_exists('nexus_map')){
	add_shortcode('nexus_map', 'nexus_map');
}

if(function_exists('nexus_page_section')){
	add_shortcode('nexus_page_section', 'nexus_page_section');
}

if(function_exists('nexus_video')){
	add_shortcode('nexus_video', 'nexus_video');
}

if(function_exists('nexus_desktop_slider')){
	add_shortcode('nexus_desktop_slider', 'nexus_desktop_slider');
}

/*------------------------------------------------------
Insperia Shortcode - End
-------------------------------------------------------*/

	

	
/*------------------------------------------------------
Nexus Socials
-------------------------------------------------------*/
function nexus_socials($atts, $content = null) {
	extract(shortcode_atts(array('icon' => '' , 'number' => '' , 'word' => '', 'link' => ''), $atts));

	if($icon == 'email'){
		$iconUI = 'envelope';
		$iconTag = '<a href="mailto:' . esc_attr($link) . '">';
	} else {
		$iconUI = $icon;
		$iconTag = '<a href="' . esc_url($link) . '">';
	}
	
	return '<div class="social-share metro-blocks">
				<ul>
					<li class="metro-block ' . $icon . '">
						' . $iconTag . '
							<div class="social-share-overlay">
								<i class="fa fa-' . $iconUI . '"></i>
							</div>
							<div class="share-amount">
								<div>' . $number . '</div>
								<div>' . $word . '</div>
							</div>
							<span class="nexus-capital">' . $icon . '</span>
						</a>
					</li>
				</ul>
			</div>';
}

	
/*------------------------------------------------------
Nexus Animated Numbers
-------------------------------------------------------*/
function nexus_animated_numbers($atts, $content = null) {
	extract(shortcode_atts(array('icon' => '' , 'iconcolor' => '' , 'number' => '', 'numbercolor' => '' , 'title' => '' , 'boxcolor' => '' , 'titlecolor' => ''), $atts));

	$id = '92' . $number . '01';
	
	return '<div class="stats row block-columns">
				<div style="background:' . $boxcolor . ';" class="stat span-3">
					<i class="livicon" data-n="' . $icon . '" data-c="' . $iconcolor . '" data-op="1" data-s="68" data-hc="false"></i>
					<h4><span style="color:' . $numbercolor . ';" id="stat-'. $id .'" data-val="' . $number . '">0</span></h4>
					<p style="color:' . $titlecolor . ';">' . $title . '</p>
				</div>
			</div>';
}



/*------------------------------------------------------
Nexus Video
-------------------------------------------------------*/
function nexus_video($atts, $content = null) {
	extract(shortcode_atts(array('url' => '' , 'height' => '' , 'width' => ''), $atts));

	return '<div class="media-container">				
				<iframe src="' . esc_url($url) . '" width="' . $width . '" height="' . $height . '"></iframe>
			</div>';
}

/*------------------------------------------------------
Nexus Map - Shortcode
-------------------------------------------------------*/
function nexus_map( $atts, $content = null ) {
	extract(shortcode_atts(array('latitude' => '-37.809674' , 'longitude' => '144.954718' , 'water' => '' , 'road' => '' , 'labelstroke' => '' , 'labelfill' => '' , 'administrative' => '' , 'landscape' => '' , 'poi' => ''), $atts));
	
	global $prof_default;
	
	$Id = $latitude . $longitude;	
	$Id = str_replace('.', '', $Id);
	$Id = str_replace('-', '', $Id);
	$Id = 'map_' . $Id;	
	
	$return_string = '<div id="' . $Id . '" class="map-canvas" data-poi="'. $poi .'" data-landscape="'. $landscape .'" data-administrative="'. $administrative .'" data-labelfill="'. $labelfill .'" data-labelstroke="'. $labelstroke .'" data-road="'. $road .'" data-water="' . $water . '" data-lng="' . $longitude . '" data-lat="'. $latitude .'" ></div>';
	
   return $return_string;	


}


/*------------------------------------------------------
Identity Map - Shortcode
-------------------------------------------------------*/
if(function_exists('identity_map')){
add_shortcode('identity_map', 'identity_map');
}

function identity_map( $atts, $content = null ) {
	extract(shortcode_atts(array('loctitle' => '' , 'locdesc' => '' , 'latitude' => '-37.809674' , 'longitude' => '144.954718'), $atts));
	$Id = $latitude . $longitude;	
	$Id = str_replace('.', '', $Id);
	$Id = str_replace('-', '', $Id);
	$Id = 'map_' . $Id;
	
	$return_string = '<div id="'. $Id .'" class="map-canvas item_fade_in" data-lat="' . $latitude . '" data-lng="' . $longitude . '" data-base="' . get_template_directory_uri() . '" data-loctitle="' . $loctitle . '" data-locdesc="' . $locdesc . '">
					  </div>';

	return $return_string;	
}


/*------------------------------------------------------
Nexus Bar
-------------------------------------------------------*/
function nexus_percentage_bar($atts, $content = null) {
	extract(shortcode_atts(array('title' => '' , 'percentage' => '' , 'color' => '', 'titlecolor' => ''), $atts));
	
	return '
		<div class="section skills inactive">
			<h5 style="color:' . $titlecolor . ';">' . $title . '</h5>
			<div class="progress-bar">
				<div style="background:' . $color . ';" class="progress" data-progress="' . $percentage . '">' . $percentage . '</div>
			</div>
		</div>
	';
}


/*------------------------------------------------------
Nexus Section Title
-------------------------------------------------------*/
function nexus_section_title($atts, $content = null) {
	extract(shortcode_atts(array('title' => '' , 'titledesc' => '' , 'titlecolor' => '', 'titledesccolor' => '', 'align' => '', 'descfontsize' => '' , 'textfontsize' => ''), $atts));
	
	return '
		<div class="section-title" style="text-align:' . $align . ';">
			<h2 style="color:' . $titlecolor . '; font-size:' . $textfontsize . ';">' . $title . '</h2>
			<h3 style="color:' . $titledesccolor . '; font-size:' . $descfontsize . ';"><i>' . $titledesc . '</i></h3>
		</div>	
	';
}


/*------------------------------------------------------
Nexus List Item
-------------------------------------------------------*/
function nexus_list_items($atts, $content = null) {
	extract(shortcode_atts(array('text' => ''), $atts));
	
	$text = str_ireplace('<p>','',$text);
	$text = str_ireplace('</p>','',$text); 	
	
	return '<ul class="bullet-list min-bp2">' . wp_kses_post($text) . '</ul>';
}


/*------------------------------------------------------
Nexus Button
-------------------------------------------------------*/
function nexus_button($atts, $content = null) {
	extract(shortcode_atts(array('text' => '' , 'buttoncolor' => '', 'link' => '' , 'target' => ''), $atts));
	
	if($target == 'yes'){$targetValue = "_blank";}else{$targetValue = "_self";}
	
	return '
		<a target="' . $targetValue . '" href="' . esc_url($link) . '" style="background:' . $buttoncolor . ';" class="button round">' . $text . '</a>
	';
}


/*------------------------------------------------------
Nexus White Button
-------------------------------------------------------*/
function nexus_white_button($atts, $content = null) {
	extract(shortcode_atts(array('text' => '' , 'link' => '' , 'target' => ''), $atts));
	
	if($target == 'yes'){$targetValue = "_blank";}else{$targetValue = "_self";}
	
	return '
		<a target="' . $targetValue . '" href="' . esc_url($link) . '" class="button round border nexus-white-button">' . $text . '</a>
	';
}



/*------------------------------------------------------
Nexus Header Title with Icon
-------------------------------------------------------*/
function nexus_header_with_icon($atts, $content = null) {
	extract(shortcode_atts(array('normaltext' => '' , 'boldtext' => '' , 'icon' => '' , 'desc' => '' , 'align' => '' , 'iconcolor' => '' , 'textcolor' => ''), $atts));
	
	if($align == 'center'){$centerClass = 'sub-text-center';} else {$centerClass = '';}
	
	return '
        <div class="nexus-header-title sep active">
            <div class="section-title">
                <h2 style="text-align:' . $align . '; color:' . $textcolor . ';">' . wp_kses_post($normaltext) . ' <strong>' . esc_html($boldtext) . ' <i style="color:' . $iconcolor . ';" class="fa fa-' . $icon . '"></i></strong></h2>
            </div>
            <p class="sub-text ' . $centerClass . '" style="text-align:' . $align . ';color:' . $textcolor . ';">' . wp_kses_post($desc) . '</p>
		</div>
	';
}


/*------------------------------------------------------
Nexus Single Icon
-------------------------------------------------------*/
function nexus_icon($atts, $content = null) {
	extract(shortcode_atts(array('icon' => '' , 'color' => '' , 'original' => '' , 'tooltip' => '' , 'size' => ''), $atts));
	
	if($original == 'yes'){$makeOriginal = 'original';} else {$makeOriginal = $color;}
	if($tooltip == ''){$tooltipString = '';} else {$tooltipString = 'tooltip';}
	return '
		<i class="nexus-single-livicon livicon ' . $tooltipString . '" data-tip="' . esc_attr($tooltip) . '" data-n="' . $icon . '" data-c="' . $makeOriginal . '" data-s="' . $size . '" data-hc="false"></i>
	';
}


/*------------------------------------------------------
Nexus Service Widget
-------------------------------------------------------*/
function nexus_service_widget($atts, $content = null) {

	extract(shortcode_atts(array('icon' => '' , 'color' => '' , 'original' => '' , 'title' => '' , 'text' => ''), $atts));
	
	if($original == 'yes'){$makeOriginal = 'original';} else {$makeOriginal = $color;}
	
	return '
		<div class="welcome-feature">
			<i class="livicon" data-n="' . $icon . '" data-c="' . $makeOriginal . '" data-op="1" data-s="68" data-hc="false"></i>
			<div class="widget-content">
				<div class="title">
					<h4>' . esc_attr($title) . '</h4>
				</div> 
				<p>' . esc_attr($text) . '</p>
			</div>
		</div>
	';
}



/*------------------------------------------------------
Nexus Service Boxes
-------------------------------------------------------*/
function nexus_service_boxes($atts, $content = null) {

	extract(shortcode_atts(array('icon' => '' , 'color' => '' , 'original' => '' , 'title' => '', 'subtitle' => '' , 'text' => ''), $atts));
	
	if($original == 'yes'){$makeOriginal = 'original';} else {$makeOriginal = $color;}
	
	return '
            <div class="feature-block-wrapper">
                <div class="feature-block">
                    <i class="livicon" data-n="' . $icon . '" data-c="' . $makeOriginal . '" data-op="1" data-s="68" data-hc="false"></i>
                    <h4>' . esc_attr($title) . '</h4>
                    <h5>' . esc_attr($subtitle) . '</h5>
                    <p>' . wp_kses_post($text) . '</p>
                </div>
            </div>
	';
}


/*------------------------------------------------------
Nexus Stripe
-------------------------------------------------------*/
function nexus_stripes($atts, $content = null) {
	return '<hr class="stripes" />';
}



/*------------------------------------------------------
Nexus Service Widget Style 2
-------------------------------------------------------*/
function nexus_service_widget_style_two($atts, $content = null) {

	extract(shortcode_atts(array('icon' => '' , 'color' => '' , 'original' => '' , 'title' => '', 'subtitle' => '' , 'text' => ''), $atts));
	
	if($original == 'yes'){$makeOriginal = 'original';} else {$makeOriginal = $color;}
	
	return '
            <div class="widget service">
                <div class="widget-content">
                    <div>
                        <i class="livicon" data-n="' . $icon . '" data-op="1" data-c="' . $makeOriginal . '" data-s="48" data-hc="false"></i>
                        <div class="title">
                            <h4>' . esc_attr($title) . '</h4>
                            <h5>' . esc_attr($subtitle) . '</h5>
                        </div>
                    </div>
                    <p>' . wp_kses_post($text) . '</p>
                </div>
            </div>
	';
}


/*------------------------------------------------------
Nexus Pricing Table
-------------------------------------------------------*/
function nexus_pricing_table($atts, $content = null) {

	extract(shortcode_atts(array('tablecolor' => '' , 'linkcolor' => '' , 'ribbon' => '' , 'ribbontext' => '' , 'tabletitle' => '' , 'tablesubtitle' => '', 'currency' => '' , 'price' => '', 'separator' => '', 'period' => '', 'url' => '', 'urltitle' => '', 'urlicon' => ''
		,'oneicon' => '' , 'onetitle' => '' , 'onevalue' => ''
		,'twoicon' => '' , 'twotitle' => '' , 'twovalue' => ''
		,'threeicon' => '' , 'threetitle' => '' , 'threevalue' => ''
		,'fouricon' => '' , 'fourtitle' => '' , 'fourvalue' => ''
		,'fiveicon' => '' , 'fivetitle' => '' , 'fivevalue' => ''
		,'sixicon' => '' , 'sixtitle' => '' , 'sixvalue' => ''
		,'sevenicon' => '' , 'seventitle' => '' , 'sevenvalue' => ''
		,'eighticon' => '' , 'eighttitle' => '' , 'eightvalue' => ''
		,'nineicon' => '' , 'ninetitle' => '' , 'ninevalue' => ''
		,'tenicon' => '' , 'tentitle' => '' , 'tenvalue' => ''), $atts));
	
	if($ribbon == 'yes'){
		$ribbontags = '<div class="ribbon ribbon-large">
							<div class="banner">
								<div class="text">' . esc_attr($ribbontext) . '</div>
							</div>
						</div>';
	} else {
		$ribbontags = '';
	}
	
	if($onetitle == ''){$onetag = '';}else{$onetag = '<li><span><i class="fa fa-' . $oneicon . '"></i> ' . $onetitle . '</span><strong>' . $onevalue . '</strong></li>';}
	if($twotitle == ''){$twotag = '';}else{$twotag = '<li><span><i class="fa fa-' . $twoicon . '"></i> ' . $twotitle . '</span><strong>' . $twovalue . '</strong></li>';}
	if($threetitle == ''){$threetag = '';}else{$threetag = '<li><span><i class="fa fa-' . $threeicon . '"></i> ' . $threetitle . '</span><strong>' . $threevalue . '</strong></li>';}
	if($fourtitle == ''){$fourtag = '';}else{$fourtag = '<li><span><i class="fa fa-' . $fouricon . '"></i> ' . $fourtitle . '</span><strong>' . $fourvalue . '</strong></li>';}
	if($fivetitle == ''){$fivetag = '';}else{$fivetag = '<li><span><i class="fa fa-' . $fiveicon . '"></i> ' . $fivetitle . '</span><strong>' . $fivevalue . '</strong></li>';}
	if($sixtitle == ''){$sixtag = '';}else{$sixtag = '<li><span><i class="fa fa-' . $sixicon . '"></i> ' . $sixtitle . '</span><strong>' . $sixvalue . '</strong></li>';}
	if($seventitle == ''){$seventag = '';}else{$seventag = '<li><span><i class="fa fa-' . $sevenicon . '"></i> ' . $seventitle . '</span><strong>' . $sevenvalue . '</strong></li>';}
	if($eighttitle == ''){$eighttag = '';}else{$eighttag = '<li><span><i class="fa fa-' . $eighticon . '"></i> ' . $eighttitle . '</span><strong>' . $eightvalue . '</strong></li>';}
	if($ninetitle == ''){$ninetag = '';}else{$ninetag = '<li><span><i class="fa fa-' . $nineicon . '"></i> ' . $ninetitle . '</span><strong>' . $ninevalue . '</strong></li>';}
	if($tentitle == ''){$tentag = '';}else{$tentag = '<li><span><i class="fa fa-' . $tenicon . '"></i> ' . $tentitle . '</span><strong>' . $tenvalue . '</strong></li>';}	
	
	
	return '
            <div class="price-chart-container">                    
                <div style="background:' . $tablecolor . ';" class="price-chart">                    
					' . $ribbontags . '
                    <h4>' . esc_attr($tabletitle) . '</h4>
                    <h5>' . esc_attr($tablesubtitle) . '</h5>
                    <div class="price">
                        <small>' . esc_attr($currency) . '</small><span>' . esc_attr($price) . '</span>' . esc_attr($separator) . esc_attr($period) . '
                    </div>
                    <ul>
                        ' . $onetag . $twotag . $threetag . $fourtag . $fivetag . $sixtag . $seventag . $eighttag . $ninetag . $tentag . '
                    </ul>
                    <div class="buy-now">
                        <a style="background:' . $linkcolor . ';" target="_blank" href="' . esc_url($url) . '" class="button brand-1 full-width"><i class="fa fa-' . $urlicon . '"></i> ' . esc_attr($urltitle) . '</a>
                    </div>
                </div>
            </div>
	';
}


/*------------------------------------------------------
Nexus Lined Header
-------------------------------------------------------*/
function nexus_lined_header($atts, $content = null) {
	extract(shortcode_atts(array('normaltext' => '' , 'textcolor' => '','highlighttext' => '', 'highlighttextcolor' => ''), $atts));
	
	return '
        <header class="what-we-did">
            <div class="section-title">
                <h4><span style="color:' . $textcolor . ';">' . esc_attr($normaltext) . ' <i style="color:' . $highlighttextcolor . ';">' . esc_attr($highlighttext) . '</i></span></h4>
            </div>
        </header>	
	';
}



/*------------------------------------------------------
Nexus Header Title without Icon
-------------------------------------------------------*/
function nexus_header_without_icon($atts, $content = null) {
	extract(shortcode_atts(array('normaltext' => '' , 'boldtext' => '' , 'desc' => '' , 'align' => '' , 'textcolor' => '','highlighttext' => '', 'highlighttextcolor' => '', 'highlightbackgroundcolor' => ''), $atts));
	
	if($align == 'center'){$centerClass = 'sub-text-center';} else {$centerClass = '';}
	
	return '
        <div class="nexus-header-title sep active">
            <div class="section-title">
				<h2 style="text-align:' . $align . '; color:' . $textcolor . ';">' . esc_attr($normaltext) . '<span style="color:' . $highlighttextcolor . '; background:' . $highlightbackgroundcolor . ';">' . esc_attr($highlighttext) . '</span></h2>
                <h3 class="nexus-normal-header-heading" style="text-align:' . $align . '; color:' . $textcolor . ';">' . esc_html($boldtext) . '</h3>
            </div>
			<p class="sub-text ' . $centerClass . '" style="text-align:' . $align . ';color:' . $textcolor . ';">' . esc_html($desc) . '</p>
        </div>	
	';
}




/*------------------------------------------------------
Nexus Team Members
-------------------------------------------------------*/
function nexus_team_members($atts, $content = null) {
	extract(shortcode_atts(array('number' => '3'), $atts));

	$return_string = '<div class="team"><div class="row bp2 team-members">';
	
	$loop = new WP_Query(array('post_type' => 'team', 'posts_per_page' => $number));

	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
			
		if(get_post_meta(get_the_ID(), 'Dribbble URL', true) != ''){
			$dribbble_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Dribbble URL', true)) . '" class="icon-lrg tooltip" data-tip="' . __("Dribbble" , "insperia" ) . '">
									<i class="fa fa-dribbble"></i>
								</a>';
		} else {$dribbble_string ='';}
		
		if(get_post_meta(get_the_ID(), 'Facebook URL', true) != ''){
			$facebook_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Facebook URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Facebook" , "sentient") .'">
									<i class="fa fa-facebook"></i>
								</a>';
		} else {$facebook_string ='';}
		
		if(get_post_meta(get_the_ID(), 'Twitter URL', true) != ''){
			$twitter_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Twitter URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Twitter" , "sentient") .'">
									<i class="fa fa-twitter"></i>
								</a>';
		} else {$twitter_string ='';}
		
		if(get_post_meta(get_the_ID(), 'LinkedIn URL', true) != ''){
			$linkedin_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'LinkedIn URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("LinkedIn" , "sentient") .'">
									<i class="fa fa-linkedin"></i>
								</a>';
		} else {$linkedin_string ='';}	
		
		if(get_post_meta(get_the_ID(), 'Google URL', true) != ''){
			$google_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Google URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Google" , "sentient") .'">
									<i class="fa fa-google-plus"></i>
								</a>';
		} else {$google_string ='';}

		if(get_post_meta(get_the_ID(), 'Pinterest URL', true) != ''){
			$flickr_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Flickr URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Flickr" , "sentient") .'">
									<i class="fa fa-flickr"></i>
								</a>';
		} else {$flickr_string ='';}		
		
		if(get_post_meta(get_the_ID(), 'Behance URL', true) != ''){
			$behance_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Behance URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Behance" , "sentient") .'">
									<i class="fa fa-behance"></i>
								</a>';
		} else {$behance_string ='';}			
		
		if(get_post_meta(get_the_ID(), 'Deviantart URL', true) != ''){
			$deviantart_string = '<a target="_blank" href="' . esc_url(get_post_meta(get_the_ID(), 'Deviantart URL', true)) . '" class="icon-lrg tooltip" data-tip="'. __("Deviantart" , "sentient") .'">
									<i class="fa fa-deviantart"></i>
								</a>';
		} else {$deviantart_string ='';}			
		
		$get_team_position =  get_post_meta(get_the_ID(), 'Team Member Position', true);
		
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
		
		$return_string .= '
			<div class="span-4 team-member">
                <div class="team-pic">
                    <div class="mask">
                        <a href="' . $feat_image . '" class="icon-lrg-border-round">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    '  . get_the_post_thumbnail( get_the_ID() , 'full' ) .  '
                </div>
                <h4>' . get_the_title() . '</h4>
                <h5>' . $get_team_position . '</h5>
                <p>' . get_the_content() . '</p>
                <div class="social-icons">
					' . $facebook_string . $linkedin_string . $twitter_string . $dribbble_string . $google_string . $flickr_string . $behance_string . $deviantart_string . '								
                </div>
            </div>';

	endwhile;
	endif;		
	
	$return_string .='</div></div>';
			
	wp_reset_postdata();	
	
   return $return_string;	
}



	


/*------------------------------------------------------
Nexus Services Desktop
-------------------------------------------------------*/
function nexus_services_desktop($atts, $content = null) {
	extract(shortcode_atts(array('number' => '6' , 'image' => ''), $atts));
	
	$getimageurlarray = wp_get_attachment_image_src( $image , 'full');
	if( $getimageurlarray ) {$getimageurl = $getimageurlarray[0];} else {$getimageurl = '';}
	
	$locationClass = 'wcu-left';
	$count = 1;
	
	$return_string = '<div class="why-choose-us">
						<div class="wcu-content">
							<div class="wcu-graphic">
								<img src="' . $getimageurl . '" alt="" />
							</div>
							<div class="wcu-features nexus-wcu-features">';
	
	$loop = new WP_Query(array('post_type' => 'servicesdesktop', 'posts_per_page' => $number));

	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
		if($count % 2 == 0){$locationClass = 'wcu-right';}else{$locationClass = 'wcu-left';}
		$return_string .= '
                <div class="widget wcu-feature ' . $locationClass . '">
                    <div class="widget-content">
                        <i class="livicon" data-n="' . get_post_meta(get_the_ID(), 'Animated Icon', true) . '" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
                        <div class="title">
                            <h4>' . get_the_title() . '</h4>
                            <h5>' . get_post_meta(get_the_ID(), 'Services Title Description', true) . '</h5>
                        </div>
                        <p>' . get_the_content() . '</p>
                    </div>
                </div>';
		
		$count = $count + 1;
		
	endwhile;
	endif;		
	
	$return_string .= '</div>
						</div>
							</div>';
			
	wp_reset_postdata();	
	
   return $return_string;	
}



/*------------------------------------------------------
Nexus Services
-------------------------------------------------------*/
function nexus_services($atts, $content = null) {
	extract(shortcode_atts(array('number' => '6'), $atts));
	
	$return_string = '<div class="owl-carousel services-slider">';
	
	$loop = new WP_Query(array('post_type' => 'services', 'posts_per_page' => $number));

	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();

		$return_string .= '
            <div class="widget service">
                <div class="widget-content">
                    <div>
                        <i class="livicon" data-n="' . get_post_meta(get_the_ID(), 'Animated Icon', true) . '" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
                        <div class="title">
                            <h4>' . get_the_title() . '</h4>
                            <h5>' . get_post_meta(get_the_ID(), 'Services Title Description', true) . '</h5>
                        </div>
                    </div>
                    <p>' . get_the_content() . '</p>
                </div>
            </div>';
	endwhile;
	endif;		
	
	$return_string .= '</div>
						<div class="nav-carousel nexus-services-slider">
							<div class="icon-round-border-lrg nav-prev">
								<i class="fa fa-angle-left"></i>
							</div>
							<div class="icon-round-border-lrg nav-next">
								<i class="fa fa-angle-right"></i>
							</div>
						</div>';
			
	wp_reset_postdata();	
	
   return $return_string;	
}




/*------------------------------------------------------
Nexus Blog - Shortcode
-------------------------------------------------------*/
function nexus_blog( $atts, $content = null ) {
	extract(shortcode_atts(array('noofposts' => ''), $atts));
	
	global $prof_default;
	
	$return_string = '<div class="row blog-items">';
	
	$loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => $noofposts));
	
	$readmoretxt = __('Read more' , 'sentient');
	$counter = 1;
	$galleryids = '';
	$getText = '';
	$views = __('Number of Views','sentient');
	$postcomments = __('Post Comments','sentient');
	$postdate = __('Post Date','sentient');
	$insting = __('in' , 'sentient');
	

	
	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
	
	$terms = get_the_terms(get_the_ID() , "category");
	$count = count($terms); 
	$cat_string  = '';
	$catCount = 1;
	if ( $count > 0 ){  
	  
		foreach ( $terms as $term ) {  
			if($term->name != 'Uncategorized' && $term->name != 'uncategorized' && $catCount < 2){
				$termname = strtolower($term->name);  
				$cat_string = '<a href="' . get_term_link($term) . '" class="' . $termname . '" title="'. $term->name . '"> ' . $term->name . ' </a>';
				$cat_string = '<small>' . __("Posted in" , "insperia") . ' ' . $cat_string . '</small>';
			}
			$catCount = $catCount + 1;
		}  
	}  		
	
	
	$return_string .='
			<div class="span-4 blog-item">';

			if(has_post_thumbnail()){
			   $return_string .='
			   <a href="'. esc_url(get_permalink()) .'" class="thumb">                  
                    ' . get_the_post_thumbnail( get_the_ID() ,  'nexus-blog-thumb' ) . '
                </a>
                <a href="' . esc_url(get_permalink()) . '" class="modal-image profile profile-alt">
					'. get_avatar( get_the_author_meta( 'ID' ), 75 ) .'
                </a>';			
			}

			$return_string .=' <div class="date">
                    <span>' . get_the_time('M') . '</span>
                    <span>' . get_the_time('j') . '</span>
                </div>
                <h4><a href="'. esc_url(get_permalink()) .'">'. get_the_title() .'</a></h4>
                <h5>'. __("Posted by " , "insperia") .'<a href="'. esc_url(get_permalink()) .'">'. get_the_author() .'</a></h5>
                <p>' . strip_shortcodes(wp_trim_words( get_the_content(), 23 )) . '</p>
                <a class="button round brand-1" href="'. esc_url(get_permalink()) .'">' . __("Read More" , "insperia") . '</a>
                ' . $cat_string . '
            </div>';

	endwhile;
	endif;

	$return_string .='</div>';
	
	wp_reset_postdata();
	
	return $return_string;	

}



/*------------------------------------------------------
Nexus Earth Slider
-------------------------------------------------------*/
function nexus_earth_slider($atts, $content = null) {

	extract(shortcode_atts(array('noofposts' => '3'), $atts));
	
	$loop = new WP_Query(array('post_type' => 'earthslider', 'posts_per_page' => $noofposts));
	
	$count = 0;
	$return_string = '<section class="section primary welcome inactive" id="s-welcome">
						<div class="container">
							<div class="welcome-titles">';
	
	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
		$count = $count + 1;
		$return_string .= '
					<header class="welcome-content">
						' . do_shortcode(get_the_content()) . '
					</header>';
				
	endwhile;
	endif;		
	$x = 0;
	$active = '';
	$return_string .= '</div>
						<div class="earth">
							<img src="'. get_template_directory_uri() .'/images/earth.png" alt="earth" />
							<div class="pins">';
							
							for ($x=0; $x < $count; $x++)
							{
									if($x==0){$active='active';}else{$active='';}
							
									$return_string .= '<div class="pin-wrapper ' . $active . '">
										<div class="pin"></div>
									</div>';
							} 							

	$return_string .='</div>
						</div>
						</div>
						<div class="nav-carousel">
							<div class="icon-round-border-lrg nav-prev">
								<i class="fa fa-angle-left"></i>
							</div>
							<div class="icon-round-border-lrg nav-next">
								<i class="fa fa-angle-right"></i>
							</div>
						</div>
					</section>';

	wp_reset_postdata();	
	
   return $return_string;	

}	


/*------------------------------------------------------
Nexus Portfolio
-------------------------------------------------------*/
function nexus_portfolio($atts, $content = null) {
	extract(shortcode_atts(array('number' => '6'), $atts));
	
	$loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => $number));
	
	$return_string = '<div class="portfolio-items">';
	
	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );

	$return_string .= '			
				<div class="portfolio-item">
					<div class="controls">
						<a href="'. esc_url(get_permalink()) .'" class="icon-round-border">
							<i class="fa fa-link"></i>
						</a>
						<a href="' . $feat_image .'" class="icon-round-border icon-view">
							<i class="fa fa-search"></i>
						</a>
					</div>
					<h4><a href="'. esc_url(get_permalink()) .'">' . get_the_title() . '</a></h4>
					<p>' . strip_shortcodes(wp_trim_words( get_the_excerpt(), 15 )) . '</p>
					' . get_the_post_thumbnail( get_the_ID() ,  'nexus-portfolio-thumb' ) . '
				</div>';
	endwhile;
	endif;
	
	$return_string .= '</div>';

	wp_reset_postdata();	
	
   return $return_string;	
}




/*------------------------------------------------------
Nexus Testimonial
-------------------------------------------------------*/
function nexus_testimonial($atts, $content = null) {
	extract(shortcode_atts(array('number' => '3'), $atts));
	
	$loop = new WP_Query(array('post_type' => 'testimonial', 'posts_per_page' => $number));
	
	$return_string = '<div class="testimonials-slider owl-carousel">';
			
	if ( $loop ) :   
	while ( $loop->have_posts() ) : $loop->the_post();
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );

	$return_string .= '
            <div class="testimonial">
                <div class="profile">   
                    <a class="modal-image" href="' . $feat_image . '">      
                        ' . get_the_post_thumbnail( get_the_ID() ,  'nexus-testimonial-thumb' ) . '
                    </a>
                </div>
                <blockquote>
                    ' . get_the_content() . '
                    <h5><cite>' . get_the_title() . ' - ' . esc_attr(get_post_meta(get_the_ID(), 'Person Company', true)) . '</cite></h5>
                </blockquote>
            </div>';
	endwhile;
	endif;		
	
	$return_string .= '</div>
	        <div class="nexus-testimonials-slider nav-carousel">
				<div class="icon-round-border-lrg nav-prev">
					<i class="fa fa-angle-left"></i>
				</div>
				<div class="icon-round-border-lrg nav-next">
					<i class="fa fa-angle-right"></i>
				</div>
			</div>';
			
	wp_reset_postdata();	
	
   return $return_string;	
}





/*------------------------------------------------------
Nexus Desktop Slider - Shortcode
-------------------------------------------------------*/
function nexus_desktop_slider($atts, $content = null) {
	
	extract(shortcode_atts(array('images' => ''), $atts));
	
	$returnedvalue = '';
	$splitImagesArray = explode(",", $images);
	$splitImagesArraySize = count($splitImagesArray);
	$getimageurlarray = '';
	$imacPath = get_template_directory_uri() . '/images/desktop-off.png';
	$returnedvalue .= '<div class="project-carousel">
							<div class="project-preview">
								<img src="' . $imacPath . '" alt="Single Project" />
								<div class="owl-carousel previews project-gallery" id="project-gallery">';		
	
	for ($x=0; $x < $splitImagesArraySize; $x++)
	{
		$getimageurlarray = wp_get_attachment_image_src( $splitImagesArray[$x] , 'full');

		$returnedvalue .= '
                    <a href="' . $getimageurlarray[0] . '">
                        <img src="' . $getimageurlarray[0] . '" alt="" />
                    </a>';

	} 

	
	$returnedvalue .='</div></div><div class="nav-carousel">
                <div class="icon-round-border-lrg nav-prev">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="icon-round-border-lrg nav-next">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div></div>';
	
	return $returnedvalue;	
	
}

/*------------------------------------------------------
Nexus Clients - Shortcode
-------------------------------------------------------*/
function nexus_clients($atts, $content = null) {
	
	extract(shortcode_atts(array('images' => ''), $atts));

	$returnedvalue = '';
	$splitImagesArray = explode(",", $images);
	$splitImagesArraySize = count($splitImagesArray);
	$getimageurlarray = '';
	$returnedvalue .= '<div class="owl-carousel clients-slider">';		
	
	for ($x=0; $x < $splitImagesArraySize; $x++)
	{
		$getimageurlarray = wp_get_attachment_image_src( $splitImagesArray[$x] , 'full');
		$alt = get_post_meta( $splitImagesArray[$x], '_wp_attachment_image_alt', true );
		if($alt == ''){$FinalAlt = $getimageurlarray[0];}else{ $FinalAlt = $alt;}

		$returnedvalue .= '
		            <a target="_blank" href="' . $FinalAlt . '">                     
                        <img src="' . $getimageurlarray[0] . '" alt="Image" />
                    </a>';

	} 

	
	$returnedvalue .='</div>';
	
	return $returnedvalue;	

}



/*------------------------------------------------------
Insperia Homepage Row End - ShortCode
-------------------------------------------------------*/
function nexus_homepage_container_end($atts, $content = null) {
   return '</div></div>';
}


/*------------------------------------------------------
Insperia Homepage Row Wide Start - Shortcode
-------------------------------------------------------*/
function nexus_homepage_container_wide($atts, $content = null) {
	
	extract(shortcode_atts(array('type' => '','repeat' => 'yes', 'background' => '', 'color' => '#ffffff' , 'font' => '#666666' , 'paddingtop' => '40px' , 'paddingbottom' => '40px'), $atts));
	
	if($repeat == 'yes'){$getrepeat = 'repeat'; $backcover = 'auto';}else{$getrepeat = 'no-repeat'; $backcover = 'cover';}

	if($type == 'yes'){
		return '<div class="homepage-container-design homepage-container-design-wide" style="background:'. $color .'; color:'. $font .'; padding-top:'. $paddingtop .'; padding-bottom:'. $paddingbottom .';">
			<div class="homepage-container-design-inner">';
	}
	else
	{
		$getimageurlarray = wp_get_attachment_image_src( $background , 'full');
		if( $getimageurlarray ) {$getimageurl = $getimageurlarray[0];} else {$getimageurl = '';}
		return '<div class="homepage-container-design homepage-container-design-wide" style="background-image:url('. $getimageurl .');color:'. $font .';background-repeat:'. $getrepeat .'; padding-top:'. $paddingtop .'; padding-bottom:'. $paddingbottom .'; background-size:'. $backcover .';">
			<div class="homepage-container-design-inner">';
	}

}


/*------------------------------------------------------
Insperia Page Section - Shortcode
-------------------------------------------------------*/
function nexus_page_section( $atts, $content = null ) {
	extract(shortcode_atts(array('id' => ''), $atts));

	return '<div id="' . $id . '"></div>';		

}

/*------------------------------------------------------
Insperia Homepage Row Start - Shortcode
-------------------------------------------------------*/

function nexus_homepage_container($atts, $content = null) {
	
	extract(shortcode_atts(array('type' => '','repeat' => 'yes', 'backgroundsize' => '' , 'backgroundposition' => '' , 'background' => '', 'color' => '#ffffff' , 'font' => '#666666' , 'paddingtop' => '40px' , 'paddingbottom' => '40px' , 'parallax' => ''), $atts));
	

	if($repeat == 'yes'){$getrepeat = 'repeat';}else{$getrepeat = 'no-repeat';}
	
	if($parallax == 'yes'){$makeItParallax = 'make-it-parallax';} else {$makeItParallax = '';}
	
	$returnedvalue = '';
	
	if($type == 'yes'){
		$returnedvalue = '<div class="homepage-container-design" style="background:'. $color .'; color:'. $font .'; padding-top:'. $paddingtop .'; padding-bottom:'. $paddingbottom .';">
			<div class="homepage-container-design-inner">';
	}
	else
	{
		$getimageurlarray = wp_get_attachment_image_src( $background , 'full');
		if( $getimageurlarray ) {$getimageurl = $getimageurlarray[0];} else {$getimageurl = '';}
		$returnedvalue = '<div class="homepage-container-design ' . $makeItParallax . '" style="background-image:url('. $getimageurl .');color:'. $font .';background-repeat:'. $getrepeat .'; padding-top:'. $paddingtop .'; padding-bottom:'. $paddingbottom .'; background-size:' . $backgroundsize . '; background-position:' . $backgroundposition . ';">
			<div class="homepage-container-design-inner">';
	}

		return $returnedvalue;

}
	

?>