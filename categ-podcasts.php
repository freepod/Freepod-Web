<div class="nine columns content">
	<h1 class="title">Le réseau Freepod</h1>

	<?php

		$args = array(
						'type'                     => 'post',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 0,
						'hierarchical'             => 1,
						'exclude'                  => '1,2,22',
						'include'                  => '',
						'number'                   => '',
						'taxonomy'                 => 'category',
						'pad_counts'               => false 

					);	

		$categories = get_categories( $args );
		$podcasts = array();
		
		foreach($categories AS $category){
			
			$id = $category->cat_ID;
			
			$lastpost = get_posts(array("cat" => $id, "showposts" => 1));
			
			$podcasts[] = array('date' 	=> $lastpost[0]->post_date,
							  'id' 		=> $category->cat_ID,
							  'slug'	=> $category->slug,
							  'name'	=> $category->name);
		}
		
		function sortFunction( $a, $b ) {
		    return strtotime($a["date"]) - strtotime($b["date"]);
		}
		usort($podcasts, "sortFunction");
		$podcasts = array_reverse($podcasts);
			
	?>

	<?php foreach($podcasts AS $podcast): ?>
		<a href="<?php bloginfo('url'); ?>/category/<?php echo $podcast['slug']; ?>">
			<div class="podcast">
				<img alt="<?php echo $podcast['name']; ?>" src="<?php bloginfo('template_url'); ?>/podcasts-icons/<?php echo $podcast['slug']; ?>.png" />
			</div>
		</a>
	<?php endforeach; ?>
</div>