<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-10of12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
				<?php get_template_part('post-formats/content-section'); ?>

				<section class="pull-r-1of12 pull-l-1of12 entry-content cf" itemprop="articleBody">
					<?php the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</section> <?php // end article section ?>
				
				<footer class="article-footer cf">

				<?php get_template_part('library/partials/sectionContact'); ?>

				</footer>

			</article>

			<?php endwhile; endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>
