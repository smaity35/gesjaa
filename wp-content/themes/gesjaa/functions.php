<?php


	 // All css add here 

	function load_stylesheets()
	{
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
			array(), fasle, 'all' );
		wp_enqueue_style( 'bootstrap');

		wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css',
			array(), fasle, 'all' );
		wp_enqueue_style( 'stylesheet');
	}
	add_action( 'wp_enqueue_scripts' , 'load_stylesheets');




	// jquery main script add here

	function include_jquery()
	{
		wp_deregister_script( 'jquery' );

		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', '', 1, true);

		add_action('wp_enqueue_script' , 'jquery' );
	}
	add_action( 'wp_enqueue_scripts' , 'include_jquery');






	// All script add here

	function loadjs()
	{	
		wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true );
		wp_enqueue_script('bootstrapjs');


		wp_register_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.js', '', 1, true );
		wp_enqueue_script('nicescroll');

		wp_register_script( 'customjs', get_template_directory_uri() . '/js/script.js', '', 1, true );
		wp_enqueue_script('customjs');
	}
	add_action( 'wp_enqueue_scripts' , 'loadjs');


	// Image Thumble

	add_theme_support( 'post-thumbnails' );


	// Dynamic menu

	add_theme_support( 'menus' );

	register_nav_menus(
		array(
			'main-menu' => __('Main Menu', 'theme'),

		)
	 );










?>













