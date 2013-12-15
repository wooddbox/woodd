<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>


		<?php
		$queried_object = get_queried_object();
		$term_id = $queried_object->term_id;
		$taxonomy_name = 'category';
		$termchildren = get_term_children( $term_id, $taxonomy_name );
	 	$count = count($termchildren); ?>
	 	<ul id="filters">
	 	<a href="#" data-filter="*">Show all |</a>
	 	<?php
	 	if ( $count > 0 ){
	    foreach ( $termchildren as $child ) {
	    $term = get_term_by( 'id', $child, $taxonomy_name );
	    $category_name = $term->name;
	    $category = $term->slug;
	    echo '<a href="#" data-filter=".'. $category .'">'. $category_name .' | </a>';   
	    }
	    echo "</ul>";
		}
		?>

	<div id="primary" class="content-area">

			<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

		<div id="content" class="site-content" role="main">


			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="item normal element <?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>">
				<?php get_template_part( 'content', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>