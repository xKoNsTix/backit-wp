<?php
require_once( dirname( __FILE__ ) . '/../../../wp-blog-header.php' ); ?>
<?php get_header('own'); ?>
<body>
    <!-- <div class="topLine"></div> -->
    <section class="aboutMain">

        <div class="imageDiv">
            <img src="images/about1.png" class="image-1">
            <img src="images/about2.png" class="image-2">

        </div>
        <div class="txt">
            <div class="container">

                <?php
                $about = new WP_Query(array('name' => 'about-ben'));
                if ($about->have_posts()) :
                    while ($about->have_posts()) : $about->the_post(); ?>
                        <h1>
                            <?php echo the_title(); ?>
                        </h1>
                        <p>
                            <?php echo the_content(); ?>
                        </p>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>


    </section>
    <?php get_footer('custom'); ?>