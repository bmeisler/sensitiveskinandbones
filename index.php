<?php get_header(); ?>

  <div id="content">
    <div id="inner-content" class="wrap clearfix">
      
      <div id="main" class="eightcol first clearfix" role="main">
		  
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				 <div class="archive-content clearfix">
		         	<?php include("includes/front-page-image.php"); ?>   
		                        
			                          
                                         
	                 <h3 class="archive-post-title">
	                    <a href="<?php the_permalink() ?>">
	                        <?php the_title(); ?>
	                    </a>
	                 </h3>
		                                
	                <div class="entry">
	                    <?php the_excerpt() ?>
	                </div>
		                                
				 </div>                   
             </article>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
	  </div><!--end of #main-->
    <?php get_sidebar(); ?>
  </div><!-- end of inner content-->
     </div> 

<?php get_footer(); ?>