<?php
/*
* Plugin Name: autometa's THUMB
* Description: It repdoduces featured images in pages, posts, portfolios or products simply via: [thumb].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2

autometa's THUMB is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs.

autometa's THUMB is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

autometa's THUMB is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with autometa's THUMB. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [thumb] = featured image
function autometa_featured_image() {
	$am_thumb = '<span id="thumb" class="autometa">' . get_the_post_thumbnail() . '</span>';
	return $am_thumb;
}
add_shortcode( "thumb", "autometa_featured_image" );
?>
