<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
$option_name = 'hashtag_name_one';
$option_name_one = 'hashtag_post_type_query_one';
$option_name_four = 'hashtag_post_type_category_query_one';
$option_name_two = 'hashtag_name_two';
$option_name_three = 'hashtag_post_type_query_two';
$option_name_five = 'hashtag_post_type_category_query_two';
$option_name_six = 'hashtag_name_three';
$option_name_seven = 'hashtag_post_type_query_three';
$option_name_eight = 'hashtag_post_type_category_query_three';
$option_name_nine = 'hashtag_name_four';
$option_name_ten = 'hashtag_post_type_query_four';
$option_name_eleven = 'hashtag_post_type_category_query_four';
$option_name_twelve = 'hashtag_name_five';
$option_name_thirteen = 'hashtag_post_type_query_five';
$option_name_fourteen = 'hashtag_post_type_category_query_five';
delete_option($option_name);
delete_option($option_name_one);
delete_option($option_name_two);
delete_option($option_name_three);
delete_option($option_name_four);
delete_option($option_name_five);
delete_option($option_name_six);
delete_option($option_name_seven);
delete_option($option_name_eight);
delete_option($option_name_nine);
delete_option($option_name_ten);
delete_option($option_name_eleven);
delete_option($option_name_twelve);
delete_option($option_name_thirteen);
delete_option($option_name_fourteen);
// for site options in Multisite
delete_site_option($option_name);
delete_site_option($option_name_one);
delete_site_option($option_name_two);
delete_site_option($option_name_three);
delete_site_option($option_name_four);
delete_site_option($option_name_five);
delete_site_option($option_name_six);
delete_site_option($option_name_seven);
delete_site_option($option_name_eight);
delete_site_option($option_name_nine);
delete_site_option($option_name_ten);
delete_site_option($option_name_eleven);
delete_site_option($option_name_twelve);
delete_site_option($option_name_thirteen);
delete_site_option($option_name_fourteen);
?>