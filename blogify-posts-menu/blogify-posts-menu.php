<?php
/*
Plugin Name: Blogify Posts Menu
Plugin URI: http://sabreuse.com/code/blogify
Description: Reduce confusion by changing the name of the "Posts" admin menu to "Blog".
Version: 1.0
Author: Amy Hendrix
Author URI: http://sabreuse.com
License: GPL2
*/

/*  Copyright 2012 Amy Hendrix  (email : sabreuse@gmail.com)

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

// Change the "Posts" menu item to "Blog"

function ahblogify_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Posts';
    $submenu['edit.php'][10][0] = 'Add Post';
    $submenu['edit.php'][15][0] = 'Categories'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Tags'; // Change name for tags
    echo '';
}

add_action( 'admin_menu', 'ahblogify_change_post_menu_label' );

?>