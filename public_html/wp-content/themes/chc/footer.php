<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

	</main>

   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
           

    
<script>
 $(document).ready(function(){
      $('.parallax').parallax();
	     $('.modal').modal();
	$(".button-collapse").sideNav({  closeOnClick: true});
$('input#input_text, textarea#textarea1').characterCounter();
	   Materialize.updateTextFields();
	    $('select').material_select();
	    $('.tooltipped').tooltip();
    });
	
	
	 
	
	  var s = skrollr.init();
if (s.isMobile()) {
    s.destroy();
}

	

	
  </script>



</body>
</html>
