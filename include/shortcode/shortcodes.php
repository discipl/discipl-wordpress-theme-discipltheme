<?php
/**-------------------------------------------------------------------
 * Theme Shortcodes
 --------------------------------------------------------------------*/

/**
 *	Column Shortcodes
 */

if ( !function_exists( 'zp_column_wrapper' ) ){
	function zp_column_wrapper( $atts, $content = null ){
		return '<div class="column_wrapper row">'.do_shortcode($content).'</div>';
	}
	add_shortcode( 'column_wrapper', 'zp_column_wrapper' );
}

if (!function_exists('zp_one_third')) {
	function zp_one_third( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
	   return '<div class="col-md-4 col-sm-4 col-xs-12'.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'zp_one_third');
}

if ( !function_exists( 'zp_one_half' ) ){
	function zp_one_half( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));

		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
		
		return '<div class="col-md-6 col-sm-6 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'one_half', 'zp_one_half' );
}

if ( !function_exists( 'zp_one_fourth' ) ){
	function zp_one_fourth( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';	
		}else{
			$align = 'text-left';	
		}
		
		return '<div class="col-md-3 col-sm-3 col-xs-12'.$align.'">' . do_shortcode($content) . '</div>'; 
	}
	add_shortcode( 'one_fourth', 'zp_one_fourth' );
}

/**
 *	Grid Columns
 */

if ( !function_exists( 'zp_column_grid_1' ) ){
	function zp_column_grid_1( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));	
		
		if( $align == 'center' ){
			$align = 'text-center';
		}elseif ( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		return '<div class="col-md-1 col-sm-1 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_1','zp_column_grid_1' );
}

if( !function_exists( 'zp_column_grid_2' )){
	function zp_column_grid_2( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';	
		}
		
		return '<div class="col-md-2 col-sm-2 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_2', 'zp_column_grid_2' );
}

if( !function_exists( 'zp_column_grid_3' )){
	function zp_column_grid_3( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-3 col-sm-3 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_3', 'zp_column_grid_3' );
}

if( !function_exists( 'zp_column_grid_4' )){
	function zp_column_grid_4( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-4 col-sm-4 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_4', 'zp_column_grid_4' );
}

if( !function_exists( 'zp_column_grid_5' )){
	function zp_column_grid_5( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-5 col-sm-5 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_5', 'zp_column_grid_5' );
}

if( !function_exists( 'zp_column_grid_6' )){
	function zp_column_grid_6( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-6 col-sm-6 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_6', 'zp_column_grid_6' );
}

if( !function_exists( 'zp_column_grid_7' )){
	function zp_column_grid_7( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-7 col-sm-3 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_7', 'zp_column_grid_7' );
}

if( !function_exists( 'zp_column_grid_8' )){
	function zp_column_grid_8( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-8 col-sm-8 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_8', 'zp_column_grid_8' );
}

if( !function_exists( 'zp_column_grid_9' )){
	function zp_column_grid_9( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-9 col-sm-9 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_9', 'zp_column_grid_9' );
}

if( !function_exists( 'zp_column_grid_10' )){
	function zp_column_grid_10( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-10 col-sm-10 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_10', 'zp_column_grid_10' );
}

if( !function_exists( 'zp_column_grid_11' )){
	function zp_column_grid_11( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-11 col-sm-11 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_11', 'zp_column_grid_11' );
}

if( !function_exists( 'zp_column_grid_12' )){
	function zp_column_grid_12( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => ''
		), $atts ));
		
		if( $align == 'center' ){
			$align = 'text-center';	
		}elseif( $align == 'right' ){
			$align = 'text-right';
		}else{
			$align = 'text-left';
		}
		
		return '<div class="col-md-12 col-sm-12 col-xs-12 '.$align.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode( 'column_grid_12', 'zp_column_grid_12' );
}

/**
 *	Services  Section
 */

if ( !function_exists( 'zp_services_section' )){
	function zp_services_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'columns' => '',
			'align' => '',
			'items' => '',
			'ids' => ''
		), $atts ));			
		return '<div class="services_section section"><div class="container"><div class="row">'.zp_display_services( $columns, $align , $items, $ids ). '</div></div></div>';
	}
	add_shortcode( 'services', 'zp_services_section' );
	
}

function zp_display_services( $columns, $align , $items, $ids ){
	global $post;
	
	$output='';

	//Check if there are set IDs
	if( $ids != '' ){
		$include_ids = explode( ',', str_replace( ' ', '',  $ids ) );
		$args = array('post_type'=> 'services', 'posts_per_page' => $items, 'post__in' => $include_ids );
	}else{
		$args = array('post_type'=> 'services', 'posts_per_page' => $items );
	}

	$recent = new WP_Query( $args );

	// check the number of columns
	if( $columns == 2 ){
		$columns = 'col-md-6 col-sm-6 col-xs-12';
	}elseif( $columns == 3 ){
		$columns = 'col-md-4 col-sm-6 col-xs-12';	
	}elseif ( $columns == 4 ){
		$columns = 'col-md-3 col-sm-6 col-xs-12';	
	}else{
		$columns = 'col-md-3 col-sm-6 col-xs-12';	
	}
	
	// check the content alignment
	if( $align == 'center' ){
		$align = 'text-center';
	}elseif ( $align == 'right' ){
		$align = 'text-right';	
	}else{
		$align = 'text-left';	
	}

	while($recent->have_posts()) : $recent->the_post();
	
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
		$icon_class = get_post_meta( $post->ID, 'icon_class', true );
		$icon_type = get_post_meta( $post->ID, 'icon_type', true );
		$icon_link = get_post_meta( $post->ID, 'icon_link', true );
		$icon_target = get_post_meta( $post->ID, 'icon_target', true );
		
		if( $icon_link != '' ){
			$icon_link_open = '<a href="'.esc_url( $icon_link ).'" target="'.$icon_target.'">';
			$icon_link_close = '</a>';
		}else{
			$icon_link_open = '';
			$icon_link_close = '';
		}

		$icon='';
		if( $icon_type == 'font-awesome' ){
			$icon = '<div class="thumbnail">'.$icon_link_open.'<div class="feature-icon icon-font"><i class="fa '.$icon_class.'"></i></div>'.$icon_link_close;
		}elseif( $icon_type == 'glyphicons' ){
			$icon = '<div class="thumbnail">'.$icon_link_open.'<div class="feature-icon icon-font"><span class="glyphicon '.$icon_class.'"></span></div>'.$icon_link_close;
		}else{
			$icon = '<div class="thumbnail">'.$icon_link_open.'<div class="feature-icon icon-image"><img alt="" src="'.$image_url.'" /></div>'.$icon_link_close;
		}
		$output .= '<div class="'.$columns.' '.$align.'">'.$icon.'<div class="caption"><h4>'.get_the_title().'</h4><p>'.do_shortcode( get_the_content() ).'</p></div></div></div>';	
	endwhile;
	wp_reset_query();	
	
	return $output;	
}

/**
 *	Image Ssection
 */
if (!function_exists( 'zp_image_section' ) ){
	function zp_image_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'image_url' => '',
			'link' => '',
			'title' => '',
			'desc' => '',
			'image_position' =>''
		), $atts ));
		
		if( $image_position == 'left' ){
			$image_position = 'pull-left';
			$text_position = 'pull-right';
		}else{
			$image_position = 'pull-right';	
			$text_position = 'pull-left';
		}
		
		if( $link ){
			$image = '<div class="col-md-6 '.$image_position.' "><a href="'.$link.'"><img class="img-responsive" alt="placeholder image" src="'.$image_url.'" /></a></div>';
		}else{
			$image = '<div class="col-md-6 '.$image_position.' gallery-popup section_image"><a href="'.$image_url.'"><img class="img-responsive" alt="placeholder image" src="'.$image_url.'" /></a></div>';
		}
		
		if( $title ){
			$title = '<h3>'.$title.'</h3>';	
		}
		
		if( $desc ){
			$desc = '<p class="lead">'.$desc.'</p>';	
		}
		
		return '<div class="info_image_section section"><div class="container"><div class="row">'.$image.'<div class="col-md-6 col-sm-6 col-xs-12 '.$text_position.'">'.$title.$desc.'<p>'.do_shortcode( $content ).'</p></div></div></div></div>';
	}
	add_shortcode( 'image_section','zp_image_section' );
}

/**
 *	Slider Section
 */

if ( !function_exists( 'zp_slider_section' )){
	function zp_slider_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'slidename' => '',
			'slideshow' => '',
			'caption' => '',
			'title' => '',
			'desc' => '',
			'slider_position' => ''
			), $atts ));
			
			//create slider
			$slidename = str_replace( ' ', '_', $slidename );
			$slider = zp_create_slider( $slidename, $slideshow, $caption );
			
			if( $slider_position == 'right' ){
				$slider_position = 'pull-right';
				$text_position = 'pull-left';	
			}else{
				$slider_position = 'pull-left';
				$text_position = 'pull-right';	
			}
			
			if($title){
				$title = '<h3>'.$title.'</h3>';	
			}
			if($desc){
				$desc = '<p class="lead">'.$desc.'</p>';	
			}
			
			return '<div class="info_slider_section section"><div class="container"><div class="row"><div class="col-md-6 '.$slider_position.'">'.$slider.'</div><div class="col-md-6 '.$text_position.'">'.$title.$desc.do_shortcode( $content ).'</div></div></div></div>';
			
	}
	add_shortcode( 'slider_section','zp_slider_section' );
}

function zp_create_slider( $slidename, $slideshow, $caption ){
	global $post;
	$output='';
	
	$recent = new WP_Query(array('post_type'=> 'slide', 'showposts' => '-1','orderby' => 'meta_value_num', 'meta_key'=>'slide_number_value','order'=>'ASC', 'slideshow' => $slideshow ));
	
	$output .='<div class="carousel slide" id="'.$slidename.'">';
	$output .= '<ol class="carousel-indicators">';
	
	$nav_buttons = $recent->found_posts;
	$i=0;
	while($i < $nav_buttons){
		if( $i == 0 ){
			$active = 'active';
	}else{
		$active ='';
	}
		$output .= '<li class="'.$active.'" data-slide-to="'.$i.'" data-target="#'.$slidename.'"></li>';
		$i++;
	}
	
	$output .= '</ol>';
	$output .= '<div class="carousel-inner">';
	
	
	$flag = 0;
	
	while($recent->have_posts()) : $recent->the_post();
		$flag++;
		if($flag == 1){
			$active = 'active';
		}else{
			$active = '';
		}
		
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
				
		$output .= '<div class="item gallery-popup '.$active.'">';
		
		$output .= '<a href="'.$image_url.'"><img class="img-responsive" alt="placeholder image" src="'.$image_url.'" /></a>';
		if( $caption == 'true'){
			$output .= '<div class="carousel-caption"><h4>'.get_the_title().'</h4>'.do_shortcode( get_the_content() ).'</div>';
		}
		
		$output .= '</div>';
	endwhile;wp_reset_query();
	
	$output .= '</div>';
	if( $flag > 1 ){
		$output .= '<a data-slide="prev" data-target="#'.$slidename.'" class="carousel-control left"><span class="glyphicon glyphicon-chevron-left"></span></a>';
		$output .= '<a data-slide="next" data-target="#'.$slidename.'" class="carousel-control right"><span class="glyphicon glyphicon-chevron-right"></span></a>';
	}
	$output .= '</div>';
	
	return $output;
}

/**
 *	Fullwidth Slider
 */

if (!function_exists( 'zp_fullwidth_slider' )){
	function zp_fullwidth_slider( $atts, $content = null ){
		extract( shortcode_atts( array(
			'slidename' => '',
			'slideshow' => '',
			'effect' => ''
			), $atts ));

		$slidename = str_replace( ' ', '_', $slidename );
		return '<div class="fullwidth_slider">'.zp_create_fullwidth_slider( $slidename, $slideshow, $effect ).'</div>';			
	}
	add_shortcode( 'fullwidth_slider', 'zp_fullwidth_slider' );
}

// create fullwidth slider
function zp_create_fullwidth_slider( $slidename, $slideshow, $effect ){
	global $post;
	
	$output='';
	if( $effect == 'fade' ){
		$slide_effect = 'carousel-fade';	
	}else{
		$slide_effect = '';
		$effect = '';
	}
	
	$recent = new WP_Query(array('post_type'=> 'slide', 'showposts' => '-1','orderby' => 'meta_value_num', 'meta_key'=>'slide_number_value','order'=>'ASC', 'slideshow' => $slideshow ));
	$output .='<div class="carousel slide '.$slide_effect.'" id="'.$slidename.'"><div class="slider_overlay"></div>';
	$output .= '<ol class="carousel-indicators">';
	
	$nav_buttons = $recent->found_posts;
	
	$i=0;
	
	while($i < $nav_buttons){
		if( $i == 0 ){
			$active = 'active';
		}else{
			$active ='';
		}
		
		$output .= '<li class="'.$active.'" data-slide-to="'.$i.'" data-target="#'.$slidename.'"></li>';
		$i++;
	}
	$output .= '</ol>';
	
	$output .= '<div class="carousel-inner">';
	
	$flag = 0;
	while($recent->have_posts()) : $recent->the_post();
		$flag++;
		
		if($flag == 1){
			$active = 'active';
		}else{
			$active = '';
		}
		
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
		$output .= '<div class="item '.$active.'" style="background-image: url('.$image_url.');">';
		//$output .= '<img class="img-responsive" alt="placeholder image" src="'.$image_url.'" />';
		$output .= '<div class="carousel-caption"><h1>'.get_the_title().'</h1>'.do_shortcode( get_the_content() ).'</div>';
		$output .= '</div>';
	endwhile; wp_reset_query();
	
	$output .= '</div>';
	if( $flag > 1 ){
		$output .= '<a data-slide="prev" data-target="#'.$slidename.'" class="carousel-control left"><span class="glyphicon glyphicon-chevron-left"></span></a>';
		$output .= '<a data-slide="next" data-target="#'.$slidename.'" class="carousel-control right"><span class="glyphicon glyphicon-chevron-right"></span></a>';
	}
	$output .= '</div>';
	
	return $output;
}

/**
 *	Video Section
 */

if (!function_exists( 'zp_video_section' )){
	function zp_video_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'src' => '',
			'title' => '',
			'height' => '',
			'width' => '',
			'desc' => '',
			'video_position' =>''
		), $atts ));

		if( $video_position == 'right'){
			$video_position = 'pull-right';
			$text_position = 'pull-left';
		}else{
			$video_position = 'pull-left';
			$text_position = 'pull-right';	
		}
	
		if( $title ){
			$title = '<h3>'.$title.'</h3>';
		}
		if( $desc ){
			$desc = '<p class="lead">'.$desc.'</p>';	
		}
		
		return '<div class="info_video_section section"><div class="container"><div class="row"><div class="col-md-6 '.$video_position.' gallery-popup fitvids"><iframe src="'.$src.'" height="'.$height.'" width="'.$width.'" ></iframe></div><div class="col-md-6 '.$text_position.'">'.$title.$desc.'<p>'.do_shortcode( $content ).'</p></div></div></div></div>';
	}
	
	add_shortcode( 'video_section','zp_video_section' );
}

/**
 *	Testimonial
 */

if ( !function_exists( 'zp_testimonial_section_wrapper' )){
	function zp_testimonial_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'ids' => ''
		), $atts ));

		return '<div class="testimonial_section section"><div class="container"><div class="row">'.zp_create_testimonials( $ids ).'</div></div></div>';		
	}
	add_shortcode( 'testimonial_section','zp_testimonial_section' );
}

// create testimonial function
function zp_create_testimonials( $ids ){
	global $post;
	
	$output='';

	//Check if there are set IDs
	if( $ids != '' ){
		$include_ids = explode( ',', str_replace( ' ', '',  $ids ) );
		$args = array('post_type'=> 'testimonial', 'posts_per_page' => -1, 'post__in' => $include_ids );
	}else{
		$args = array('post_type'=> 'testimonial', 'posts_per_page' => -1 );
	}
	
	$recent = new WP_Query( $args );
	
	$output .='<div class="carousel slide" id="testimonials-slider">';
	$output .= '<ol class="carousel-indicators">';
	
	$nav_buttons = $recent->found_posts;
	$i=0;
	while($i < $nav_buttons){
		$output .= '<li class="active" data-slide-to="'.$i.'" data-target="#testimonials-slider"></li>';
		$i++;
	}
	
	$output .= '</ol>';
	$output .= '<div class="carousel-inner">';
	
	$flag = 0;
	while($recent->have_posts()) : $recent->the_post();
		$flag++;
		if($flag == 1){
			$active = 'active';
		}else{
			$active = '';
		}
		
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
		$output .= '<div class="item '.$active.'">';
		$output .= '<div class="col-md-2 col-md-offset-1"><div class="quote-icon"><img alt="" src="'.$image_url.'" /></div></div>';
		$output .= '<div class="col-md-8 "><p class="lead">'.get_the_content().'</p><cite>'.get_the_title().', <a href="'.get_post_meta($post->ID, 'link', true).'">'.get_post_meta($post->ID, 'position_title', true).'</a></cite></div>';
		$output .= '</div>';
		
	endwhile;wp_reset_query();
	
	$output .= '</div>';
	$output .= '<a data-slide="prev" data-target="#testimonials-slider" class="carousel-control left"><span class="glyphicon glyphicon-chevron-left"></span></a>';
	$output .= '<a data-slide="next" data-target="#testimonials-slider" class="carousel-control right"><span class="glyphicon glyphicon-chevron-right"></span></a>';
	$output .= '</div>';
	
	return $output;
}

/**
 *	Portfolio Section
 */

if ( !function_exists( 'zp_portfolio_section' )){
	function zp_portfolio_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'columns' => '',
			'preselect_cat' => '',
			'lightbox' => ''
		), $atts ));
		return '<div class="portfolio_section section"><div class="container">'.zp_portfolio( $columns, $preselect_cat, $lightbox ).'</div></div>';
	}
	add_shortcode( 'zp_portfolio','zp_portfolio_section' );
}

//create portfolio section
function zp_portfolio( $columns , $preselect_cat, $lightbox ){
	global $post;
	
	$output='';
	$selected = '';
	$gallery_class = '';
	$size = '3col_portfolio';
	
	$recent = new WP_Query(array('post_type'=> 'portfolio', 'showposts' => '-1' ));
	$output .='<div id="filters" class="gallery-filter">';
	
	$output .= '<select> <option value="*">'.__( 'All', 'start' ).'</option>';
	$categories = get_categories( array( 'taxonomy' => 'portfolio_category' ) );
	
	foreach( $categories as $category ) :
		if( $preselect_cat === $category->slug  ){
			$selected = 'selected="selected"';
		}else{
			$selected='';
		}
		$output .=  '<option value=".'.$category->slug.'" '.$selected.'>'.$category->name.'</option>';
	endforeach;
	
	$output .= '</select></div>';
	$output .= '<div id="gallery-items">';
	
	//check the no of columns
	if( $columns == 2 ){
		$columns = 'col-md-6 col-sm-6 col-xs-12';
		$size = '2col_portfolio';
	}elseif( $columns == 3 ){
		$columns = 'col-md-4 col-sm-6 col-xs-12';
		$size = '3col_portfolio';
	}elseif( $columns == 4 ){
		$columns = 'col-md-3 col-sm-6 col-xs-12';
		$size = '4col_portfolio';
	}
	
	while($recent->have_posts()) : $recent->the_post();
	
	$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
	$image = get_the_post_thumbnail( $post->ID  , $size, array('class'=> 'img-responsive') );
	
	// get video link
	$video_link = get_post_meta( $post->ID, 'video_link', true );
		
	if(  $lightbox == 'true' ){
		// check if video link exists
		if( $video_link ){
			$gallery_class = 'gallery-video';
		}else{
			$gallery_class = 'gallery-image';
		}
	}else{
		$gallery_class = 'gallery-link';
	}
	$output .= '<div class="'.$columns.' gallery-item all '.$gallery_class.' '.zp_portfolio_items_term( $post->ID ).'">';
	if(  $lightbox == 'true' ){
		if( $video_link ){
			$output .= '<a href="'.$video_link.'">'.$image.'</a>';
		}else{
			$output .= '<a href="'.$image_url.'">'.$image.'</a>';
		}
	}else{
		$output .= '<a href="'.get_permalink().'">'.$image.'</a>';
	}
	$output .= '</div>';
	
	endwhile;
	wp_reset_query();
	
	$output .= '</div>';
	
	return $output;
}

// get portfolio terms
function zp_portfolio_items_term( $id ){
	
	$output = '';
	
	$terms = wp_get_post_terms( $id, 'portfolio_category' );
	$term_string = '';
		foreach( $terms as $term ){
			$term_string.=( $term->slug ).',';
		}
	$term_string = substr( $term_string, 0, strlen( $term_string )-1 );
	
	/** separate terms with space*/
	$string = str_replace( ","," ",$term_string );
	$output = $string." ";	
	
	return $output;	
	
}

/**
 *	Button Shortcode
 */

if (!function_exists( 'zp_button' )){
	function zp_button( $atts, $content = null ){
		extract( shortcode_atts( array(
			'link' => '',
			'size' => '',
			'class' => '',
			'inline' => ''
		),$atts ));
		
		if( $inline == 'true' ){
			$inline = 'inline';	
		}else{
			$inline = '';	
		}
		
		return '<a class="btn '.$class.' '.$inline.' '.$size.'" href="'.$link.'">'.$content.'</a>';		
	}
	
	add_shortcode( 'button', 'zp_button');
}

/**
 *	Accordion Section
 */

if ( !function_exists( 'zp_accordion_wrap' ) ){
	function zp_accordion_wrap( $atts, $content = null ){
		return ' <div class="panel-group accordion">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'accordion_wrap', 'zp_accordion_wrap' );
}

if ( !function_exists( 'zp_accordion' )){
	function zp_accordion( $atts, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'title' => ''
		), $atts));
		
		$id = str_replace( ' ', '_' , $id );
		
		$heading = '<div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#'.$id.'">'.$title.'</a></h4></div>';
		
		$content = '<div id="'.$id.'" class="panel-collapse collapse"><div class="panel-body"><p>'.do_shortcode( $content ).'</p></div></div> ';
		
		return '<div class="panel panel-default">'.$heading.$content.'</div>';
	}
	
	add_shortcode( 'accordion', 'zp_accordion' );
}

/**
 *	Alert Shortcodes
 */

if ( !function_exists( 'zp_alerts' )){
	function zp_alerts( $atts, $content = null ){
		extract( shortcode_atts( array(
			'class' => ''
		), $atts ));
		
	return '<div class="alert '.$class.'">'.do_shortcode( $content ).'</div>';		
	}
	add_shortcode( 'alert', 'zp_alerts' );
}

/**
 *	Dismissable  Section
 */

if ( !function_exists( 'zp_dismissable_alerts' )){
	function zp_dismissable_alerts( $atts, $content = null ){
		extract( shortcode_atts( array(
			'class' => ''
		), $atts ));
		
	return '<div class="alert '.$class.' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.do_shortcode( $content ).'</div>';		
	}
	add_shortcode( 'dismissable_alert', 'zp_dismissable_alerts' );
}

/**
 *	Team Section
 */

if ( !function_exists( 'zp_team_section' )){
	function zp_team_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'columns' => '',
			'align' => '',
			'ids' => ''
		), $atts ));
		return'<div class="team_section section"><div class="container"><div class="row">'.zp_display_team( $columns, $align, $ids ). '</div></div></div>';
	}
	add_shortcode ('team', 'zp_team_section');
}

function zp_display_team( $column, $align, $ids ){
	global $post;
	
	$output='';

	//Check if there are set IDs
	if( $ids != '' ){
		$include_ids = explode( ',', str_replace( ' ', '',  $ids ) );
		$args = array('post_type'=> 'team', 'posts_per_page' => -1, 'post__in' => $include_ids );
	}else{
		$args = array('post_type'=> 'team', 'posts_per_page' => -1 );
	}
	
	$recent = new WP_Query( $args );

	// check the number of columns
	if( $column == 2 ){
		$column = 'col-md-6 col-sm-6 col-xs-12';
	}elseif( $column == 3 ){
		$column = 'col-md-4 col-sm-6 col-xs-12 ';	
	}elseif ( $column == 4 ){
		$column = 'col-md-3 col-sm-6 col-xs-12 ';	
	}else{
		$column = 'col-md-3 col-sm-6 col-xs-12';	
	}
	
	// check the content alignment
	if( $align == 'center' ){
		$align = 'text-center';
	}elseif ( $align == 'right' ){
		$align = 'text-right';	
	}else{
		$align = 'text-left';	
	}

	while($recent->have_posts()) : $recent->the_post();	
	
	// team social links
	$social = '';
	if( get_post_meta( $post->ID, 'dribbble', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'dribbble', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'flickr', true ) != '' ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'flickr', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Flickr" target="_blank"><i class="fa fa-flickr"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'github', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'github', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Github" target="_blank"><i class="fa fa-github"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'pinterest', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'pinterest', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'twitter', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'twitter', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'facebook', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'facebook', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'google+', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'google+', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Google+" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'skype', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'skype', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Skype" target="_blank"><i class="fa fa-skype"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'tumblr', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'tumblr', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Tumblr" target="_blank"><i class="fa fa-tumblr"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'vimeo', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'vimeo', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Vimeo" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'youtube', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'youtube', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>';	
	}
	if( get_post_meta( $post->ID, 'linkedin', true ) ){
		$social .= '<li><a href="'.get_post_meta( $post->ID, 'linkedin', true ).'" class="tooltip-trigger mlm" title="" data-toggle="tooltip" data-original-title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>';	
	}	
	
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
		
		// Get link value
		$link = get_post_meta( $post->ID, 'team_link', true );
		$target = get_post_meta( $post->ID, 'team_target', true );

		if( $link != '' ){
			$image_link = '<a href="'.esc_url( $link ).'" target="'.$target.'"><img alt="placeholder" src="'.$image_url.'" /></a>';
		}else{
			$image_link = '<img alt="placeholder" src="'.$image_url.'" />';
		}

		$output .= '<div class="'.$column.' '.$align.'"><div class="thumbnail" ><div class="feature-icon">'.$image_link.'</div><div class="caption"><h4>'.get_the_title().'<br><small>'.get_post_meta( $post->ID, 'team_position', true ).'</small></h4><p>'.do_shortcode( get_the_content() ).'</p><ul class="team_social">'.$social.'</ul></div></div></div>';	
	endwhile;
	wp_reset_query();	
	
	return $output;	
}

/**
 *	Blog Section
 */

if ( !function_exists( 'zp_blog_section' ) ){
	function zp_blog_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'columns' => '',
			'items' => ''
		), $atts ));

		return '<div class="blog_section section"><div class="container">'.zp_blog( $columns , $items ).'</div></div>';
	}
	add_shortcode( 'blog_section', 'zp_blog_section' );
}

	function zp_blog( $columns, $items ){
		global $post;
		$output='';
		$size = '3col_blog';
		
		$recent = new WP_Query(array('post_type'=> 'post', 'posts_per_page' => $items ));
		
		$output .= '<div class="blog_items">';
		
		//check the no of columns
		
		$no_of_col = $columns;
		
		if( $columns == 2 ){
			$columns = 'col-md-6 col-sm-6 col-xs-12';
			$size = '2col_blog';
		}elseif( $columns == 3 ){
			$columns = 'col-sm-6 col-md-4 col-xs-12';
			$size = '3col_blog';
		}elseif( $columns == 4 ){
			$columns = 'col-md-3 col-sm-6 col-xs-12';
			$size = '4col_blog';
		}
		
		$flag = 0;
		
		while($recent->have_posts()) : $recent->the_post();
		
		$flag++;
		
		if($flag == 0 || ( ( $flag % ( $no_of_col ) ) == 1 ) ){
			$output .= '<div class="row">';
		}
		
		$image_url = wp_get_attachment_url(  get_post_thumbnail_id(  $post->ID  )  );
		$image = get_the_post_thumbnail( $post->ID  , $size, array('class'=> 'img-responsive') );
		
		// get the number of comments
		$num_comments = get_comments_number();

		if ( comments_open() ) {
			if ( $num_comments == 0 ) {
				$comments = __( 'No Comments' ,'start' );
			} elseif ( $num_comments > 1 ) {
				$comments = $num_comments . __( ' Comments' ,'start' );
			} else {
				$comments = __( '1 Comment' ,'start' );
			}
			$write_comments = '<a class="blog_comment" href="' . get_comments_link() .'">'. $comments.'</a>';
		} else {
			$write_comments =  __( 'Comments are OFF' ,'start' );
		}
		
		$output .= '<div class="'.$columns.'"><div class="thumbnail">';
		$output .= '<a href="'.get_permalink().'">'.$image.'</a>';
		$output .= '<div class="caption"><h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4><span class="blog_meta">'. get_the_date( 'F j, Y' ).$write_comments.'</span>'.get_the_content_limit( 100, '' ).'<a class="readmore btn btn-primary btn-lg" href="'.get_permalink().'">'.__( 'Read More','start' ).'</a></div>';
		$output .= '</div></div>';
		
		if(  $flag % ( $no_of_col )  == 0  ){
			$output .= '</div>';
		}
		
		endwhile;
		wp_reset_query();
		
		$output .= '</div>';
		
		return $output;
	}
	
/**
 *	Contact Section
 */

	if ( !function_exists( 'zp_contact_section' )){
		function zp_contact_section( $atts, $content = null ){
		
			return '<div class="contact_section section"><div class="container">'.do_shortcode( $content ).'</div></div>';
		}
		add_shortcode( 'contact_section', 'zp_contact_section' );
	}

/**
 *	Social
 */

if ( !function_exists( 'zp_social_icons' ) ){
	function zp_social_icons( $atts, $content = null ){
		extract( shortcode_atts( array(
			'align' => '',
			'color' => '',
			'hover_color' => '',
			'tooltip_color' => '',
			'tooltip_bg' => ''
		), $atts ));
		return '<div class="bottom-icons"><ul style="float:'.$align.'">'.do_shortcode( $content ).'</ul></div>';
	}
	add_shortcode( 'social_icons', 'zp_social_icons' );
}

if ( !function_exists( 'zp_social' )){
	function zp_social( $atts, $content = null ){
		extract( shortcode_atts( array(
			'name' => '',
			'link' => '',
			'label' => '',
			'target' => ''
		), $atts));
		
		if( 'dribbble' == $name ){
			$name = 'fa-dribbble';	
		}
		if( 'flickr' == $name ){
			$name = 'fa-flickr';	
		}
		if( 'github' == $name ){
			$name = 'fa-github';	
		}
		if( 'pinterest' == $name ){
			$name = 'fa-pinterest';
		}
		if( 'twitter' == $name ){
			$name = 'fa-twitter';	
		}
		if( 'facebook' == $name ){
			$name = 'fa-facebook';
		}
		if( 'google+' == $name ){
			$name = 'fa-google-plus-square';
		}
		if( 'skype' == $name ){
			$name = 'fa-skype';
		}
		if( 'tumblr' ==  $name ){
			$name = 'fa-tumblr';	
		}
		if( 'vimeo' == $name ){
			$name = 'fa-vimeo-square';	
		}
		if( 'youtube' == $name ){
			$name = 'fa-youtube';	
		}
		if( 'linkedin' == $name ){
			$name = 'fa-linkedin';	
		}
		
		if( '' == $target){
			$target = '_blank';	
		}
		
		return '<li><a href="'.$link.'" class="tooltip-trigger tooltip-light" title="" data-toggle="tooltip" data-original-title="'.$label.'" target="'.$target.'"><i class="fa '.$name.'"></i></a></li>';
	}
	add_shortcode( 'social','zp_social' );
}

/**
 *	Pricing Table
 */

if ( !function_exists( 'zp_pricing_section' ) ){
	function zp_pricing_section( $atts, $content = null )	{
		extract( shortcode_atts( array(
			'columns' => '',
			'ids' => ''
		), $atts ));
		
		return '<div class="pricing_section section"><div class="container">'.zp_pricing_display( $columns, $ids ).'</div></div>';
	}
	add_shortcode( 'pricing','zp_pricing_section' );
}

function zp_pricing_display( $column, $ids ){
	global $post;
	
	$output = '';
	$btn_class = '';

	//Check if there are set IDs
	if( $ids != '' ){
		$include_ids = explode( ',', str_replace( ' ', '',  $ids ) );
		$args = array('post_type'=> 'pricing', 'posts_per_page' => -1, 'post__in' => $include_ids );
	}else{
		$args = array('post_type'=> 'pricing', 'posts_per_page' => -1 );
	}
	
	$recent = new WP_Query( $args );

	// check the number of columns
	if( $column == 2 ){
		$column = 'col-md-6 col-sm-6 col-xs-12';
	}elseif( $column == 3 ){
		$column = 'col-md-4 col-sm-4 col-xs-12';	
	}elseif ( $column == 4 ){
		$column = 'col-md-3 col-sm-3 col-xs-12';	
	}else{
		$column = 'col-md-3';	
	}
	$output .= '<ul class="pricing_main row">';
	while($recent->have_posts()) : $recent->the_post();	
		$price = get_post_meta( $post->ID, 'price', true );
		$payment_terms = get_post_meta( $post->ID, 'payment_terms', true );
		$best_price = get_post_meta( $post->ID, 'best_price', true );
		$button_label = get_post_meta( $post->ID, 'button_label', true );
		$button_link = get_post_meta( $post->ID, 'button_link', true );
		
		if( $best_price == 'bestprice' ){
			$btn_class = 'btn-primary btn-hg';	
		}else{
			$btn_class = 'btn-inverse';	
		}

	
		$output .= '<li class="pricing '.$column.' '.$best_price.'"><h2>'.get_the_title().'</h2><div class="plan-head"><div class="plan-price">'.$price.'</div><div class="plan-terms">'.$payment_terms.'</div></div>'.do_shortcode( get_the_content() ).'<div class="plan-bottom"><a class="btn '.$btn_class.'" href="'.$button_link.'">'.$button_label.'</a></div></li>';	
	endwhile;
	wp_reset_query();
	$output .= '</ul>';	
	
	return $output;	
}

/**
 * Map Section
 */
 
if ( !function_exists ( 'zp_map_section' ) ){
	function zp_map_section( $atts, $content = null ){
		extract( shortcode_atts( array(
			'frame_height' => ''
		), $atts ) );
				
		return '<div class="map_section" style="padding-bottom: '.$frame_height.';"><div class="container" >'.$content.'</div></div>';		
	}
	add_shortcode( 'map_section', 'zp_map_section' );
}

/**
 * Lead Text
 */
 
if ( !function_exists( 'zp_lead_text' )){
	function zp_lead_text( $atts, $content = null ){	
		return '<p class="lead">'.$content.'</p>';	
	}
	add_shortcode( 'lead_text', 'zp_lead_text' );
}
/**
 * Code Wrapper
 */
 
if ( !function_exists( 'zp_code_wrapper' )){
	function zp_code_wrapper( $atts, $content = null ){
		
		$Old     = array( '<br />', '<br>' );
		$New     = array( '','' );
		$content = str_replace( $Old, $New, $content );
		return '<style type="text/css">.code_wrapper{display:block; margin-top: 20px;} .code_wrapper strong{margin-top: 16px; display: block;}</style><div class="code_wrapper"><h4>Shortcode:</h4><pre>'.$content.'</pre></div>';
	}
	add_shortcode( 'code_wrapper', 'zp_code_wrapper' );
}

/**
 * Tooltip
 */
if( !function_exists( 'zp_tooltip' ) ){
	function zp_tooltip( $atts, $content = null ){
		extract( shortcode_atts( array(
			'position' => '',
			'title' => ''
		), $atts ));
		return '<span class="tooltip-trigger" title="" data-placement="'.$position.'" data-toggle="tooltip" data-original-title="'.$title.'">'.$content.'</span>';
	}
	
	add_shortcode( 'tooltip','zp_tooltip' );
}

/**
 * Popover
 */

if ( !function_exists( 'zp_popover' )){
	function zp_popover( $atts, $content = null ){
		extract( shortcode_atts( array(
			'label' => '',
			'position' => '',
			'title' => ''
		), $atts ));
		
		return '<span class="popover-trigger" title="" data-content="'.$label.'" data-placement="'.$position.'" data-toggle="popover" data-original-title="'.$title.'">'.do_shortcode( $content ).'</span>';
	}
	add_shortcode( 'popover' , 'zp_popover' );
}
/**
 * Tabs
 */

if( !function_exists( 'zp_tabs' )){
	function zp_tabs( $atts, $content = null ){
		extract( shortcode_atts( array(
			'ids' => '',
			'nav' => ''
		), $atts ) );
		
		$ids_array = explode( ',',$ids );
		$nav_array = explode( ',',$nav );
		$output = '';
		
		$output .= '<div class="tab_container">';
		$output .= '<ul class="nav nav-tabs nav-append-content">';
		for( $i=0; $i < count( $nav_array ); $i++ ){
			$output .= '<li><a href="#'.$ids_array[$i].'" data-toggle="tab">'.$nav_array[$i].'</a></li>';	
		}
		$output .= '</ul>';
		
		$output .= '<div class="tab-content">'.do_shortcode( $content ).'</div>';
		$output .= '</div>';
		return $output;
	}
	add_shortcode( 'tab', 'zp_tabs' );
}

if( !function_exists( 'zp_tabpane' )){
	function zp_tabpane( $atts, $content = null ){
		extract( shortcode_atts( array(
			'id' => ''
		), $atts ) );
		
		return '<div class="tab-pane fade" id="'.$id.'">'.do_shortcode( $content ).'</div>';
	}
	add_shortcode( 'tabpane', 'zp_tabpane' );
}

/**
 * Modal Box
 */
 
if( !function_exists( 'zp_modal_box' ) ){
	function zp_modal_box( $atts, $content = null ){
		extract( shortcode_atts( array(
			'modal_name' => '',
			'btn_label' => '',
			'btn_size' => '',
			'btn_class' => ''
		), $atts ));
		
		return '<button class="btn '.$btn_class.' '.$btn_size.'" data-toggle="modal" data-target="#'.$modal_name.'">'.$btn_label.'</button><div class="modal fade" id="'.$modal_name.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content">'.do_shortcode( $content ).'</div></div></div>';	
	}
	add_shortcode( 'modal','zp_modal_box' );
}
 
if( !function_exists( 'zp_modal_header' ) ){
	function zp_modal_header( $atts, $content = null ){
		extract( shortcode_atts( array(
			'title' => ''
		), $atts ) );
		return '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">'.$title.'</h4></div>';		
	}
	add_shortcode( 'modal_header', 'zp_modal_header' );
}

if( !function_exists( 'zp_modal_content' ) ){
	function zp_modal_content( $atts, $content = null ){
		return '<div class="modal-body">'.do_shortcode( $content ).'</div>';		
	}
	add_shortcode( 'modal_content', 'zp_modal_content' );
}
if( !function_exists( 'zp_modal_footer' ) ){
	function zp_modal_footer( $atts, $content = null ){
		return '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">'.__( 'Close','start').'</button>'.do_shortcode( $content ).'</div>';		
	}
	add_shortcode( 'modal_footer', 'zp_modal_footer' );
}

/**
 * Content Wrapper
 */
 
 if( !function_exists( 'zp_content_wrapper' ) ){
	function zp_content_wrapper( $atts, $content = null ){
		return '<div class="content_wrapper container">'.do_shortcode( $content ).'</div>';		
	}
	add_shortcode( 'content_wrapper', 'zp_content_wrapper' );
}
