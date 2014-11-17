<?php
/*
Template Name: Subscribe Template
 */
 ?>
<?php get_header(); ?>

<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                  <!--
<p class="byline vcard"><?php
                    printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
                  ?></p>
-->

						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <h2 class="small-subhead">
						Join Us! Register today!
					</h2>
					<p class="infocopysinglespace">
						To receive email updates on new issue launches, events and whatever else we think is important, please fill out the form below. (We promise we won't pester you too much, or give your email to anybody else). 
					</p>
				<?php get_sidebar('MailChimp'); ?>
				
				<p class="infocopysinglespace">
						Join our army or mindless robotic art slaves today! It's fun and easy! 
					</p>
							</section> <!-- end article section -->
						
						    <footer class="article-footer">
<p></p>							
						    </footer> <!-- end article footer -->
					    </article> <!-- end article -->
					<section>
					<div id="social_media_form">
			<table border="0">
				<tr valign="top">
					<td width="280">
						<div class="page_small_subtitle">
							<strong>
								Join our Facebook Fan page: 
							</strong>
							<br />
							<a href="http://www.facebook.com/pages/Sensitive-Skin-Magazine/123073751068181" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/images/socialmediabuttons/facebook.png" alt="facebook" width="70" height="70" />
							</a>
						</div>
					</td>
					<td width="280">
						<div class="page_small_subtitle">
							<strong>
								Subscribe to our RSS feed: 
							</strong>
							<br />
							<a href="http://feeds.feedburner.com/SensitiveSkinMagazine" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/images/socialmediabuttons/rss.png" alt="rss" width="70" height="70" />
							</a>
						</div>
					</td>
					<td width="280">
						<div class="page_small_subtitle">
							<strong>
								Buy print versions of #'s 1-7:
							</strong>
							<br />
							<br>
							<a href="http://www.magcloud.com/browse/magazine/208554"><img src="http://www.magcloud.com/images/promote/follow_one_line.png" /></a>
						</div>
					</td>
				</tr>
				<tr>
					<td width="280">
						<div class="page_small_subtitle">
							<strong>
								Follow us on Twitter: 
							</strong>
							<br />
							<a href="http://www.twitter.com/sensitivemag" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/images/socialmediabuttons/twitter.png" alt="twitter" width="70" height="70" />
							</a>
						</div>
					</td>
					<td width="280">
						<div class="page_small_subtitle">
							<strong>
								Watch our YouTube channel: 
							</strong>
							<br />
							<a href="http://www.youtube.com/user/SensitiveSkinTV" target="_blank">
								<img src="<?php bloginfo('url'); ?>/wp-content/images/socialmediabuttons/youtube.png" alt="youtube" width="70" height="70" />
							</a>
						</div>
					</td>
					<td width="280">
						
					</td>
				</tr>
				<tr>
					<td width="100">
					</td>
					<td>
					</td>
				</tr>
			</table>
		</div>
					
					</section>
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
