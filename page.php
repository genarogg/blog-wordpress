<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="main col-md-8">
			<section class="row single-post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				<?php endwhile; else: ?>
					
				<?php endif; ?>
			</section>
		
			
		</section>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>