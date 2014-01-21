<?php
/*
 * Template Name: Homepage
 *
 * @package OurConcept
*/

get_header(); ?>
<style>
        @import url("<?php echo get_template_directory_uri(); ?>/css/agenda.css");
	.headerImage{
		height: auto;
	}
</style>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_sidebar('agenda'); ?>