<?php
/**
 *
 * Index file
 *
 * @package WordPress
 **/

get_header();
?>
<!-- post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if ( is_single() ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} else {
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
?>
<ul class="post">
	<li><?php echo get_the_date(); ?></li>
	<li><?php the_category(); ?></li>
	<li><?php the_tags(); ?></li>
<div class="post-img"><?php the_post_thumbnail(); ?></div>
<?php
the_content( '読む' )
?>
</ul>
</article>
<!-- custom post -->
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
		// get_template_part( $template_name );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
if ( is_single() ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} else {
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
}
?>
<ul class="post">
	<li><?php echo get_the_date(); ?></li>
	<li><?php the_category(); ?></li>
	<li><?php the_tags(); ?></li>
<div class="post-img"><?php the_post_thumbnail(); ?></div>
<?php
the_content( '読む' )
?>
</ul>
</article>
<!-- <?php the_title();?> -->
<?php
endwhile;
endif;
?>
<?php
/** wp_reset_postdata(); */

/** Link to page */
?>
<a href"<?php echo esc_url( home_url( '/about/' ) ); ?>">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_about.jpg" width="50" height="auto">
</a>




<?php
get_footer();
/**$ カスタム投稿表示 https://wpdocs.osdn.jp/%E3%83%AB%E3%83%BC%E3%83%97
my_query = new WP_Query( 'category_name=news&posts_per_page=1' );
while ( $my_query->have_posts() ) :
	$my_query->the_post();
	$do_not_duplicate = $post->ID; ?>
	<!-- なにかの処理... -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<?php
	if ( is_single() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	?>
	<ul class="post">
		<li><?php echo get_the_date(); ?></li>
		<li><?php the_category(); ?></li>
		<li><?php the_tags(); ?></li>
	<div class="post-img"><?php the_post_thumbnail(); ?></div>
	<?php
	the_content( '読む' )
	?>
</ul>
</article>
<?php endwhile; ?>

	<!-- 他の処理... -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		if ( $post->ID === $do_not_duplicate ) continue;
		?>
	<!-- なにかの処理... -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( is_single() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );
	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	?>
	<ul class="post">
		<li><?php echo get_the_date(); ?></li>
		<li><?php the_category(); ?></li>
		<li><?php the_tags(); ?></li>
	<div class="post-img"><?php the_post_thumbnail(); ?></div>
	<?php
	the_content( '読む' )
	?>
</ul>
</article>
<?php
endwhile;
endif;
 */
