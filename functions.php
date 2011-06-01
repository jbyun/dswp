<?php
/** Start the engine **/
require_once(TEMPLATEPATH.'/lib/init.php');


// Force layout on homepage
add_filter('genesis_pre_get_option_site_layout', 'child_home_layout');
function child_home_layout($opt) {
if ( is_home() )
$opt = 'full-width-content';
return $opt;
}

//add navigation to header
add_action('genesis_header','child_custom_nav');
	function child_custom_nav() {
	?> <div id="navigation">
		<ul class="nav">
		<li><a href="http://desperatelyseekingwp.com/test2" class="home"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/home-inactive.jpg" alt="home" /></a><a href="http://desperatelyseekingwp.com/test2">Home</a></li>	
		<li><a class="about" href="http://desperatelyseekingwp.com/test2/about"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/about-inactive.jpg" alt="about" /></a><a href="http://desperatelyseekingwp.com/test2/about">About</a></li>
		<li><a href="http://desperatelyseekingwp.com/test2/wordpress" class="services"><img  src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/services-inactive.jpg" alt="services" /></a><a href="http://desperatelyseekingwp.com/test2/wordpress">Services</a></li>
		<li><a class="support" href="http://desperatelyseekingwp.com/test2/support-center"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/support-inactive.jpg" alt="Support" /></a><a href="http://desperatelyseekingwp.com/test2/support-center">Support</a></li>
		<li><a class="portfolio" href="http://desperatelyseekingwp.com/test2/portfolio"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/portfolio-inactive.jpg" alt="portfolio" /></a><a href="http://desperatelyseekingwp.com/test2/portfolio">Portfolio</a></li>
		<li><a class="email" href="http://desperatelyseekingwp.com/test2/contact"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/email-grey.jpg" alt="Email" /></a><a href="http://desperatelyseekingwp.com/test2/contact">Email</a></li>
		<li><a class="blog" href="http://desperatelyseekingwp.com/test2/blog"><img src="http://desperatelyseekingwp.com/test2/wp-content/themes/2011-dswp/images/blog.jpg" alt="Email" /></a><a href="http://desperatelyseekingwp.com/test2/contact">Blog</a></li>
		</ul>
		</div>
	<?php }
	
//add sidebar widgets file
add_action('genesis_sidebar', 'child_include_presidebar',5); 
function child_include_presidebar() {
    require(CHILD_DIR.'/pre-sidebar.php');
}


	// Add widgeted footer section
add_action('genesis_footer', 'child_include_footer_widgets',5); 
function child_include_footer_widgets() {
    require(CHILD_DIR.'/footer-widgeted.php');
}

// Modify credits section
add_filter('genesis_footer_creds_text', 'custom_footer_creds_text');
function custom_footer_creds_text($creds) {
    $creds = '[footer_copyright] ' . get_bloginfo('name');
    return $creds;
}

genesis_register_sidebar(array(
	'name'=>'Footer #1',
	'description' => 'This is the first column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Footer #2',
	'description' => 'This is the second column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Footer #3',
	'description' => 'This is the third column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
