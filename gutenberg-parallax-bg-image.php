<?php
/**
 * Plugin Name:       Gutenberg Parallax Bg Image
 * Description:       Gutenberg block to add an image with parallax scrolling
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0
 * Author:            Myles Taylor
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-parallax-bg-image
 *
 * @package           create-block
 */


// Editor assets
function enqueue_gutenberg_parallax_bg_image_block_assets() {
	
  wp_enqueue_script(
    'sc-parallax-bg-image-block',    
    plugins_url('build/index.js', __FILE__),
    array('wp-blocks', 'wp-element', 'wp-editor'),
    filemtime(plugin_dir_path(__FILE__) . 'build/index.js')
  );

  wp_enqueue_script(
    'sc-parallax-js',
    plugins_url('assets/jquery.parallax.js', __FILE__),
    array('jquery'),
  	true
  );

  wp_enqueue_style(
    'sc-parallax-bg-image-block-editor-style',
    plugins_url('build/index.css', __FILE__),
    array(),
    filemtime(plugin_dir_path(__FILE__) . 'build/index.css'),
  );


  // Localize default image path
  $default_img_url = plugins_url( 'gutenberg-parallax-bg-image/assets/default-img.jpg');
  $localizations = array( 'defaultImgUrl' => $default_img_url);
  wp_localize_script( 'sc-parallax-bg-image-block', 'localizedVars', $localizations);

}
add_action('enqueue_block_editor_assets', 'enqueue_gutenberg_parallax_bg_image_block_assets');



// Front end assets
function enqueue_gutenberg_parallax_bg_image_block_assets_front_end() {    

    wp_enqueue_script(
      'sc-parallax-js',
  	  plugins_url('assets/jquery.parallax.js', __FILE__),
  	  array('jquery'),
  	  true
  	);

    wp_enqueue_style(
      'sc-parallax-bg-image-block-editor-style-front-end',
      plugins_url('build/style-index.css', __FILE__),
      array(),
      filemtime(plugin_dir_path(__FILE__) . 'build/style-index.css'),
    );
}
add_action('wp_enqueue_scripts', 'enqueue_gutenberg_parallax_bg_image_block_assets_front_end');
