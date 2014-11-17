<?php
/*
Template Name: Issue 5 Template
 */
 ?>
<?php get_header(); ?>
	<div id="left-side">

<!--STORY-->
		<div id="featured-image" class="box">
		<a href="<?php bloginfo('url'); ?>/coming-of-age-by-samoa//" title="44th President, Barack Obama"><img src="<?php bloginfo('url'); ?>/wp-content/images/issue5/Samoa_obama.jpg"  width="460" height="546" alt="Girl"></a>
		<p>
			Samoa 
		</p>
	</div>
	<!--TABLE OF CONTENTS-->
		<div id="TOC" class="box" role="list">
			<h3>
				In This Issue 
			</h3>
			<?php $current_issue_query = new WP_Query('tag=Issue5');?>
			<?php if ($current_issue_query->have_posts() ) : while ($current_issue_query->have_posts()) : $current_issue_query->the_post(); ?>
						<div 
			<?php post_class() ?>
						id="post- 
			<?php the_ID(); ?>
						"> 
						<h5>
			<?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
											if($subtitle) echo $subtitle.' - ';?>
							<a href="<?php the_permalink() ?>" rel="bookmark">
			<?php the_title(); ?>
							</a>
						</h5>
						
					</div>
			<?php endwhile; else: ?>
					<p>
						Sorry, no posts matched your criteria. 
					</p>
			<?php endif; ?>
		<h6><em>Plus art by:</em> Shalom Neuman, John Griffin, Holly Van Voast, Ted Barron, Hal Hirshorn, Johanna Ellen, David West, Sebastian Mlynarski, Charlie Homo</h6>
	</div>
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/somerville" title="Somerville">Somerville</a></h3>
        <h4>Melissa Febos</h4>
      
        <p>I just knew that Somerville would be the kind of neighborhood to go all out at Christmas.  I was right. Winter Hill in particular was an orgy of blinking lights and glowing plastic figures.  Our block alone had four Rudolphs, two with real blinking noses.  The house next to ours had papered their entire front door in shiny gift wrapping, complete with a gigantic bow.  You could tell how white the neighborhood was by the number of Santas.  In the black and Hispanic neighborhood that I rode the bus through to get to work, there was a baby Jesus for every Santa, a wise man for every Rudolph.  I guess it said something about whose faith lay where.  
		<p>“Let’s go on a walking tour of Somerville tonight!” I begged my roommates.  This would be the first Christmas that I had ever spent away from my family, the first year my mom and I wouldn’t take our local Christmas light tour.  Jen and Dara, both Tufts dropouts, would be going back to their respective hometowns in Connecticut and New Jersey. <a href="<?php bloginfo('url'); ?>/somerville" title="Somerville">They stared at me, uncomprehending.  “To look at the Christmas lights,” I added.</a>
	</div>
	
		
	<div class="box" id="poem">
		  <h3> <a href="<?php bloginfo('url'); ?>/rose" title="Rose">Rose & other poems</a></h3>
        <h4>Lyn Lifshin</h4>
              <p class="firstLine">when it’s behind my knees</p>
				<p>you’d have to fall to the</p>
				<p>floor, lower your whole</p>
				<p>body like horses in a field</p>
				<p>to smell it. White Rose,</p>
				<p>Bulgarian rose. I think of </p>
				<p>sheets I’ve left my scent in</p>
				<p><a href="<?php bloginfo('url'); ?>/rose" title="Rose">as if to stake a claim for</a></p>
	</div>
	<div class="box" id="music">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/timber-released-unreleased" title="Timber - Released (and Unreleased)">
				Timber - Released (and Unreleased)
			</a>
		</h3>
		<h4>
			Timber 
		</h4>
         <p>Timber was Jenny Wade (bass), Mark Howell (guitar) and Rick Brown (drums). Timber was the 2nd (or 3rd) band for all of them; Jenny was in Vodka and The Swans, Mark Howell played with Fred Frith, John Zorn and Elliot Sharp, and Rick's band Run On was about to sign with Matador. Captain Beefheart meets Gang of Four. One of our favorite NY bands of the '90's, enjoy Timber.</p>
 
		 <table>
			<tr valign="middle">
				<td> <a href="<?php bloginfo('wpurl'); ?>/timber-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/timber-player', 'height=350,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')"><span class="listen"></span></a></td>
		<td><a href="<?php bloginfo('wpurl'); ?>/timber-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/timber-player', 'height=250,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')"><strong>LISTEN</strong></a></td>
			</tr>
		 </table>
	</div>
	
	<div class="box">
		<h3 >
			<a href="<?php bloginfo('url'); ?>/knot-frum-hear" title="Knot Frum Hear">Knot Frum Hear</a>
		</h3>
		 <h4>D. Scot Miller</h4>
       <p>My face is cold. A salty breeze numbing my cheeks.  I have the black book in my lap, and a pen in my hand.  Sunlight casts through black water, a murky aquamarine spreading its roots towards the edge of  my boat.  I’m awake. Alone. Writing.
		<p>To my right across the dark ocean, another in a rowboat appears, some distance away.  To my left another, closer. A head-wrapped figure.  The current picks up and I feel the tug of the shore. Distant boats appear, city lights shine our paths in ripples.  Six more boats.  
		Piers line the city like gnarled teeth. My boat taking me to land. I turn words upside down in my head.   <a href="<?php bloginfo('url'); ?>/knot-frum-hear" title="Knot Frum Hear">A brown mist slithering across my vision. </a>

	</div>
	
	<div class="box" id="poem">
		<h3>
			<a href="<?php bloginfo('url'); ?>/rear-window" title="Rear Window 1, 2 and 3">
				Rear Window 1, 2 & 3
			</a>
		</h3>
		 <h4>Steve Dalachinsky</h4>


        <p class="firstLine">she’s in her underwear
		<p>she’s fixing the curtain
		<p>she just took a shower
		<p>she’s vacuuming the house
		<p>she’s talking on the phone
		<p>finally that stool is occupied
		<p>she smokes with her left hand
		<p>while doing the dishes with her right
		<p>she has a tattoo above the left cheek of her arse
		<p><a href="<?php bloginfo('url'); ?>/rear-window" title="Rear Window 1, 2 and 3">she has blond hair</a>
	</div>
	
	
</div>

<!--##################### END LEFT COLUMN ######################### -->
<div id="right-side">
	

	
	
	<div class="box" role="text">
			<h3><a href="<?php bloginfo('url'); ?>/manic-mode" title="Manic Mode">Manic Mode</a></h3>
        <h4>Jonathan Shaw</h4>
       
		<p>Carnaval was over. Weeks went by. The city of Rio de Janeiro was slowly going back to its normal pace. My life with Narcisa, however, was its own Dark Carnaval of progressive weirdness now. Suddenly, I realized since I’d picked her off the ho-stroll and fallen into Narcisa’s mad trajectory, three whole months had flown by in a surreal haze of passion and drama; a relentless flurry of endless days and nights of terror and danger and unrestrained passions and impending mental collapse. 
		
		<p>Sometimes though, between Narcisa’s grueling soul-shattering week-long crack missions, I’d still try to take her out to a movie or for a walk on the beach at night; something safe and stable and normal like a simple quiet água de côco <a href="<?php bloginfo('url'); ?>/manic-mode" title="Manic Mode">sitting under a palm tree by the gentle waves under vital summer moonlight. </a> 
		</div>
		
	
	
	
	<div class="box" id="music">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/dan-becker-compositions" title="Dan Becker Compositions">
				Dan Becker - New Compositions
			</a>
		</h3>
		<h4>
			Dan Becker 
		</h4>
         <p>Dan Becker confesses to an obsession with "process" in all its forms.  Not just musical ones, but sociological, mathematical, and natural processes as well.  He fancies he can almost "see" them unfolding and whirling around him; all whizzing by, colliding, merging, often intersecting. He finds great delight in this and believes that music is an excellent vehicle to give voice (and possible meaning) to this phenomena.</p>
 
		 <table>
			<tr valign="middle">
				<td> <a href="<?php bloginfo('wpurl'); ?>/dan-becker-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/dan-becker-player', 'height=350,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')"><span class="listen"></span></a></td>
		<td><a href="<?php bloginfo('wpurl'); ?>/dan-becker-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/dan-becker-player', 'height=250,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')"><strong>LISTEN</strong></a></td>
			</tr>
		 </table>
	</div>
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/rabbit-and-crow" title="Rabbit and Crow">Rabbit and Crow</a></h3>
        <h4>Norman Douglas</h4>
        
         <p>Rabbit and Crow watched as the sun came round over the field.
		<p>"Did you sleep well?" Rabbit asked Crow.
		<p>“I dreamed that I was running through the meadow,” said Crow.
		<p>“Ah,” said Rabbit.
		<p>Rabbit and Crow set a spell in silence.
		<p>“Raccoon had babies,” said Crow. “Yesterday, before the storm.”
		<p>“A real wet one,” said Rabbit.
		<p>“Lightning struck the locust tree,” said Crow.
		<p>“The young one?” asked Rabbit.
		<p>“No,” said Crow. “The old one.”
		<p>They looked at the wind bend the gold blossoming seedheads atop the field of tall fronds.
		<p>“Something moved,” said Rabbit.
		<p>“I’ll have a look,” said Crow. He felt the wind with his wingtips and bounced up from the ground, <a href="<?php bloginfo('url'); ?>/rabbit-and-crow" title="Rabbit and Crow">flapping close above the long grasses as he looked down.</a>
	</div>
	
	<div class="box" id="poem">
	 <h3 class="smallTitle"><a href="<?php bloginfo('url'); ?>/when-the-lights-go-out-in-mojacar" title="when the lights go out in Mojácar">when the lights go out in Mojácar</a></h3>
        <h4>Wanda Phipps</h4>
         <p class="firstLine">someone said “everyone who has power is <p>smiling”
		<p>or was it “everyone who has electricity is smiling
<p>or “everyone smiling has electricity”
<a href="<?php bloginfo('url'); ?>/when-the-lights-go-out-in-mojacar" title="A Meating of the Minds">definitely not “everyone smiling has powerful electricity”</a>
	</div>
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/blue-portrait" title="Blue Portrait">Blue Portrait</a></h3>
        <h4>Jennifer Adams</h4>
          <p>Matt was a blind date, the only one I ever went on. He was an acquaintance of a girl who had the locker next to mine senior year. She thought I’d like him because he was an artist and was sort of in a band. He played bass. I did like him; he appealed to my latent desire for bad boys. He was thin and strong. He had curly hair, golden like his skin, and it flopped over his eyes. He had beautiful lips, red and full. I can’t remember his eyes.

		<p>I also can’t remember much of what we did together all that long summer after graduation. He took me around to the video store where he worked. I perched, bored, on a tattered vinyl ottoman mended with skateboard tape, in the tiny back room behind the counter while <a href="<?php bloginfo('url'); ?>/blue-portrait" title="Blue Portrait">he and his buddy watched slasher movies, grunting little bursts of awed laughter at the sickest parts.</a>
	</div>
	<div class="box" id="video">
		 <h3><a href="<?php bloginfo('url'); ?>/eat-me" title="Eat Me">Eat Me</a></h3>
        <h4>Johanna Ellen</h4>



        
         <p> J&oacute;hanna Ellen is a painter, illustrator, animator and video artist who lives in Iceland. <a href="<?php bloginfo('url'); ?>/eat-me" title="Eat Me">"Eat Me" is the 3rd part of a four-part video installation.</a></p>
        
    <a href="<?php bloginfo('url'); ?>/soul-trip" title=Eat Me><img src="<?php bloginfo('url'); ?>/wp-content/images/issue5/EatMe.jpg" width="460" height="247" border="0" /></a>
		
	</div>
	

<!--end right-side-->
</div>



<?php get_footer(); ?>

