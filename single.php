<?php get_header(); ?>

	<?php
		$category = get_the_category();
	?>

	<div class="row">

		<div class="nine columns">
			
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<div class="row">
				<article class="twelve columns content">

					<div style="width: 70%;float:left;">
					
						<div class="back">
							<img alt="Retour à la liste" src="<?php bloginfo('template_url') ?>/images/back.png" />
							Retour <a href="<?php bloginfo('url'); ?>/category/<?php echo $category[0]->slug; ?>"><?php echo $category[0]->name; ?></a>
						</div>
					
						<h1><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
						<h2>Publié le <?php echo the_date(); ?></h2>

						<p style="margin-top: 30px;">
							<?php the_content(); ?>
						</p>
						
						<?php

							$thumb = get_post_custom_values('thumb-show', $post_id);
							$thumb = $thumb[0];

							$file = get_post_custom_values('file-show', $post_id);
							$file = $file[0];
						
						?>
						
						<?php if($file != NULL): ?>
						
							<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/libs/jwplayer.js"></script>
							<br/>
							<div id="player">Chargement du podcast</div>
	
							<script type="text/javascript">
							    jwplayer("player").setup({
							        file: "<?php echo $file; ?>",
									image: "<?php echo $thumb; ?>",
									title: "<?php echo the_title(); ?>"
							    });
							</script>
						
						<?php endif; ?>
					</div>

					<div class="side" style="width: 28%;float:right;">
					<?php if($thumb != NULL): ?>
						<img alt="Image du podcast" src="<?php echo $thumb; ?>" />
					<?php endif; ?>
					<?php if($file != NULL): ?>
						
						<a href="<?php echo $file; ?>">
							<button class="dl">Télécharger</button>
						</a>
					<?php endif; ?>
					</div>

				</article>
			</div>

			<div class="comments-container content">
				<?php comments_template(); ?>
			</div>
			
			<?php endwhile; ?>
        	<?php endif; ?>

		</div>

		<?php include('sidebar_category.php'); ?>
	</div>

<?php get_footer(); ?>