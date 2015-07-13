 <?php get_header(); 
	
?>
			
			<div id="content">
						<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); 
						   
					    ?>
						    <?php if ( !in_category('JPlayers') ) { ?>
						
							    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
		                          <div class="archive-content clearfix">
		                        
		                        
			                          <?php 
			                          		if (has_tag(array('featured')) ){//If this is a featured post, try to use as large a preview image as possible
			                          			//echo 'featured';
	                                            $img_path =  catch_that_image();
	                                            
	                                            if ($img_path != '' && $img_path != null){ //if there is an image in the post, use it and style it according to size
	                                            $sizes = getimagesize($img_path);
	                                            $width = $sizes[0];
	                                            $height = $sizes[1];
	                                            //echo 'width: '.$width;
/* 		                                            echo '<br>found an image in post'; */
/* 		                                            echo 'image path:'.$img_path; */
	                                            ?>
                                                 	
                                                    
                                                    <?php if ($width>200 & $width < 400 || $height > $width)
                                                    { 
                                                  // echo 'featured, use medium size for portrait';//if in portrait mode, make medium, regardless of size
                                                   if ($currentAlignment=="right"){
                                                   	$currentAlignment = "left";
	                                                   /*
echo "<br>left<br>";
	                                                   echo $currentAlignment;
*/
	                                                   ?>
	                                                   <figure class="post-img-medium-right">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
		                                                    <img src="<?php echo $img_path; ?>"  />
		                                                 </a>
		                                                </figure>
                                                 <?php  }else{ 
	                                                $currentAlignment = "right";
                                                 ?>
	                                                  <figure class="post-img-medium">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
		                                                    <img src="<?php echo $img_path; ?>"  />
		                                                 </a>
		                                                </figure>
	                                                 
	                                                 
                                               <?php  }
                                                   
                                                   ?>
                                                       
                                                   <?php } else if ($width >= 400)
                                                   			{  
                                                   			
                                                   			//echo'featured, use large size';//it's a big image, let's use the full size?>
                                                        <figure class="post-img-large">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
		                                                    <img src="<?php echo $img_path; ?>"  />
		                                                 </a>
		                                                </figure>
                                                   <?php }else{
	                                                   //echo 'featured, use the tn';
	                                                   $postimageurl = get_post_meta($post->ID, 'post-img', true);
				                                         if ($postimageurl){ ?>
					                                         <figure class="post-img-medium-right">
						                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php  bloginfo( 'wpurl' ); ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic"  /></a>
						                                     </figure>
						                                  <?php } else{
							                                  //echo 'dont do nothing';
						                                  } ?>      
                                                  <?php }  ?>
                                                <?php }else{//couldn't find an image in the post 
 	                                                //echo 'no image found in post'; 
 	                                                $postimageurl = get_post_meta($post->ID, 'post-img', true);
 	                                                if ($postimageurl){ ?>
				                                         <figure class="post-img-medium">
					                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php  bloginfo( 'wpurl' ); ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic"  /></a>
					                                     </figure>
 	                                               <?php }
                                                ?>
                                                    
                                                    
                                                <?php } ?>
                                                
                                         <?php } else{//NOT A FEATURED POST - use a small image
 	                                         //USE A FEATURED IMAGE IF ONE EXISTS
 	                                         $postimageurl = get_post_meta($post->ID, 'post-img', true);//DOES IT HAVE A TN?
 	                                         if ( has_post_thumbnail() ) { ?>
				                                <figure class="post-img-medium">
				                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
				                                        <?php the_post_thumbnail('bones-thumb-200');?>
				                                    </a>
				                                </figure>
				
				                             <?php } else if ($postimageurl){ 
		                                         //echo 'not featured, use tn';
	                                         ?>
											 	<?php if ($currentAlignment=="right"){
                                                   	$currentAlignment = "left";
	                                                   /*
echo "<br>left<br>";
	                                                   echo $currentAlignment;
*/
	                                                   ?>
	
		                                         <figure class="post-img-medium-right">
			                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php  bloginfo( 'wpurl' ); ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic"  /></a>
			                                     </figure>
			                                     <?php }else{
			                                     $currentAlignment = "right";
			                                     ?>
			                                     <figure class="post-img-medium">
			                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php  bloginfo( 'wpurl' ); ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic"  /></a>
			                                     </figure>
			                                      <?php
	                                            }	                                            
	                                         ?>
	                                        <?php }else{//NO TN FOUND, GET AN IMAGE FROM THE POST
		                                        //echo 'not featured, no tn found, use small post image';
		                                        $img_path =  catch_that_image();
	                                            
	                                             if ($img_path != '' && $img_path != null){ //if there is an image in the post, use it and style it according to size
	                                             	$sizes = getimagesize($img_path);
	                                            $width = $sizes[0];
	                                            $height = $sizes[1];
		                                             //echo 'found an image';
		                                             ?>
		                                             <figure class="post-img-medium">
		                                             <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                    <img src="<?php echo $img_path; ?>"  />
                                                    </figure>

                                                 </a>
                                                </figure>
                                                <?php
	                                            }	                                            
	                                        } ?>
	                                          
	                                         
	                                         
	                                        <?php }
                                         ?>


												


		                                <h3 class="archive-post-title">
		                                    <a href="<?php the_permalink() ?>">
		                                        <?php the_title(); ?>
		                                    </a>
		                                </h3>
		                                 <?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
                                        if (!$subtitle)
                                        {
/*                                             echo '<div class="archive-author">'.get_the_author().'</div>'; */
                                            echo '<h2 class="archive-author">'.bones_get_the_author_posts_link().'</h2>';

                                        }
                                        else if ($subtitle)
                                        {
                                            echo '<h2 class="archive-author">'.$subtitle.'</h2>';
                                                                                    }
                                        ?>

		                                <div class="entry">
		                                    <?php the_excerpt() ?>
		                                </div>
		                                
	                               </div>

							    </article> <!-- end article -->
							 <?php } ?>	
						 <?php endwhile; ?>
						    
						<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
						<?php endif; ?>
						
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->

			<?php get_footer(); ?>
    
		</div> <!-- end #content -->


