<?php get_header(); ?>

	<?php
		$category = get_the_category();
				
		if($category[0]->slug == 'podcasts'){
			$categorie = $category[1];
		}
		else{
			$categorie = $category[0];
		}
		
		$ban_url = 'wp-content/themes/freepod_template/podcasts-bann/'.$categorie->slug.'-bann.png';
	?>

	<?php if(file_exists($ban_url)): ?>

	<div class="row">
		<div class="twelve columns banniere">
			<!-- 1200x400 -->
			<img alt="Banniere" src="<?php bloginfo('url'); ?>/<?php echo $ban_url; ?>" />
		</div>
	</div>

	<?php endif; ?>

	<div class="row">

		<div class="nine columns">
			
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<div class="row">
				<article class="twelve columns content">

					<div style="width: 70%;float:left;">
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

							$rand = rand(5, 1500);
							
						?>
						
						<?php if($file != NULL): ?>
						
							<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/libs/jwplayer.js"></script>
							<br/>
							<div id="player<?php echo $rand; ?>">Chargement du podcast</div>
	
							<script type="text/javascript">
							    jwplayer("player<?php echo $rand; ?>").setup({
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

			<?php endwhile; ?>

			<?php wp_pagenavi(); ?>

        	<?php endif; ?>

		</div>

		<?php include('sidebar_category.php'); ?>
	</div>

<?php get_footer(); ?>