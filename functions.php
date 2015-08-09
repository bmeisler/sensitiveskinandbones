<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/
add_theme_support( 'post-thumbnails' ); 
// Image sizes
 add_image_size( '600w', 600, 9999, false ); 
 
 add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
add_image_size( '600w', 600, 9999, false );
  add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
  add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
}
// add_image_size( 'bones-thumb-300', 300, 200, false );
// add_image_size( 'bones-thumb-200', 200, 133 );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => __('Sidebar 1', 'bonestheme'),
    	'description' => __('The first (primary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => __('Sidebar 2', 'bonestheme'),
    	'description' => __('The second (secondary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php 
			    /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ 
			    ?>
			    <!-- custom gravatar call -->
			    <?php
			    	// create variable
			    	$bgauthemail = get_comment_author_email();
			    ?>
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'bonestheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'bonestheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'bonestheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','bonestheme').'" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!

/*************************	my functions ******************/
/*************************NAVIGATION***********************/

/*great pagination script! no worries about nested categories */
function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
 
  $total = 0; //1 - display the text "Page N of N", 0 - not display
  $a['mid_size'] = 20; //how many links to show on the left and right of the current
  $a['end_size'] = 1; //how many links to show in the beginning and end
  $a['prev_text'] = '&laquo; previous'; //text of the "Previous page" link
  $a['next_text'] = 'next &raquo;'; //text of the "Next page" link
 
  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Page ' . $current . ' of ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

/* used when grabbing thumbnails from posts; if no thumbnail, or assigned post-img, grab the first image off the page and resize it */
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = '';
    //bloginfo('url')."/wp-content/images/tns/default-img_inverted.jpg";
  }
  return $first_img;
}

register_nav_menus( array(
		/*
'primary' => __( 'Pages Menu' ),
		'secondary' => __( 'Categories Menu' ),
*/
/* 		'primary' => __( 'Categories Menu' ) */
	) );


function download_tag_id_class($classes) {
   global $post;
   $tags = get_the_terms( $post->ID, 'download_tag' );
   if($tags) {
	    foreach( $tags as $tag ) {
   	     $classes[] = $tag->slug;
		}
	}
   return $classes;
}
add_filter('post_class', 'download_tag_id_class');

//ADD CUSTOM MIME TYPES
add_filter('upload_mimes','add_custom_mime_types');
	function add_custom_mime_types($mimes){
		return array_merge($mimes,array (
			'ac3' => 'audio/ac3',
			'mpa' => 'audio/MPA',
			'flac' => 'audio/flac',
			'aif' => 'audio/x-aiff',
                        'svg' => 'image/svg+xml'
		));
	}

  
  // customized version of the_tags - can exclude certain  tag names
 function pk_the_tags( $before = '', $sep = ', ', $after = '', $exclude = '' ) {
        $tags = get_the_tags();
        if ( empty( $tags ) )
                return false;
        $tag_list = $before;
        foreach ( $tags as $tag ) {
                 if (!empty($exclude))  
                        $pos = stripos( $exclude, $tag->name);
                 else
                        $pos = false;
                 if ($pos=== false)
                        $tag_links[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>'; 
        }
        if (empty($tag_links))
           return false;
        $tag_links = join( $sep, $tag_links );
        $tag_links = apply_filters( 'the_tags', $tag_links );
        $tag_list .= $tag_links;
        $tag_list .= $after;
        echo $tag_list;
}

  //[myjavascript]
// function myjavascript_func( $atts ){
//  return "<script>alert('hello world');</script>";
// }
// add_shortcode( 'myjavascript', 'myjavascript_func' );

 function add_scripts() {
 	  //echo('addscripts');
   	//wp_enqueue_script( 'howdy',  '/wp-content/js/howdy.js', array(), '1.0.0', true );
   //	wp_enqueue_script('preload', "https://code.createjs.com/preloadjs-0.6.0.min.js", array(), '0.6.0', true);
      wp_enqueue_script('preload', "https://code.createjs.com/createjs-2015.05.21.min.js", array(), '0.6.0', true);

    
    
   	//wp_enqueue_script( 'underscore',  'https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js', array(), '1.0.0', true );
      	//wp_enqueue_script( 'underscore',  '/wp-content/js/underscore_1.7.0.js', array(), '1.0.0', true );

   	//wp_enqueue_script( 'random-image',  '/wp-content/js/random-image.js', array('preload', 'underscore'), '1.0.0', true );
    wp_enqueue_script( 'random-image',  '/wp-content/js/random-image-dnd.js', array('preload', 'underscore'), '1.0.0', true );


 }


// function howdy(){
//   <script type="text/javascript">
//     function howdy(){
//         alert("howdy");
//     }
// </script>
// }
add_action( 'wp_enqueue_scripts', 'add_scripts' );

//CUSTOM CODE FOR EASY DIGITAL DOWNLOADS - FIRST CHECKBOX SHOULD NO LONGER BE CHECKED BY DEFAULT

/**
 * Unhook default EDD discount field
 *
 * @since 1.0
*/
remove_action( 'edd_checkout_form_top', 'edd_discount_field', -1 );

/**
 * Custom EDD discount field function
 *
 * @since 1.0
*/
function my_child_theme_edd_discount_field() {

	if( ! isset( $_GET['payment-mode'] ) && count( edd_get_enabled_payment_gateways() ) > 1 && ! edd_is_ajax_enabled() )
		return; // Only show once a payment method has been selected if ajax is disabled

	if ( edd_has_active_discounts() && edd_get_cart_total() ) {
	?>
	<fieldset id="edd_discount_code">
		<p>
			<label class="edd-label" for="edd-discount">
				<?php _e( 'Discount', 'edd' ); ?>
				<img src="<?php echo EDD_PLUGIN_URL; ?>assets/images/loading.gif" id="edd-discount-loader" style="display:none;"/>
			</label>
			<span class="edd-description"><?php _e( 'Enter a coupon code if you have one.', 'edd' ); ?></span>
			<input class="edd-input" type="text" id="edd-discount" name="edd-discount" placeholder="<?php _e( 'Enter discount', 'edd' ); ?>"/>
		</p>
	</fieldset>
	<?php
	}
}
add_action( 'edd_checkout_form_top', 'my_child_theme_edd_discount_field', -1 );

?>
