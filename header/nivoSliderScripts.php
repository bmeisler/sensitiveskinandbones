<!-- Include the Nivo Slider CSS file -->
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/js/nivoslider/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/js/nivoslider/custom-nivo-slider.css" type="text/css" media="screen" />

<!-- Include the Nivo Slider JS file -->
<script src="<?php bloginfo('wpurl'); ?>/wp-content/js/nivoslider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!-- Set up the Nivo Slider -->
<!-- Include jQuery -->


<script type="text/javascript">
jQuery(window).load(function() {
jQuery('#slider').nivoSlider({
effect:'fade',
slices:1,
animSpeed:500,
pauseTime:6000,
startSlide:0, //Set starting Slide (0 index)
directionNav:true, //Next & Prev
directionNavHide:true, //Only show on hover
controlNav:false, //1,2,3...
controlNavThumbs:false, //Use thumbnails for Control Nav
controlNavThumbsSearch: '.jpg', //Replace this with...
controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
keyboardNav:true, //Use left & right arrows
pauseOnHover:true, //Stop animation while hovering
manualAdvance:false, //Force manual transitions
captionOpacity:0.8, //Universal caption opacity
beforeChange: function(){},
afterChange: function(){},
slideshowEnd: function(){} //Triggers after all slides have been shown
});
});
</script>

