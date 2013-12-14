<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

				<?php
	 	$terms = get_terms("category");
	 	$count = count($terms); ?>
	 	<ul id="filters">
	 	<li><a href="#" data-filter="*">Show all</a></li>
	 	<?php
	 	if ( $count > 0 ){
	    foreach ( $terms as $term ) {
	    $category_name = $term->name;
	    $category = $term->slug;
	    echo '<li><a href="#" data-filter=".'. $category .'">'. $category_name .'</a></li>';   
	    }
	    echo "</ul>";
		}
		?>

		<!--BEGIN #content -->
    <div id="content">
    	
    
<!-- 
			<div class="hentry">slider</div>
			<div class="hentry">slider</div> -->
			
			
			
			<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="item normal element <?php foreach(get_the_category() as $category) {
				echo $category->slug . ' ';} ?>">
				<?php get_template_part( 'content', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #content -->
		<?php twentythirteen_paging_nav(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>