<?php get_header(); ?>

<?php genesis_before_content_sidebar_wrap(); ?>
<div id="content-sidebar-wrap">

	<?php genesis_before_content(); ?>
	<div id="content" class="hfeed">
					
		<div id="home-left">
			<div class="featured one">
				<div class="inner">
				<h2>WordPress Support</h2>
				<ul><li>New installations</li>
				<li>Training</li>
				<li>Trouble-shooting</li>
				<li><a href="/contact">What can we help you with?</a></li>
				</ul>
				</div>
			</div><!-- end .featured-1 -->
			<div class="featured two">
				<div class="inner">
				<h2>WordPress Hosting</h2>
				<ul><li>WP Basic</li>
				<li>WP Plus</li>
				<li>WP for the Entrepreneur</li>
				<li><a href="/web-hosting">Compare packages &raquo;</a></li>
				<li><a href="http://desperatelyseekingwp.com/test2/support-center/started-web-hosting/">Getting started &raquo;</a></li>
				</ul>
				</div>
			</div><!-- end .featured-2 -->
			
			<div class="featured three">
				<div class="inner">
				<h2>Customize</h2>
				<ul>
				<li>Photoshop to WordPress</li>
				<li>Integrate Plugins</li>
				<li><a href="#">Request a quote &raquo;</a></li>
				<li><a href="#">Find a designer &raquo;</a></li>
				</ul>
				</div>
			</div><!-- end .featured-3 -->	
			
			<div class="featured four">
				<div class="inner">
				<h2>Maintenance</h2>
				<ul>
				<li>One time pkg</li>
				<li>Monthly Plans</li>
				<li><a href="#">Learn more &raquo;</a></li>
				<li><a href="#">DIY tips &raquo;</a></li>
				</ul>
				</div>
			</div><!-- end .featured-4 -->
		</div><!-- end #home-left -->		
		
		<div id="home-right">
				<?php //if( function_exists( 'wp_slick_slider' ) ){ wp_slick_slider( 'front-page-2' ); } ?>
				<?php if ( function_exists( 'get_smooth_slider' ) ) {
     get_smooth_slider(2); }?>
		</div>		

		<div id="tagline">
		<p>"When it comes to WordPress, we're that geeky friend you wish you had."</p>
		</div>
	</div><!-- end #content -->
	<?php genesis_after_content(); ?>

</div><!-- end #content-sidebar-wrap -->
<?php genesis_after_content_sidebar_wrap(); ?>

<?php get_footer(); ?>