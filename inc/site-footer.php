<?php
/**
 * Site Footer
 *
 * @package      EAGenesisChild
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Site Footer
 *
 */
function ea_site_footer() {
		echo '<p class="copyright">Copyright &copy; ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '®. All Rights Reserved.</p>';
	    echo '<div class="icon-links">';
    echo '<a class="backtotop" href="https://www.facebook.com/graybillcreative">' . ea_icon( array( 'icon' => 'facebook' ) ) . '</a>';
    echo '<a class="backtotop" href="https://www.linkedin.com/in/saragraybill/">' . ea_icon( array( 'icon' => 'linkedin' ) ) . '</a>';
    echo '<a class="backtotop" href="https://www.instagram.com/graybillcreative/">' . ea_icon( array( 'icon' => 'instagram' ) ) . '</a>';
    echo '<a class="backtotop" href="#main-content">' . ea_icon( array( 'icon' => 'arrow-up' ) ) . '</a>';
    echo '</div>';
}
add_action( 'genesis_footer', 'ea_site_footer' );
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );
