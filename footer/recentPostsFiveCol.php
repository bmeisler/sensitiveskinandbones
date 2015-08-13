<?php
$tnCount = 0;
?>
<div id="FiveColumnContainerTop">
Previously, on Sensitive Skin!
</div>
<div id="colcontainer">
		<?php $current_issue_query = new WP_Query('showposts=5&tag=featured&orderby=rand');?>
		<?php while ($current_issue_query->have_posts()) : $current_issue_query->the_post(); 
		$postimageurl = get_post_meta($post->ID, 'post-img', true);
		$tnCount++;?>
		
			<div id="column<?php echo $tnCount; ?>" >
				<?php if ($postimageurl) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<img src="<?php  bloginfo( 'wpurl' ); ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic" />
					</a>
				<?php } else { 
					//echo "no image, let's get one";
					 $img_path =  catch_that_image();
					 
					  if ($img_path != '' && $img_path != null){
						 $sizes = getimagesize($img_path);
	                     $current_width = $sizes[0];
	                     $current_height = $sizes[1];

	                     if ($current_height===0 || $current_height===null){
	                     	$current_height = 1;
	                     }
	                     if ($current_width = 0 || $current_width===null){
	                     	$current_width = 1;
	                     }
	                     
	                     $original_aspect = $current_width / $current_height;
	                     $maxheight = $current_width/$original_aspect;
						
						 ?>
					
                       
						 <a href="<?php the_permalink(); ?>" rel="bookmark">
							 <img src="<?php echo $img_path; ?>" width="<?php echo $width;?>" height="<?php echo $height;?>"  />													 </a>


					
					
				<?php } ?>	
				<?php } ?>
				<div id="SmallArchiveTitle"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></div> 		
			    <?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
				if($subtitle) echo '<div id="SmallArchiveAuthor">'.$subtitle.'</div>'; ?>
				 <div class="archive-copy">
			<?php the_excerpt(25) ?>
		</div>
			</div>
			<?php endwhile; ?>
</div>
				