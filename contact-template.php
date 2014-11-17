<?php
/*
Template Name: Contact Template
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="page-title"><?php the_title(); ?></h1>
                  

						
						    </header> <!-- end article header -->
					
						    <section class="entry-content">

<p class="contributors">If you're contacting us about submitting work, please read our <a href="http://www.sensitiveskinmagazine.com/submissions/"><strong>submissions guidelines</strong></a> first. (Perhaps most importantly, please note <em>we do not accept unsolicited poetry submissions</em>). We also suggest you like us on <a href="http://www.facebook.com/sensitiveskin"><strong>Facebook</strong></a> to show support, and read at least a few pieces in the magazine first to see if we're right for each other. In other words, articles about cosmetics and porn are not welcome (and yeah, we get 'em all the time - it's our name and we're stuck with it!).

<p class="contributors">If you want to tell us about yourself, submit materials for a potential review, send links to some sample work, complaint or even compliments, email us at:

<p class="contributors"><strong>info@sensitiveskinmagazine.com</strong>

<p class="contributors">If you prefer to kick it old school, send your non-digital, analog, physical object, book, cd, artwork, what have you to:

<p class="contributors"><strong>PO Box 1755, Mill Valley, CA 94942</strong>



		


			    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							
						    </footer> <!-- end article footer -->
						    
					
					    </article> <!-- end article -->
					
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
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
