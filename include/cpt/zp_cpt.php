<?php 

// ZP Custom Post Types Initialization

function zp_custom_post_type() {
	if ( ! class_exists( 'Super_CPT' ) )
	
	return;
	
/*----------------------------------------------------*/
// Add Slide Custom Post Type
/*---------------------------------------------------*/

	$slide_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
		'menu_icon' => get_stylesheet_directory_uri().'/include/cpt/images/slide.png',
	);
	
	// register slide post type
	
	$slide = new Super_Custom_Post_Type( 'slide', 'Slide', 'Slides',  $slide_custom_default );
	$slideshow = new Super_Custom_Taxonomy( 'slideshow' ,'Slideshow', 'Slideshows', 'cat' );
	connect_types_and_taxes( $slide, array( $slideshow ) );
	
	$slide->add_meta_box( array(
		'id' => 'slide-order',
		'context' => 'side',
		'fields' => array(
			'slide_number_value' => array( 'type' => 'text', 'data-zp_desc' => __( 'Define slide order. Ex. 1,2,3,4,...','start') ),
		)
	) );
	
	// manage slide columns
	
	function zp_add_slide_columns($columns) {
		return array(
			'cb' => '<input type="checkbox" />',
			'title' => __('Title', 'start'),
			'slideshow' => __('Slideshow', 'start'),
			'slide_order' =>__( 'Slide Order', 'start'),
			'date' => __('Date', 'start'),
		);
	}
	
	add_filter('manage_slide_posts_columns' , 'zp_add_slide_columns');
	
	function zp_custom_slide_columns( $column, $post_id ) {
		switch ( $column ) {
			case 'slideshow' :
				$terms = get_the_term_list( $post_id , 'slideshow' , '' , ',' , '' );
				if ( is_string( $terms ) )
					echo $terms;
				else
					_e( 'Unable to get slideshows(s)', 'start' );
					break;
			case 'slide_order' :
				echo get_post_meta( $post_id , 'slide_number_value' , true );
				break;
		}
	}
	
	add_action( 'manage_posts_custom_column' , 'zp_custom_slide_columns', 10, 2 );
	
/*----------------------------------------------------*/
// Add Portfolio Custom Post Type
/*---------------------------------------------------*/

	$portfolio_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions','genesis-layouts', 'genesis-seo'),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register portfolio post type
	$portfolio = new Super_Custom_Post_Type( 'portfolio', 'Portfolio', 'Portfolio',  $portfolio_custom_default );
	$portfolio_category = new Super_Custom_Taxonomy( 'portfolio_category' ,'Portfolio Category', 'Portfolio Categories', 'cat' );
	connect_types_and_taxes( $portfolio, array( $portfolio_category ) );

	$portfolio->add_meta_box( array(
		'id' => 'portfolio-settings',
		'context' => 'normal',
		'priotity' => 'high',
		'fields' => array(
			'video_link' => array( 'label' => __('Video Link','start'), 'type' => 'text', 'data-zp_desc' => __('Add video link here. Video link format: Youtube: "http://www.youtube.com/watch?v=7HKoqNJtMTQ", Vimeo: "http://vimeo.com/123123"','start') ),
			'button_label' => array( 'label' => __('Button Label','start'), 'type' => 'text', 'data-zp_desc' => __('Add button label','start') ),
			'button_link' => array( 'label' => __('Button Link','start'), 'type' => 'text', 'data-zp_desc' => __( 'Add button link','start') ),
			'date_label' => array( 'label' => __('Date Label','start'), 'type' => 'text', 'data-zp_desc' => __( 'Date Label','start') ),
			'date_value' => array( 'label' => __('Date Value','start'), 'type' => 'text', 'data-zp_desc' => __( 'Date Value.','start') ),
			'client_label' => array( 'label' => __('Client Label','start'), 'type' => 'text', 'data-zp_desc' => __( 'Client Label.','start') ),
			'client_value' => array( 'label' => __('Client Value','start'), 'type' => 'text', 'data-zp_desc' => __( 'Client Value.','start') ),
			'category_label' => array( 'label' => __('Category Label','start'), 'type' => 'text', 'data-zp_desc' => __( 'Category Label.','start') )
		)
	  )
	);
	
	// manage portfolio columns
	function zp_add_portfolio_columns($columns) {
		return array(
			'cb' => '<input type="checkbox" />',
			'title' => __('Title', 'start'),
			'portfolio_category' => __('Portfolio Category', 'start'),
			'author' =>__( 'Author', 'start'),
			'date' => __('Date', 'start'),
		);
	}
	
	add_filter('manage_portfolio_posts_columns' , 'zp_add_portfolio_columns');
	
	function zp_custom_portfolio_columns( $column, $post_id ) {
		switch ( $column ) {
			case 'portfolio_category' :
				$terms = get_the_term_list( $post_id , 'portfolio_category' , '' , ',' , '' );
					if ( is_string( $terms ) )
						echo $terms;
					else
						_e( 'Unable to get portfolio category(s)', 'start' );
					break;
			}
	}
	add_action( 'manage_posts_custom_column' , 'zp_custom_portfolio_columns', 10, 2 );

/*----------------------------------------------------*/
// Add Sections Custom Post Type
/*---------------------------------------------------*/
	$sections_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register portfolio post type
	
	$sections = new Super_Custom_Post_Type( 'section', 'Section', 'Sections',  $sections_custom_default );
	
	// add option box
	$sections->add_meta_box( array(
		'id' => 'section-option',
		'context' => 'normal',
		'priotity' => 'high',
		'fields' => array(
			'include_header_label' => array( 'label' => __('Include Title and Intro?','start'), 'type' => 'select', 'options' => array('yes' => 'Yes','no' => 'No'), 'data-zp_desc' => __('Select Yes to include title and intro in the section','start') ),
			'navigation_anchor' => array( 'type' => 'text', 'data-zp_desc' => __( 'e.g. portfolio, blog. Then in custom menu add #portfolio, #blog...','start') ),
			'section_intro' => array( 'type' => 'textarea', 'data-zp_desc' => __( 'Enter some section intro','start') ),
			'section_background_image' => array( 'type' => 'media', 'data-zp_desc' => __( 'Section background image.','start') ),
			'section_background_color' => array( 'type' => 'text', 'data-zp_desc' => __( 'Section background color.','start') ),
			'section_text_color' => array( 'type' => 'text', 'data-zp_desc' => __( 'Section text color.','start') ),
		)
	  )
	);

/*----------------------------------------------------*/
// Add Testimonial Custom Post Type
/*----------------------------------------------------*/
	$testimonial_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register portfolio post type
	$testimonials = new Super_Custom_Post_Type( 'testimonial', 'Testimonial', 'Testimonials',  $testimonial_custom_default );
	
	// testimonial Meta boxes
	$testimonials->add_meta_box( array(
		'id' => 'testimonial_option',
		'context' => 'side',
		'fields' => array(
			'position_title' => array( 'type' => 'text' ),
			'link' => array( 'type' => 'text' ),
		)
	) );

/*----------------------------------------------------*/
// Add Team Custom Post Type
/*----------------------------------------------------*/

	$team_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register Team post type
	$team = new Super_Custom_Post_Type( 'team', 'Team', 'Teams',  $team_custom_default );

	// register team metabox

	$team->add_meta_box( array(
		'id' => 'team_settings',
		'context' => 'normal',
		'fields' => array(
			'team_position' => array( 'type' => 'text', 'data-zp_desc' => __( 'Position','start') ),
			'team_link' => array( 'type' => 'text', 'data-zp_desc' => __( 'Link','start') ),
			'team_target' => array( 'label' => __( 'Link Target','start'), 'type' => 'select', 'options' => array('_blank' => '_blank','_self' => '_self', '_parent' => '_parent' ), 'data-zp_desc' => __( 'Target','start') ),
		)
	) );
		
	$team->add_meta_box( array(
		'id' => 'social_links',
		'context' => 'normal',
		'fields' => array(
			'dribbble' => array( 'type' => 'text', 'data-zp_desc' => __( 'Dribbble link','start') ),
			'flickr' => array( 'type' => 'text', 'data-zp_desc' => __( 'Flickr link','start') ),
			'github' => array( 'type' => 'text', 'data-zp_desc' => __( 'Github link','start') ),
			'twitter' => array( 'type' => 'text', 'data-zp_desc' => __( 'Twitter link','start') ),
			'facebook' => array( 'type' => 'text', 'data-zp_desc' => __( 'Facebook link','start') ),
			'google+' => array( 'type' => 'text', 'data-zp_desc' => __( 'Google+ link','start') ),
			'skype' => array( 'type' => 'text', 'data-zp_desc' => __( 'Skype link','start') ),
			'tumblr' => array( 'type' => 'text', 'data-zp_desc' => __( 'Tumblr link','start') ),
			'vimeo' => array( 'type' => 'text', 'data-zp_desc' => __( 'Vimeo link','start') ),
			'youtube' => array( 'type' => 'text', 'data-zp_desc' => __( 'Youtube link','start') ),
			'linkedin' => array( 'type' => 'text', 'data-zp_desc' => __( 'Linkedin link','start') ),
			'pinterest' => array( 'type' => 'text', 'data-zp_desc' => __( 'Pinterest link','start') ),
		)
	) );

/*----------------------------------------------------*/
// Add Service Custom Post Type
/*----------------------------------------------------*/

	$services_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register services post type
	$services = new Super_Custom_Post_Type( 'services', 'Service', 'Services',  $services_custom_default );
	
	// services metabox
	$services->add_meta_box( array(
		'id' => 'services_settings',
		'context' => 'normal',
		'fields' => array(
			'icon_type' => array( 'type' => 'select', 'options' => array('font-awesome' => 'Font-Awesome','glyphicons' => 'Glyphicons', 'image' => 'Image' ), 'data-zp_desc' => __( 'Select icons to use. Font-Awesome, Glyphicons or an Image.','start') ),
			'icon_class' => array( 'type' => 'text', 'data-zp_desc' => __( 'Add icon classes. For font-awesome classes, please refer to this link <a href="http://fontawesome.io/icons/">page</a>. For Glyphicons, refer to this <a href="http://getbootstrap.com/components/">page</a> ','start') ),
			'icon_link' => array( 'type' => 'text', 'data-zp_desc' => __( 'Service item link','start') ),
			'icon_target' => array( 'type' => 'select', 'options' => array('_blank' => '_blank','_self' => '_self', '_parent' => '_parent' ), 'data-zp_desc' => __( 'Target','start') ),
		)
	) );
	
/*----------------------------------------------------*/
// Pricing Table
/*----------------------------------------------------*/
	
	$pricing_custom_default = array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'menu_icon' =>  get_stylesheet_directory_uri().'/include/cpt/images/portfolio.png',
	);
	
	// register pricing post type
	$pricing = new Super_Custom_Post_Type( 'pricing', 'Pricing', 'Pricing',  $pricing_custom_default );

	// pricing metabox
	$pricing->add_meta_box( array(
		'id' => 'pricing_settings',
		'context' => 'normal',
		'fields' => array(
			'price' => array( 'type' => 'text', 'data-zp_desc' => __( 'Add price. Include currency symbol ( $, €, £)','start') ),
			'payment_terms' => array( 'type' => 'text', 'data-zp_desc' => __( 'Payment Terms. (per month, per year, annually,...etc.)','start') ),
			'best_price' => array( 'type' => 'select', 'options' => array('bestprice' => 'Best Price','normal' => 'Normal'), 'data-zp_desc' => __( 'Select if this is the best price to highlight','start') ),
			'button_label' => array( 'type' => 'text', 'data-zp_desc' => __( 'Button label (Sign Up, Join Now, Buy,... )','start') ),
			'button_link' => array( 'type' => 'text', 'data-zp_desc' => __( 'Button link','start') ),
		)
	) );	
}

add_action( 'after_setup_theme', 'zp_custom_post_type' );