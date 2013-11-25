<div class="three columns sidebar">

	<?php
		
		if($category[0]->slug == 'podcasts'){
			$categorie = $category[1];
		}
		else{
			$categorie = $category[0];
		}
		
	?>

	<h3><?php echo $categorie->name; ?></h3>
	<hr/>
	<br/>

	<p class="categ-decription">
		<?php echo $categorie->category_description; ?>
	</p>
</div>