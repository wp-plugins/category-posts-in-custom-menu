<?php
/*
Plugin Name: Category Posts in Custom Menu
Plugin URI: http://diana.imyou.nl/category-posts-in-custom-menu
Description: This plugin replaces all Category-links in a Custom Menu by a list of the posts in that category.
Version: 0.1
Author: Diana Koenraadt
Author URI: http://diana.imyou.nl
License: GPL2
*/
?>
<?php
/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

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
?>

<?php
add_filter( 'wp_nav_menu_objects','cpcm_replace_category_by_posts', 1, 2 );

function cpcm_replace_category_by_posts( $sorted_menu_items, $args )
{
	$result = array();    
	$inc = 0;
	foreach ( (array) $sorted_menu_items as $key => $menu_item ) {
		// Replace category object by a list of its posts: Append posts to $result
		// Remove the category object itself.
		if ( $menu_item->object == 'category') {
			$inc += -1;
			$posts = get_posts( array( 'category' => $menu_item->object_id, 'order'=> 'ASC', 'orderby' => 'title' ) );
			foreach( (array) $posts as $pkey => $post ) {
				// Decorate the posts with the required data for a menu-item.
				$posts[$pkey] = wp_setup_nav_menu_item( $posts[$pkey] );
				$posts[$pkey]->menu_item_parent = $menu_item->menu_item_parent; // Set to parent of category page.
				$inc += 1;
			}
			// Extend the items with classes.
			_wp_menu_item_classes_by_context( $posts );
			// Append the new menu_items to the menu array that we're building.
			$result = array_merge( $result, $posts ); 
		} else {
			// Treat other objects as usual, but note that the position 
			// of elements in the array change.
			$result[$menu_item->menu_order + $inc] = $menu_item;
		}
	}

	unset( $sorted_menu_items );
	return $result;
}
?>

