<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <title>Bem Vindo</title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="container">

    <div class="row">
    	<?php
    		$args = array(
    			'theme_location' => 'header-menu',
    			'menu' => 'Menu 1'
    		);
    		wp_nav_menu($args);
    	?>
    </div>

    