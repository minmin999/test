<?php
/**
 * Social media functions.
 *
 * @package ThinkUpThemes
 */

/* ----------------------------------------------------------------------------------
	SEARCH - DISABLE SEARCH
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_headersearch() {

// Get theme options values.
$thinkup_header_searchswitch = smarter_thinkup_var ( 'thinkup_header_searchswitch' );

	if ( $thinkup_header_searchswitch == '1' ) {
		echo '<div id="header-search">',
			 get_search_form(),
			 '</div>';
	}
}


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - DISPLAY MESSAGE
---------------------------------------------------------------------------------- */

/* Message Settings */
function smarter_thinkup_input_socialmessage(){

// Get theme options values.
$thinkup_header_socialmessage   = smarter_thinkup_var ( 'thinkup_header_socialmessage' );
$thinkup_header_facebookswitch  = smarter_thinkup_var ( 'thinkup_header_facebookswitch' );
$thinkup_header_twitterswitch   = smarter_thinkup_var ( 'thinkup_header_twitterswitch' );
$thinkup_header_googleswitch    = smarter_thinkup_var ( 'thinkup_header_googleswitch' );
$thinkup_header_instagramswitch = smarter_thinkup_var ( 'thinkup_header_instagramswitch' );
$thinkup_header_linkedinswitch  = smarter_thinkup_var ( 'thinkup_header_linkedinswitch' );
$thinkup_header_flickrswitch    = smarter_thinkup_var ( 'thinkup_header_flickrswitch' );
$thinkup_header_youtubeswitch   = smarter_thinkup_var ( 'thinkup_header_youtubeswitch' );

	if ( empty( $thinkup_header_facebookswitch ) 
		and empty( $thinkup_header_twitterswitch ) 
		and empty( $thinkup_header_googleswitch ) 
		and empty( $thinkup_header_instagramswitch ) 
		and empty( $thinkup_header_linkedinswitch ) 
		and empty( $thinkup_header_flickrswitch ) 
		and empty( $thinkup_header_lastfmswitch ) 
		and empty( $thinkup_header_youtubeswitch ) ) {	
		return '';
	} else if ( ! empty( $thinkup_header_socialmessage ) ) {	
		return esc_html( $thinkup_header_socialmessage );
	} else if ( empty( $thinkup_header_socialmessage ) ) {
		return '';
	}
}


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - CUSTOM ICONS
---------------------------------------------------------------------------------- */

/* Facebook - Custom Icon */
function smarter_thinkup_input_facebookicon(){

// Get theme options values.
$thinkup_header_facebookiconswitch = smarter_thinkup_var ( 'thinkup_header_facebookiconswitch' );
$thinkup_header_facebookcustomicon = smarter_thinkup_var ( 'thinkup_header_facebookcustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_facebookiconswitch == '1' and ! empty( $thinkup_header_facebookcustomicon ) ) {
		
		// Output for header social media
		$output .= '#header-social li.facebook a,';
		$output .= '#header-social li.facebook a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_facebookcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.facebook i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.facebook a,';
		$output .= '#post-footer-social li.facebook a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_facebookcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.facebook i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* Twitter - Custom Icon */
function smarter_thinkup_input_twittericon(){

// Get theme options values.
$thinkup_header_twittericonswitch = smarter_thinkup_var ( 'thinkup_header_twittericonswitch' );
$thinkup_header_twittercustomicon = smarter_thinkup_var ( 'thinkup_header_twittercustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_twittericonswitch == '1' and ! empty( $thinkup_header_twittercustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.twitter a,';
		$output .= '#header-social li.twitter a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_twittercustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.twitter i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.twitter a,';
		$output .= '#post-footer-social li.twitter a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_twittercustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.twitter i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* Google+ - Custom Icon */
function smarter_thinkup_input_googleicon(){

// Get theme options values.
$thinkup_header_googleiconswitch = smarter_thinkup_var ( 'thinkup_header_googleiconswitch' );
$thinkup_header_googlecustomicon = smarter_thinkup_var ( 'thinkup_header_googlecustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_googleiconswitch == '1' and ! empty( $thinkup_header_googlecustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.google-plus a,';
		$output .= '#header-social li.google-plus a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_googlecustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.google-plus i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.google-plus a,';
		$output .= '#post-footer-social li.google-plus a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_googlecustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.google-plus i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* Instagram - Custom Icon */
function smarter_thinkup_input_instagramicon(){

// Get theme options values.
$thinkup_header_instagramiconswitch = smarter_thinkup_var ( 'thinkup_header_instagramiconswitch' );
$thinkup_header_instagramcustomicon = smarter_thinkup_var ( 'thinkup_header_instagramcustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_instagramiconswitch == '1' and ! empty( $thinkup_header_instagramcustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.instagram a,';
		$output .= '#header-social li.instagram a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_instagramcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.instagram i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.instagram a,';
		$output .= '#post-footer-social li.instagram a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_instagramcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.instagram i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* LinkedIn - Custom Icon */
function smarter_thinkup_input_linkedinicon(){

// Get theme options values.
$thinkup_header_linkediniconswitch = smarter_thinkup_var ( 'thinkup_header_linkediniconswitch' );
$thinkup_header_linkedincustomicon = smarter_thinkup_var ( 'thinkup_header_linkedincustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_linkediniconswitch == '1' and ! empty( $thinkup_header_linkedincustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.linkedin a,';
		$output .= '#header-social li.linkedin a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_linkedincustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.linkedin i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.linkedin a,';
		$output .= '#post-footer-social li.linkedin a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_linkedincustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.linkedin i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* Flickr - Custom Icon */
function smarter_thinkup_input_flickricon(){

// Get theme options values.
$thinkup_header_flickriconswitch = smarter_thinkup_var ( 'thinkup_header_flickriconswitch' );
$thinkup_header_flickrcustomicon = smarter_thinkup_var ( 'thinkup_header_flickrcustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_flickriconswitch == '1' and ! empty( $thinkup_header_flickrcustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.flickr a,';
		$output .= '#header-social li.flickr a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_flickrcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.flickr i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.flickr a,';
		$output .= '#post-footer-social li.flickr a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_flickrcustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.flickr i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* YouTube - Custom Icon */
function smarter_thinkup_input_youtubeicon(){

// Get theme options values.
$thinkup_header_youtubeiconswitch = smarter_thinkup_var ( 'thinkup_header_youtubeiconswitch' );
$thinkup_header_youtubecustomicon = smarter_thinkup_var ( 'thinkup_header_youtubecustomicon', 'url' );

	$output = NULL;

	if ( $thinkup_header_youtubeiconswitch == '1' and ! empty( $thinkup_header_youtubecustomicon ) ) {

		// Output for header social media
		$output .= '#header-social li.youtube a,';
		$output .= '#header-social li.youtube a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_youtubecustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#header-social li.youtube i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

		// Output for footer social media
		$output .= '#post-footer-social li.youtube a,';
		$output .= '#post-footer-social li.youtube a:hover {';
		$output .= 'background: url("' . esc_url( $thinkup_header_youtubecustomicon ) . '") no-repeat center;';
		$output .= 'background-size: 30px;';
		$output .= '-webkit-border-radius: 0;';
		$output .= '-moz-border-radius: 0;';
		$output .= '-o-border-radius: 0;';
		$output .= 'border-radius: 0;';
		$output .= '}' . "\n";
		$output .= '#post-footer-social li.youtube i {';
		$output .= 'display: none;';
		$output .= '}' . "\n";

	}
	return $output;
}

/* Input Custom Social Media Icons */
function smarter_thinkup_input_socialicon(){

	$output = NULL;
	
	$output .= smarter_thinkup_input_facebookicon();
	$output .= smarter_thinkup_input_twittericon();
	$output .= smarter_thinkup_input_googleicon();
	$output .= smarter_thinkup_input_instagramicon();
	$output .= smarter_thinkup_input_linkedinicon();
	$output .= smarter_thinkup_input_flickricon();
	$output .= smarter_thinkup_input_youtubeicon();

	if ( ! empty( $output ) ) {
		echo    '<style type="text/css">' . "\n" . $output . '</style>';
	}
}
add_action( 'wp_head', 'smarter_thinkup_input_socialicon', 13 );


/* ----------------------------------------------------------------------------------
	SOCIAL MEDIA - OUTPUT SOCIAL MEDIA SELECTIONS
---------------------------------------------------------------------------------- */

function smarter_thinkup_input_socialmedia() {

// Get theme options values.
$thinkup_header_socialswitch    = smarter_thinkup_var ( 'thinkup_header_socialswitch' );
$thinkup_header_socialmessage   = smarter_thinkup_var ( 'thinkup_header_socialmessage' );
$thinkup_header_facebookswitch  = smarter_thinkup_var ( 'thinkup_header_facebookswitch' );
$thinkup_header_facebooklink    = smarter_thinkup_var ( 'thinkup_header_facebooklink' );
$thinkup_header_twitterswitch   = smarter_thinkup_var ( 'thinkup_header_twitterswitch' );
$thinkup_header_twitterlink     = smarter_thinkup_var ( 'thinkup_header_twitterlink' );
$thinkup_header_googleswitch    = smarter_thinkup_var ( 'thinkup_header_googleswitch' );
$thinkup_header_googlelink      = smarter_thinkup_var ( 'thinkup_header_googlelink' );
$thinkup_header_instagramswitch = smarter_thinkup_var ( 'thinkup_header_instagramswitch' );
$thinkup_header_instagramlink   = smarter_thinkup_var ( 'thinkup_header_instagramlink' );
$thinkup_header_linkedinswitch  = smarter_thinkup_var ( 'thinkup_header_linkedinswitch' );
$thinkup_header_linkedinlink    = smarter_thinkup_var ( 'thinkup_header_linkedinlink' );
$thinkup_header_flickrswitch    = smarter_thinkup_var ( 'thinkup_header_flickrswitch' );
$thinkup_header_flickrlink      = smarter_thinkup_var ( 'thinkup_header_flickrlink' );
$thinkup_header_youtubeswitch   = smarter_thinkup_var ( 'thinkup_header_youtubeswitch' );
$thinkup_header_youtubelink     = smarter_thinkup_var ( 'thinkup_header_youtubelink' );

// Reset count values used in foreach loop
$i = 0;
$j = 0;

	if ( $thinkup_header_socialswitch == '1' ) {

		// Assign social media link to an array
		$social_links = array( 
			array( 'social' => __( 'Facebook', 'smarter' ),  'icon' => 'facebook',     'toggle' => $thinkup_header_facebookswitch,  'link' => $thinkup_header_facebooklink ),
			array( 'social' => __( 'Twitter', 'smarter' ),   'icon' => 'twitter',      'toggle' => $thinkup_header_twitterswitch,   'link' => $thinkup_header_twitterlink ),
			array( 'social' => __( 'Google+', 'smarter' ),   'icon' => 'google-plus',  'toggle' => $thinkup_header_googleswitch,    'link' => $thinkup_header_googlelink ),
			array( 'social' => __( 'Instagram', 'smarter' ), 'icon' => 'instagram',    'toggle' => $thinkup_header_instagramswitch, 'link' => $thinkup_header_instagramlink ),
			array( 'social' => __( 'LinkedIn', 'smarter' ),  'icon' => 'linkedin',     'toggle' => $thinkup_header_linkedinswitch,  'link' => $thinkup_header_linkedinlink ),
			array( 'social' => __( 'Flickr', 'smarter' ),    'icon' => 'flickr',       'toggle' => $thinkup_header_flickrswitch,    'link' => $thinkup_header_flickrlink ),
			array( 'social' => __( 'YouTube', 'smarter' ),   'icon' => 'youtube',      'toggle' => $thinkup_header_youtubeswitch,   'link' => $thinkup_header_youtubelink ),
		);


		// Output social media links if any link is set
		foreach( $social_links as $social ) {	
			if ( ! empty( $social['link'] ) and $j == 0 ) {
				echo '<div id="header-social"><ul>'; $j = 1;

				if ( ! empty ( $thinkup_header_socialmessage ) ) {
					echo '<li class="social message">' . smarter_thinkup_input_socialmessage() . '</li>';
				}
			}

			if ( ! empty( $social['link'] ) and $social['toggle'] == '1' ) {

			echo '<li class="social ' . esc_attr( $social['icon'] ) . '">',
				 '<a href="' . esc_url( $social['link'] ) . '" data-tip="bottom" data-original-title="' . esc_attr( $social['social'] ) . '" target="_blank">',
				 '<i class="fa fa-' . esc_attr( $social['icon'] ) . '"></i>',
				 '</a>',
				 '</li>';
			}
		}

		// Close list output of social media links if any link is set
		if ( $j !== 0 ) echo '</ul></div>';
	}
}