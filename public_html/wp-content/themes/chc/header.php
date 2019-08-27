<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

	
  <link href="<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	
	 <nav class="blue">
		 
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo"><img class="" src="<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/images/coutts-logo.svg" width="125px;"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		  <ul class="right hide-on-med-and-down">
   	   <li><a href="<?php echo esc_url(''); ?>/dashboard">Dashboard</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/search">Profiles</a></li>
      <li><a href="<?php echo esc_url(''); ?>/news">News</a></li>
      
		  		  <li><a href="<?php echo esc_url(''); ?>/deal-center">Deals</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/knowledge-base/">Knowledge</a></li>
      <li><a href="<?php echo esc_url(''); ?>offers">Offers</a></li>
		  <li><a href="<?php echo esc_url(''); ?>jobs">Jobs</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/legacy">Legacy</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/events">Events</a></li>
			    <li class="divide tooltipped" data-position="bottom" data-tooltip="Profile"> <i class="material-icons ">person_outline</i></li>
			 <li class="  tooltipped" data-position="bottom" data-tooltip="Settings">  <i class="material-icons">settings</i> </li> 
		<li> <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Create">add_circle_outline</i></li>	
			
			   </ul>
 <a href="#" data-activates="slide-out" class="button-collapse right hide-on-med-and-up black-text">
    </div>
  </nav>
	
  <ul class="side-nav" id="mobile-demo">
		  <div class="brand-logo"><img class="" src="<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/images/coutts-logo.svg" width="125px;"></div>
		  <div class="profile">
		<div class="profile_bg" style="background-image: url(<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/images/hwbg.jpeg)">
		
		  </div>
	  <div class="profile_img ">
		  <img class="circle z-depth-3 " src="<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/images/hw.jpg">
		  </div>
			  
			  <h5 class="blue-grey-text">Harrison</h5>
			  <h5 class="blue-grey-text" style="text-transform: uppercase;">Williams</h5>
			  
			  <div class="row">
			  
				  <div class="col s12 m6">
				  <p class="grey-text">Memember since</p>
			  <h6 class="purple-text">2006</h6>
				  </div>
				  
				  <div class="col s12 m6">
				  <p class="grey-text">Director</p>
			  <h6 class="purple-text">CHC Digital</h6>
				  </div>
			  
			  </div>
			  
		  <div class="divider"></div>
			  
		  </div> 
		   <li><a href="<?php echo esc_url(''); ?>/dashboard">Dashboard</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/search">Find profiles</a></li>
      <li><a href="<?php echo esc_url(''); ?>/news">News</a></li>
      
		  		  <li><a href="<?php echo esc_url(''); ?>/deal-center">Deal Center</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/knowledge-base/">Knowledge Base</a></li>
      <li><a href="<?php echo esc_url(''); ?>offers">Offers</a></li>
		  <li><a href="<?php echo esc_url(''); ?>jobs">Jobs</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/legacy">Legacy Projects</a></li>
		  <li><a href="<?php echo esc_url(''); ?>/events">Events</a></li>
    </ul>
  

	<main>
		<div class="container">
	