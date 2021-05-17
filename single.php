<?php
/**
 * Single Post
 *
 * @package      EAGenesisChild
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_action('genesis_after_header', 'gc_blog_post_header');
add_action('genesis_entry_header', 'gc_blog_post_meta', 11);
add_action( 'genesis_entry_header', 'genesis_do_breadcrumbs', 12 );
add_action( 'genesis_entry_header', 'genesis_do_post_title', 13 );
add_action( 'genesis_entry_header', 'ea_entry_header_share', 14 );


function gc_blog_post_header() { ?>
<div class="blog-entry-header">
<h2 class="blog-title">Blog</h2>
<div class="page-header-line"><img src="https://graybillcreative.com/wp-content/themes/Graybill_Creative/assets/icons/line-gray.svg"></div></div>
<?php  }

function gc_blog_post_meta() { ?>
	<div class="blog_meta">
        <?php $id = get_the_author_meta( 'ID' );
	echo '<p class="entry-author"><a href="' . get_author_posts_url( $id ) . '" aria-hidden="true" tabindex="-1">' . get_avatar( $id, 70 ) . '</a> <a class="author-byline" href="' . get_author_posts_url( $id ) . '">By ' . get_the_author() . '</a></p>';
	echo '<p class="publish-date">' . get_the_date( 'F j, Y' ) . '</p>'; ?>
	</div>
<?php }


/**
 * Entry header share
 *
 */
function ea_entry_header_share() {
	do_action( 'ea_entry_header_share' );
}

 
function ea_single_after_entry() {
	echo '<div class="after-entry">';
	// Sharing
	do_action( 'ea_entry_footer_share' );

}

function gc_resources_cta() { ?>
<div class="resource-cta"><div class="wrap"><div class="resources-left">
<h2 class="resources-heading">Resources</h2>
<p class="resources-text">Sign up for our monthly newsletter and receive our free guide on successfully subcontracting to developers. Our newsletter will keep agencies up to date on the latest WordPress and SEO news that could impact their client’s websites.</p></div>
<div class="resources-right">
	<?php gravity_form( 3, false, false, false, '', true ); ?>
</div></div></div>
<?php }
add_action( 'genesis_after_entry', 'ea_single_after_entry', 8 );
add_action( 'genesis_after_entry', 'ea_entry_category', 8 );
add_action('genesis_before_footer', 'gc_resources_cta', 1 );
remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );

genesis();