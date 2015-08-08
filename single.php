<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
								<header class="article-header">
							
									
<?php  
	$classes = get_post_class($class, $post_id);
	if (!in_array("download", $classes)) {?>
    	<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
    	 <?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
        if (!$subtitle)
	        {
	            echo '<h1 id="author">'.bones_get_the_author_posts_link().'</h1>';
	
	            $writer = get_the_author(); 
	        }
	        else if ($subtitle)
	        {
	            echo '<h1 id="author">'.$subtitle.'</h1>';
	            $writer = $subtitle;
	        }
    }else{?>
    	<h1 class="page-title"><?php the_title(); ?></h1>
  <?php 
  }
?>
				

                                       						
								</header> <!-- end article header -->
								<section class="sociable-buttons">
								           <?php if( function_exists( do_sociable() ) ){ do_sociable(); }    ?>
								           	<!-- Place this tag where you want the su badge to render -->
			           						
										
			
												</section>
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->
								
								<?php // end article section ?>

                <footer id="relatedposts" class="article-footer">

                  <?php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <?php // end article footer ?>
					
							</article> <!-- end article -->
                       
                       <?php if( function_exists( do_sociable() ) ){ do_sociable(); }    ?>
                       <!--  <?php 
                        if (!in_array("download", $classes)) {//don't show 'more like this' for downloads - or else show more downloads, not articles!
                        	include("library/includes/alsoby.php"); 
                        }?> -->
					<?php comments_template(); ?>
						<?php endwhile; ?>			
					
						<?php else : ?>
					
							<article id="post-not-found" class="hentry clearfix">
					    		<header class="article-header">
					    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					    		</header>
					    		<section class="entry-content">
					    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					    		</section>
					    		<footer class="article-footer">
					    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
					    		</footer>
							</article>
					
						<?php endif; ?>

					</div> <!-- end #main  -->
    			<?php 
    			 if (!in_array("musicdownload", $classes)) {//don't show 'more like this' for downloads - or else show more downloads, not articles! 
                        	 get_sidebar();
                 }else{
					
    			 } 
    			?>
				</div> <!-- end #inner-content -->

<?php get_footer(); ?>
</div> <!-- end #content -->