<?php
if ( ! function_exists( 'contract_setup' ) ) :

function contract_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'contract', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'contract' ),
        'social'  => __( 'Social Links Menu', 'contract' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // contract_setup

add_action( 'after_setup_theme', 'contract_setup' );


if ( ! function_exists( 'contract_init' ) ) :

function contract_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // contract_setup

add_action( 'init', 'contract_init' );


if ( ! function_exists( 'contract_custom_image_sizes_names' ) ) :

function contract_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'contract_custom_image_sizes_names' );
endif;// contract_custom_image_sizes_names



if ( ! function_exists( 'contract_widgets_init' ) ) :

function contract_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'contract_widgets_init' );
endif;// contract_widgets_init



if ( ! function_exists( 'contract_customize_register' ) ) :

function contract_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'contract_customize_register' );
endif;// contract_customize_register


if ( ! function_exists( 'contract_enqueue_scripts' ) ) :
    function contract_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.5.0.min.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/jquery/jquery-3.2.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'jqueryeasing' );
    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/assets/easing/jquery.easing.min.js', false, null, true);

    wp_deregister_script( 'jqueryisotope' );
    wp_enqueue_script( 'jqueryisotope', get_template_directory_uri() . '/assets/isotope/jquery.isotope.js', false, null, true);

    wp_deregister_script( 'imagesloadedpkgd' );
    wp_enqueue_script( 'imagesloadedpkgd', get_template_directory_uri() . '/assets/jquery/imagesloaded.pkgd.min.js', false, null, true);

    wp_deregister_script( 'wow' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/wow/wow.min.js', false, null, true);

    wp_deregister_script( 'jqueryslicknav' );
    wp_enqueue_script( 'jqueryslicknav', get_template_directory_uri() . '/assets/slicknav/jquery.slicknav.js', false, null, true);

    wp_deregister_script( 'owlcarousel' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'jquerymagnificpopup' );
    wp_enqueue_script( 'jquerymagnificpopup', get_template_directory_uri() . '/assets/jquery/jquery.magnific-popup.min.js', false, null, true);

    wp_deregister_script( 'jqueryanimatenumber' );
    wp_enqueue_script( 'jqueryanimatenumber', get_template_directory_uri() . '/assets/number-animation/jquery.animateNumber.min.js', false, null, true);

    wp_deregister_script( 'jquerythemepunchtools' );
    wp_enqueue_script( 'jquerythemepunchtools', get_template_directory_uri() . '/assets/revolution/js/source/jquery.themepunch.tools.min.js', false, null, true);

    wp_deregister_script( 'jquerythemepunchrevolution' );
    wp_enqueue_script( 'jquerythemepunchrevolution', get_template_directory_uri() . '/assets/revolution/js/source/jquery.themepunch.revolution.js', false, null, true);

    wp_deregister_script( 'revolutionextensionactions' );
    wp_enqueue_script( 'revolutionextensionactions', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.actions.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensioncarousel' );
    wp_enqueue_script( 'revolutionextensioncarousel', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.carousel.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionkenburn' );
    wp_enqueue_script( 'revolutionextensionkenburn', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionlayeranimation' );
    wp_enqueue_script( 'revolutionextensionlayeranimation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionmigration' );
    wp_enqueue_script( 'revolutionextensionmigration', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.migration.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionnavigation' );
    wp_enqueue_script( 'revolutionextensionnavigation', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionparallax' );
    wp_enqueue_script( 'revolutionextensionparallax', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionslideanims' );
    wp_enqueue_script( 'revolutionextensionslideanims', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', false, null, true);

    wp_deregister_script( 'revolutionextensionvideo' );
    wp_enqueue_script( 'revolutionextensionvideo', get_template_directory_uri() . '/assets/revolution/js/extensions/revolution.extension.video.min.js', false, null, true);

    wp_add_inline_script( 'revolutionextensionvideo', 'var revapi;
	jQuery(document).ready(function() {		
		revapi = jQuery("#rev_slider").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			fullScreenOffsetContainer:".header",

<!--			fullScreenOffset:"50px",-->
			delay:5000,
			navigation: {
				arrows:{enable:true}				
			},			
			responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
           gridwidth: [1240, 1024, 778, 480],
           gridheight: [620, 520, 580, 480],
		   
		});		
	});	/*ready*/');
    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/jquery/plugins.js', false, null, true);

    wp_deregister_script( 'email' );
    wp_enqueue_script( 'email', get_template_directory_uri() . '/js/email.js', false, null, true);

    wp_deregister_script( 'custom' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://www.googletagmanager.com/gtag/js?id=UA-110184309-1', false, null, true);

    wp_add_inline_script( 'script-1', 'window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-110184309-1\');');
    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/Normalize/normalize.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'iconfont' );
    wp_enqueue_style( 'iconfont', get_template_directory_uri() . '/assets/linearicons/css/icon-font.min.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate/animate.css', false, null, 'all');

    wp_deregister_style( 'owlcarousel' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.css', false, null, 'all');

    wp_deregister_style( 'owltheme' );
    wp_enqueue_style( 'owltheme', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.css', false, null, 'all');

    wp_deregister_style( 'ionicons' );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', false, null, 'all');

    wp_deregister_style( 'magnificpopup' );
    wp_enqueue_style( 'magnificpopup', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, null, 'all');

    wp_deregister_style( 'settings' );
    wp_enqueue_style( 'settings', get_template_directory_uri() . '/assets/revolution/css/settings.css', false, null, 'all');

    wp_deregister_style( 'layers' );
    wp_enqueue_style( 'layers', get_template_directory_uri() . '/assets/revolution/css/layers.css', false, null, 'all');

    wp_deregister_style( 'navigation' );
    wp_enqueue_style( 'navigation', get_template_directory_uri() . '/assets/revolution/css/navigation.css', false, null, 'all');

    wp_deregister_style( 'slicknav' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/slicknav/slicknav.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'responsive' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'contract_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>