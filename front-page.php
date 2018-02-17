<?php get_header();?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>

<div class="row-fluid">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<a href="#" class="home-widget-wrap">
			<div class="home-widget">
				<h2><span>Buy</span> Bitcoin</h2>
				<p><span>Start investing today.</span>
					We guarantee the lowest prices in town!</p>
			</div>
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<a href="#" class="home-widget-wrap">
			<div class="home-widget">
				<h2><span>Buy</span> Ethereum</h2>
				<p><span>Start investing today.</span>
					We guarantee the lowest prices in town!</p>
			</div>
		</a>
	</div>
</div>

<?php
		} // end while
	} // end if
?>

<?php get_footer();?>

