<?php
/**
 * Template part for displaying single posts.
 *
 * @package Independent_Publisher_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		independent_publisher_2_entry_header();
		independent_publisher_2_entry_meta();
	?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'independent-publisher-2' ),
				'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

			the_tags( '<ul class="post-tags light-text"><li>' . esc_html__( 'Tagged', 'independent-publisher-2' ) . '</li><li>', '</li><li>', '</li></ul><!-- .post-tags -->' );

			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'independent-publisher-2' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="post-edit-link">',
				'</span>'
			);
		?>
	</div><!-- .entry-footer -->

	<div class="entry-author-wrapper">
		<?php independent_publisher_2_author_bio(); ?>
		<div class="site-posted-on">
			<strong><?php esc_html_e( 'Published', 'post published', 'independent-publisher-2' ); ?></strong>
			<?php echo independent_publisher_2_posted_time(); ?>
		</div><!-- .site-posted-on -->
	</div>
</article><!-- #post-## -->
