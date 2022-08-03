<?php
   /*
	*	Plugin Name: teste
	*	Plugin URL: https://example.com/plugins/the-basics/
	*	Description: Sim
	*	Version: 1.0.0
	*	Requires at least: 5.2 
	*	Requires PHP: 7.2
	*	Author: Raylla
	*	Author URI: https://author.example.com
	*/

	function teste(){
		echo "<h3> Busca por Cep: </h3>";
	}

	add_shortcode("buscacep", "teste");
