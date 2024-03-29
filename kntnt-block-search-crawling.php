<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Search robots.txt
 * Plugin URI:        https://github.com/Kntnt/kntnt-block-search-crawling
 * Description:       Blocks nice bots from crawling search pages.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


add_action( 'do_robots', function() {
    ?>

User-agent: *
Disallow: /search/
Disallow: /?s=
    <?php    
});
