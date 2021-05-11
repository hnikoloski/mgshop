<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mgshop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div id="ceiling" class="fixed-top">
			<div id="navbar-container" class="clearfix w-100">
				<div class="wrap">
					<div class="mob-trigger">
						<a href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
					<div id="navbar-mobile-container">
						<div class="close-menu">
							<a href="#">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<div id="navbar-mobile" class="navbar clearfix">
							<!-- <span id="close-menu">&times;</span> -->
							<nav id="site-navigation-primary-mobile" class="navigation main-navigation clearfix" role="navigation">

								<div class="menu-main-menu-left-english-container">
									<ul id="mobile-menu" class="nav-menu dropdown mob-menu">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-975 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/"><span>Home</span></a></li>
										<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-980 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/category/artists/" class="scroll"><span>Artists</span></a>
											<ul class="sub-menu" style="">
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1056 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/goran-micic/"><span>Goran Micic</span></a></li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/aleksandra-ilic/"><span>Aleksandra Ilic</span></a></li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1058 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/vlatko-zdravkov/"><span>Vlatko Zdravkov</span></a></li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1064 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/miroslav-talevski/"><span>Miroslav Talevski</span></a></li>
											</ul>
										</li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-432 current_page_item menu-item-976 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/about-us/"><span>About Us</span></a></li>
									</ul>
								</div>
								<div class="menu-main-menu-right-english-container">
									<ul id="mobile-menu" class="nav-menu dropdown mob-menu">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-981 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/gallery/"><span>Gallery</span></a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/faq/"><span>FAQ</span></a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983 button-style sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/contact/"><span><i class="fa fa-phone"></i>Contact us</span></a></li>
									</ul>
								</div>
							</nav><!-- #site-navigation-primary -->
						</div><!-- #navbar -->
					</div>
					<div id="navbar-left" class="navbar clearfix">
						<nav class="site-navigation-primary navigation main-navigation clearfix" role="navigation">
							<div class="menu-main-menu-left-english-container">
								<ul id="menu-main-menu-left-english" class="nav-menu float-end">
									<li id="menu-item-975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-975 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/"><span>Home</span></a></li>
									<li id="menu-item-980" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-980 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/category/artists/" class="scroll"><span>Artists</span></a>
										<ul class="sub-menu">
											<li id="menu-item-1056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1056 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/goran-micic/"><span>Goran Micic</span></a></li>
											<li id="menu-item-1057" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/aleksandra-ilic/"><span>Aleksandra Ilic</span></a></li>
											<li id="menu-item-1058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1058 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/vlatko-zdravkov/"><span>Vlatko Zdravkov</span></a></li>
											<li id="menu-item-1064" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1064 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/miroslav-talevski/"><span>Miroslav Talevski</span></a></li>
										</ul>
									</li>
									<li id="menu-item-976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/about-us/"><span>About Us</span></a></li>
								</ul>
							</div>
						</nav><!-- #site-navigation-primary -->
					</div><!-- #navbar -->
					<div class="logo">
						<a href="https://mgtattoostudio.com/" rel="home">
							<img src="<?php echo $logoUrl[0]; ?>" alt="Website Site Logo" class="logo-dark">
						</a>
					</div>
					<div id="navbar-right" class="navbar clearfix">
						<nav class="site-navigation-primary navigation main-navigation clearfix" role="navigation">
							<div class="menu-main-menu-right-english-container">
								<ul id="menu-main-menu-right-english" class="nav-menu">
									<li id="menu-item-981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-981 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/gallery/"><span>Gallery</span></a></li>
									<li id="menu-item-982" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982 sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/faq/"><span>FAQ</span></a></li>
									<li id="menu-item-983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983 button-style sub-menu-dark menu-item-icon-before" data-mega-menu-bg-repeat="no-repeat"><a href="https://mgtattoostudio.com/contact/"><span><i class="fa fa-phone"></i>Contact us</span></a></li>
								</ul>
							</div>
						</nav><!-- #site-navigation-primary -->
					</div><!-- #navbar -->
				</div><!-- .wrap -->
			</div>
		</div>