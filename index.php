<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="main col-md-8">
			<div class="row titulo-seccion">
				<div class="col-md-12">
					<h3>Lo más reciente</h3>
				</div>
			</div>

			<section class="row posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="col-sm-6 post">
					<div class="contenedor">
						<div class="thumb">
							<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?></a>
						</div>
						
					</div>
				</article>

				
			</section>
		
			
		</section>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>