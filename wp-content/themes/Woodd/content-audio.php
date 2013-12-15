<?php
/**
 * The template for displaying posts in the Audio post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<!-- TITLE -->
	<?php if ( is_single() ) : ?>


		<div class="entry-title">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div><!-- .entry-title -->
	<?php endif; // is_single() ?>	

<!-- HEADER -->
	<header class="entry-header">
		<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		<span class="meta-category icon-<?php echo get_post_format(); ?>"><?php the_category(', '); ?></span>
		<?php if ( is_single() ) : ?>
			
			<span class="meta-published"><strong><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' '.  __('ago', 'engine'); ?></strong></span>
			<span class="meta-author"><?php the_author_posts_link(); ?></span>
			<?php the_category(', '); ?>
		<?php else : ?>
			<?php
			if(get_field('soundcloud_id')){
			?>
			<div class="ytb">
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo get_field('soundcloud_id'); ?>&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>
			</div>
			<?php
			}?>
		<?php endif; // is_single() ?>		
	</header><!-- .entry-header -->

<!-- CONTENT -->
	<?php if( get_the_content()) { ?>	
	<div class="entry-content"> 
		
		<?php if ( is_single() ) : ?>
		<?php the_content(); ?>
		<?php else : ?>
		

		<?php the_excerpt(); ?>
		<?php endif; // is_single() ?>
			
	</div><!-- .entry-content -->
	<?php } ?>

<!-- FOOTER META -->
	<footer class="entry-meta">
<!-- 		<p><?php the_date(); ?></p>
		<p><?php the_tags(); ?></p> -->
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>


		<?php if ( comments_open() && ! is_single() ) : ?>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
		</span><!-- .comments-link -->
		<?php endif; // comments_open() ?>
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>

	</footer><!-- .entry-meta -->
</article><!-- #post -->
