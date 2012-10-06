<?php 
/*
Template Name: Header Blog
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head profile="http://gmpg.org/xfn/11">

<link rel="shortcut icon" href="http://flownerds.co.uk//wp-content/themes/fighter/favicon.ico">



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>

    <?php wp_head(); ?>







</head>

<body>



<div id="frame">



<div id="header">

<br/>

	<table width="1024px" style="margin-top:0px;">

	<tr>

	<td width="126"></td>

	<td width="790" align="center">

		<a href="<?php echo get_settings('home'); ?>/"><img src="http://flownerds.co.uk//wp-content/themes/fighter/images/flownerds.png" /></a>

	</td>

<td width="15"></td>

	<td align="center" width="23" align="center">

<a href="http://facebook.com/flownerds"><img src="http://flownerds.co.uk//wp-content/themes/fighter/images/facebook_icon.png" /></a>

	</td>

	<td align="center" width="23" align="center">

<a href="http://twitter.com/flownerds"><img src="http://flownerds.co.uk//wp-content/themes/fighter/images/twitter_icon.png" /></a>

	</td>

	<td align="center" width="23" align="center">

<a href="http://www.facebook.com/flownerds"><img src="http://flownerds.co.uk//wp-content/themes/fighter/images/rss_icon.png" /></a>

	</td>

	<td width="40"></td>

	</tr>

	</table>



<div class="header-title">

</div>

<div class="header-nav">

<ul class="nav">


<li></li>

<?php wp_list_pages('title_li='); ?>

</ul>

</div>

</div>

<div class="slideshow_container_blog">



</div>
