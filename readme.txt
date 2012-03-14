=== Category Posts in Custom Menu ===
Contributors: anaid
Tags: menu, category, post tag, posts, dynamic, automatic
Requires at least: 3.2.1
Tested up to: 3.3.1
Stable tag: 0.3

Dynamic menus: This plugin automatically replaces selected Category links / Post Tag links in a Custom Menu by a list of their posts.

== Description ==

The custom menu only allows adding a link that leads to a category or tag page. I wanted to insert all posts from a certain category/tag into the menu, so I wrote a little plug-in. If you want to list posts the posts <b>themselves</b> in the menu and if you want Wordpress to do this automatically for you, then I hope you will find this plugin useful. 

Enable the plugin and go to Appearance > Menus. Create your Custom Menu. If you use Categories or Post Tags in your Custom Menu, you can now choose whether you would like to list the original link, or if you would like to replace it by the posts in that taxonomy (Category/Post Tag). Note that custom taxonomies and post types are not supported at the moment. 

For each Category or Post Tag item in the menu, you now have the following extra configuration options: replace the link by a list of posts in the menu y/n; specify the (maximum) number of posts you want to show for this item (-1 = all) and their ordering (ascending/descending by none, ID, author, title, date, modified, parent, rand or comment_count); specify the title for the menu items (For this you can use the wildcards %post_title and %post_author or %post_my_field where 'my field' or 'my_field' is a custom field).

This plugin uses the wp_nav_menu_objects filter hook to remove and replace category items in the menu by the posts in that category. It extends Walker_Nav_Menu_Edit to add input fields to Appearance > Menus and adds some CSS to style this properly.

It's my first plugin and first-time use of PHP, please be nice :)

== Screenshots ==

1. Go to Appearance > Menu to enable/disable and set the options for the replacement of Category / Post Tag links by their posts.

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

* I see no difference in Appearance > Menus

If you check a category from 'Categories' on the left and click 'Add to Menu', the newly added block (right) should have some extra options, as shown in the plugin screenshots (http://wordpress.org/extend/plugins/category-posts-in-custom-menu/screenshots/). There are two reasons why you might not see a difference.

1. One possible reason why you see no differences in Appearance > Menus would be if you have another plugin that works on Appearance > Menus and has a higher priority than mine. The reason for this is purely technical, it is because WordPress currently has no 'hooks' in one specific class so I have to override that class. If another plugin has overridden that class as well and with a higher priority, then mine won't show any differences in Appearance > Menus.

2. Another reason, the most likely one, is that you are experiencing issue 14527 (http://core.trac.wordpress.org/ticket/14527). When adding a menu item but before saving it, you will indeed see none of the promised checkboxes. This is because the hook that is used to extend the functionality is not being applied until you've saved the item. Unfortunately, until a patch is approved, there's not much I can do. Make sure you save your menu, then you should see the extended functionality for the saved menu items.
