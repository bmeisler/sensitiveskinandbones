<?php
/*
Template Name: Issue 4 Template
 */
 ?>
<?php get_header(); ?>
<div id="hiddenImage"><img src="<?php bloginfo('url'); ?>/wp-content/images/issue4/Issue4_200x546.jpg"  width="200" height="546" alt="Sensitive Skin Magazine Number 2"></div>

	<div id="left-side">
		
<!--STORY-->
		<div class="box" role="text">
			<h3>
				<a href="<?php bloginfo('url'); ?>/the-evil-elves" title="The Evil Elves">
					The Evil Elves
				</a>
			</h3>
			<h4>
				Darius James 
			</h4>
			<p>
				Clunkitty-clunkitty CLUNK-CLUNK-CLUNK!!! 
			<p>
				This was not the clatter of the goat-hooved devil girls on the roof of the Froggie Family home. 
			</p>
			<p>
				Clunkitty-clunkitty CLUNK-CLUNK-CLUNK!!! 
			</p>
			<p>
				Nor the gentle patter of ballet-slippered sugarplums on the dance floor of Froggie's dreams. 
			</p>
			<p>
				Clunkitty-clunkitty CLUNK-CLUNK-CLUNK!!! 
			</p>
			<p>
				<a href="<?php bloginfo('url'); ?>/the-evil-elves" title="The Evil Elves">
					Or the gravel-chute rumble of his grandfather's bowels.
				</a>
			</p>
		</div>
		<div id="TOC" class="box" role="list">
			<h3>
				In This Issue 
			</h3>
<?php $current_issue_query = new WP_Query('tag=Issue4');?>
<?php if ($current_issue_query->have_posts() ) : while ($current_issue_query->have_posts()) : $current_issue_query->the_post(); ?>
			<div 
<?php post_class() ?>
			id="post- 
<?php the_ID(); ?>
			"> 
			<h5 class="storytitle">
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
	</div>
	<div class="box" id="poem">
		<h3>
			<a href="<?php bloginfo('url'); ?>/communitas-other-poems" title="Communitas">
				Communitas
			</a>
		</h3>
		<h4>
			Merry Fortune 
		</h4>
		<p>
			The birds are stars 
		</p>
		<p>
			The chick a body 
		</p>
		<p>
			A star there 
		</p>
		<p>
			plays the window of a lean limo, 
		</p>
		<p>
			crooning it's raining 
		</p>
		<p class="firstLine">
			From out is born 
		</p>
		<p>
			A way gone and never 
		</p>
		<p class="firstLine">
			Inside out threads love you there 
		</p>
		<p>
			and here while songs radiate us 
		</p>
		<p>
			<a href="<?php bloginfo('url'); ?>/communitas-other-poems" title="Communitas">
				there to where there's nothing to capture
			</a>
		</p>
	</div>
	<div class="box" id="music">


		<h3>
			<a href="<?php bloginfo('url'); ?>/ralph-carney" title="This is! Ralph Carney">
				This is! Ralph Carney
			</a>
		</h3>
		<h4>
			Ralph Carney 
		</h4>
		<p>
			Ralph Carney is a multi-instrumentalist/horn player who has spent the better part of the last 2 decades criss-crossing the world, on stage and in studios with the likes of Tom Waits, Jonathan Richman, William Burroughs, Allen Ginsberg, B-52’s, Marc Ribot, Bill Laswell, David Thomas, Hal Wilner, Elvis Costello, Tipsy, Galaxie 500, Daevid Allen, Mushroom, Oranj Symphonette and The Black Keys, to name a few. His 3rd solo album, This is! Ralph Carney, is now available. 
		</p>
		<table>
			<tr valign="middle">
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/ralph-carney-playe" onclick="return popitup('<?php bloginfo('wpurl'); ?>/ralph-carney-playe', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<span class="listen">
						</span>
					</a>
				</td>
				<td class="listenHolder">
					<a href="<?php bloginfo('wpurl'); ?>/ralph-carney-playe" onclick="return popitup('<?php bloginfo('wpurl'); ?>/ralph-carney-playe', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						LISTEN
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="box">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/daddy’s-house-on-discovering-playboy" title="Daddy's House">
				Daddy's House: On Discovering Playboy
			</a>
		</h3>
		<h4>
			Michael A. Gonzalez 
		</h4>
		<p>
			Going to father's gaudy Harlem apartment every other weekend was one of the highlights of my childhood. Living in the heart of the hood, he worked as a full-time barber and part time hustler. A sawed off Puerto Rican who stood tall about 5'5", his name was Carlos. He had a thick spic accent that mixed well with street wisdom and big poppa attitude. 
		</p>
		<p>
			Daddy was slick as a can of oil and cooler than the summer breeze. Coming to the skyscraper jungle when he was a boy, he was kicked to the curb by his own brother when he was twelve. Forced to sleep on rooftops and scrounge for scraps, he became one of the few Latinos to settle into the rip and roar of black Harlem back in the late 1940s. Behind his thin back, some cats referred to him as "the little spic." 
		</p>
		<p>
			One particular Saturday night in 1971, my brother and I were in his bedroom watching television. Daddy's lair was like something out of a New Orleans whorehouse with an ugly crimson spread covering 
			<a href="<?php bloginfo('url'); ?>/daddy’s-house-on-discovering-playboy" title="Daddy's House">
				the queen-sized bed and matching kitschy lamps with red shades on both night tables.
			</a>
		</p>
	</div>
	<div class="box" id="poem">
		<h3>
			<a href="<?php bloginfo('url'); ?>/conquistador" title="Conquistador">
				Conquistador
			</a>
		</h3>
		<h4>
			Michael Carter 
		</h4>
		<p class="firstLine">
			Copper-green pigeon-saluted 
		</p>
		<p>
			Statue of Balboa rusts quietly 
		</p>
		<p>
			In the bright California sun; 
		</p>
		<p class="firstLine">
			Balboa beach, or was it Coronado? 
		</p>
		<p>
			Conquistador blares from a car radio, 
		</p>
		<p>
			A yellow Dodge Charger radio, probably, 
		</p>
		<p>
			<a href="<?php bloginfo('url'); ?>/conquistador" title="Conquistador">
				With a black Landau roof
			</a>
		</p>
	</div>
	
</div>
<!--##################### END LEFT COLUMN ######################### -->
<div id="right-side">
	
	<div id="featured-image" class="box">
		<a href="<?php bloginfo('url'); ?>/photographs-hal-hirshorn/" title="Untitled">
			<img src="<?php bloginfo('url'); ?>/wp-content/images/issue4/Hirshorn_coverMockup_baby.jpg" width="450" height="590" alt="Girl">
		</a>
		<p>
			Hal Hirshorn 
		</p>
	</div>
	
	<!--<div class="box" id="new">
	<h2>
				New!
			</h2>
		<h3><a href="<?php bloginfo('url'); ?>/mayday-mayday" title="MAYDAY, MAYDAY">MAYDAY, MAYDAY</a></h3>
        <h4>Rebecca Weiner Tompkins</h4>
          <p class="firstLine">The white rain of petals that fell for a week is done.
		<p>What catches now in my  hair
		<p>are the dried blossoms of the Callery Pear,
		<p>startling and crackly, as they float and scatter, 
		<p>rattling through the trees to the street like
		<p>shards of bone sifted in dusty fingers
		<p>out of old earth. A young man I know is visiting
		<p><a href="<?php bloginfo('url'); ?>/mayday-mayday" title="MAYDAY, MAYDAY">his wife’s grave a year after she died</a>

	</div>-->
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/mandy-charley-mary-jane" title="dy, Charley & Mary-Jane">
			Mandy, Charlie, and Mary Jane </a>
		</h3>
		<h4>
			Stewart Home 
		</h4>
		<p>
			I was told the fastest route to Hell was by Metro. I took a train to South Hades. The local information map had Mount Olympus and numerous other mythological sites from the major world religions marked on it as being located in nearby streets, but there was no sign of Hades. The cops by the ticket barrier made me feel nervous so I went up to the street. There was an Asian guy of about twenty smoking a fag in a doorway. He was in a shop worker's blue shirt and blue trousers. 
		</p>
		<p>
			"Can you tell me how to get to Hades?" 
		</p>
		<p>
			"It's in the Park isn't it? It's not round here." 
		</p>
		<p>
			"Thanks." 
		</p>
		<p>
			I tried a few more people. No one could help. I went back down into the underground station to ask the cops standing by the barriers for directions but they'd gone. I went back onto the street and climbed into one of a long line of waiting cabs parked outside the station. 
		</p>
		<p>
			<a href="<?php bloginfo('url'); ?>/mandy-charley-mary-jane" title="Mandy, Charley & Mary-Jane">
				"I want to go to Hell." I told the cabbie.
			</a>
		</p>
	</div>
	
	<div class="box" id="video">
		<h3><a href="<?php bloginfo('url'); ?>/soul-trip" title="Soul Trip">
			Soul Trip </a>
		</h3>
		<h4>
			Barbara Greczny 
		</h4>
		<p>
			A PhotoVideo by Barbara Greczny in memory of Steve Banks,artist, musician, writer and friend. 
		</p>
		
			<a href="<?php bloginfo('url'); ?>/soul-trip" title=Soul Trip>
				<img src="<?php bloginfo('url'); ?>/wp-content/images/issue4/SoulTripScreenShot.jpg" width="460" height="334" border="0" />
			</a>
		
	</div>
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/a-meating-of-the-minds" title="A Meating of the Minds">
			A Meating of Minds </a>
		</h3>
		<h4>
			Jim Boyett 
		</h4>
		<p>
			My lover and I decided to stop using our bodies. Of course we had to keep using them—for things like breathing, eating, being alive—but we decided to stop using them when making love. 
		</p>
		<p>
			"Because isn't it a spiritual thing we share?" he insisted, during the talk in the course of which we finally decided to take the plunge. 
		</p>
		<p>
			"Of course it is," I said. "I couldn't go on living if I didn't believe that love had a spiritual dimension." 
		</p>
		<p>
			"It has to be more than just a dimension," said Mark. "I mean, I feel some spiritual link with one-night stands I haven't heard from in ten years. But if you're going to be the love of my life, then shouldn't it be a primarily spiritual attachment? Say, 90% of the soul, and 10% of the flesh." 
		</p>
		<p>
			"At the very least that should be the ideal." It had always bothered me, this slap of contingency. Didn't it invalidate everything, all these supposedly deep, important, eternal things, to know that they were predetermined by accidents of gender, age, nationality, orientation, species? Wasn't it absurd that I, Janet Boyett, who felt myself to be so much a creature of thought, of ethereal consciousness, should turn out to be so constrained? 
			<a href="<?php bloginfo('url'); ?>/a-meating-of-the-minds" title="A Meating of the Minds">
				An inmate in a prison of meat and time?
			</a>
		</p>
	</div>
	
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/the-milky-way" title="The Milky Way">
				The Milky Way
			</a>
		</h3>
		<h4>
			Jill Rappaport 
		</h4>
		<p>
			The children of George Washington can thank their thirteen-plus stars that wooden teeth like his do not mar their cheerful visages; and I speak as one descended in part from the brave general, and specifically the daughter of a lady who ate only pecan pralines while expecting her second child (luckily I was her first). With all the sweets Americans eat it's incredible that they have any teeth at all. But their far-ranging empire of taste has historically been contained within its continental borders. Not for the yankees' simple palates the sweet but alien cornucopia of international halvah, lokoum, milk barfi, or the tricolored Tunisian confections to which this commentator got addicted in Paris in the late 1980s. This was true at least until a while ago. Now, it seems, a more sophisticated candy-eater hath emerged in the land, which has dolorous implications for national innocence. But we will talk about the past, before this sinister trend began to make itself evident. 
			<a href="<?php bloginfo('url'); ?>/the-milky-way" title="The Milky Way">
				Here are a few ruminations on my own homeland favorites.
			</a>
		</p>
	</div>
	
</div>
<!--end right-side-->
<!--end main wrapper-->
<?php get_footer(); ?>
