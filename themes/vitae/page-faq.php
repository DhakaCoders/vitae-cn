<?php 
/*
  Template Name: FAQ
*/
get_header(); 
$thisID = get_the_ID();

$title = get_field('titel', $thisID);
if(empty($ctitle)){
  $title = get_the_title($thisID);
}
$content = get_field('beschrijving', $thisID);
$shortcode = get_field('shortcode', $thisID);
?>

<?php get_footer(); ?>