			
			<div id="footer-container" class="clearfix">
				<!--<?php include("footer/recentPostsFiveCol.php"); ?>-->
				
				<footer class="footer" role="contentinfo">
		
					<div id="inner-footer" class="wrap clearfix">
							<?php include("footer/blogRoll.php"); ?>
					</div> <!-- end #inner-footer -->
			
					</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

            <?php wp_enqueue_script('jquery'); ?>

            <!--  <script src="<?php bloginfo('wpurl'); ?>/wp-content/themes/eddiemachado-bones-58608ca/library/js/imageresize.js" type="text/javascript"></script> -->
<!--            <script src="--><?php //bloginfo('wpurl'); ?><!--/wp-content/themes/eddiemachado-bones-58608ca/library/js/jpanelmenu.min.js" type="text/javascript"></script>-->
<!--              <script src="--><?php //bloginfo('wpurl'); ?><!--/wp-content/themes/eddiemachado-bones-58608ca/library/js/menuFade.js" type="text/javascript"></script>-->
<!--contains GA analytics script MANUALLY TURN THIS ON FOR LIVE SITE-->
    <script src="<?php bloginfo('wpurl'); ?>/wp-content/js/googleanalytics.js" type="text/javascript"></script>

    <?php if( $_SERVER['SERVER_ADDR'] != '127.0.0.1'){ ?>
            <?php   echo '<script src="//static.getclicky.com/js" type="text/javascript"></script>';?>
            <?php   echo '<script type="text/javascript">try{ clicky.init(66421456); }catch(e){}</script>';?>
            <?php   echo '<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66421456ns.gif" /></p></noscript>'; }?>
    <!-- Implement ability to create pop-ups -->
    <script language="javascript" type="text/javascript">
        <!--
        function popitup(url, params) {
            newwindow=window.open(url,'name', params);
            if (window.focus) {newwindow.focus()}
            return false;
        }

        // -->
    </script>



            </body>

</html> <!-- end page. what a ride! -->
