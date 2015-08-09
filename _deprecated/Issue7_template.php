<?php
/*
Template Name: Issue 7 Template
 */
 ?>
<?php get_header(); ?>
	<div id="hiddenImage">
		<img src="<?php bloginfo('url'); ?>/wp-content/images/issue7/5.WOCC_COVER_460.pn" width="460" height="460" alt="Girl">
	</div>
	<div id="left-side">
<!--STORY-->
		<div id="featured-image" class="box">
			<a href="<?php bloginfo('url'); ?>/shalom-neuman-new-work/" title="WOCC by Shalom Neumn">
				<img src="<?php bloginfo('url'); ?>/wp-content/images/issue7/Shalom_COVER_460.jpg" width="460" height="460" alt="WOCC by Shalom Neuman">
			</a>
			<p>
				Shalom Neuman 
			</p>
		</div>
<!--TABLE OF CONTENTS-->
		<div id="TOC" class="box" role="list">
			<h3>
				In This Issue 
			</h3>
<?php $current_issue_query = new WP_Query('showposts=15&tag=issue7');?>
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
		<h6>
			<em>
				Plus art by:
			</em>
			Ted Barron, Sofles, Chris Bava, Jim C., Charlie Homo, Jeff Spirer
		</h6>
	</div>
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/unsupervised-my-life-as-a-bad-girl" title="Unsupervised: My Life as a Bad Girl">
				Unsupervised: My Life as a Bad Girl</a>
		</h3>
		<h4>
			Erika Schickel
		</h4>
		<p>
			I recently came across a “reality” show called “Bad Girls Club: New Orleans” and was confronted by what our current culture has come to accept as “badness” in women. The show features a lot of Lycra-clad, snarling, trashy gals pouting and shouting at the camera. It’s about hot outfits and cold drinks and cat fighting over lunky dudes in board shorts and beer goggles. It seems modern day slut culture has totally co-opted the “Bad Girl” brand, and 
			<a href="<?php bloginfo('url'); ?>/unsupervised-my-life-as-a-bad-girl" title="Unsupervised: My Life as a Bad Girl">
				it makes me sad for young women today.
			</a>
	</div>
	<div class="box" id="poem">
		<h3>
			<a href="<?php bloginfo('url'); ?>/twenty-four-islands" title="Twenty-four Islands">
				Twenty-Four Islands</a>
		</h3>
		<h4>
			Marguerite Van Cook
		</h4>
		<p class="firstLine">
			This island is inhabited by Turtles, 
		<p>
			Flowering shrubs linger past the drift stalks 
		<p>
			Seashells flock the debris 
		<p>
			This is the island where I forgot my sweater 
		<p>
			That summer my breasts began to grow 
		<p>
			The beach evenings were cool 
		<p>
			<a href="<?php bloginfo('url'); ?>/twenty-four-islands" title="Twenty-four Islands">
				I wore shorts and my legs were bare
			</a>
	</div>
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/money-and-the-getting-of-money" title="Money and the Getting of Money">
				Money and the Getting of Money
			</a>
		</h3>
		<h4>
			Rob Roberge
		</h4>
		<p>
			I met Johnny Mo’s father only a few hours before he killed himself at the end of what had already been a long day. I hadn’t seen much of Johnny Mo after we’d had the trouble in Los Vegas. After that guy Mike’s crazy father shattered my ankle with a .22 in the drug deal with Johnny Mo and Mike. It’s not like there were bad feelings between the two of us, but maybe we’d fallen out of touch because of the bad luck of our last deal. Maybe we thought the next time would be worse and in some ways, we were right to think that. I’d ended up healing down in Long Beach with my girlfriend Amber who worked as a Dominatrix out of a house in LA and kept us in money while I was all but worthless, sleeping all day on her couch, taking over half her drugs, which consisted mostly of the Percodans and Xanax she kept us in steadily enough for neither of us to 
			<a href="<?php bloginfo('url'); ?>/money-and-the-getting-of-money" title="Money and the Getting of Money">
				get dopesick more than a few times in those months.
			</a>
	</div>
	<div class="box" id="music">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/our-song" title="Our Song">
				Our Song 
			</a>
		</h3>
		<h4>
			Lamacchia/Myrner/Feiszli 
		</h4>
		<p>
			Michael LaMacchia’s adventurous new trio recording is an alluring arc of luminous songwriting and deeply centered conversations that capture our attention and invite us to participate. “Our Song” sonically narrates a very personal journey that shimmers with a blend of pastoral memories, mysterious storytelling and vulnerable confessions. Each of the eleven songs takes shape from spirited group interaction and contoured dynamics that together, reward us with incandescent insight and reflection into our own passage.
		</p>
		<table>
			<tr valign="middle">
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/LMF-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/LMF-player', 'height=300,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<span class="listen">
						</span>
					</a>
				</td>
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/LMF-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/LMF-player', 'height=300,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<strong>
							LISTEN</strong></a>
				</td>
			</tr>
		</table>
	</div>
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/pilgrims" title="Pilgrims">
				Pilgrims
			</a>
		</h3>
		<h4>
			City of Strangers
		</h4>
		<p>
			I met Dupont at Bar X, an anonymous midtown place with tinted windows next to a MacDonald’s. I’d been in New York three weeks, and money was running low; if I didn’t figure out something quick, I’d have to leave. I went to the Bar X because I needed an in-between type of bar where I could think, drink in hand, without having anyone bothering me, and the Bar X had gave off just the right sense of transience, like a bar in the corner of a train station or an airport. I wanted to stop for a couple of beers, get a mild buzz on, then go down to the East Village and see what I could make happen. I never imagined the bar would become my hangout. 
		<p>
			I had a lot to think about: I’d been in New York for a month and my money was running low. If I didn’t figure out something quick, I’d have to leave. I’d been off booze and drugs more or less since I arrived and, up until that afternoon, I’d been happy. I had a little room in the Hotel 17, off Stuyvesant Square. A friend from back home had stayed there ten years before in the early ’80s. He’d told me that the other guests, an odd collection of old men, drag queens, punk rock musicians, and out of town thrill-seekers like my friend, did blow in the rooms and held wild, all-night parties on the roof, while junkies fixed openly in Stuyvesant Square, and half the storefronts along 3rd Ave were abandoned. I checked it out because, whatever its history, it was listed as good value in the Lonely Planet I scanned in a bookstore, and because I had nowhere else to go. Almost despite myself, I was relieved to find 3rd Ave fully re-occupied, the hotel lobby clean and quiet. 
			<a href="<?php bloginfo('url'); ?>/pilgrims" title="Pilgrims">
				Clearly, the party had moved on.
			</a>
	</div>
</div>
<!--##################### END LEFT COLUMN ######################### -->
<div id="right-side">
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/fat-wallet" title="Fat Wallet">
				Fat Wallet</a>
		</h3>
		<h4>
			Dîre McCain
		</h4>
		<p>
			It was a Saturday night. Mia, Tits, and I went over to Tecate Flats in search of stimulation. When we arrived, Flaco and Rico were sitting in the main yard, listening to Dire Straits, which was odd, since I’d only ever heard Tejano playing on that boom box. They looked ridiculously happy, 
			<a href="<?php bloginfo('url'); ?>/fat-wallet" title="Fat Wallet">
				almost too happy.
			</a>
	</div>
<!--****************************************
		NEW box
		********************************************-->
	<div class="box" id="ad">
		<h3>
			<a href="http://www.magcloud.com/browse/issue/282757" target="_blank">
				Now available in print format!
			</a>
		</h3>
		<p>
			You can buy this issue (and some back issues - the rest to follow) in print format. 84 full-color, glossy pages, this perfect-bound beauty makes a lovely graduation gift for junior.
			<strong>
				<a href="http://www.magcloud.com/browse/issue/282757" target="_blank">
					Order yours today!</a>
			</strong>
			The print edition of Sensitive Skin magazine will bring a lifetime of joy* to your loved ones&mdash;and it's guaranteed to do no harm to nasal passages!** 
		<p class="small">
			*If Sensitive Skin causes an erection lasting more than 4 hours, contact your doctor. 
		<p class="small">
			**Not based on scientific research. 
	</div>
	<div class="box" role="text">
		<h3>
			<a href="<?php bloginfo('url'); ?>/mt-eden-1978-82" title="#Mt Eden 1978-82">
				Mt. Eden 1978-82</a>
		</h3>
		<h4>
			Drew Hubner
		</h4>
		<p>
			It started in a pool hall. Juan Colon had a girl friend, and so did the cop, Jimmy O’Donnelly. The problem was it was the same girl. Usually a policeman is issued whatever number comes up, but special requests can be made. His father arranged for Jimmy O’Donnelly to get his namesake’s shield, from grandfather to grandson. His wife had their third kid in four years. They were high school sweethearts. Neither of them had been with anyone else. 
		<p>
			Juan Colon on the other hand was a mac daddy. And this girl Clemente had it bad for him. 
			<a href="<?php bloginfo('url'); ?>/mt-eden-1978-82" title="#Mt Eden 1978-82">
				She was trying to get Juan’s attention somehow and she met O’Donnelly.
			</a>
	</div>
	<div class="box" id="music">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/fink" title="Mike Fink Compositions">
				Michael Jon Fink - Six Compositions 
			</a>
		</h3>
		<h4>
			Michael Jon Fink
		</h4>
		<p>
			Michael Jon Fink has been a composer/improviser with experimental and new music groups that have included the Negative Band, Musica Veneris Nocturnus, Stillife and Ghost Duo; and currently plays electric guitar with Pickaxe (Noise), Gods of Rain (Experimental Metal), the Feedback Wave Riders (Free Improv) and Trio Through the Looking-Glass (Jazz-inflected). 
		<p>
			Though perhaps best known as a pianist, here are six tracks featuring Michael on guitar. 
		<table>
			<tr valign="middle">
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/mike-fink-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/mike-fink-player', 'height=350,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<span class="listen">
						</span>
					</a>
				</td>
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/mike-fink-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/mike-fink-player', 'height=350,width=440,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<strong>
							LISTEN</strong></a>
				</td>
			</tr>
		</table>
	</div>
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/how-they-fucked-in-three-parts" title="How They Fucked (In Three Parts)">
				How They Fucked (In Three Parts) 
			</a>
		</h3>
		<h4>
			John S. Hall
		</h4>
		<p>
			Well, yes, they fucked like bunnies, and yes, they fucked as if it was their last night on earth (when in fact it was early afternoon), but more than that, they fucked like so many, different other things completely. 
		<p>
			They fucked like dogs and cats. They fucked as if they were fucking in the rain. they fucked as if were raining cats and dogs. 
		<p>
			They fucked as if there was a war going on, a war between the states, a war between states of mind, a war that leaves hundreds of millions dead, some in horrible, hideous ways, some with half their bodies blown away, some strung up from trees, some with holes in their heads, leaking brains and blood and bits of bone, some with bodies contorted inhumanly, some with eyes open, 
			<a href="<?php bloginfo('url'); ?>/how-they-fucked-in-three-parts" title="How They Fucked (In Three Parts)">
				staring up into the empty sky.
			</a>
	</div>
	<div id="featured-image2" class="box">
		<a href="<?php bloginfo('url'); ?>/janice-sloane-sculpture-drawing-and-photographs/" title="Serpentine by Janice Sloane">
			<img src="<?php bloginfo('url'); ?>/wp-content/images/issue7/serpentine_460_cover.jpg" width="460" height="345" alt="Serpentine by Janice Sloane">
		</a>
		<p>
			Janice Sloane 
		</p>
	</div>
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/lil-punks-a-screenplay" title="Li'l Punks">
				"Li'l Punks", A Screenplay</a>
		</h3>
		<h4>
			Mark Netter
		</h4>
		<div align="center">
			INT. EAST VILLAGE LOFT - NIGHT
			<br>
			CROSSFADE from "Toys" to David Bowie's "Heroes". Jammed party in an unfinished space. JOHNNY THUNDERS trolls through the Crowd.
			<br>
			NEIL 
			<br>
			Is that Johnny Thunders? 
			<a href="<?php bloginfo('url'); ?>/lil-punks-a-screenplay" title="Li'l Punks">
				New York Dolls Johnny Thunders?
			</a>
		</div>
	</div>
	<div class="box" id="video">
		<h3>
			<a href="<?php bloginfo('url'); ?>/snow" title="EaSnow Advisory">
				Snow Advisory</a>
		</h3>
		<h4>
			Flame Schon
		</h4>
		<p>
			I started these thoughts from the simplicity of where it was shot and suddenly realized that the landscape is the star of the movie. The 'location' is the story The land itself & also the land as metaphor. I didn't write a story and then 'scout locations'; the 'locations' had burned themselves into me 
			<a href="<?php bloginfo('url'); ?>/snow" title="Snow Advisory">
				begging for a story.
			</a>
			<a href="<?php bloginfo('url'); ?>/snow" title=Eat Me>
				<img src="<?php bloginfo('url'); ?>/wp-content/images/issue7/Snow_screen.jpg" width="460" height="247" border="0" /></a>
	</div>
<!--end right-side-->
</div>
<?php get_footer(); ?>
