<div class="container-fluid" id="hero-section" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>'); ">
    <div class="row">
        <div class="col-12 hero-content">
            <h2><?php echo get_the_title(); ?></h2>
            <h4><?php echo the_field('hero_sub_title'); ?></h4>
        </div>
    </div>
</div>