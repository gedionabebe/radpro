<?php

get_header();


if(have_posts()):
	while (have_posts()) :
     the_post(); 
     //title 
     
     ?>
     <h1><a href="<?php the_permalink();?>">
     <?php the_title( );?>
     </a></h1>
     
     
<?php
     the_excerpt();

	endwhile;

endif;

//add footer 
get_footer();



?>