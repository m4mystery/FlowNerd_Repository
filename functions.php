<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
    'after_widget' => '',
 'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


// WP-sapphire Pages Box 
 function widget_sapphire_pages() {
?>

<h3><?php _e('Pages'); ?></h3>
   <ul>
<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('title_li='); ?>

 </ul>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Pages'), 'widget_sapphire_pages');


// WP-sapphire Search Box 
 function widget_sapphire_search() {
?>
 

 <h3><?php _e('SEARCH'); ?></h3>
 
 
    <ul>
<li>
   <form class="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
 
            <input style="width:192px; margin-top:-7px;" type="text" class="search-input" name="s" size="18" /><br>

     
            <input style="float:right; margin-right:-40px; margin-top:20px; margin-bottom:25px;" type="submit" class="submit" name="Submit" value="Search" />
      
     
 </form>

 <br/>
<br/><br/>
</li>
</ul>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_sapphire_search');


 function widget_links_with_style() {
   global $wpdb;
   $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
   foreach ($link_cats as $link_cat) {
  ?>

  <h3><?php echo $link_cat->cat_name; ?></h3>

   <ul>
   <?php get_links($link_cat->cat_id, '<li>', '</li>', '<br />', FALSE, 'rand', TRUE,  TRUE, -1, TRUE); ?>
   </ul>

   <?php } ?>
   <?php }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__(' Links With Style'), 'widget_links_with_style');
   
 


?>