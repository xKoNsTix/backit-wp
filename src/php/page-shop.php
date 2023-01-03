<?php
require_once(dirname(__FILE__) . '/../../../wp-blog-header.php'); ?>
<?php get_header('own'); ?>

<!-- <div class="topLine"></div> -->
<section class="shopMain">

    <div class="leftSide">
        <?php
        $shop = new WP_Query(array('name' => 'shop'));
        if ($shop->have_posts()) :
            while ($shop->have_posts()) : $shop->the_post();
                $nameLeft = get_post_meta($shop, 'nameLeft', true);
                $nameRight = get_post_meta($shop, 'nameRight', true);
                $priceLeft = get_post_meta($shop, 'priceLeft', true);
                $priceRight = get_post_meta($shop, 'priceRight', true);
                $sloganLeft = get_post_meta($shop, 'sloganLeft', true);
                $sloganRight = get_post_meta($shop, 'sloganRight', true);
                $linkLeft = get_post_meta($shop, 'linkLeft', true);
                $linkRight = get_post_meta($shop, 'linkRight', true); ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <h1><?php echo $sloganLeft ?> </h1>
        <div class="roundedges">
            <a href="<?php echo  $linkLeft ?>"><img src="images/shop1.png">
            </a>
        </div>
        <h2> <?php echo $nameLeft ?></h2>
        <p><?php echo $priceLeft ?></p>


    </div>

    <div class="rightSide">
        <h1> <?php echo $sloganRight ?> </h1>
        <div class="roundedges">
            <a href="<?php echo  $linkLeft ?>"><img src="images/shop2.png">
            </a>
        </div>
        <h2><?php echo $nameRight ?></h2>
        <p><?php echo $priceRight ?></p>


        <?php wp_reset_postdata(); ?>
    </div>



</section>
<?php get_footer('custom'); ?>