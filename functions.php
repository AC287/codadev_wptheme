<?php

// function codadev() {
//   wp_enqueue_style('style',get_stylesheet_uri());
// }
// add_action('wp_enqueue_scripts','cambridge_resources');

// Enable the use of shortcodes within widgets.
add_filter( 'widget_text', 'do_shortcode' );

// Assign the tag for our shortcode and identify the function that will run.
add_shortcode( 'template_directory_uri', 'wpse61170_template_directory_uri' );

// Define function
function wpse61170_template_directory_uri() {
    return get_template_directory_uri();
}

// This get url.
function custom_rewrite_tag() {
  add_rewrite_tag('%m0%', '([^&]+)');
  add_rewrite_tag('%s1%', '([^&]+)');
  add_rewrite_tag('%s2%', '([^&]+)');
  add_rewrite_tag('%id%', '([^&]+)');
}
add_action('init', 'custom_rewrite_tag', 10, 0);

function codadev_script_enqueue() {
  wp_enqueue_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.css',array(),null,'all');
  // wp_enqueue_style('bootstrapFontsEot',get_template_directory_uri().'/fonts/glyphicons-halflings-regular.eot',array(),null,'all');
  // wp_enqueue_style('bootstrapFontsSvg',get_template_directory_uri().'/fonts/glyphicons-halflings-regular.svg',array(),null,'all');
  // wp_enqueue_style('bootstrapFontsTtf',get_template_directory_uri().'/fonts/glyphicons-halflings-regular.ttf',array(),null,'all');
  // wp_enqueue_style('bootstrapFontsWoff',get_template_directory_uri().'/fonts/glyphicons-halflings-regular.woff',array(),null,'all');
  // wp_enqueue_style('bootstrapFontsWoff2',get_template_directory_uri().'/fonts/glyphicons-halflings-regular.woff2',array(),null,'all');
  wp_enqueue_style('customstyle',get_template_directory_uri().'/css/codadev.css', array(), '1.0.34', 'all');
  wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_style('jqmobile-css', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css');
  wp_enqueue_style( 'google-fonts-questrial', 'https://fonts.googleapis.com/css?family=Questrial', false);
  // wp_enqueue_style( 'bignoodletitling', get_template_directory_uri().'/fonts/big_noodle_titling.ttf', false);

  // wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('customjs',get_template_directory_uri().'/js/codadev.js', array('jquery'), '1.0.15', true);
  wp_enqueue_script('jqmobile-js', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js');

}

add_action('wp_enqueue_scripts', 'codadev_script_enqueue');
// add_filter('show_admin_bar','__return_false');
