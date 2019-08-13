<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="main col-md-8">
			<section class="row single-post">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="col-sm-12 post">
						<div class="contenedor">
							<div class="thumb">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
							</div>
							<div class="info">
								<h2 class="titulo"><?php the_title(); ?></h2>
								<div class="texto">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</article>
				<?php endwhile; else: ?>
					
				<?php endif; ?>
			</section>
		
			
		</section>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>