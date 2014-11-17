<?php
/*
Template Name: Issue 6 Template
 */
 ?>
<?php get_header(); ?>
<div id="hiddenImage"><img src="<?php bloginfo('url'); ?>/wp-content/images/issue4/Issue4_200x546.jpg"  width="200" height="546" alt="Sensitive Skin Magazine Number 2"></div>

	<div id="left-side">
		
<!--STORY-->
		<div class="box" id="music">
			<h3  class="smallTitle">
				<a href="<?php bloginfo('url'); ?>/rare-unreleased-and-out-of-print" title="Rare, Unreleased and Out-of-Print">
					Rare, Unreleased and Out-of-Print
				</a>
			</h3>
			<h4>
				Elliot Sharp 
			</h4>
			<p>
				Elliot Sharp, a composer and multi-instrumentalist, playing mainly guitar, saxophone and bass clarinet, is one of the major figures in the New York downtown and experimental music scene. Sharp has led many ensembles over the years, including Orchestra Carbon and more recently the blues-oriented Terraplane. Since the 1970s, he's released over 85 recordings, ranging from contemporary classical to free jazz, no-wave, ambient and sophisticated rock. <a href="<?php bloginfo('url'); ?>/rare-unreleased-and-out-of-print" title="Rare, Unreleased and Out-of-Print">He has collaborated with John Zorn, Butch Morris, Zeena Parkins, Vernon Reid, Nusrat Fateh Ali Khan, Hubert Sumlin, Jack DeJohnette, Sonny Sharrock, and the Master Musicians of Jajouka. </a>
			</p>
			
			<table>
			<tr valign="middle">
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/elliot-sharp-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/elliot-sharp-player', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<span class="listen">
						</span>
					</a>
				</td>
				<td class="listenHolder">
					<a href="<?php bloginfo('wpurl'); ?>/elliot-sharp-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/elliot-sharp-player', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						LISTEN
					</a>
				</td>
			</tr>
		</table>
			
		</div>
		<!--****************************************
		TABLE OF CONTENTS box
		********************************************-->
		<div id="TOC" class="box" role="list">
			<h3>
				In This Issue 
			</h3>
<?php $current_issue_query = new WP_Query('showposts=15&tag=issue6');?>
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
	<!--****************************************
		END TABLE OF CONTENTS box
		********************************************-->
	<div class="box">
		<h3 class="smallTitle">
			<a href="<?php bloginfo('url'); ?>/on-the-customs-of-whey-guts" title="On the Customs of Whey-Guts">
				On the Customs of Whey-Guts
			</a>
		</h3>
		<h4>
			Patricia Eakins 
		</h4>
		<p>
			Now the DEROGATIONS by means of which the whites belittle the honor and dignity of blacks are very well known, among them as among us, viz.: dog lips, shuffle-grin, worm-ass, louse-ring. Less well known to them the derogations by means of which we darker fellows contemn their loathsome pretensions, viz., whey-guts, cotton-snatch, stink-pits, porridge-arse, rule-shitter, clod-squawk, pig-fart, gout-bag, flux-face, bone-nose, bubo-cheeks, widower.</p>  

	
		
		<p>
			Now we do name them widowers, yet though they have a hundred women, one legal in the house, ninety-nine unacknowledged in the yard. Now the women in the yard but use the white man's rut-lust to prize concessions from him. They throw him out of their minds when they have got what they want, and the thought of him dries up in the sun. Widower be the name <a href="<?php bloginfo('url'); ?>/on-the-customs-of-whey-guts" title="On the Customs of Whey-Guts">these white men share with the dog's scats, when the dog has left them in the yard to whiten in the sun. </a>
		</p>
		
	</div>
	
	
	
	
	<div id="featured-image" class="box">
		<a href="<?php bloginfo('url'); ?>/john-griffin-new-paintings/" title="Untitled">
			<img src="<?php bloginfo('url'); ?>/wp-content/images/issue6/Griffin_cover.jpg" width="460" height="554" alt="Girl">
		</a>
		<p>
			John Griffin 
		</p>
	</div>
	
	
	<div class="box" id="poem">
		<h3>
			<a href="<?php bloginfo('url'); ?>/ice-t-spit-on-my-foot-other-poems" title="Ice-T Spit on My Foot">
				Ice-T Spit on My Foot
			</a>
		</h3>
		<h4>
			Sean Flaherty 
		</h4>
		<p class="firstLine">
			I have been going 
		</p>
		<p>
			to night school 
		</p>
		<p>
			after work 
		</p>
		<p>
			so I can learn 
		</p>
		<p>
			some new things, 
		</p>
		<p>
			to broaden myself 
		</p>
		<p>
			<a href="<?php bloginfo('url'); ?>/ice-t-spit-on-my-foot-other-poems" title="Ice-T Spit on My Foot">
				at forty-three,
			</a>
		</p>
	</div>
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/marra" title="Late Night Phone Call from the Used to Be">
			Marra</a>
		</h3>
		<h4>
			Jennifer Jazz 
		</h4>
		<p>
			“Why are you going to Morocco?” my sister had asked. It was March of 2004.  Americans had only recently become aware there were such things as Muslims and were scared. I had stammered in response, using the usual four-letter words I resorted to when I didn’t know where or how to begin, though, since I’d met Daoud – a despotic Mauritanian who spent most of our time together giving immigration advice in Fulani by cell phone to friends and family – I’d stopped believing that swearing was the highest form of honesty. 

	 

	
		</p>
		<p>
			“You shouldn’t speak that way!” he scolded one night with such contempt I was ashamed. Months after I’d stopped taking his calls – something told me to quit while I was ahead –  <a href="<?php bloginfo('url'); ?>/marra" title="Late Night Phone Call from the Used to Be">I still swore, but hadn’t started drinking all the dark beer and Beaujolais or eating bacon again.</a> 
		</p>
	</div>
	
</div>
<!--##################### END LEFT COLUMN ######################### -->
<div id="right-side">
	
	<div id="featured-image" class="box">
		<a href="<?php bloginfo('url'); ?>/david-west-new-work/" title="Balcony Freakout by David West">
			<img src="<?php bloginfo('url'); ?>/wp-content/images/issue6/balcony_cover.jpg" width="460" height="315" alt="Girl">
		</a>
		<p>
			David West 
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
		<h3><a href="<?php bloginfo('url'); ?>/the-best-night-of-his-life" title="The Best Night of His Life">
			The Best Night of His Life </a>
		</h3>
		<h4>
			Max Blagg 
		</h4>
		<p>
			Every two weeks the exterminator came by the bar to suppress the vermin that swarmed beneath the sinks, behind the kitchen walls and in the basement. There were no rats, but the place had a fluctuating population of mice and roaches. The exterminator, known only as ‘Bill’, was a strange looking guy of about forty-five, who gave the impression that he had drunk too much bug juice. A Vietnam vet with a stare as cold as starlight, someone who had witnessed things too terrible for a civilian to comprehend. In a curious flat monotone he would regale the bar staff with rat tales, sympathetic stories of their extreme intelligence, their various moods. <a href="<?php bloginfo('url'); ?>/the-best-night-of-his-life" title="The Best Night of His Life">Rats were his obsession.</a>
		</p>
		
	</div>
	
	
	<div class="box">
		<h3><a href="<?php bloginfo('url'); ?>/love" title="Love">
			Love</a>
		</h3>
		<h4>
			Mike DeCapite 
		</h4>
		<p>
			I went to St. Louis and stayed with Ted and Kit for the weekend.  They’d been there a couple of years, I guess.  Ted had bottomed out in Brooklyn and they’d moved home to St. Louis for him to get straightened out.  Their son was only about a year old when I went.  Kit was painting, getting press, and Ted was clean, busy in the darkroom.  He was printing ten years of negatives from New York.

		</p>
		<p>
			One afternoon Ted brought out the boxes of these black-and-white prints.  There were street scenes and bar scenes, people in kitchens and bedrooms, burned-out cars and waterfront shots, parties and performances, public moments and private ones, moments I didn’t remember even while looking at them, even though I’d been there, even though I was in them, because they’d been seen by someone else.  I wasn’t in most of them, of course, and Ted wasn’t in any of them.  But <a href="<?php bloginfo('url'); ?>/love" title="Love">turning through them was like watching a movie of our past lives played out by others.</a> 
		</p>
	</div>
	<div class="box" id="music">
			<h3  class="smallTitle">
				<a href="<?php bloginfo('url'); ?>/rare-unreleased-and-out-of-print" title="Rare, Unreleased and Out-of-Print">
					Sex, God and Violence
				</a>
			</h3>
			<h4>
				The Spitters 
			</h4>
			<p>
				Elliot Sharp, a composer and multi-instrumentalist, playing mainly guitar, saxophone and bass clarinet, is one of the major figures in the New York downtown and experimental music scene. Sharp has led many ensembles over the years, including Orchestra Carbon and more recently the blues-oriented Terraplane. Since the 1970s, he's released over 85 recordings, ranging from contemporary classical to free jazz, no-wave, ambient and sophisticated rock. <a href="<?php bloginfo('url'); ?>/rare-unreleased-and-out-of-print" title="Rare, Unreleased and Out-of-Print">He has collaborated with John Zorn, Butch Morris, Zeena Parkins, Vernon Reid, Nusrat Fateh Ali Khan, Hubert Sumlin, Jack DeJohnette, Sonny Sharrock, and the Master Musicians of Jajouka. </a>
			</p>
			
			<table>
			<tr valign="middle">
				<td>
					<a href="<?php bloginfo('wpurl'); ?>/elliot-sharp-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/elliot-sharp-player', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						<span class="listen">
						</span>
					</a>
				</td>
				<td class="listenHolder">
					<a href="<?php bloginfo('wpurl'); ?>/elliot-sharp-player" onclick="return popitup('<?php bloginfo('wpurl'); ?>/elliot-sharp-player', 'height=300,width=445,menubar=no,toolbar=no,status=no, scrollbars=yes, resizable=yes,location=no')">
						LISTEN
					</a>
				</td>
			</tr>
		</table>
			
		</div>
	
	<div class="box">
		<h3  class="smallTitle"><a href="<?php bloginfo('url'); ?>/late-night-phone-call-from-the-used-to-be" title="Late Night Phone Call from the Used to Be">
			Late Night Phone Call from the Used to Be</a>
		</h3>
		<h4>
			Carl Watson 
		</h4>
		<p>
			People like to blame things—they like to pretend life is an accident, that it’s not their fault.   But accidents can be intentional.  We make ourselves magnets by our aggressive apathy.  On top of that we are fascinated by the idea of contingency—it suggests a value to individual existence.  But there is none really.  And so I was working on the Papa Sri Frank Payne path to nirvana—drink like a fish, speak to no one, indulge regret—alcohol, asceticism, hindsight.  It was my old apartment, across the street from the graveyard of St. Boniface. The tombstones glowed softly in the moon, mocking my mortality.  Stability was good, I told myself.  

	
		</p>
		<p>
			I was on the far end of a six pack of Drewery’s with kindly Mr. Beam waiting in the wings.  I was randomly severing emotional ties to inanimate objects—a favorite pass time of mine.  As they say, a rolling stone gathers no moss.  The Honeymooners was on TV.  Ralph and Alice were going at it.  I was half asleep, using my old brown leather jacket for a pillow and a beer-can for an ashtray.  Question marks of smoke peeled off the cigarette tip.  <a href="<?php bloginfo('url'); ?>/late-night-phone-call-from-the-used-to-be" title="Late Night Phone Call from the Used to Be">The scene was classic down-market noir, so at least some goal in my life had been achieved.</a> 
		</p>
	</div>
	<div class="box" id="video">
		<h3><a href="<?php bloginfo('url'); ?>/blood-in-the-face" title="Blood in the Face">
			Blood in the Face</a>
		</h3>
		<h4>
			Anne Bohlen, Kevin Rafferty, and James Ridgeway 
		</h4>
		<p>
			White supremacists! Michael Moore! The Nazi Coppertone Girl! All this and more from this chilling documentary. 
		</p>
		
			<a href="<?php bloginfo('url'); ?>/blood-in-the-face" title=Blood in the Face>
				<img src="<?php bloginfo('url'); ?>/wp-content/images/issue6/Moore_coppertone.jpg" width="460" height="340" border="0" />
			</a>
		
	</div>
	
	<div class="box">
		<h3>
			<a href="<?php bloginfo('url'); ?>/the-botanical-man" title="The Botanical Man">
				The Botanical Man
			</a>
		</h3>
		<h4>
			Bonny Finberg 
		</h4>
		<p>
			I'm sure there was a moment when I realized it was about to happen. But I can't remember it. It snuck up on me, like snake bite—sending you into a delirium, and just when you realize what's happening you’re dead.  It was epiphanous, if that's a word.  Anyway, I had an epiphany. It killed me and I'm reborn.  I thought I was finished with all that self-examination Woman Speak shit. But there it lives, in the Oprah of my brain. I'm no longer Generic Man. I've developed a swagger, a dusty odor of salt. 
			</p>
			<p>I'm looking up epiphany in the dictionary. I'm lost in it.  Maybe I should be reading pornography.  I’m entitled. That's what men do, men with no immediate prospects. <a href="<?php bloginfo('url'); ?>/the-botanical-man" title="The Botanical Man">Well anyway, I've got my taste buds.</a>
		</p>
	</div>
	
</div>
<!--end right-side-->
<!--end main wrapper-->
<?php get_footer(); ?>
