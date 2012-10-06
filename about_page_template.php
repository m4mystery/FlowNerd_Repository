<?php
/*
Template Name: about_page
*/
?>



<?php get_header(); ?>

<div style="height:0px;" class="slideshow_container">

</div>



<br/>

<div id="middle_home">

	<div id="content">



	<?php if (have_posts()) : ?>



<?php while (have_posts()) : the_post(); ?>



<div class="post" id="post-<?php the_ID(); ?>">



<!--<p2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p2>-->







<div class="entry">







<?php the_content('Read the rest of this entry &raquo;'); ?>



</div>





<div class="spacer"></div>





</div>



<?php endwhile; ?>

<p align="right"><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>





<?php else : ?>



<h2 align="center">Not Found</h2>



<p align="center">Sorry, but you are looking for something that isn't here.</p>



<?php endif; ?>

	

	</div>


	</div>

	

<?php get_footer(); ?>







