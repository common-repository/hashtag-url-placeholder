=== Hashtag URL Placeholder ===
Contributors: GeekStreetWP
Author URI: https://russellenvy.com
Tags: links, link, url, hashtag, menu, simple, custom, custom post type, admin
Requires at least: 4.1
Tested up to: 4.9.1
Stable tag: 1.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create a #hastag linking to your latest post, in a post type or category.

== Description ==

Have you ever wanted to link directly to the lastest post in a post type / category, with out having to update your menu? Now you can use a #Hashtag inside of a custom menu item's url. The custom menu item links to the latest post in a post type / category you choose. 

Let's say your readers want to only read the latest post in a category called news. You can create a #Hastag menu item and link them directly to the latest post in your category, straight from your menu.

== Installation ==

This section describes how to install the plugin and get it working.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Hashtag URL Placeholder'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard
5. Settings > Hashtag Latest Post

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `hashtag-url-placeholder.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard
6. Settings > Hashtag Latest Post

= Using FTP =

1. Download `hashtag-url-placeholder.zip`
2. Extract the `hashtag-url-placeholder` directory to your computer
3. Upload the `hashtag-url-placeholder` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard
5. Settings > Hashtag Latest Post

== Screenshots ==

1. Define Your Own Hashtag and pick a post type.
2. Create a Custom Menu Item and replace the URL with your Hashtag. The title of the item can be anything that you want.

== Frequently Asked Questions ==

= Can I link to a category in a custom post type? =
 
No. You can only link to a category, inside of the post type called post. Please leave all categories blank if your post type is different.

== Changelog ==

= 1.3 =
* Major Release
* Updated UI & UX. 
* Create five hashtags instead of two.
* Added more notes in directions.
* Added die function if any page is called, not by WP.
* Uninstall file now deltes all options created.

= 1.2 =
* Added new feature to link directly to a specific category. Post > News.
* Updated UI and UX.
* Excluded post types not relating to anything you can link to or want on your front end.
* Added Disclaimer text to notify users they can only link to the latest post in a custom post type.

= 1.1 =
* Separated plugin into differnt files for easier debugging and building.
* Added settings link on wp-admin/plugins.php
* Added Uninstall.php file to delete settings in the wp_options table upon deleting plugin. Very Important.
* Updated version and tested.

= 1.0 =
* First release
* Release Date - 13th April, 2016
