<?php
/**
 * Plugin Name: WP Author, Date and Meta Remover
 * Plugin URI: http://johnniejodelljr.com/wp-author-and-date-remover/
 * Description: Remove the "Posted on Month, Day Year by Author" on the home page and post. Just plug and play; it's that easy!
 * Version: 1.0.2
 * Author: Johnnie J. O'Dell Jr.
 * Author URI: http://johnniejodelljr.com/
 * License: GPL2
 */
 /*  Copyright 2014  Johnnie J. O'Dell Jr.  (email : johnnie@johnniejodelljr.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* The Plugin Class */

function remove_metadata()

{

        /* Register style css. */
		wp_enqueue_style( 'remove-style-meta', plugins_url( 'css/entrymetastyle.css', __FILE__ ), false, '1.0', 'all' );

}

add_action('wp_head', 'remove_metadata');

?>