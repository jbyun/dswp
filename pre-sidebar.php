<?php
//custom sidebar areas

	//add the sign-up widget
	?>
	<div id="sign-up">
	<?php require(CHILD_DIR.'/newsletter.php');?>
	</div>
	
<?php //add socialize widget
?>
	<div id="socialize">
	<img src="<?php bloginfo('stylesheet_directory');?>/images/socialize.jpg" width="283" height="131" alt="Socialize" usemap="#socialize" />

<map name="socialize">
  <area shape="rect" coords="23,75,77,117" href="http://facebook.com/desperatelyseekingwp" alt="Facebook" title="Join us on Facebook" />
  <area shape="rect" coords="86,77,137,113" href="http://twitter.com/dswordpress" alt="Twitter" title="Join us on Twitter" />
  <area shape="rect" coords="146,78,194,114" href="http://linkedin.com/cathytibbles" alt="Linkedin" title="View Cathy's profile on Linkedin"/>
  <area shape="rect" coords="208,78,250,113" href="http://skype.com/cathytibbles" alt="skype" title="Say hello on Skype" />
</map>
	</div>
	<?php //add testimonials widget
	?>
	 <div id="testimonials">
	 <?php 
	echo do_shortcode('[wpcodaslider id=testimonial-slider cat=538 show=3 args=autoSlide:true]
     ;?>
     </div>
