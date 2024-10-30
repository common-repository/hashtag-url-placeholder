<?php
  // If this file is called directly, abort.
  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }
//lets create a settings page shall we?
add_action( 'admin_menu', 'hashtag_latest_post_admin_menu' );
//function that defines the settings menu items & stuff
function hashtag_latest_post_admin_menu() {
    add_options_page(
        'Add #LatestPosts To Menu',
        'Hashtag Latest Post',
        'manage_options',
        'hashtag-latest-post',
        'hashtag_latest_post_settings_page'
    );
}
//add in a couple of settings. Allow user to change the # and query any cpt that they would like.
//call register settings function
add_action( 'admin_init', 'register_hashtag_latest_post_plugin_settings' );
//lets do some stuff with this, like register settings
function register_hashtag_latest_post_plugin_settings() {
    //register our settings
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_name_one' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_query_one' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_category_query_one' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_name_two' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_query_two' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_category_query_two' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_name_three' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_query_three' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_category_query_three' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_name_four' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_query_four' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_category_query_four' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_name_five' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_query_five' );
    register_setting( 'hashtag-latest-posts-settings-group', 'hashtag_post_type_category_query_five' );
}
//create the settings page and put some stuff on it, man.
function hashtag_latest_post_settings_page() {
    ?>
<div class="wrap">
<h2>Hashtag URL Placeholder Settings</h2>
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<!-- main content -->
<div id="post-body-content">
<div class="meta-box-sortables ui-sortable">
<div class="postbox">
<div style="background-color: #0074a2;color: #fff;"><div style="vertical-align:middle;"><h2 style="color:#fff;"><span>Create Your Hashtags</span></h2></div></div>
<div class="inside">
<table class="widefat" cellspacing="0">
<tbody>
<form method="post" action="options.php">
<?php settings_fields( 'hashtag-latest-posts-settings-group' ); ?>
<?php do_settings_sections( 'hashtag-latest-posts-settings-group' ); ?>
<tr class="alternate">
<td class="row-title">
Hastag: <input type="text" name="hashtag_name_one" value="<?php echo esc_attr( get_option('hashtag_name_one') ); ?>" /> Post Type Name:  <input type="text" name="hashtag_post_type_query_one" value="<?php echo esc_attr( get_option('hashtag_post_type_query_one') ); ?>" /> Category:  <input type="text" name="hashtag_post_type_category_query_one" value="<?php echo esc_attr( get_option('hashtag_post_type_category_query_one') ); ?>" /> 
</td>
</tr>
<tr>
<td class="row-title">
Hastag: <input type="text" name="hashtag_name_two" value="<?php echo esc_attr( get_option('hashtag_name_two') ); ?>" /> Post Type Name: <input type="text" name="hashtag_post_type_query_two" value="<?php echo esc_attr( get_option('hashtag_post_type_query_two') ); ?>" /> Category:  <input type="text" name="hashtag_post_type_category_query_two" value="<?php echo esc_attr( get_option('hashtag_post_type_category_query_two') ); ?>" /> 
</td>
</tr>
<tr class="alternate">
<td class="row-title">
Hastag: <input type="text" name="hashtag_name_three" value="<?php echo esc_attr( get_option('hashtag_name_three') ); ?>" /> Post Type Name: <input type="text" name="hashtag_post_type_query_three" value="<?php echo esc_attr( get_option('hashtag_post_type_query_three') ); ?>" /> Category:  <input type="text" name="hashtag_post_type_category_query_three" value="<?php echo esc_attr( get_option('hashtag_post_type_category_query_three') ); ?>" /> 
</td>
</tr>
<td class="row-title">
 Hastag: <input type="text" name="hashtag_name_four" value="<?php echo esc_attr( get_option('hashtag_name_four') ); ?>" /> Post Type Name: <input type="text" name="hashtag_post_type_query_four" value="<?php echo esc_attr( get_option('hashtag_post_type_query_four') ); ?>" /> Category:  <input type="text" name="hashtag_post_type_category_query_four" value="<?php echo esc_attr( get_option('hashtag_post_type_category_query_four') ); ?>" /> 
</td>
</tr>
<tr class="alternate">
<td class="row-title">
Hastag: <input type="text" name="hashtag_name_five" value="<?php echo esc_attr( get_option('hashtag_name_five') ); ?>" /> Post Type Name: <input type="text" name="hashtag_post_type_query_five" value="<?php echo esc_attr( get_option('hashtag_post_type_query_five') ); ?>" /> Category:  <input type="text" name="hashtag_post_type_category_query_five" value="<?php echo esc_attr( get_option('hashtag_post_type_category_query_five') ); ?>" /> 
</td>
</tr>
</tbody>
</table>
</div>
<!-- .inside -->
</div>
<!-- .postbox -->
</div>
    <?php submit_button(); ?>
</form>
<!-- .meta-box-sortables .ui-sortable -->

<div class="postbox">
<div style="background-color: #0074a2;color: #fff;"><div style="vertical-align:middle;"><h2 style="color:#fff;"><span>Available Post Types</span></h2></div></div>
<div class="inside">
<table class="widefat" cellspacing="0">
<tbody>
<?php echo get_all_the_post_types_function('', ''); ?>
</tbody>
</table>
</div>
<!-- .inside -->
</div>

</div>
<!-- post-body-content -->
    <!-- sidebar -->
    <div id="postbox-container-1" class="postbox-container">
        <div class="meta-box-sortables">
            <div class="postbox">
           <div style="background-color: #0074a2;color: #fff;"><div style="vertical-align:middle;"><h2 style="color:#fff;"><span>Directions</span></h2></div></div>
            <div class="inside">
            <p>This is a simple plugin that allows you to use a #Hashtag for the url, inside of a menu item. Essentially, you are linking to the latest post directly from your menu location.</p>
            <ol>
            <li>Create your own hashtag (#awesomeness).</li>
            <li>Copy the name of a post type and paste it into the Post Type Name field. (post).</li>
            <li>Add a name of a category if you want to link the latest post in a specific category. (news)</li>
            <li>Add a new "custom link" to your menu.</li>
            <li>In the menu item's url, paste in your hashtag.</li>
            <li>The menu item will now link to the last published post, in that specific post type / category.</li>
            <li><strong>Remember</strong>: If you change the #Hashtag name on this page, you need to change the name of the #Hashtag inside of your custom menu item.</li>
            </ol>
            <p><strong>NOTE</strong>: If you use a custom post type name, leave category field blank.</p>
            <p><strong>Note</strong>: Not all of the available post types work. Some pluigins create post types for storage only and do not allow them to be viewed on the front end of your site. We've excluded some of these, but not all.</p>
            <p><strong>Note</strong>: Leave category field blank if post type name is not post or page.</p>
            </div>
            </div>
            <!-- .postbox -->
            <div class="postbox">
            <div style="background-color: #0074a2;color: #fff;"><div style="vertical-align:middle;"><h2 style="color:#fff;"><span>Version</span></h2></div></div>
            <div class="inside">
            <?php echo 'Version ' . HUP_Version . ''; ?>
            </div>
            </div>
            <!-- .postbox -->
        </div>
        <!-- .meta-box-sortables -->

    </div>
    <!-- #postbox-container-1 .postbox-container -->

</div>
<br class="clear">
</div>
</div>
    <?php
}
// Front end only, don't hack on the settings page
if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
// Replaces a custom URL placeholder with the URL to the latest post
function replace_placeholder_nav_menu_item_with_latest_post( $items, $menu, $args ) {
    // Loop through the menu items looking for placeholder(s)
    foreach ( $items as $item ) {  
        //drop these in here so we can use them in the query
        $hashtag_name_one = esc_attr( get_option('hashtag_name_one') );
        $hashtag_post_type_one = esc_attr( get_option('hashtag_post_type_query_one') );
        $hashtag_post_type_category_one = esc_attr( get_option('hashtag_post_type_category_query_one') );
        // Is this the placeholder we're looking for?
        if ( $hashtag_name_one != $item->url )
            continue;
        // Get the latest post
        $args = array(
        'post_type' => $hashtag_post_type_one,
        'category_name' => $hashtag_post_type_category_one,
        'post_status'      => 'publish',
        'numberposts' => 1,
        );
        $latestpost = get_posts( $args );
        if ( empty( $latestpost ) )
            continue;
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $latestpost[0]->ID );
    }
    // Return the modified (or maybe unmodified) menu items array
    return $items;
}
// Front end only, don't hack on the settings page
if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_again_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
// Replaces a custom URL placeholder with the URL to the latest post
function replace_again_placeholder_nav_menu_item_with_latest_post( $itemss, $menu, $args ) {
    // Loop through the menu items looking for placeholder(s)
    foreach ( $itemss as $item ) {
        //drop these in here so we can use them in the query
        $hashtag_name_two = esc_attr( get_option('hashtag_name_two') );
        $hashtag_post_type_two = esc_attr( get_option('hashtag_post_type_query_two') );
        $hashtag_post_type_category_two = esc_attr( get_option('hashtag_post_type_category_query_two') );
        // Is this the placeholder we're looking for?
       if ( $hashtag_name_two != $item->url )
            continue;
        // Get the latest post
        $args = array(
        'post_type' => $hashtag_post_type_two,
        'category_name' => $hashtag_post_type_category_two,
        'post_status'      => 'publish',
        'numberposts' => 1,
        );
        $lastmonthpost = get_posts( $args );
        if ( empty( $lastmonthpost ) )
            continue;
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $lastmonthpost[0]->ID );
    }
    // Return the modified (or maybe unmodified) menu items array
    return $itemss;
}
if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_again_three_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
// Replaces a custom URL placeholder with the URL to the latest post
function replace_again_three_placeholder_nav_menu_item_with_latest_post( $itemss, $menu, $args ) {
    // Loop through the menu items looking for placeholder(s)
    foreach ( $itemss as $item ) {
        //drop these in here so we can use them in the query
        $hashtag_name_three = esc_attr( get_option('hashtag_name_three') );
        $hashtag_post_type_three = esc_attr( get_option('hashtag_post_type_query_three') );
        $hashtag_post_type_category_three = esc_attr( get_option('hashtag_post_type_category_query_three') );
        // Is this the placeholder we're looking for?
       if ( $hashtag_name_three != $item->url )
            continue;
        // Get the latest post
        $args = array(
        'post_type' => $hashtag_post_type_three,
        'category_name' => $hashtag_post_type_category_three,
        'post_status'      => 'publish',
        'numberposts' => 1,
        );
        $lastmonthpost = get_posts( $args );
        if ( empty( $lastmonthpost ) )
            continue;
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $lastmonthpost[0]->ID );
    }
    // Return the modified (or maybe unmodified) menu items array
    return $itemss;
}
 if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_again_four_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
// Replaces a custom URL placeholder with the URL to the latest post
function replace_again_four_placeholder_nav_menu_item_with_latest_post( $itemss, $menu, $args ) {
    // Loop through the menu items looking for placeholder(s)
    foreach ( $itemss as $item ) {
        //drop these in here so we can use them in the query
        $hashtag_name_four = esc_attr( get_option('hashtag_name_four') );
        $hashtag_post_type_four = esc_attr( get_option('hashtag_post_type_query_four') );
        $hashtag_post_type_category_four = esc_attr( get_option('hashtag_post_type_category_query_four') );
        // Is this the placeholder we're looking for?
       if ( $hashtag_name_four != $item->url )
            continue;
        // Get the latest post
        $args = array(
        'post_type' => $hashtag_post_type_four,
        'category_name' => $hashtag_post_type_category_four,
        'post_status'      => 'publish',
        'numberposts' => 1,
        );
        $lastmonthpost = get_posts( $args );
        if ( empty( $lastmonthpost ) )
            continue;
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $lastmonthpost[0]->ID );
    }
    // Return the modified (or maybe unmodified) menu items array
    return $itemss;
}
if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_again_five_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
// Replaces a custom URL placeholder with the URL to the latest post
function replace_again_five_placeholder_nav_menu_item_with_latest_post( $itemss, $menu, $args ) {
    // Loop through the menu items looking for placeholder(s)
    foreach ( $itemss as $item ) {
        //drop these in here so we can use them in the query
        $hashtag_name_five = esc_attr( get_option('hashtag_name_five') );
        $hashtag_post_type_five = esc_attr( get_option('hashtag_post_type_query_five') );
        $hashtag_post_type_category_five = esc_attr( get_option('hashtag_post_type_category_query_five') );
        // Is this the placeholder we're looking for?
       if ( $hashtag_name_five != $item->url )
            continue;
        // Get the latest post
        $args = array(
        'post_type' => $hashtag_post_type_five,
        'category_name' => $hashtag_post_type_category_five,
        'post_status'      => 'publish',
        'numberposts' => 1,
        );
        $lastmonthpost = get_posts( $args );
        if ( empty( $lastmonthpost ) )
            continue;
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $lastmonthpost[0]->ID );
    }
    // Return the modified (or maybe unmodified) menu items array
    return $itemss;
}
?>