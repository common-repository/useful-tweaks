<?php
/**
 * @package Useful Tweaks
 * @version 0.1.1
 */
/*
Plugin Name: Useful Tweaks
Plugin URI: http://useful-tweaks.hotlinx.net/
Description: Wordpress tweaks, useful functions
Version: 0.1.1
Author: ap
Author URI: http://useful-tweaks.hotlinx.net/
License: GPLv2 or later
Text Domain: useful-tweaks
*/
defined('ABSPATH') or die("Nice try..");
define( 'USEFUL_TWEAKS_VERSION', '0.1.1' );
define( 'USEFUL_TWEAKS__BLOG_URL', get_bloginfo('wpurl') );
define( 'USEFUL_TWEAKS__BLOG_MAIL', get_bloginfo('admin_email') );
define( 'USEFUL_TWEAKS__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'USEFUL_TWEAKS__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if ( is_admin() ) {	require_once( USEFUL_TWEAKS__PLUGIN_DIR . 'admin/ustw_admin.php' );}
global $db_options;
$db_options = unserialize(get_option('ustw_options'));
if (isset($db_options['ustw_head_rsd']) && $db_options['ustw_head_rsd'] == 'Remove'){ remove_action('wp_head', 'rsd_link'); }
if (isset($db_options['ustw_head_generator']) && $db_options['ustw_head_generator'] == 'Remove'){ remove_action('wp_head', 'wp_generator'); }
if (isset($db_options['ustw_head_index_rel']) && $db_options['ustw_head_index_rel'] == 'Remove'){ remove_action('wp_head', 'index_rel_link'); }
if (isset($db_options['ustw_head_wlw']) && $db_options['ustw_head_wlw'] == 'Remove'){ remove_action('wp_head', 'wlwmanifest_link'); }
if (isset($db_options['ustw_head_feed']) && $db_options['ustw_head_feed'] == 'Remove'){ remove_action('wp_head', 'feed_links_extra', 3); }
if (isset($db_options['ustw_head_start_post']) && $db_options['ustw_head_start_post'] == 'Remove'){ remove_action('wp_head', 'start_post_rel_link', 10, 0); }
if (isset($db_options['ustw_head_parent_post']) && $db_options['ustw_head_parent_post'] == 'Remove'){ remove_action('wp_head', 'parent_post_rel_link', 10, 0); }
if (isset($db_options['ustw_head_adjacent']) && $db_options['ustw_head_adjacent'] == 'Remove'){ remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); }
if (isset($db_options['ustw_favicon']) && $db_options['ustw_favicon'] <> ''){ function blog_favicon() { global $db_options; echo '<link rel="Icon" type="image/x-icon" href="'.$db_options['ustw_favicon'].'" />'; } add_action('wp_head', 'blog_favicon'); }
if (isset($db_options['ustw_admin_bar']) && $db_options['ustw_admin_bar'] == 'Hide'){ add_filter('show_admin_bar', '__return_false'); }
if (isset($db_options['ustw_admin_bar_admin']) && $db_options['ustw_admin_bar_admin'] == 'Show'){ add_action('after_setup_theme', 'remove_admin_bar'); function remove_admin_bar() { if (!current_user_can('administrator') && !is_admin()) { show_admin_bar(false); } } }
if (isset($db_options['ustw_rss_pt']) && $db_options['ustw_rss_pt'] == 'Enable'){ function featured_images_in_rss($content) { global $post; if ( has_post_thumbnail( $post->ID ) ){ $content = get_the_post_thumbnail( $post->ID, 'medium' ) . $content; } return $content; } add_filter('the_excerpt_rss', 'featured_images_in_rss', 1000, 1); add_filter('the_content_feed', 'featured_images_in_rss', 1000, 1); }
if (isset($db_options['ustw_emoji']) && $db_options['ustw_emoji'] == 'Disable'){ function disable_wp_emojicons() { remove_action( 'admin_print_styles', 'print_emoji_styles' ); remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); remove_action( 'wp_print_styles', 'print_emoji_styles' ); remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' ); remove_filter( 'the_content_feed', 'wp_staticize_emoji' ); remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' ); } add_action( 'init', 'disable_wp_emojicons' ); function disable_emojicons_tinymce( $plugins ) { if ( is_array( $plugins ) ) { return array_diff( $plugins, array( 'wpemoji' ) ); } else { return array(); } }}
if (isset($db_options['ustw_feeds']) && $db_options['ustw_feeds'] == 'Disable'){ function disable_feeds() { wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') ); } add_action('do_feed', 'disable_feeds', 1); }
if (isset($db_options['ustw_feed_rdf']) && $db_options['ustw_feed_rdf'] == 'Disable'){ function disable_rdf() { wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') ); } add_action('do_feed_rdf', 'disable_rdf', 1); }
if (isset($db_options['ustw_feed_rss']) && $db_options['ustw_feed_rss'] == 'Disable'){ function disable_rss() { wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') ); } add_action('do_feed_rss', 'disable_rss', 1); }
if (isset($db_options['ustw_feed_rss2']) && $db_options['ustw_feed_rss2'] == 'Disable'){ function disable_rss2() { wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') ); } add_action('do_feed_rss2', 'disable_rss2', 1); }
if (isset($db_options['ustw_feed_atom']) && $db_options['ustw_feed_atom'] == 'Disable'){ function disable_atom() { wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') ); } add_action('do_feed_atom', 'disable_atom', 1); }
if (isset($db_options['ustw_logo_login']) && $db_options['ustw_logo_login'] == 'Remove'){ function login_styles1() { echo '<style type="text/css"> #login h1 { height:80px; } #login h1 a { display: none !important; } </style>'; } add_action('login_head', 'login_styles1'); }
if (isset($db_options['ustw_category_rel']) && $db_options['ustw_category_rel'] == 'Remove'){ add_filter( 'the_category', 'remove_cat_rel' ); function remove_cat_rel( $text ) { $text = str_replace('rel="category tag"', "", $text); return $text; } }
if (isset($db_options['ustw_tag_rel']) && $db_options['ustw_tag_rel'] == 'Remove'){ add_filter( 'the_tags', 'remove_tag_rel' ); function remove_tag_rel( $text ) { $text = str_replace('rel="tag"', "", $text); return $text; } }
if (isset($db_options['ustw_custom_category']) && $db_options['ustw_custom_category'] <> ''){ add_filter( 'the_category', 'add_cat_title' ); function add_cat_title( $text ) { global $db_options; $text = str_replace('href', 'title="'.$db_options['ustw_custom_category'].'" href', $text); return $text; } }
if (isset($db_options['ustw_custom_tag']) && $db_options['ustw_custom_tag'] <> ''){ add_filter( 'the_tags', 'add_tag_title' ); function add_tag_title( $text ) { global $db_options; $text = str_replace('href', 'title="'.$db_options['ustw_custom_tag'].'" href', $text); return $text; } }
if (isset($db_options['ustw_page_excerpt']) && $db_options['ustw_page_excerpt'] == 'Enable'){ add_action( 'init', 'my_add_excerpts_to_pages' ); function my_add_excerpts_to_pages() { add_post_type_support( 'page', 'excerpt' );} }
if (isset($db_options['ustw_shortcode_widget']) && $db_options['ustw_shortcode_widget'] == 'Enable'){ add_filter('widget_text', 'do_shortcode'); }
if (isset($db_options['ustw_hide_admin_notices']) && $db_options['ustw_hide_admin_notices'] == 'Hide'){ add_action( 'admin_menu', 'remove_core_update_nag', 2 ); function remove_core_update_nag() { remove_action( 'admin_notices', 'update_nag', 3 ); } }
if (isset($db_options['ustw_hide_logo_adminbar']) && $db_options['ustw_hide_logo_adminbar'] == 'Hide'){ add_action('admin_head', 'admin_head_logo'); function admin_head_logo() { echo ' <style type="text/css"> #wp-admin-bar-wp-logo { display:none;} </style> '; } }
if (isset($db_options['ustw_hide_text_adminfooter']) && $db_options['ustw_hide_text_adminfooter'] == 'Hide'){ add_action('admin_footer', 'admin_footer_text'); function admin_footer_text() { echo ' <style type="text/css"> #footer-thankyou { display:none; } </style> '; } }
if (isset($db_options['ustw_theme_update']) && $db_options['ustw_theme_update'] == 'Disable') { add_filter( 'auto_update_theme', '__return_false' ); }
if (isset($db_options['ustw_plugin_update']) && $db_options['ustw_plugin_update'] == 'Disable') { add_filter( 'auto_update_plugin', '__return_false' ); }
if (isset($db_options['ustw_remove_db_ac']) && $db_options['ustw_remove_db_ac'] == 'Remove') { function remove_dashboard_widgets_ac() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_ac' );}
if (isset($db_options['ustw_remove_db_qp']) && $db_options['ustw_remove_db_qp'] == 'Remove') { function remove_dashboard_widgets_qp() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_qp' );}
if (isset($db_options['ustw_remove_db_il']) && $db_options['ustw_remove_db_il'] == 'Remove') { function remove_dashboard_widgets_il() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_il' );}
if (isset($db_options['ustw_remove_db_rn']) && $db_options['ustw_remove_db_rn'] == 'Remove') { function remove_dashboard_widgets_rn() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_rn' );}
if (isset($db_options['ustw_remove_db_p']) && $db_options['ustw_remove_db_p'] == 'Remove') { function remove_dashboard_widgets_pl() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_pl' );}
if (isset($db_options['ustw_remove_db_rd']) && $db_options['ustw_remove_db_rd'] == 'Remove') { function remove_dashboard_widgets_rd() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_rd' );}
if (isset($db_options['ustw_remove_db_rc']) && $db_options['ustw_remove_db_rc'] == 'Remove') { function remove_dashboard_widgets_rc() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_rc' );}
if (isset($db_options['ustw_remove_db_primary']) && $db_options['ustw_remove_db_primary'] == 'Remove') { function remove_dashboard_widgets_pr() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_pr' );}
if (isset($db_options['ustw_remove_db_secondary']) && $db_options['ustw_remove_db_secondary'] == 'Remove') { function remove_dashboard_widgets_se() { global $wp_meta_boxes; unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); } add_action('wp_dashboard_setup', 'remove_dashboard_widgets_se' );}
if (isset($db_options['ustw_empty_trash']) && $db_options['ustw_empty_trash'] <> ''){ global $db_options; define('EMPTY_TRASH_DAYS', (int)$db_options['ustw_empty_trash'] ); }
if (isset($db_options['ustw_revisions']) && $db_options['ustw_revisions'] == 'Disable'){ define('WP_POST_REVISIONS', false ); }
if (isset($db_options['ustw_autosave']) && $db_options['ustw_autosave'] <> ''){ global $db_options; define('AUTOSAVE_INTERVAL', (int)$db_options['ustw_autosave'] ); }
