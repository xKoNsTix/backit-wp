
<?php
/*
Template Name: About Template
*/
?>
<?php get_header('own'); ?>
<body>
    <!-- <div class="topLine"></div> -->
    <section class="aboutMain">

        <div class="imageDiv">
            <img src="<?php echo get_template_directory_uri()?>/images/about1.png" class="image-1">
            <img src="<?php echo get_template_directory_uri()?>/images/about2.png" class="image-2">

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
                <?php wp_reset_postdata(); //1?>
            </div>
        </div>


    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>
 
    <?php get_footer('custom'); ?>