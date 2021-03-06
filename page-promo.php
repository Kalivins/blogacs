
<?php
/*
Template name: Promo
*/
?>

<?php get_header(); ?>

<main>

<section class="container">
	<div class="container-fluid promo">

				<h1>Toute la promo</h1>

				<?php
		$args = array(
						'post_type' => 'stagiaires',
						'post_status' => 'publish',
						'orderby' => 'date',	
						
);

		$i=1;

		$query = new WP_Query( $args );
			if( $query->have_posts() ){

		while( $query->have_posts() ){
				$query->the_post();

			if ($i%2 == 1) {
				?>


<section class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">

		<div class="row cv">

					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 photo">
					<img src="<?php echo get_field('image'); ?>" class="romain">
					</div>

			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 description">

					<div class="row row justify-content-center">
					<h2><?php echo get_field('nom'); ?></h2>
					</div>

				<div class="row justify-content-center">
					<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aut rerum neque nemo magnam, laudantium nam quod! Quam tempore ipsa sint iure architecto quidem blanditiis ipsum sit. At, earum, esse?</p>
					</div>
				</div>

						<div class="row justify-content-center social">
						<a href=""><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
						</div>
			</div>
		</div>
	</div>
</section>

				<?php 

}else {

				 
			

			?>


<section class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">

<section class="container">
	<div class="container-fluid">
		<div class="row cv">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

						<div class="row row justify-content-center">
						<h2><?php the_field('nom'); ?></h2>
						</div>

				<div class="row justify-content-center">

					<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aut rerum neque nemo magnam, laudantium nam quod! Quam tempore ipsa sint iure architecto quidem blanditiis ipsum sit. At, earum, esse?</p>
					</div>

				</div>

						<div class="row justify-content-center social">
						<a href=""><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
						</div>

			</div>

					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 fille">
					<img src="<?php echo get_field('image'); ?>" class="romain">
					</div>
		</div>
	</div>


			<?php



		}

			$i++;

		} }// End of the loop.
		?>

	</section>			

</section>
</div>
        <!-- Section fin footer -->
    
      <script type="text/javascript">
    	
  wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
    </script>

</main>

<?php get_footer(); ?>
    
