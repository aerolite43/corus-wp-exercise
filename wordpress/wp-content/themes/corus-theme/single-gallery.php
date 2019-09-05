<?php
get_header();
?>
	<div class="wrapper">
	  <h2>Gallery for <?= the_title( '', '', false ) ?><h2>
	</div>
	<div class="single-item">
<?php
		// Create the images for the single-item carousel.
		while ( have_posts() ) : the_post();
			$image1 = get_field('sldr_img1');
			$image2 = get_field('sldr_img2');
			$image3 = get_field('sldr_img3');
?>
			<div><img src="<?= $image1['sizes']['medium'] ?>" alt="image1"></div>
			<div><img src="<?= $image2['sizes']['medium'] ?>" alt="image2"></div>
			<div><img src="<?= $image3['sizes']['medium'] ?>" alt="image3"></div>
		  
<?php
		// Previous/next post navigation.
		// End the loop.
		endwhile;
?>
  	</div>
	<script>
		$ = jQuery;
		$(document).ready(function(){
			// initialize slick js.
			$('.single-item').slick({
				dots: true,
				arrows: false,
				cssEase: 'linear',
				centerMode: true,
			});
		});
	</script>
<?php
get_footer();
?>