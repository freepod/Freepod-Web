<?php get_header(); ?>
	
	<div class="row">
		
		<div class="nine columns content">
			
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<h1 class="title"><?php the_title(); ?></h1>

			<div class="article-content">
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>
        	<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>