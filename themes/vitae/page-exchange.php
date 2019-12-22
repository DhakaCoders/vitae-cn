<?php
/*
  Template Name: Exchange
*/
get_header('page'); 
$thisID = get_the_ID();
?>

<?php 
get_template_part( 'templates/more-about', 'community' );
get_footer(); 
?>