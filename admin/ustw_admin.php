<?php
defined('ABSPATH') or die("Nice try..");
$pluginname = "Useful Tweaks";
$status = "private" ;
$ustw_options = array (

array( "name" => __("Useful Tweaks Settings", "ustw"),
	"type" => "title"),

array( "name" => __("Info", "ustw"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Thank you..", "ustw"),
	"desc" => __("..for using this plugin. I hope this will be helpful for you. If you find bugs, please report on the <a href='http://useful-tweaks.hotlinx.net' target='_blank' >plugin's website</a>.", "ustw"),
	"id" => "ustw_thankyou",
	"type" => "description",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("How it's work?", "ustw"),
	"desc" => __("Useful tweaks is a very simple plugin. If you choose at any function the 'Default' value, or don't specify any value in the text fields, that function will not run. If you want activate a function, add value or change the dropdown. ", "ustw"),
	"id" => "ustw_howitswork",
	"type" => "description",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("More functions?", "ustw"),
	"desc" => __("Something missing for you? Send your wish on the <a href='http://useful-tweaks.hotlinx.net' target='_blank' >plugin's website</a>. Maybe your wish will be the next option in the plugin.", "ustw"),
	"id" => "ustw_morefunctions",
	"type" => "description",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("Premium", "ustw"),
	"desc" => __("Most function is free. Please support me, and buy the premium version. It's only 5€. Payment available on the <a href='http://useful-tweaks.hotlinx.net' target='_blank' >plugin's website</a>. Thank you!", "ustw"),
	"id" => "ustw_premium",
	"type" => "description",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("Uninstall", "ustw"),
	"desc" => __("Delete database records before uninstall plugin.", "ustw"),
	"id" => "ustw_uninstall",
	"type" => "uninstall",
	"std" => "",
	"stat"	=>	"public"),

array( "type" => "close"),

array( "name" => __("Frontend", "ustw"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Clean code", "ustw"),
	"type" => "part"),	
		
array( "name" => __("Remove RSD link", "ustw"),
	"desc" => __("Remove RSD link from wp head", "ustw"),
	"id" => "ustw_head_rsd",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove WP generator", "ustw"),
	"desc" => __("Remove WP generator meta from wp head", "ustw"),
	"id" => "ustw_head_generator",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove index rel link", "ustw"),
	"desc" => __("Remove index rel link from wp head", "ustw"),
	"id" => "ustw_head_index_rel",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove WLW Mainfest link", "ustw"),
	"desc" => __("Remove WLW Mainfest link from wp head", "ustw"),
	"id" => "ustw_head_wlw",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove Feed links", "ustw"),
	"desc" => __("Remove Feed links from wp head", "ustw"),
	"id" => "ustw_head_feed",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove start post rel link", "ustw"),
	"desc" => __("Remove start post rel link from wp head", "ustw"),
	"id" => "ustw_head_start_post",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove parent post rel link", "ustw"),
	"desc" => __("Remove parent post rel link from wp head", "ustw"),
	"id" => "ustw_head_parent_post",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove adjacent post rel link", "ustw"),
	"desc" => __("Remove adjacent post rel link from wp head", "ustw"),
	"id" => "ustw_head_adjacent",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Remove pingback link", "ustw"),
	"desc" => __("Remove pingback link from wp head", "ustw"),
	"id" => "ustw_head_pingback",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	$status),	

array( "name" => __("Remove html comments", "ustw"),
	"desc" => __("Remove html comments from source code", "ustw"),
	"id" => "ustw_html_comments",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("Customize", "ustw"),
	"type" => "part"),	

array( "name" => __("Custom favicon", "ustw"),
	"desc" => __("Add your custom favicon", "ustw"),
	"id" => "ustw_favicon",
	"type" => "text",
	"std" => "",
	"stat"	=>	"public"),	

array( "name" => __("Hide admin bar", "ustw"),
	"desc" => __("Hide admin bar", "ustw"),
	"id" => "ustw_admin_bar",
	"type" => "select",
	"options" => array("Default", "Hide"),
	"std" => "Default",
	"stat"	=>	"public"),	
	
array( "name" => __("Show admin bar only administrators", "ustw"),
	"desc" => __("Show admin bar only for the administrators", "ustw"),
	"id" => "ustw_admin_bar_admin",
	"type" => "select",
	"options" => array("Default", "Show"),
	"std" => "Default",
	"stat"	=>	"public"),	
	
array( "name" => __("Post thumbnail to RSS", "ustw"),
	"desc" => __("Show post tumbnail in feed", "ustw"),
	"id" => "ustw_rss_pt",
	"type" => "select",
	"options" => array("Default", "Enable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("WP Emojicons", "ustw"),
	"desc" => __("Disable wp emojicons (WP 4.x)", "ustw"),
	"id" => "ustw_emoji",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Disable Feeds", "ustw"),
	"desc" => __("Disable wordpress feeds", "ustw"),
	"id" => "ustw_feeds",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Disable RDF Feed", "ustw"),
	"desc" => __("Disable RDF feed", "ustw"),
	"id" => "ustw_feed_rdf",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Disable RSS Feed", "ustw"),
	"desc" => __("Disable RSS feed", "ustw"),
	"id" => "ustw_feed_rss",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Disable RSS2 Feed", "ustw"),
	"desc" => __("Disable RSS2 feed", "ustw"),
	"id" => "ustw_feed_rss2",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Disable Atom Feed", "ustw"),
	"desc" => __("Disable Atom feed", "ustw"),
	"id" => "ustw_feed_atom",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),
	
array( "name" => __("Custom login", "ustw"),
	"type" => "part"),	

array( "name" => __("Remove wp logo from login", "ustw"),
	"desc" => __("Remove wp logo image from login screen", "ustw"),
	"id" => "ustw_logo_login",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),	

array( "name" => __("Custom logo img", "ustw"),
	"desc" => __("Replace image on login screen (Recommended size: 80x80px)", "ustw"),
	"id" => "ustw_logo_login_img",
	"type" => "text",
	"std" => "",
	"stat"	=>	$status),

array( "name" => __("Custom wp logo url", "ustw"),
	"desc" => __("Change wp logo's url on login screen", "ustw"),
	"id" => "ustw_logo_login_url",
	"type" => "text",
	"std" => '',
	"stat"	=>	$status),			

array( "name" => __("Advanced", "ustw"),
	"type" => "part"),	
	
array( "name" => __("Javascript load type", "ustw"),
	"desc" => __("Async load for faster page load", "ustw"),
	"id" => "ustw_jsload",
	"type" => "select",
	"options" => array("Default", "Async"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("Important!", "ustw"),
	"desc" => __("Complex web pages can cause problems!", "ustw"),
	"id" => "ustw_jsinfo",
	"type" => "description",
	"std" => "",
	"stat"	=>	$status),

array( "type" => "close"),

array( "name" => __("SEO", "ustw"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Custom links", "ustw"),
	"type" => "part"),
	
array( "name" => __("Remove rel from categories", "ustw"),
	"desc" => __("Remove rel='category tag' from categories", "ustw"),
	"id" => "ustw_category_rel",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),
	
array( "name" => __("Remove rel from tags", "ustw"),
	"desc" => __("Remove rel='tag' from tags", "ustw"),
	"id" => "ustw_tag_rel",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Custom category title", "ustw"),
	"desc" => __("Add custom title for categories", "ustw"),
	"id" => "ustw_custom_category",
	"type" => "text",
	"std" => "",
	"stat"	=>	"public"),
	
array( "name" => __("Custom tag title", "ustw"),
	"desc" => __("Add custom title for tags", "ustw"),
	"id" => "ustw_custom_tag",
	"type" => "text",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("Opengraph", "ustw"),
	"type" => "part"),
	
array( "name" => __("Smart opengraph", "ustw"),
	"desc" => __("Simple & smart opengraph functions", "ustw"),
	"id" => "ustw_opengraph",
	"type" => "select",
	"options" => array("Disable", "Enable"),
	"std" => "Disable",
	"stat"	=>	$status),

array( "name" => __("Homepage og image", "ustw"),
	"desc" => __("Add custom og image to the homepage", "ustw"),
	"id" => "ustw_og_home_img",
	"type" => "text",
	"std" => '',
	"stat"	=>	$status),		

array( "name" => __("How it's work?", "ustw"),
	"desc" => __("If you have a blog (Settings->Reading is in default status)
	Homepage
	- og title = blog title
	- og descrition = blog description
	- og image = Homepage og image value
	Posts
	- og title = post title
	- og descrition = post excerpt
	- og image = post's featured image
	Pages
	- og title = page title
	- og descrition = page excerpt
	- og image = page's featured image
	
	If you have a website (Settings->Reading is changed. You can use seperated homepage and blogstream)
	Homepage
	- og title = home page's title
	- og descrition = home page's description
	- og image = home page's featured image
	Blogstream
	- og title = blogstream page's title
	- og descrition = blogstream page's description
	- og image = blogstream page's featured image
	Posts
	- og title = post title
	- og descrition = post excerpt
	- og image = post's featured image
	Pages
	- og title = page title
	- og descrition = page excerpt
	- og image = page's featured image
	Other fields
	- og url = current url
	- og site name = blog title
	", "ustw"),
	"id" => "ustw_oginfo",
	"type" => "description",
	"std" => "",
	"stat"	=>	$status),

array( "type" => "close"),

array( "name" => __("Security", "ustw"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __(".htaccess Guard", "ustw"),
	"type" => "part"),

array( "name" => __("Protect Wordpress", "ustw"),
	"desc" => __(".htaccess protection for WordPress", "ustw"),
	"id" => "ustw_sec_wp",
	"type" => "select",
	"options" => array("Disable", "Enable"),
	"std" => "Disable",
	"stat"	=>	$status),

array( "name" => __("How it's work?", "ustw"),
	"desc" => __("Protect the following files/folders)
	- wp-login.php
	- wp-admin
	- wp-admin/includes
	- wp-includes
	- wp-includes/js/tinymce
	- wp-includes/theme-compact
	- wp-config.php
	- licence and readme files
	- wp root
	", "ustw"),
	"id" => "ustw_oginfo",
	"type" => "description",
	"std" => "",
	"stat"	=>	$status),

array( "type" => "close"),

array( "name" => __("Admin", "ustw"),
	"type" => "section"),
array( "type" => "open"),

array( "name" => __("Enhance", "ustw"),
	"type" => "part"),

array( "name" => __("Page excerpt support", "ustw"),
	"desc" => __("Add excperst support for pages", "ustw"),
	"id" => "ustw_page_excerpt",
	"type" => "select",
	"options" => array("Default", "Enable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Enable shortcode in text widget", "ustw"),
	"desc" => __("Enable shortcodes in text widget", "ustw"),
	"id" => "ustw_shortcode_widget",
	"type" => "select",
	"options" => array("Default", "Enable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Hide Admin Notices", "ustw"),
	"desc" => __("Hiding admin notices", "ustw"),
	"id" => "ustw_hide_admin_notices",
	"type" => "select",
	"options" => array("Default", "Hide"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Hide logo from admin bar", "ustw"),
	"desc" => __("Hiding logo and wp menu from the admin bar", "ustw"),
	"id" => "ustw_hide_logo_adminbar",
	"type" => "select",
	"options" => array("Default", "Hide"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Hide wp text from admin footer", "ustw"),
	"desc" => __("Hiding wp text from wp-admin footer", "ustw"),
	"id" => "ustw_hide_text_adminfooter",
	"type" => "select",
	"options" => array("Default", "Hide"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("SVG upload support", "ustw"),
	"desc" => __("Add SVG support for media", "ustw"),
	"id" => "ustw_svg_support",
	"type" => "select",
	"options" => array("Default", "Enable"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("JPEG quality", "ustw"),
	"desc" => __("Jpeg quality in %", "ustw"),
	"id" => "ustw_jpeg_quality",
	"type" => "stext",
	"std" => "",
	"stat"	=>	$status),

array( "name" => __("Updates", "ustw"),
	"type" => "part"),

array( "name" => __("Always fresh themes", "ustw"),
	"desc" => __("Automatic theme updater", "ustw"),
	"id" => "ustw_theme_update",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Always fresh plugins", "ustw"),
	"desc" => __("Automatic plugin updater", "ustw"),
	"id" => "ustw_plugin_update",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Dashboard widgets", "ustw"),
	"type" => "part"),

array( "name" => __("Remove Activity", "ustw"),
	"desc" => __("Remove activity widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_ac",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Quick Press", "ustw"),
	"desc" => __("Remove quick press widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_qp",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Incoming Links", "ustw"),
	"desc" => __("Remove incoming links widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_il",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Right Now", "ustw"),
	"desc" => __("Remove right now widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_rn",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Plugins", "ustw"),
	"desc" => __("Remove plugins widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_p",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Recent Drafts", "ustw"),
	"desc" => __("Remove recent drafts widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_rd",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Recent Comments", "ustw"),
	"desc" => __("Remove recent comments widget from dashboard", "ustw"),
	"id" => "ustw_remove_db_rc",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Primary Side", "ustw"),
	"desc" => __("Remove primary side from dashboard", "ustw"),
	"id" => "ustw_remove_db_primary",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Remove Secondary Side", "ustw"),
	"desc" => __("Remove secondary side from dashboard", "ustw"),
	"id" => "ustw_remove_db_secondary",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Plugins", "ustw"),
	"type" => "part"),

array( "name" => __("Remove Edit Link", "ustw"),
	"desc" => __("Remove edit link for plugins", "ustw"),
	"id" => "ustw_remove_p_el",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("Remove Deactivate Link", "ustw"),
	"desc" => __("Remove deactivate link for plugins", "ustw"),
	"id" => "ustw_remove_p_d",
	"type" => "select",
	"options" => array("Default", "Remove"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("WP-Config", "ustw"),
	"type" => "part"),

array( "name" => __("Empty Trash", "ustw"),
	"desc" => __("Empty trashes after x days", "ustw"),
	"id" => "ustw_empty_trash",
	"type" => "stext",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("Posts revisions", "ustw"),
	"desc" => __("Disable post revisions", "ustw"),
	"id" => "ustw_revisions",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	"public"),

array( "name" => __("Autosave interval", "ustw"),
	"desc" => __("Set autosave interval in sec", "ustw"),
	"id" => "ustw_autosave",
	"type" => "stext",
	"std" => "",
	"stat"	=>	"public"),

array( "name" => __("File editing", "ustw"),
	"desc" => __("Enable/disable editing files from wp-admin", "ustw"),
	"id" => "ustw_file_edit",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	$status),

array( "name" => __("Always fresh Wordpress", "ustw"),
	"desc" => __("Automatic core updates", "ustw"),
	"id" => "ustw_core_update",
	"type" => "select",
	"options" => array("Default", "Disable"),
	"std" => "Default",
	"stat"	=>	$status),
	
array( "type" => "close")

);

function ustw_add_admin() {
	global $ustw_options;
	$getcont = isset($_GET['page'])?$_GET['page']:'';
	$actioncont = isset($_REQUEST['action'])?$_REQUEST['action']:'';
	if ( $getcont == basename(__FILE__) ) {
		if ( 'Save' == $actioncont ) {
			$ustw_option = '';
			foreach ($ustw_options as $value) {
					if ((isset($value['id'])) && (isset($_REQUEST[ $value['id']])))  { 
						if ($value['id']<>'ustw_uninstall'){
							$ustw_option[$value['id']] = $_REQUEST[ $value['id'] ];
						}
					}
			}
			update_option( 'ustw_options', serialize($ustw_option) ); 
			if (isset($_REQUEST['tab'])) { $tab = $_REQUEST['tab']; } else { $tab = 1; }
			header("Location: admin.php?page=ustw_admin.php&saved=true&tab=".$tab);
			die;
		} 
		else if( 'Uninstall' == $actioncont ) {
			delete_option( 'ustw_options' ); 
			delete_option( 'ustw_key' ); 
			header("Location: admin.php?page=ustw_admin.php&uninstall=true");
			die;
		}
	}
	add_menu_page('Useful Tweaks', 'Useful Tweaks', 'administrator', 'ustw_admin.php', 'ustw_admin_cb');
}

function ustw_add_init() {
	wp_enqueue_style("admin_style", USEFUL_TWEAKS__PLUGIN_URL."/admin/style.css", false, "1.0", "all");
	wp_enqueue_script("admin_js", USEFUL_TWEAKS__PLUGIN_URL."/admin/admin.js", false, "1.0");	
}

function ustw_admin_cb() {
	global $pluginname, $ustw_options, $db_options;
	$savedcont = isset($_REQUEST['saved'])?$_REQUEST['saved']:'';
	$uninstalledcont = isset($_REQUEST['uninstall'])?$_REQUEST['uninstall']:'';
	$db_options = unserialize(get_option('ustw_options'));
	if ( $savedcont ) echo '<div id="message" class="updated fade"><p><strong>'.$pluginname.' options saved.</strong></p></div>';
	if ( $uninstalledcont ) echo '<div id="message" class="updated fade"><p><strong>'.$pluginname.' deleted from database.</strong></p></div>';
	?>
	<div class="wrap admin_wrap">
	<h2>Useful Tweaks Settings</h2>
	<div class="admin_opts">
	<form method="post">
	<?php 
	$i=0;
	foreach ($ustw_options as $value) {
		switch ( $value['type'] ) {
			case "open":
				break;
			case "close":  
				?></div>
				</div><?php 
			break;
			case "title": 
				?><p> </p><?php 
			break;
			case 'uninstall': ?>
				<div class="admin_input admin_btn">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
					<small><?php echo $value['desc']; ?></small></div>
					<span class="submit redsubmit">
						<input name="action" id="<?php echo $value['id']; ?>" type="submit" value="<?php echo $value['name']; ?>" class="button action" />
					</span>
					<div class="clearfix"></div>
				 </div>
			<?php break;
			case 'description': ?>
				<div class="admin_input admin_description <?php echo $value['id']; ?>">
					<h4 class="title"><?php echo $value['name']; ?></h4>
					<label for="<?php echo $value['id']; ?>"><?php echo nl2br($value['desc']); ?></label>
					<div class="clearfix"></div>
				</div>
			<?php break;
			case 'text': ?>
				<div class="admin_input admin_text">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; if($value['stat'] == 'private') echo ' <span class="premium">(Only in Premium Version)</span>'; ?></label>
					<small><?php echo $value['desc']; ?></small></div>
					<?php if($value['stat'] <> 'private') { ?><input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( isset($db_options[ $value['id'] ]) && ( $db_options[ $value['id'] ] != "")) { echo stripslashes($db_options[ $value['id'] ]  ); } else { echo $value['std']; } ?>" /><?php } ?>
				 <div class="clearfix"></div>
				 </div>
			<?php break;
			case 'activ': 
				global $db_options; $a_res= Array('status' => '', 'message' => '');
				if (isset($db_options['ustw_apikey']) && $db_options['ustw_apikey'] <> '') $a_res = chekAPI($db_options['ustw_apikey'], 'multi'); 
				if ($a_res['status'] == "OK" ) { ?>
				<div class="admin_input admin_text">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name'];?></label>
					<small><?php print $a_res['message']; ?></small></div>
					<input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="hidden" value="<?php if ( isset($db_options[ $value['id'] ]) && ( $db_options[ $value['id'] ] != "")) { echo stripslashes($db_options[ $value['id'] ]  ); } else { echo $value['std']; } ?>" />
				 <div class="clearfix"></div>
				 </div>
				 <?php } else { ?>
				<div class="admin_input admin_text">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; if($value['stat'] == 'private') echo ' <span class="premium">(Only in Premium Version)</span>'; ?></label>
					<small><?php if ($a_res['message'] <> '') { print $a_res['message']; } else { echo $value['desc']; } ?></small></div>
					<?php if($value['stat'] <> 'private') { ?><input  name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( isset($db_options[ $value['id'] ]) && ( $db_options[ $value['id'] ] != "")) { echo stripslashes($db_options[ $value['id'] ]  ); } else { echo $value['std']; } ?>" /><?php } ?>
				 <div class="clearfix"></div>
				 </div>
			<?php } break;
			case 'stext': ?>
				<div class="admin_input admin_text">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; if($value['stat'] == 'private') echo ' <span class="premium">(Only in Premium Version)</span>'; ?></label>
					<small><?php echo $value['desc']; ?></small></div>
					<?php if($value['stat'] <> 'private') { ?><input class="stext" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( isset($db_options[ $value['id'] ]) && ( $db_options[ $value['id'] ] != "")) { echo stripslashes($db_options[ $value['id'] ]  ); } else { echo $value['std']; } ?>" /><?php } ?>
				 <div class="clearfix"></div>
				 </div>
			<?php break;
			case 'part': ?>
				<h3 class="title"><?php echo $value['name']; ?></h3>
			<?php break;
			case 'textarea': ?>
				<div class="admin_input admin_textarea">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; if($value['stat'] == 'private') echo ' <span class="premium">(Only in Premium Version)</span>'; ?></label>
					<small><?php echo $value['desc']; ?></small></div>
					<?php if($value['stat'] <> 'private') { ?><textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( isset($db_options[ $value['id'] ]) && ( $db_options[ $value['id'] ] != "")) { echo stripslashes($db_options[ $value['id'] ] ); } else { echo $value['std']; } ?></textarea><?php } ?>
					<div class="clearfix"></div>
				 </div>
			<?php break;
			case 'select': ?>
				<div class="admin_input admin_select">
					<div class="admtxt">
					<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; if($value['stat'] == 'private') echo ' <span class="premium">(Only in Premium Version)</span>'; ?></label>
					<small><?php echo $value['desc']; ?></small></div>
					<?php if($value['stat'] <> 'private') { ?><select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
				<?php foreach ($value['options'] as $option) { ?>
						<option <?php if ( isset($db_options[ $value['id'] ]) && ($db_options[ $value['id'] ] == $option)) { echo 'selected="selected"'; } else if ($value['std']== $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
					</select><?php } ?>
					<div class="clearfix"></div>
				</div>
			<?php break;
			case "section":
				$i++; ?>
				<div class="admin_section">
				<div class="admin_title" id="admin_title<?php echo $i; ?>" data-id="<?php echo $i; ?>"><h3><?php echo $value['name']; ?></h3><div class="clearfix"></div></div>
				<div class="admin_options">
			<?php break;
		}
	} ?>
	<span class="submit">
		<input name="action" type="submit" value="Save" class="button button-primary button-large" />
	</span>
	<div class="clearfix"></div>
	<input type="hidden" name="tab" value="<?php if (isset($_REQUEST['tab'])) { echo $_REQUEST['tab']; } ?>" id="selectedformtab" />
	</form>
	</div> 
<?php
}
add_action('admin_init', 'ustw_add_init');
add_action('admin_menu', 'ustw_add_admin');
?>