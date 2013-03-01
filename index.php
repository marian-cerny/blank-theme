<?php get_header(); ?>

<div class='bg-softener'>
	<div id='content'>
	<?php
		the_post();
		the_content(); 
	?>
	</div>
</div>

<?php get_footer(); ?>