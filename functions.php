<?php
/**
 * Theme functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

define('THEME_VER', '1.0.0');
define('THEME_NAME', 'supadu');

require_once 'functions/func-admin.php';
require_once 'functions/func-debug.php';
require_once 'functions/func-menu.php';
require_once 'functions/func-script.php';
require_once 'functions/func-style.php';

/**
 * Theme Support
 */
add_theme_support('custom-logo');
add_theme_support('title-tag');

/**
 * get_remote_api_data
 *
 * @return array
 */
function get_remote_api_data()
{

    $remote_resource = 'https://www.supadu.io/tech-assessment/book.json';
    $response = wp_remote_retrieve_body (
        wp_remote_get($remote_resource,
            [
                'timeout' => 100,
            ]
        )
    );

    if (is_wp_error($response)) {
        return false;
    }

    try {
        $bookData = json_decode($response, true);
    } catch (Exception $ex) {
        $bookData = null;
    }

    return $bookData;

}

/**
 * format_date
 *
 * @param  mixed $old_date
 * @return new Date()
 */
function format_date($old_date)
{
    $new_date = date("dS F Y", strtotime($old_date));

    return $new_date;
}