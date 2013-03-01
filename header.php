<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	
	<!-- LINKS -->
	<link rel="shortcut icon" type='image/png' href="<?php echo get_img_url(); ?>favicon.png" />
	 
	
	<!-- TITLE -->
	<title>
		<?php
			if ( is_single() ) { single_post_title(); print ' | '; bloginfo('name'); }       
			elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
			elseif ( is_page() ) { single_post_title(''); print ' | '; bloginfo('name'); }
			elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); }
			elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
			else { bloginfo('name'); wp_title('|');}
        ?>
    </title>
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<div id='container'>