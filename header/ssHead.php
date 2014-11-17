


<?php $host = $_SERVER['HTTP_HOST']?>

<?php  function truncate($string, $max = 20, $replacement = '')
			{
				if (strlen($string) <= $max)
				{
					return $string;
				}
				$leave = $max - strlen ($replacement);
				return substr_replace($string, $replacement, $leave);
			}
?>

<title>
<?php if ( is_single() ) {
   bloginfo('name'); ?> <?php wp_title(); ?><?php $subtitle = get_post_meta($post->ID, 'subtitle', true);
					if($subtitle) echo '&nbsp;&raquo;&nbsp;'.$subtitle;	
} else {
    //bloginfo('name').wp_title(); 
   bloginfo('name');
}?>
</title>

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


<link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?> type="text/css" media="screen" />



<link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?> type="text/css" media="screen" />


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />


<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('wpurl'); ?>/wp-content/js/jquery.cycle/src/jquery.cycle.js" type="text/javascript"></script>
<script src="<?php bloginfo('wpurl'); ?>/wp-content/js/jquery.cycle/src/general.js" type="text/javascript"></script>


<script src="<?php bloginfo('wpurl'); ?>/wp-content/js/jquery.cookie.js" type="text/javascript"></script>

<!--Jquery for menu to make it smoother-->
     <script type="text/javascript">
$(function() {

	$("#access ul.menu ul").css({ display: 'none' });
	$("#access ul.menu li").hover(function() {
		$(this).find('ul.sub-menu')
			.stop(true, true).delay(100).animate({ "height": "show", "opacity": "show" }, 400 );
	}, function(){
		$(this).find('ul.sub-menu')
			.stop(true, true).delay(100).animate({ "height": "hide", "opacity": "hide" }, 400 );
	});


    $(function () {

        var msie6 = $.browser == 'msie' && $.browser.version < 7;

        if (!msie6) {
            var top = $('.sticky').offset().top - parseFloat($('#access').css('margin-top').replace(/auto/, 0));
            $(window).scroll(function (event) {
                // what the y position of the scroll is
                var y = $(this).scrollTop();

                // whether that's below the form
                if (y >= top) {
                    // if so, ad the fixed class
                    $('.sticky').addClass('fixed');
                } else {
                    // otherwise remove it
                    $('.sticky').removeClass('fixed');
                }
            });
        }
    });

});

</script>

