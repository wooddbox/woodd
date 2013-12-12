<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<?php
			if(get_field('youtube_id')){
			?>
			<div class="ytb">
			<iframe id="ytplayer" type="text/html" width="360" height="202.5"
			src="https://www.youtube.com/embed/<?php echo get_field('youtube_id'); ?>?rel=0&showinfo=0&autohide=1&color=white&theme=light"
			frameborder="0" allowfullscreen>
			</iframe>
			</div>
			<?php
			}?>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->
	<div class="entry-title">


	</div><!-- .entry-title -->
	<div class="entry-content">

		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php twentythirteen_entry_meta(); ?>

		<?php if ( comments_open() && ! is_single() ) : ?>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
		</span><!-- .comments-link -->
		<?php endif; // comments_open() ?>
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
