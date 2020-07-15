<?php
/**
 * Plugin Name: Tangerine Dream Plugin
 * Plugin URI: https://tangerinedream.io
 * Description: WP Utilities for Tangerine Dream
 * Version: 1.0
 * Author: Kevin Conboy
 * Author URI: https://www.alternate.org
 */

 define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', 'HbbYVZrAi718q8LT8EWOu2MW5payRc6hqRD0qyBrAm0SEvGP0gZrP8RxOagfDGBaDIcOirB0j+OxCB2oUi2mA==' );

 add_filter( 'jwt_auth_whitelist', function ( $endpoints ) {
    return array(
      '/wp-json/wp/v2/pages/*',
      '/wp-json/wp/v2/media/*'
    );
} );

function flushCache() {
  wp_cache_flush();
}

add_action('save_post', 'flushCache');

add_filter('http_request_args', 'curlArgs');

function curlArgs($r) {
  $r['sslverify'] = false;
  return $r;
}