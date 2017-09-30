<?php
/**
 * Main include functions ( to support child theme )
 *
 * @since SuperNews 1.0.0
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('supernews_file_directory') ){

    function supernews_file_directory( $file_path ){
        if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ) {
            return trailingslashit( get_stylesheet_directory() ) . $file_path;
        }
        else{
            return trailingslashit( get_template_directory() ) . $file_path;
        }
    }
}

/**
 * Check empty or null
 *
 * @since SuperNews 1.0.0
 *
 * @param string $str, string
 * @return boolean
 *
 */
if( !function_exists('supernews_is_null_or_empty') ){
	function supernews_is_null_or_empty( $str ){
		return ( !isset($str) || trim($str)==='' );
	}
}

/*file for library*/
require_once supernews_file_directory('acmethemes/library/tgm/class-tgm-plugin-activation.php');
/*
* file for customizer theme options
*/
$supernews_customizer_file_path = supernews_file_directory('acmethemes/customizer/customizer.php');
require $supernews_customizer_file_path;


/*
* file for additional functions files
*/
$supernews_date_display_file_path = supernews_file_directory('acmethemes/functions.php');
require $supernews_date_display_file_path;

require_once supernews_file_directory('acmethemes/functions/header.php');

/*
* files for hooks
*/
require_once supernews_file_directory('acmethemes/hooks/tgm.php');

$supernews_front_page_file_path = supernews_file_directory('acmethemes/hooks/front-page.php');
require $supernews_front_page_file_path;

$supernews_slider_selection_file_path = supernews_file_directory('acmethemes/hooks/slider-selection.php');
require $supernews_slider_selection_file_path;

$supernews_hooks_header_file_path = supernews_file_directory('acmethemes/hooks/header.php');
require $supernews_hooks_header_file_path;

$supernews_social_links_file_path = supernews_file_directory('acmethemes/hooks/social-links.php');
require $supernews_social_links_file_path;

$supernews_hooks_dynamic_css_file_path = supernews_file_directory('acmethemes/hooks/dynamic-css.php');
require $supernews_hooks_dynamic_css_file_path;

$supernews_hooks_footer_file_path = supernews_file_directory('acmethemes/hooks/footer.php');
require $supernews_hooks_footer_file_path;

$supernews_comment_form_file_path = supernews_file_directory('acmethemes/hooks/comment-forms.php');
require $supernews_comment_form_file_path;

$supernews_excerpts_form_file_path = supernews_file_directory('acmethemes/hooks/excerpts.php');
require $supernews_excerpts_form_file_path;

$supernews_related_posts_file_path = supernews_file_directory('acmethemes/hooks/related-posts.php');
require $supernews_related_posts_file_path;

require_once supernews_file_directory('acmethemes/hooks/siteorigin-panels.php');

require_once supernews_file_directory('acmethemes/hooks/acme-demo-setup.php');
/*
* file for sidebar and widgets
*/
$supernews_acme_ad_widget = supernews_file_directory('acmethemes/sidebar-widget/acme-ad.php');
require $supernews_acme_ad_widget;

$supernews_col_posts = supernews_file_directory('acmethemes/sidebar-widget/acme-col-posts.php');
require $supernews_col_posts;

$supernews_sidebar = supernews_file_directory('acmethemes/sidebar-widget/sidebar.php');
require $supernews_sidebar;

/*
* file for core functions imported from functions.php while downloading Underscores
*/
$supernews_sidebar = supernews_file_directory('acmethemes/core.php');
require $supernews_sidebar;

/**
 * Implement Custom Metaboxes
 */
require_once supernews_file_directory('acmethemes/metabox/metabox.php');

/*themes info*/
require_once supernews_file_directory('acmethemes/at-theme-info/class-at-theme-info.php');