<?php get_header(); ?>

<div id="middle">
	<div id="content">

	<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>



<div class="entry">

<p><?php the_time('F jS, Y') ?> by <?php the_author() ?></p>

<?php the_content('Read the rest of this entry &raquo;'); ?>

</div>
<div class="spacer"></div>
	<ul class="post-data">
	<li class="comments">
<?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?>
</li>
	<li class="posted">
Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit','',''); ?> 
</li>
<li class="tags"><?php the_tags('Tags:', ', ', '<br />'); ?></li>
</ul> 
</div>


<?php comments_template(); ?>

<?php endwhile; ?>

<p align="center"><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>

<?php else : ?>

<h2 align="center">Not Found</h2>

<p align="center"><img src="http://biglargehuge.com/wp-content/uploads/2012/01/Our-Princess-is-in-Another-Castle.jpg" /></p>
 
<p align="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

	
	</div>




	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>