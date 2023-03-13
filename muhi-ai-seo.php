<?php

/**
 * Muhi - Scaling businesses
 *
 * @author Muhi - Scaling businesses
 * @package MUHI\Main
 * @copyright Copyright (C) 2022-2023, Muhi - Scaling businesses
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License, version 3 or higher
 *
 * @wordpress-plugin
 * Plugin Name: Muhi - AI SEO for WordPress
 * Version:     1.0
 * Plugin URI:  https://muhi.io
 * Description: The first true all-in-one AI aided SEO solution for WordPress that brings you ahead of the competition.
 * Author:      Muhi - Scaling businesses
 * Author URI:  https://muhi.io
 * Text Domain: muhi-ai-seo-for-wordpress
 * License:     GNU GPLv3
 * Requires at least: 6.0
 * Requires PHP: 7.4
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'MUHIAISEO_FILE' ) ) {
	define( 'MUHIAISEO_FILE', __FILE__ );
}

// Load the Muhi AI SEO plugin.
require_once dirname( MUHIAISEO_FILE ) . '/muhi-ai-seo-main.php';
