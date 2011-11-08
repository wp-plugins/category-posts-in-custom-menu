=== Category Posts in Custom Menu ===
Contributors: anaid
Tags: menu, category, posts
Requires at least: 3.2.1
Tested up to: 3.2.1
Stable tag: 0.1

Replaces all category-links in a custom menu by a list of links to posts in that category, sorted ascending by title.

== Description ==

The custom menu only allows adding a link to a category page. I wanted to inserts all posts from a certain category into the menu, so I wrote a little plug-in. Just activate the plugin. No configuration.

This plugin uses the wp_nav_menu_objects filter hook to remove and replace category items in the menu by the posts in that category. It's my first plugin and first-time use of PHP, please be nice :)

== Installation ==

1. Upload `category-posts-in-custom-menu.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

None yet.