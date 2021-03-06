<?php
/**
 * The template for displaying posts in the Link post format.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="item-content grid box-twelve">

		<?php if ( ! is_singular() ) : ?>

		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>

			<?php core_theme_hook_entry_header(); ?>
			<?php edit_post_link( __( 'Edit', THEME_SLUG ), '<span class="edit-link">', '</span>' ); ?>
			<div class="clear"></div>
		</header><!-- .entry-header -->

		<?php endif; ?>

		<?php do_action('core_theme_hook_before_entry_content'); ?>

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', THEME_SLUG ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', THEME_SLUG ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta entry-footer">
			<?php do_action('core_theme_hook_entry_footer'); ?>
		</footer><!-- .entry-meta -->

		<?php do_action('core_theme_hook_after_entry_content'); ?>

	</div>
	<div class="clear"></div>

</article><!-- #post -->
