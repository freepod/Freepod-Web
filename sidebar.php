<div class="three columns sidebar">
	<h3>Récemment</h3>
	<hr/>
	<br/>

	<?php

		$args = array( 'numberposts' => 15 );
		$lastposts = get_posts( $args );
		//var_dump($lastposts);
	?>

	<?php foreach($lastposts AS $post): ?>

		<div class="lastpost">
			<?php $category =  get_the_category( $post->ID ); ?>
			
			<?php 
				
				$slug = null;
				
				if($category[0]->slug == 'podcasts'){
					$slug = $category[1]->slug;
				}
				else{
					$slug = $category[0]->slug;
				}
			?>
		
			<a href="<?php echo $post->guid; ?>">
				<img class="thumb" alt="<?php echo $category[0]->name; ?>" src="<?php bloginfo('template_url'); ?>/podcasts-icons/<?php echo $slug; ?>.png" />
		
				<h4 class="title"><?php echo $category[0]->name; ?></h4>
				<h5><?php echo $post->post_title; ?></h5>
			</a>
		
		</div>

	<?php endforeach; ?>
</div>