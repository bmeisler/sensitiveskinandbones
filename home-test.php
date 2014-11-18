
<?php
/*
Template Name: Home-test Template
 */
  ?>




 <?php get_header(); ?>
<div class="homeGrid" id="theAppContainer">
<?php
    $tile1 = array(0, 0, 313, 313);
    $tile2 = array(323, 0, 313, 189);
    $tile3 = array(646, 0, 189, 116);
    $tile4 = array(845, 0, 116, 116);
    $tile5 = array(323, 199, 116, 116);
    $tile6 = array(449, 199, 189, 116);
    $tile7 = array(646, 126, 116, 189);
    $tile8 = array(772, 126, 189, 189);
    $count = 0;
    $allTiles = array($tile1, $tile2, $tile3, $tile4, $tile5, $tile6, $tile7, $tile8);
     ?>
  <?php $topPosts = new WP_Query();
    $topPosts->query('showposts=8&tag="Issue9');
    while ($topPosts->have_posts()) : $topPosts->the_post(); ?>
  	<?php $postimageurl = get_post_meta($post->ID, 'post-img', true);

        $l = $allTiles[$count][0];
        $t = $allTiles[$count][1];
        $w = $allTiles[$count][2];
        $h = $allTiles[$count][3];


        if ($postimageurl) {
            ?>

        <div class="gridTile" style="left: <?php echo $l; ?>px; top: <?php echo $t; ?>px; height: <?php echo $h;?>px; width: <?php echo $w; ?>px;">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <img src="<?php  bloginfo( 'wpurl' );
            ?>/wp-content/images/tns/<?php echo $postimageurl; ?>" alt="Post Pic" style="left: <?php echo $l; ?>px; top: <?php echo $t; ?>px; height: <?php echo $h;
                                                                                          ?>px; width: <?php echo $w; ?>px;"
            />
            <h3 class="title"><em><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
            if ($subtitle) echo $subtitle.':<br/>';?>  </em><?php the_title(); ?></h3>
            </a>
        </div>
         <?php }  else {
            echo 'no post-img';
            ?>
        <div class="gridTile" style="left: <?php echo $l; ?>px; top: <?php echo $t; ?>px; height: <?php echo $h;
        ?>px; width: <?php echo $w; ?>px;">
            <a href="<?php the_permalink(); ?>">

            <?php
            $max_width = 200;
            $max_height = 133;
            $img_path =  catch_that_image();
            if ($img_path == ''){
                $img_path = get_bloginfo('wpurl')."/wp-content/images/tns/default-img_inverted.jpg";
            }else{
                $sizes = getimagesize($img_path);
                $width = $sizes[0];
                $height = $sizes[1];


                $ratioh = $max_height/$height;
                $ratiow = $max_width/$width;
                $ratio = min($ratioh, $ratiow);
                // New dimensions
                $width = intval($ratio*$width);
                $height = intval($ratio*$height);
            }
            if ($width == 0 || $width = null){
                    $width=$max_width;
                    $height=$max_height;
                }
            ?>

            <img src="<?php echo $img_path; ?>" style="left: <?php echo $l; ?>px; top: <?php echo $t; ?>px; height: <?php echo $h;
                                                        ?>px; width: <?php echo $w; ?>px;" />

            </a>
        </div>


                         <?php }
         $count++;

         ?>

    <?php endwhile;  ?>

</div>
<div id="main" class="eightcol first clearfix" role="main">
<article <?php post_class('clearfix'); ?> role="article">
                <h3>
                    Sensitive Skin #9
                </h3>
                <p class="info-box"><em><strong>Sensitive Skin #9</strong></em> features an exclusive interview with, and music by, seminally classic prog-rock guitarist Fred Frith (Henry Cow), the missing chapter from the latest novel by science
 fiction legend Samuel Delaney, <em>Through the Valley of the Nest of Spiders,</em> a portfolio of
                    <a href= "http://www.sensitiveskinmagazine.com/john-lurie-new-paintings/">paintings from actor and musician John Lurie</a> (<em>Stranger Than Paradise</em>,  Lounge Lizards), a recounting of <a href="http://www.sensitiveskinmagazine.com/suicide-tour/">Suicide's first European tour by Marty Thau</a>, founder of Red Star records and the former manager of The New York Dolls, a new translation of poetry by Vladimir Mayakovsky, photographs of the <a href="http://www.sensitiveskinmagazine.com/zona-norte-photographs/">Tijuana's Zona Norte by Chris Bava</a> and <a href="http://www.sensitiveskinmagazine.com/the-united-states-of-hoodoo/" target="_blank">an interview with Darius James conducted by Ghazi Barakat</a>, about his new documentary, <em>The United States of Hoodoo.</em> The front cover (shown to the right) is by illustrator <a href="http://www.sensitiveskinmagazine.com/prime-directive/">J.D. King</a>, and the back cover features <a href="http://www.sensitiveskinmagazine.com/august-1977/">a comic written and drawn by James Romberger.</a>
                <p class="info-box">There's more writing, by <a
                    href="http://www.sensitiveskinmagazine.com/the-forgetting-of-water/">Doug Rice</a>, <a href="http://www.sensitiveskinmagazine.com/sucker/" >Susan Scutti</a>, <a
                href="http://www.sensitiveskinmagazine.com/russian-graves/">Larissa
                    Shmailo</a>,<a href="http://www.sensitiveskinmagazine.com/killing-williamsburg/">Bradley Spinelli</a>, <a href="http://www.sensitiveskinmagazine.com/bump-your-ass-off/">Anna Mockler</a>, <a
                    href="http://www.sensitiveskinmagazine.com/sodomy-is-a-threat-to-national-security/">Jesus Angel Garcia</a>, and <a href="http://www.sensitiveskinmagazine.com/new-bedford-real-estate/">Amman Sabet</a>, as well as art by <a href="http://www.sensitiveskinmagazine.com/the-forgetting-of-water/" target="_blank">Ha Young Kim</a>, <a href="http://www.sensitiveskinmagazine.com/sucker/" target="_blank">Marcin Owczarek</a>, <a href="http://www.sensitiveskinmagazine.com/russian-graves/">John Griffin</a>, <a href="http://www.sensitiveskinmagazine.com/suicide-tour/">David West</a> and <a href="http://http://www.sensitiveskinmagazine.com/claritas/">Justine Frischmann</a>, and photographs by Ted Barron, <a href="http://www.sensitiveskinmagazine.com/killing-williamsburg/" target="_blank">Ruby Ray</a>, <a href="http://www.sensitiveskinmagazine.com/bump-your-ass-off/">Kym Ghee</a>, <a href="http://www.sensitiveskinmagazine.com/676-a-salt-print/">Hal Hirshorn</a>, <a
                    href="http://www.sensitiveskinmagazine.com/sodomy-is-a-threat-to-national-security/" target="_blank">N.D. Koster</a> and <a href="http://www.sensitiveskinmagazine.com/new-bedford-real-estate/">Geoffrey Ithen</a>.

                <p class="info-box">Issue #8, featuring an interview with <a href="http://www.sensitiveskinmagazine.com/william-s-burroughs-interview/#">William S. Burroughs by Allen Ginsberg</a>,
                    <a href="http://www.sensitiveskinmagazine.com/photographs-ruby-ray/">iconic punk photographs by Ruby Ray</a>, and writing by <a href="http://www.sensitiveskinmagazine.com/pardon-my-french/">Thaddeus Rutkowski</a>, <a href="http://www.sensitiveskinmagazine.com/how-to-stop-smoking-in-19287-seconds-usama/">Chavisa Woods</a>, <a href="http://www.sensitiveskinmagazine.com/if-youre-so-special-why-arent-you-dead/">James Greer</a>, <a href="http://www.sensitiveskinmagazine.com/if-you-play-and-if-you-die/">Jim Feast</a>, <a href="http://www.sensitiveskinmagazine.com/eight-poems-colby/">Todd Colby</a>, <a href="http://www.sensitiveskinmagazine.com/guy-walks-into-a-bar-circa-1997-hollywood/">Karen Lillis</a> and more, is also <a href="http://www.amazon.com/Sensitive-Skin-8-B-Kold/dp/0983927154/ref=sr_1_2?s=books&ie=UTF8&qid=1355196989&sr=1-2&keywords=sensitive+skin+%238" target="_blank">on sale on Amazon</a>, or you can <a href="http://www.sensitiveskinmagazine.com/issue-8/">read it online</a> for free.</p>

                <p class="info-box"><em><strong>Sensitive Skin</strong>,</em> an anthology of post-beat, pre-apocalyptic art, writing, music and whatnot, features work by both world-famous and new-and-emerging artists, writers, and musicians from around the globe.






        </article>
</div> <!-- end #main -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>