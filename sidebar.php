				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

					<!--
                <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>
-->

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
					<!--
	<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>-->
					    
					    <?php get_sidebar('litbreaker'); ?>
					    
					    


					    <?php get_sidebar('Donate'); ?>

					    <?php get_sidebar('Animated'); ?>
                     
			            <?php get_sidebar('TOC'); ?>
			           <!--
 <?php get_sidebar('NewMonstersAd'); ?>
			            <?php
			                $input = array("BackwardsAd", "Music", "EastOfBoweryAd", "BarefootAd");
			                $rand_key = array_rand($input);
			                get_sidebar($input[$rand_key]);
			            ?>-->
						<!--<?php
						    
						  
			                $input = array("PDF8", "PDF12", "PDF9", "PDF10");
			                $rand_key = array_rand($input);
			                print($rand_key);
			                print($input[$rand_key]);
			                get_sidebar($input[$rand_key]);
			            ?>-->
			           
			          

                        <?php get_sidebar('originalprintrunad'); ?>

			            <?php get_sidebar('social'); ?>
			</div>