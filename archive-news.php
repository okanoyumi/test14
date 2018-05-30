<?php
/**
 *
 * Page for news
 *
 * @package WordPress
 **/

get_header(); ?>

<?php


$args = array(
	'post_type' => 'news',
	'posts_per_page' => 2,
	// 'no_found_row' => $no_found_row,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		the_title();
		?>
		// get_template_part( $template_name );

// wp_reset_postdata();
// }

<?php
endwhile;
endif;
get_footer();
