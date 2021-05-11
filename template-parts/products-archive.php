<div class="container-fluid" id="products-archive">
    <div class="row">
        <div class="col-12 archive-intro">
            <h3>
                <?php echo the_field('archive_title'); ?>
            </h3>
            <h5>
                <?php echo the_field('archive_sub_title'); ?>
            </h5>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <?php echo do_shortcode('[wpf-filters id=1]') ?>
            </div>
        </div>
    </div>
    <div class="row archive-filter">
        <div class="col-12">
            <ul>
                <li class="js-filter-item" data-category="ShowAll"><a href="<?php home_url(); ?>">All</a></li>
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
    <div class="row">
        <div class="col-12 products-listing">
            <div class="container">
                <div class="row js-filter">

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



                </div>
            </div>
        </div>
    </div>

</div>