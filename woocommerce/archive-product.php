<?php
$pageImg = wp_get_attachment_image_src(get_post_thumbnail_id(wc_get_page_id('shop')), 'full');
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>
<!-- <div class="container-fluid" id="hero-section" style="background:url('<?php echo the_field('hero_bg'); ?>'); ">
    <div class="row">
        <div class="col-12 hero-content">
            <h2><?php echo the_field('hero_title'); ?></h2>
            <h4><?php echo the_field('hero_sub_title'); ?></h4>
        </div>
    </div>
</div> -->
<header class="woocommerce-products-header container-fluid" id="hero-section" style="background:url('<?php echo $pageImg['0']; ?>'); ">
    <div class="row">
        <div class="col-12 hero-content">
            <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                <h2 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h2>
                <h4>Explore our exclusive collection</h4>
            <?php endif; ?>
        </div>
    </div>

    <?php
    /**
     * Hook: woocommerce_archive_description.
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action('woocommerce_archive_description');
    ?>
</header>
<?php
if (woocommerce_product_loop()) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */

?>
    <div class="container-fluid" id="products-archive">
        <div class="row">
            <div class="col-12 archive-intro">
                <h3>
                    The focus on every detail you add.
                </h3>
                <h5>
                    Details to complete each unique appearance.
                </h5>
            </div>
        </div>
        <div class="row archive-filter">
            <div class="col-12">
                <div class="filter-wrapper">
                    <h3 class="text-center mob">Filter: <i class="fas fa-chevron-down"></i> </h3>

                    <ul>
                        <li class="js-filter-item" data-category="All"><a href="<?php home_url(); ?>" class="active">ALL PRODUCTS</a></li>
                        <?php

                        $taxonomy     = 'product_cat';
                        $orderby      = 'name';
                        $show_count   = 0;
                        $pad_counts   = 0;
                        $hierarchical = 1;
                        $title        = '';
                        $empty        = 0;

                        $args = array(
                            'taxonomy'     => $taxonomy,
                            'orderby'      => $orderby,
                            'show_count'   => $show_count,
                            'pad_counts'   => $pad_counts,
                            'hierarchical' => $hierarchical,
                            'title_li'     => $title,
                            'hide_empty'   => $empty
                        );
                        $all_categories = get_categories($args);
                        foreach ($all_categories as $cat) {
                            if ($cat->category_parent == 0) {
                                $category_id = $cat->term_id;
                                echo '<li><a class="js-filter-item" data-category="' . $cat->term_id . '" href="' . get_term_link($cat->slug, 'product_cat') . '">' . $cat->name . '</a> </li>';

                                $args2 = array(
                                    'taxonomy'     => $taxonomy,
                                    'child_of'     => 0,
                                    'parent'       => $category_id,
                                    'orderby'      => $orderby,
                                    'show_count'   => $show_count,
                                    'pad_counts'   => $pad_counts,
                                    'hierarchical' => $hierarchical,
                                    'title_li'     => $title,
                                    'hide_empty'   => $empty
                                );
                                $sub_cats = get_categories($args2);
                                if ($sub_cats) {
                                    foreach ($sub_cats as $sub_category) {
                                        echo  $sub_category->name;
                                    }
                                }
                            }
                        }
                        ?>


                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 products-listing">
                <div class="container">
                    <div class="row js-filtererable" id="product-filter-results">

                        <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => -1,
                        );

                        $loop = new WP_Query($args);
                        $productImage = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                        ?>
                            <div class="single-product">
                                <a href="<?php echo get_permalink(); ?>" class="img-wrapper">
                                    <img src="<?php echo $productImage[0]; ?>" alt="Product Alt" class="img-fluid">
                                </a>
                                <h4><?php echo get_the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <?php $product = wc_get_product(get_the_ID()); ?>
                                <h3><?php echo $product->get_price_html(); ?></h3>
                                <a class="product-btn" href="<?php echo get_permalink(); ?>">Select Options</a>
                            </div>
                        <?php
                        endwhile;
                        ?>


                        <?php
                        wp_reset_postdata();
                        ?>

                        <div id="api-loader" style="display: none;">
                            <i class="fas fa-spinner"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action('woocommerce_sidebar');

get_footer('shop');
