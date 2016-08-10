<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Direach
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if(is_page() || is_single() )
		{
			$end_title = ' - <a href="' . esc_url( home_url( '/' ) ) . '">' . bloginfo( 'name' ). '</a></h1>';
			the_title( '<h1 class="entry-title">', $end_title );
			}
		else
		{
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		
		?>
		</header>
		<!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'direach' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'direach' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php direach_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	

	<footer class="entry-footer">
		<?php direach_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
