<?php get_header(); ?>
<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
?>
<div class="container pushContent">
    <div class="row">
        <div class="col-12">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <?php wc_get_template_part('content', 'single-product'); ?>

            <?php endwhile; // end of the loop. 
            ?>

            <?php
            /**
             * woocommerce_after_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action('woocommerce_after_main_content');
            ?>

        </div>
    </div>
</div>
<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */

?>

<?php get_footer();
