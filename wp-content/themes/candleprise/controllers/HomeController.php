<?php
/**
 * Template Name: Home page 
 * Description: A Page Template with a darker design.
 */

// Code to display Page goes here...

$context = Timber::context();

 
$context['HomeData'] = get_posts();





Timber::render( '/pages/Home/index.twig', $context );
