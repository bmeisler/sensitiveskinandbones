<?php
$orig_post = $post;
global $post;
//make this global so I can use it in sidebar!
global $orig_post;

$writer = get_post_meta($post->ID, 'subtitle', true);
//echo "subtitle: ".$writer."<br>";
if ($writer == ""){
    $writer = get_the_author();
    //echo "get_the_author: ".$writer."<br>";
}

$slug = strtolower(trim($writer));
//echo "slug: ".$slug."<br>";
$slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
$slug = preg_replace('/-+/', "-", $slug);
//echo "slug after regex: ".$slug."<br>";

if ($writer=="Díre McCain"){
    $slug = "Díre McCain";
}
//echo "slug: ".$slug."<br>";
$tagValue = $slug;//will work

//use this flag so title just gets added once
$addTitle = true;
//echo "tagValue: ".$tagValue;
if ($tagValue != ""){
    $my_query = new
    WP_Query('showposts=99&orderby=desc&tag='.$tagValue);

    if( $my_query->have_posts() ) {


        while ($my_query->have_posts()) : $my_query->the_post(); if( $post->ID == $orig_post->ID ) continue;
            $found = true;
            if($addTitle == true){
                echo '<div id="relatedposts"><div id="relatedpoststitle">If you liked this, try:</div><ul>';
                $addTitle = false;
            }
            ?>
            <li><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
            if($subtitle){
                echo $subtitle;
            }else{
                the_author();
            }
            echo ' - ';?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
        endwhile;

    }
    //THIS ENSURES WE'LL BE LOOKING AT THE CORRECT COMMENTS
}


$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
  	  	if($tag->name == "national-poetry-month"){
  	  	echo $tag->name;

  	$tagValue="national-poetry-month";
	  	  $my_query = new
    WP_Query('showposts=99&orderby=desc&tag='.$tagValue);

    if( $my_query->have_posts() ) {


        while ($my_query->have_posts()) : $my_query->the_post(); if( $post->ID == $orig_post->ID ) continue;
            $found = true;
            if($addTitle == true){
                echo '<div id="relatedposts"><div id="relatedpoststitle">If you liked this, try:</div><ul>';
                $addTitle = false;
            }
            ?>
            <li><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
            if($subtitle){
                echo $subtitle;
            }else{
                the_author();
            }
            echo ' - ';?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
        endwhile;

    }

  	}
    
  }
}


$post = $orig_post;

//wp_reset_query();
//print_r($orig_post->ID);
   if ($found){
      echo '</ul></div>';
   }

    ?>