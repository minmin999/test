<?php
/* 
**   Custom Modifcations in CSS depending on user settings.
*/

function plum_custom_css_mods() {
	
	$custom_css = "";

	// Title & Tagline Color
	if ( get_theme_mod('plum_title_font') ) :
		$custom_css .= ".title-font, h1, h2, .section-title, .woocommerce ul.products li.product h3 { font-family: ".esc_html( get_theme_mod('plum_title_font','Droid Serif') )."; }";
	endif;

	if ( get_theme_mod('plum_body_font') ) :
		$custom_css .= "body, h2.site-description { font-family: ".esc_html( get_theme_mod('plum_body_font','Ubuntu') )."; }";
	endif;

	//Title Color
	if ( get_header_textcolor() ) :
		$custom_css .= "#masthead .masthead-inner .site-branding .site-title a { color: #".get_header_textcolor()."; }";
	endif;
	
	//Tagline Color
	if ( get_theme_mod('plum_header_desccolor','#FFFFFF') ) :
		$custom_css .= "#masthead .masthead-inner .site-branding .site-description { color: ".esc_html( get_theme_mod('plum_header_desccolor','#FFFFFF') )."; }";
	endif;
	//Check Jetpack is active
	if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) )
		$custom_css .= '.pagination { display: none; }';
	
	
	if ( !display_header_text() ) :
		$custom_css .= "#masthead .site-branding #text-title-desc { display: none; }";
	endif;

	//Header Image
	if  ( get_theme_mod('plum_header_image_style','default') == 'full-image' && ( is_home() || (is_page() && has_post_thumbnail()))) : 
		$custom_css .= "@media screen and (max-width: 767px) {
			#masthead #mobile-header-image { display: block; }
			#masthead {
			min-height: auto;
			padding-bottom: 90px;
			background-image: none !important; 
			
			}
		}";
		
	endif;
	
	if (strlen(get_bloginfo( 'name' )) > 25) :
		$custom_css .= "@media screen and (min-width: 768px) { #masthead .masthead-inner .site-branding .site-title { font-size: 18px; } }"; 
	endif;


	//Page Title
	if(!is_home() && is_front_page()):
        if( get_theme_mod('plum_page_title', true)):
            $custom_css .= "#primary-mono .entry-header { display:none; }";
	    endif;
	endif;

	//Contact Us Page Title
	if(!is_home()):
        if( get_theme_mod('plum_contact_page_title', true)):
            $custom_css .= "#primary-mono .contact-us .entry-header { display:none; }";
	    endif;
	endif;

	//Content Font Size
    if (!is_home() && is_front_page()) :
        if ( get_theme_mod('plum_content_font_size') ) :
            $size = (get_theme_mod('plum_content_font_size'));
            $custom_css .= "#primary-mono .entry-content { font-size:".$size.";}";
        endif;
    endif;

    //Hero Backgrounds
    if (get_theme_mod('plum_hero_background_image') != '') :
        $image = get_theme_mod('plum_hero_background_image');
        $custom_css .= "#hero {
                    	background-image: url('" . $image . "');
                        background-size: cover;
                }";
    endif;

    if (get_theme_mod('plum_hero_background_image')) :
        $image1 = get_theme_mod('plum_hero2_background_image');
        $custom_css .= "#hero2 {
                    background-image: url('" . $image1 . "');
                    background-size: cover;
                }";
    endif;

    //Menu Alignment
    if(is_home() && is_front_page() || is_front_page() ) :
        if (get_theme_mod('plum_menu_alignment_set') == 'center') :
            $custom_css .= "#site-navigation ul { text-align: center !important; } .main-navigation li { float: none;
        display: inline-block !important; } ";

        elseif (get_theme_mod('plum_menu_alignment_set') == 'right') :
            $custom_css .= "#site-navigation ul { text-align: right; } .main-navigation li { float: none;
        display: inline-block; } ";
        endif;
    endif;

    wp_add_inline_style( 'plum-main-theme-style', wp_strip_all_tags($custom_css) );
	
}

add_action('wp_enqueue_scripts', 'plum_custom_css_mods');