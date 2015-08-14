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

				<?php } else if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					<?php
						the_post_thumbnail('thumbnail');
					?>
					</a>
					<?php
					}else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<img src="/wp-content/images/tns/default-img_inverted.jpg" />
					</a>
					
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
				