<?php
/*
Plugin Name: DV Funciones
Plugin URI: https://www.davidviña.es
Description: Plugin base para funcionalidades
Version:1.0
Author: David Viña
Author URI:https://www.davidviña.es
License:GPL
*/

defined('ABSPATH') or die("Bye bye");

define('DV_Ruta',plugin_dir_path(__FILE__));

include(DV_Ruta . 'funciones.php');

// Register Script
function custom_scripts() {

	wp_register_script( 'dv-custom-js', DV_Ruta .'js/custom.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'dv-custom-js' );
	//Añadir solo en caso de usar Ajax para controlar la variable en el archivo js
	//wp_localize_script('main','dv_var',['ajaxurl'=>admin_url('admin-ajax.php')]);

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// Register Style
function custom_styles() {

	wp_register_style( 'dv-custom-style', DV_Ruta .'css/custom.css', false, '1.0' );
	wp_enqueue_style( 'dv-custom-style' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );
