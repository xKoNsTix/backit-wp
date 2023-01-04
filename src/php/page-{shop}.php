<?php
/*
Template Name: Shop Template
*/
?>
<?php get_header('own'); ?>

<body>
<section class="shopMain">

    <div class="leftSide">
        <?php
        $shopContent = new WP_Query(array('name' => 'shop-content'));
        if ($shopContent->have_posts()) :
            while ($shopContent->have_posts()) : $shopContent->the_post();
            $postID = $shopContent->post->ID;
                $nameLeft = get_post_meta($postID, 'nameLeft', true);
                $nameRight = get_post_meta($postID, 'nameRight', true);
                $priceLeft = get_post_meta($postID, 'priceLeft', true);
                $priceRight = get_post_meta($postID, 'priceRight', true);
                $sloganLeft = get_post_meta($postID, 'sloganLeft', true);
                $sloganRight = get_post_meta($postID, 'sloganRight', true);
                $linkLeft = get_post_meta($postID, 'linkLeft', true);
                $linkRight = get_post_meta($postID, 'linkRight', true); ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <h1><?php echo $sloganLeft ?> </h1>
        <div class="roundedges">
            <a href="<?php echo  $linkLeft ?>"><img src="<?php echo get_template_directory_uri()?>/images/shop1.png">
            </a>
        </div>
        <h2> <?php echo $nameLeft ?></h2>
        <p><?php echo $priceLeft ?></p>


    </div>

    <div class="rightSide">
        <h1> <?php echo $sloganRight ?> </h1>
        <div class="roundedges">
            <a href="<?php echo  $linkLeft ?>"><img src="<?php echo get_template_directory_uri()?>/images/shop2.png">
            </a>
        </div>
        <h2><?php echo $nameRight ?></h2>
        <p><?php echo $priceRight ?></p>


        <?php wp_reset_postdata(); ?>
    </div>



</section>

<?php get_footer('custom'); ?>