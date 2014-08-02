<?php
/*
Plugin Name: Keyword Prefix 
Plugin URI: http://faked.org/
Description: Prefix the Keyword to allow other sites on the same URL
Version: 1.0
Author: Jan Grewe
Author URI: http://faked.org/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

if( !defined('KEYWORD_PREFIX')) {
	echo "<span style=\"color: #ff0000; font-weight: bold; font-size: 12px;\"><br />WARNING from Plugin 'Keyword Prefix': You need to define the Prefix - please check the README! <br /><br /></span>";
	
}else {

	yourls_add_filter('random_keyword', 'fkd_keyword_prefix');
	yourls_add_filter('custom_keyword', 'fkd_keyword_prefix');
	function fkd_keyword_prefix($keyword) {
		return KEYWORD_PREFIX.$keyword;
	}

	yourls_add_filter('get_shorturl_charset', 'fkd_prefix_in_charset');
	function fkd_prefix_in_charset($in) {
		return $in.KEYWORD_PREFIX;
	}

}