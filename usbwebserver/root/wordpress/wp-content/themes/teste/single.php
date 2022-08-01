<?php get_header() ?>
<div class="row">
	<div class="col-4">
			<img src="<?= get_template_directory_uri()?>/imagens/logo.png" alt="" class="img">    
		</div>
    <?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
	?>
		<div class="col">
			<h2 class="titulo"><?php the_title(); ?></h2>    
		</div>
   </div>

		<h2><?php the_title(); ?></h2>
		<div class="texto">
			<?php the_content();?>	
		</div>
	<?php 
				
			} // end while
		} // end if
	?>


<?php get_footer() ?>