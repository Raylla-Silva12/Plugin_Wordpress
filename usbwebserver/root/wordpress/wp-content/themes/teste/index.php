
<?php get_header() ?>
   <div class="row">
	<div class="col-4">
			<img src="<?= get_template_directory_uri()?>/imagens/logo.png" alt="" class="img">    
		</div>
		<div class="col">
			<h1>Seja bem Vindo</h1>    
		</div>
   </div>

   <?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
	?>

		<h2><?php the_title(); ?></h2>
		<div class="img">
			<?php the_post_thumbnail();?>
		</div>
		<div class="texto">
			<?php the_excerpt();?>	
		</div>
		<a href="<?php the_permalink(); ?>"> 
			Leia mais
		</a>
	<?php 
				
			} // end while
		} // end if
	?>
<?php get_footer() ?>