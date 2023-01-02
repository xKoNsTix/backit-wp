

  <!-- retrieve Custom Field Example: -->
<?php
  $heroText = new WP_Query(array('name' => 'hero-text')); // name for the slug 
         if ($heroText->have_posts()) :
            while ($heroText->have_posts()) : $heroText->the_post(); ?>
        <h1 class><?php the_title(); ?></h1>

      </div>
      <div class="zeit">
        <p> <?php the_content(); ?></p>
      </div>
      <div class="oida">
        <br>
        <?php 
        $post_id = $heroText->post->ID;
        $custom_field = get_post_meta($post_id, 'oida', true);?>
        <p> <?php echo $custom_field?> </p>
      </div>
      <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
    </div>



    <!-- menu  -->


    <?php
  $menu = new WP_Query(array('name' => 'hero-text')); // name for the slug 
         if ($menu->have_posts()) :
            while ($menu->have_posts()) : $menu->the_post();
 $post_id = $menu->post->ID;
        $first= get_post_meta($post_id, 'first', true);
         $second= get_post_meta($post_id, 'second', true);
         $third= get_post_meta($post_id, 'third', true);
         $fourth= get_post_meta($post_id, 'fourth', true);
     ?>


<!-- GET THUMBNAIL  -->

<?php
  $post = get_page_by_path('grid-pos-ab-first-image', OBJECT, 'post');
  $thumbnail_id = get_post_thumbnail_id($post->ID);
  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
?>