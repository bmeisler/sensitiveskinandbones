<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<div id="floatingsidebar" role="complementary">
	<h3>
		Popular Posts
	</h3>
<?php global $orig_post; //print_r($orig_post->ID); ?>
<?php $current_issue_query = new WP_Query('showposts=25&tag=featured&orderby=rand');?>
<?php if ($current_issue_query->have_posts()) : while ($current_issue_query->have_posts()) : $current_issue_query->the_post(); 
//print_r($post->ID);
//print_r($orig_post->ID);
 ?>
<?php if( $post->ID == $orig_post->ID ){
	//echo 'match'; 
	?>
	<div 
<?php post_class() ?>
	id="post- 
<?php the_ID(); ?>
	">
	<h4 class="currentStoryTitle">
<em><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
					if($subtitle) echo $subtitle.' - ';?>  </em>
<?php echo the_title(); ?>
	</h4>
</div>
<?php
}else { ?>
<div 
<?php post_class() ?>
id="post- 
<?php the_ID(); ?>
">
<h4 class="storytitle">
<em><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
					if($subtitle) echo $subtitle.' - ';?>  </em>
	<a href="<?php the_permalink() ?>" rel="bookmark">
<?php the_title(); ?>
	</a>
</h4>
</div>
<?php } ?>
<?php endwhile; else: ?>
<p>
	Sorry, no posts matched your criteria. 
</p>
<?php endif; ?>


<?php rewind_posts(); ?>
</div>
<!--end div for TOC sidebar-->
