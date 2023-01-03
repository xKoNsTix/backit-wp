

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


<!-- contact -->



<div class="contact">
      <div class="left">
        <div class="contactText">
        <?php
        $contact = new WP_Query(array('name' => 'contact'));
      if ($contact->have_posts()) :
        while ($contact->have_posts()) : $contact->the_post(); 
        $post_id = $contact->post->ID;
            $tel = get_post_meta($post_id, 'telephone', true); 
            $mail = get_post_meta($post_id, 'email', true); 
            $fullAdress = get_post_meta($post_id, 'fullAdress', true); 
            $postIDandCity = get_post_meta($post_id, 'postIDandCity', true); 
            $street = get_post_meta($post_id, 'street', true); 
            $logoMid = wp_get_attachment_url($post_id);
            $alt_text = get_post_meta($post_id, '_wp_attachment_image_alt', true);?>

          <p><?php the_title();?></p>
          <a href="tel:+43<?php echo $tel?>"> <?php echo $tel?> </a><br>
          <a href="mailto:<?php echo $mail?>"><?php echo $mail?></a><br><br>
          <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($fullAddress);?>"  target="_blank" rel="noopener noreferrer"><?php echo $street?>,<br> <?php echo $postIDandCity?></a>
           <?php endwhile; ?>
      <?php endif; ?> 
      <?php wp_reset_postdata(); ?>
        </div>
      </div>


      <div class="mid">
        <img src="<?php echo $logoMid ?>" alt="<?php echo $alt_text?>">
       
      <?php wp_reset_postdata(); ?>
      </div>

      <div class="right">
        <div class="contactText">



          <a href="#">Impressum und Datenschutz</a>
          <p>©2025 Tokowa</p>

        </div>

      </div>


    </div>