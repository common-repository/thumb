=== autometa's THUMB ===
Contributors: JorgeAmVF
Donate link: https://quaestio.org/
Tags: shortcode, automation, metadata, thumbnail, featured image
Requires at least: 2.9.0
Tested up to: 4.9.2
Stable Tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It reproduces featured images in pages, posts, portfolios or products simply via: `[thumb]`.
== Description ==
 
**autometa's THUMB** is a simple plugin that uses the following shortcode:

* `[thumb]` = to reproduce the featured image.

**autometa's THUMB** is a standalone component of **[autometa](https://wordpress.org/plugins/autometa/)** shortcodes pack.

== Installation ==

1. Install it from *Dashboard*/*Plugins*/*Add Plugins* or download it to your plugin folder;
2. Activate it from *Dashboard*/*Plugins*/*Installed Plugins*;
3. Write the following shortcode in text fields: `[thumb]`.

== Frequently Asked Questions ==

= Plugin Features =

**[autometa](https://wordpress.org/plugins/autometa/)** reproduces metadata information automatically via shorcodes in general, **autometa's THUMB** reproduces thumbnail-related data in special.

= How To =

Just write the following shortcode inside a text field and between brackets as usual: `[thumb]`.

= CSS Style Selectors =

* `#thumb`    = `[thumb]` ID;
* `.autometa` = **autometa** class.

= PHP Functions Reference =

* [`add_shortcode()`](https://developer.wordpress.org/reference/functions/add_shortcode/)
* [`get_the_post_thumbnail()`](https://developer.wordpress.org/reference/functions/get_the_post-thumbnail/)
