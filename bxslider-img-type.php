<?php  

//define Name, Singluar Name, Type
define('CPT_NAME', "Slider Images");  
define('CPT_SINGLE', "Slider Image");  
define('CPT_TYPE', "slider-image");  

  
add_theme_support('post-thumbnails', array('slider-image')); 

function bxs_register() {    
    $args = array(    
        'label' => __(CPT_NAME),    
        'singular_label' => __(CPT_SINGLE),    
        'public' => true,    
        'show_ui' => true,    
        'capability_type' => 'post',    
        'hierarchical' => false,    
        'rewrite' => true,    
        'supports' => array('title', 'editor', 'thumbnail'),
        'register_meta_box_cb' => 'add_slider_metaboxes'
       );    
    
    register_post_type(CPT_TYPE , $args );    
}    
  
add_action('init', 'bxs_register'); 
//add_action( 'add_meta_boxes', 'add_slider_metaboxes' );

// Add the Events Meta Boxes
/*function add_slider_metaboxes() {
	add_meta_box('bx_video_url', 'Video URL', 'bx_video_url', __(CPT_NAME), 'normal', 'default');
}

// The Event Location Metabox
function bx_video_url() {
	global $post;
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	// Get the location data if its already been entered
	$location = get_post_meta($post->ID, '_location', true);
	// Echo out the field
	echo '<input type="text" name="_location" value="' . $location  . '" class="widefat" />';
}*/

?>  

