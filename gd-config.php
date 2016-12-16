<?php

define( 'GD_VIP', '198.71.188.149' );
define( 'GD_RESELLER', 495469 );
define( 'GD_ASAP_KEY', '3fb6767e8a3f3863e53138722f545bdb' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', false );
define( 'GD_SITE_CREATED', 1480358161 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( '49c0045b-4d52-4d13-ac62-09e61683eb5a;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}