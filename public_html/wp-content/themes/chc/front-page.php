<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	
	
  <link href="<?php echo esc_url(''); ?>/wp-content/themes/chc/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<div class="row valign-wrapper " style="min-height: 80vh">

	<div class="container">
	
		
			  <div class="brand-logo">Project Connect</div>
		<div class="input-field col offset-s3 s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
		<div class="input-field col offset-s3 s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Password</label>
        </div>
		<a href="<?php echo esc_url('') ?>/dashboard/" class="btn-large waves-effect waves-light col offset-s3 s6" type="submit" name="action">Login

  </a>
		
	</div>
		</div>
	
	

<?php
get_footer();
