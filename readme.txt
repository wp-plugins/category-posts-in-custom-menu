=== Category Posts in Custom Menu ===
Contributors: anaid
Tags: menu, category, post tag, posts, dynamic, automatic
Requires at least: 3.2.1
Tested up to: 3.3
Stable tag: 0.2

Dynamic menus: This plugin automatically replaces selected Category links / Post Tag links in a Custom Menu by a list of their posts.

== Description ==

The custom menu only allows adding a link that leads to a category or tag page. I wanted to inserts all posts from a certain category/tag into the menu, so I wrote a little plug-in. If you want to list posts the posts <b>themselves</b> in the menu and if you want Wordpress to do this automatically for you, then I hope you will find this plugin useful. 

Enable the plugin and go to Appearance > Menus. Create your Custom Menu. If you use Categories or Post Tags in your Custom Menu, you can now choose whether you would like to list the original link, or if you would like to replace it by the posts in that taxonomy (Category/Post Tag). Note that custom taxonomies and post types are not supported at the moment. 

For each Category or Post Tag item in the menu, you now have the following extra configuration options: replace the link by a list of posts in the menu y/n; specify the (maximum) number of posts you want to show for this item (-1 = all) and their ordering (ascending/descending by none, ID, author, title, date, modified, parent, rand or comment_count); specify the title for the menu items (For this you can use the wildcards %post_title and %post_author).

This plugin uses the wp_nav_menu_objects filter hook to remove and replace category items in the menu by the posts in that category. It extends Walker_Nav_Menu_Edit to add input fields to Appearance > Menus and adds some CSS to style this properly.

It's my first plugin and first-time use of PHP, please be nice :)

== Changelog ==

0.2
* Extended the plugin to post tags. Note that the plugin name has unfortunately _not_ been changed to reflect this extension. 

Added checkboxes, dropdowns and text fields to Appearance > Menu. It is now possible to:
* Enable/disable per taxonomy item whether you want to replace it by its posts
* Specify the (maximum) number of posts that should be displayed.
* Specify the ordering (Descending/Ascending) and the field to order by (ID, title, etc..)
* Set a title for the menu items. For this you can use the wildcards %post_title and %post_author.

== Installation ==

1. Upload `category-posts-in-custom-menu.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

None yet.
