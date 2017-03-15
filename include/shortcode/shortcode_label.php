<?php
/* Shortcode String Translations */

function zp_shortcode_label(){

$zp_shortcode_label  = array(

	// map shortcode
	'map_shortcode' => array(
		'menu' => __( 'Map','start'),
		'header_title' => __( 'Insert Map Shortcode','start' ),
		'content' => array(
			'map_iframe' => array(
				'label' => __( 'Map iframe','start' ),
				'tooltip' => __( 'Add map iframe taken from the embed link of google maps','start' )
			),
			'frame_height' => array(
				'label' => __( 'Frame Height','start' ),
				'tooltip' => __( 'Add frame height in percentage. e.g. "30%"','start' )
			)
		)
	),
	// pricing table
	'pricing' => array(
		'menu' => __( 'Pricing','start' ),
		'header_title' => __( 'Insert Pricing Shortcode','start' ),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','start' ),
				'tooltip' => __( 'Pricing Table Column. Option: 2, 3, 4','start' ),
				'values' => array( 'Two', 'Three', 'Four' )
			)
		)
	),
	// Lead Text
	'lead' => array(
		'menu' => __('Lead Text','start' ),
		'header_title' => __( 'Insert Lead Text Shortcode','start'),
		'content' => array(
			'text' => array(
				'label' => __( 'Content here','start' ),
				'tooltip' => __( 'Styled paragragh text','start' )
			)
		)
	),
	// Social Icons
	'social' => array(
		'menu' => __('Social Icons','start' ),
		'header_title' => __( 'Insert Social Icons Shortcode','start'),
		'content' => array(
			'align' => array(
				'label' => __( 'Alignment','start' ),
				'tooltip' => __( 'Select social alignment','start' ),
				'values' => array( 'Left', 'Right' )
			),
			'target' => array(
				'label' => __( 'Link Target','start' ),
				'tooltip' => __( 'Select link target','start' ),
				'values' => array( '_blank', '_self', '_parent', '_top' )
			),
			'dribbble' => array(
				'label' => __( 'Dribbble','start' ),
				'tooltip' => __( 'Add dribbble url','start' )
			),
			'flickr' => array(
				'label' => __( 'Flickr','start' ),
				'tooltip' => __( 'Add flickr url','start' )
			),
			'github' => array(
				'label' => __( 'Github','start' ),
				'tooltip' => __( 'Add github url','start' )
			),
			'pinterest' => array(
				'label' => __( 'Pinterest','start' ),
				'tooltip' => __( 'Add pinterest url','start' )
			),
			'twitter' => array(
				'label' => __( 'Twitter','start' ),
				'tooltip' => __( 'Add twitter url','start' )
			),
			'facebook' => array(
				'label' => __( 'Facebook','start' ),
				'tooltip' => __( 'Add facebook url','start' )
			),
			'google' => array(
				'label' => __( 'Google+','start' ),
				'tooltip' => __( 'Add google+ url','start' )
			),
			'skype' => array(
				'label' => __( 'Skype','start' ),
				'tooltip' => __( 'Add skype url','start' )
			),
			'tumblr' => array(
				'label' => __( 'Tumblr','start' ),
				'tooltip' => __( 'Add tumblr url','start' )
			),
			'vimeo' => array(
				'label' => __( 'Vimeo','start' ),
				'tooltip' => __( 'Add vimeo url','start' )
			),
			'youtube' => array(
				'label' => __( 'Youtube','start' ),
				'tooltip' => __( 'Add youtube url','start' )
			),
			'linkedin' => array(
				'label' => __( 'LinkedIn','start' ),
				'tooltip' => __( 'Add linkedin url','start' )
			),
		)
	),
	// Contact
	'contact' => array(
		'menu' => __('Contact','start' ),
		'header_title' => __( 'Insert Contact Shortcode','start'),
		'content' => array(
			'content' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'Add some contact form shortcodes here. You can also use any other shortcodes here.','start' )
			)
		)
	),
	// Blog
	'blog' => array(
		'menu' => __('Blog','start' ),
		'header_title' => __( 'Insert Blog Shortcode','start'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','start' ),
				'tooltip' => __( 'Select blog section columns.','start' ),
				'values' => array( 'Two', 'Three', 'Four' )
			),
			'items' => array(
				'label' => __( 'Items','start' ),
				'tooltip' => __( 'How many items to display.','start' )
			),
		)
	),
	// Team
	'team' => array(
		'menu' => __('Team','start' ),
		'header_title' => __( 'Insert Team Shortcode','start'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','start' ),
				'tooltip' => __( 'Select team section columns.','start' ),
				'values' => array( 'Two', 'Three', 'Four' )
			),
			'align' => array(
				'label' => __( 'Align','start' ),
				'tooltip' => __( 'Select content alignment.','start' ),
				'values' => array( 'Center', 'Left', 'Right' )
			),
		)
	),
	// Dismissable Text
	'dismissable' => array(
		'menu' => __('Dismissable Text','start' ),
		'header_title' => __( 'Insert Dismissable Text Shortcode','start'),
		'content' => array(
			'class' => array(
				'label' => __( 'Contextual Class','start' ),
				'tooltip' => __( 'Select class for dismissable alert box.','start' ),
				'values' => array( 'alert-success', 'alert-info', 'alert-warning', 'alert-danger' )
			),
			'text' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'You can add text or a shortcode here.','start' )
			),
		)
	),
	// Alert 
	'alertbox' => array(
		'menu' => __('Alert','start' ),
		'header_title' => __( 'Insert Alert Shortcode','start'),
		'content' => array(
			'class' => array(
				'label' => __( 'Contextual Class','start' ),
				'tooltip' => __( 'Select class for alert box.','start' ),
				'values' => array( 'alert-success', 'alert-info', 'alert-warning', 'alert-danger' )
			),
			'text' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'You can add text or a shortcode here.','start' )
			),
		)
	),
	// Acccordion 
	'accordion' => array(
		'menu' => __('Accordion','start' ),
		'header_title' => __( 'Insert Accordion Shortcode','start'),
		'content' => array(
			'id1' => array(
				'label' => __( 'First Tab ID','start' ),
				'tooltip' => __( 'Add first tab ID. This must be unique and one word only.','start' )
			),
			'title1' => array(
				'label' => __( 'First Tab Title','start' ),
				'tooltip' => __( 'Add first tab title.','start' )
			),
			'content1' => array(
				'label' => __( 'First Tab Content','start' ),
				'tooltip' => __( 'Add first tab content.','start' )
			),
			'id2' => array(
				'label' => __( 'Second Tab ID','start' ),
				'tooltip' => __( 'Add second tab ID. This must be unique and one word only.','start' )
			),
			'title2' => array(
				'label' => __( 'Second Tab Title','start' ),
				'tooltip' => __( 'Add second tab title.','start' )
			),
			'content2' => array(
				'label' => __( 'Second Tab Content','start' ),
				'tooltip' => __( 'Add second tab content.','start' )
			),
			'id3' => array(
				'label' => __( 'Third Tab ID','start' ),
				'tooltip' => __( 'Add third tab ID. This must be unique and one word only.','start' )
			),
			'title3' => array(
				'label' => __( 'Third Tab Title','start' ),
				'tooltip' => __( 'Add third tab title.','start' )
			),
			'content3' => array(
				'label' => __( 'Third Tab Content','start' ),
				'tooltip' => __( 'Add third tab content.','start' )
			),
			
		)
	),
	// Buttons 
	'buttons' => array(
		'menu' => __('Button','start' ),
		'header_title' => __( 'Insert Button Shortcode','start'),
		'content' => array(
			'class' => array(
				'label' => __( 'Class','start' ),
				'tooltip' => __( 'Select class for buttons.','start' ),
				'values' => array( 'btn-default', 'btn-primary', 'btn-success', 'btn-info','btn-warning','btn-danger','btn-inverse' )
			),
			'size' => array(
				'label' => __( 'Size','start' ),
				'tooltip' => __( 'Select button size.','start' ),
				'values' => array( 'Extra Large', 'Large', 'Medium', 'Small','Extra Small' )
			),
			'inline' => array(
				'label' => __( 'Inline Button','start' ),
				'tooltip' => __( 'Select true if the button should work inline.','start' ),
				'values' => array( 'True', 'False')
			),
			'button_link' => array(
				'label' => __( 'Button Link','start' ),
				'tooltip' => __( 'Add button link.','start' )
			),
			'button_label' => array(
				'label' => __( 'Button Name','start' ),
				'tooltip' => __( 'Add button name.','start' )
			)
		)
	),
	// Portfolio 
	'portfolio' => array(
		'menu' => __('Portfolio','start' ),
		'header_title' => __( 'Insert Portfolio Shortcode','start'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Portfolio Columns','start' ),
				'tooltip' => __( 'Select columns for portfolio.','start' ),
				'values' => array( 'Two', 'Three', 'Four' )
			),
			'preselect_cat' => array(
				'label' => __( 'Pre-select Category','start' ),
				'tooltip' => __( 'Category that will be loaded first in portfolio section. Leave empty to display all items.','start' ),
			),
			'lightbox' => array(
				'label' => __( 'Enable Lightbox','start' ),
				'tooltip' => __( 'Select true to enable portfolio lightbox, false to enable portfolio link.','start' ),
				'values' => array( 'True', 'False')
			)
		)
	),
	// Testimonial 
	'testimonial' => array(
		'menu' => __('Testimonial','start' ),
		'header_title' => __( 'Insert Testimonial Shortcode','start'),
		'content' => array()
	),
	// Video Section 
	'video_section' => array(
		'menu' => __('Video Section','start' ),
		'header_title' => __( 'Insert Video Section Shortcode','start'),
		'content' => array(
			'src' => array(
				'label' => __( 'Video URL','start' ),
				'tooltip' => __( 'Add video URL. e.g. //player.vimeo.com/video/82495711','start' ),
			),
			'title' => array(
				'label' => __( 'Section Title','start' ),
				'tooltip' => __( 'This will be s section title.','start' )
			),
			'height' => array(
				'label' => __( 'Video container height.','start' ),
				'tooltip' => __( 'Set video container height. e.g. 200','start' )
			),
			'width' => array(
				'label' => __( 'Video container width.','start' ),
				'tooltip' => __( 'Set video container width. e.g. 300','start' )
			),
			'desc' => array(
				'label' => __( 'Short Description','start' ),
				'tooltip' => __( 'Video Section Description','start' )
			),
			'position' => array(
				'label' => __( 'Video Position.','start' ),
				'tooltip' => __( 'Alignment of the video','start' ),
				'values' => array( 'Left', 'Right')
			),
			'content' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'Video section content. Works also with shortcodes','start' )
			),
		)
	),
	// Fullwidth Slider
	'fullwidth_slider' => array(
		'menu' => __('Fullwidth Slider','start' ),
		'header_title' => __( 'Insert Fullwidth Slider Shortcode','start'),
		'content' => array(
			'slidename' => array(
				'label' => __( 'Slider Name','start' ),
				'tooltip' => __( 'Name of the slider. This serves as a slider ID. This must be unique and one word only.','start' ),
			),
			'slideshow' => array(
				'label' => __( 'Slideshow','start' ),
				'tooltip' => __( 'This is a slide category. You can see the slideshows in Dashboard -> Slide -> Slideshows. You must use the slug.','start' )
			),
			'effect' => array(
				'label' => __( 'Effect.','start' ),
				'tooltip' => __( 'Select slider effect','start' ),
				'values' => array( 'Fade', 'Slide')
			)
		)
	),
	// Slider Section 
	'slider_section' => array(
		'menu' => __('Slider Section','start' ),
		'header_title' => __( 'Insert Slider Section Shortcode','start'),
		'content' => array(
			'slidename' => array(
				'label' => __( 'Slider Name','start' ),
				'tooltip' => __( 'Name of the slider. This serves as a slider ID. This must be unique and one word only.','start' ),
			),
			'slideshow' => array(
				'label' => __( 'Slideshow','start' ),
				'tooltip' => __( 'This is a slide category. You can see the slideshows in Dashboard -> Slide -> Slideshows. You must use the slug.','start' )
			),
			'caption' => array(
				'label' => __( 'Enable Caption?','start' ),
				'tooltip' => __( 'Select true to display caption on top of the slide images','start' ),
				'values' => array( 'True', 'False')
			),
			'title' => array(
				'label' => __( 'Section Title','start' ),
				'tooltip' => __( 'This is the section title','start' )
			),
			'desc' => array(
				'label' => __( 'Short Description','start' ),
				'tooltip' => __( 'Slider Section Description','start' )
			),
			'position' => array(
				'label' => __( 'Slider Position.','start' ),
				'tooltip' => __( 'Position of the Slider','start' ),
				'values' => array( 'Left', 'Right')
			),
			'content' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'Slider section content. Works also with shortcodes','start' )
			),
		)
	),
	// Image Section 
	'image_section' => array(
		'menu' => __('Image Section','start' ),
		'header_title' => __( 'Insert Image Section Shortcode','start'),
		'content' => array(
			'image_url' => array(
				'label' => __( 'Image URL','start' ),
				'tooltip' => __( 'Paste Image URL here.','start' ),
			),
			'image_link' => array(
				'label' => __( 'Link','start' ),
				'tooltip' => __( 'Place here the link where you want to go when the image is clicked. If empty, it will be in lightbox.','start' )
			),
			'title' => array(
				'label' => __( 'Section Title','start' ),
				'tooltip' => __( 'This is the section title','start' )
			),
			'desc' => array(
				'label' => __( 'Short Description','start' ),
				'tooltip' => __( 'Add short description to the section','start' )
			),
			'position' => array(
				'label' => __( 'Image Position.','start' ),
				'tooltip' => __( 'Position of the image','start' ),
				'values' => array( 'Left', 'Right')
			),
			'content' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'Image section content. Works also with shortcodes.','start' )
			),
		)
	),
	// Services 
	'services' => array(
		'menu' => __('Service','start' ),
		'header_title' => __( 'Insert Service Shortcode','start'),
		'content' => array(
			'columns' => array(
				'label' => __( 'Columns','start' ),
				'tooltip' => __( 'Select columns','start' ),
				'values' => array( 'Two', 'Three', 'Four')
			),
			'align' => array(
				'label' => __( 'Alignment','start' ),
				'tooltip' => __( 'Select content alignment.','start' ),
				'values' => array( 'Center', 'Left', 'Right')
			),
			'items' => array(
				'label' => __( 'Number of Items','start' ),
				'tooltip' => __( 'Number of items to display.','start' ),
			)
		)
	),
	// Columns 
	'columns' => array(
		'menu' => __('Columns','start' ),
		'header_title' => __( 'Insert column Shortcode','start'),
		'content' => array(	),
		'submenu' => array(
			'one_half' => __('One Half','start' ),
			'one_third' => __('One Third','start' ),
			'one_fourth' => __('One Fourth','start' ),
			'column_grid_1' => __('Column Grid 1','start' ),
			'column_grid_2' => __('Column Grid 2','start' ),
			'column_grid_3' => __('Column Grid 3','start' ),
			'column_grid_4' => __('Column Grid 4','start' ),
			'column_grid_5' => __('Column Grid 5','start' ),
			'column_grid_6' => __('Column Grid 6','start' ),
			'column_grid_7' => __('Column Grid 7','start' ),
			'column_grid_8' => __('Column Grid 8','start' ),
			'column_grid_9' => __('Column Grid 9','start' ),
			'column_grid_10' => __('Column Grid 10','start' ),
			'column_grid_11' => __('Column Grid 11','start' ),
			'column_grid_12' => __('Column Grid 12','start' ),
		)

	),
	// Tooltip 
	'tooltip' => array(
		'menu' => __('Tooltip','start' ),
		'header_title' => __( 'Insert Tooltip Shortcode','start'),
		'content' => array(
			'position' => array(
				'label' => __( 'Tooltip Position','start' ),
				'tooltip' => __( 'Select tooltip position.','start' ),
				'values' => array( 'Top', 'Bottom', 'Left', 'Right' )
			),
			'title' => array(
				'label' => __( 'Tooltip','start' ),
				'tooltip' => __( 'Text that will appear in tooltip.','start' )
			),
			'text' => array(
				'label' => __( 'Text','start' ),
				'tooltip' => __( 'Text that will have a tooltip.','start' ),
			)
		)
	),
	// Popover 
	'popover' => array(
		'menu' => __('Popover','start' ),
		'header_title' => __( 'Insert Popover Shortcode','start'),
		'content' => array(
			'position' => array(
				'label' => __( 'Popover Position','start' ),
				'tooltip' => __( 'Select popover position.','start' ),
				'values' => array( 'Top', 'Bottom', 'Left', 'Right' )
			),
			'title' => array(
				'label' => __( 'Popover Title','start' ),
				'tooltip' => __( 'Popover Title.','start' )
			),
			'label' => array(
				'label' => __( 'Popover Content','start' ),
				'tooltip' => __( 'Content in the popover.','start' )
			),
			'text' => array(
				'label' => __( 'Text','start' ),
				'tooltip' => __( 'Text that will have a tooltip.','start' ),
			)
		)
	),
	// Tabs 
	'tab' => array(
		'menu' => __('Tab','start' ),
		'header_title' => __( 'Insert Tab Shortcode','start'),
		'content' => array(
			'id1' => array(
				'label' => __( 'First Tab ID','start' ),
				'tooltip' => __( 'Add first tab ID. This must be unique and one word only.','start' )
			),
			'title1' => array(
				'label' => __( 'First Tab Title','start' ),
				'tooltip' => __( 'Add first tab title.','start' )
			),
			'content1' => array(
				'label' => __( 'First Tab Content','start' ),
				'tooltip' => __( 'Add first tab content.','start' )
			),
			'id2' => array(
				'label' => __( 'Second Tab ID','start' ),
				'tooltip' => __( 'Add second tab ID. This must be unique and one word only.','start' )
			),
			'title2' => array(
				'label' => __( 'Second Tab Title','start' ),
				'tooltip' => __( 'Add second tab title.','start' )
			),
			'content2' => array(
				'label' => __( 'Second Tab Content','start' ),
				'tooltip' => __( 'Add second tab content.','start' )
			),
			'id3' => array(
				'label' => __( 'Third Tab ID','start' ),
				'tooltip' => __( 'Add third tab ID. This must be unique and one word only.','start' )
			),
			'title3' => array(
				'label' => __( 'Third Tab Title','start' ),
				'tooltip' => __( 'Add third tab title.','start' )
			),
			'content3' => array(
				'label' => __( 'Third Tab Content','start' ),
				'tooltip' => __( 'Add third tab content.','start' )
			),
			
		)
	),
	// Modal 
	'modal' => array(
		'menu' => __('Modal Box','start' ),
		'header_title' => __( 'Insert Modal Shortcode','start'),
		'content' => array(
			'modal_name' => array(
				'label' => __( 'Modal Name/ID.','start' ),
				'tooltip' => __( 'This serves as the modal ID. This must be unique. Note: Use underscore (_) for a long word name.','start' )
			),
			'btn_label' => array(
				'label' => __( 'Modal Trigger Label','start' ),
				'tooltip' => __( 'Modal Trigger/Button Label.','start' )
			),
			'btn_size' => array(
				'label' => __( 'Modal Trigger/Button Size','start' ),
				'tooltip' => __( 'Select trigger/button size.','start' ),
				'values' => array( 'Extra Large', 'Large', 'Medium', 'Small','Extra Small' )
			),
			'btn_class' => array(
				'label' => __( 'Modal Trigger/Button Class','start' ),
				'tooltip' => __( 'Select trigger/button class.','start' ),
				'values' => array( 'btn-default', 'btn-primary', 'btn-success', 'btn-info','btn-warning','btn-danger','btn-inverse' )
			),
			'modal_title' => array(
				'label' => __( 'Modal Title','start' ),
				'tooltip' => __( 'Modal box title.','start' )
			),
			'modal_content' => array(
				'label' => __( 'Modal Content','start' ),
				'tooltip' => __( 'Add modal content here. Also work with shortcode.','start' )
			),
			'modal_footer' => array(
				'label' => __( 'Modal Footer','start' ),
				'tooltip' => __( 'Add modal footer content here. Also work with shortcode.','start' )
			)			
		)
	),
	// Content Wrapper 
	'content_wrapper' => array(
		'menu' => __('Content Wrapper','start' ),
		'header_title' => __( 'Insert Content Wrapper Shortcode','start'),
		'content' => array(
			'text' => array(
				'label' => __( 'Content','start' ),
				'tooltip' => __( 'Add content here. Works also with shortcodes.','start' )
			)			
		)
	),
);

return $zp_shortcode_label;
}