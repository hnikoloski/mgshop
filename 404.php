<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mgshop
 */

get_header();
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div class="container-fluid text-center not-found-wrapper" style="height: 100vh;">
	<div class="row h-100" style="align-content: center;
    justify-content: center;
    align-items: center;">
		<div class="col-12">
			<h3>Page Not Found</h3>
			<a href="/" class="logo-wrapper">
				<img src="<?php echo $logoUrl[0]; ?>" alt="Website Site Logo" class="img-fluid">
			</a>
			<a href="/" class="back-home">
				<i class="fas fa-angle-double-left"></i>
				Go back to homepage
			</a>
		</div>
	</div>
</div>
<?php
get_footer();
