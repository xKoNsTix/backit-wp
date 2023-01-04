<?php get_header('own'); ?>

<body>
  <?php wp_body_open(); ?>

  <!-- This script is to parse the path into js as well for the shop area, i know it is a bit messy but it was the quickest solution (yet) -->
  <script>
    var templateDirectoryUri = '<?php echo get_template_directory_uri(); ?>';
  </script>
  <!-- ------------------------------------------------------------------------------------------------------------------------ -->




  <div class="topLine"></div>
  <?php
  $post = get_page_by_path('hero-photo', OBJECT, 'post');
  $thumbnail_id = get_post_thumbnail_id($post->ID);
  $thumbnail_url = wp_get_attachment_url($thumbnail_id);
  ?>
  <section class="hero" style="background-image:url(<?php echo $thumbnail_url ?>)">
    <div class="heroimage">
      <div class="leftArea">

        <?php
        $post = get_page_by_path('hero-logo', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $thumbnail_url ?>" alt=" <?php echo $alt_text ?>">

      </div>

      <div class="rightArea">
        <!-- DUMMY-->
      </div>
    </div>

  </section>
  <section class="quotes">
    <div class="greenquote">
      <div class="sake">
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
            $custom_field = get_post_meta($post_id, 'oida', true); ?>
        <p> <?php echo $custom_field ?> </p>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
    </div>

    </div>
  </section>
  <section class="overviews">
    <div class="first">
      <div class="left">
        <div class="textcontainer">
          <?php


          // grid is like:
          // |aa|ab|
          // |ba|bb|
          // |ca|cb|
          // |da|db|


          $shop = new WP_Query(array('name' => 'grid-aa')); // name for the


          if ($shop->have_posts()) :
            while ($shop->have_posts()) : $shop->the_post(); ?>

              <h2> <?php the_title(); ?> </h2>
              <p><?php the_content(); ?>
              <p>

              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
      </div>

      <div class="right">

        <?php
        $post = get_page_by_path('grid-pos-ab-first-image', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $alt_text ?>">

      </div>

    </div>
    <div class="second">
      <div class="left">
        <?php
        $post = get_page_by_path('grid-pos-ba-second-image', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $alt_text ?>">
      </div>
      <div class="right">
        <div class="textcontainer">


          <?php

          $shop = new WP_Query(array('name' => 'grid-bb')); // name for the


          if ($shop->have_posts()) :
            while ($shop->have_posts()) : $shop->the_post();
              $post_id = $shop->post->ID;
              $custom_field = get_post_meta($post_id, 'Hashtag', true); ?>
              <h2> <?php the_title(); ?> </h2>
              <p><?php the_content();
                  echo "<style>
                  @media(min-width:900px){
                    p {
                      color: black;
                    }
                  }
                  @media(max-width:899px){
                    p {
                      color: white;
                    }
                  }
                </style>
                <p>" . $custom_field . "</p>";

                  ?>









        </div>

        <div class="emoji">
          <?php $thumbnail_id = get_post_thumbnail_id($shop->ID);
              $thumbnail_url = wp_get_attachment_url($thumbnail_id);
              $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
          <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo $alt_text ?>">
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div id="workshop">

      <?php
      $shop = new WP_Query(array('name' => 'grid-ca'));
      if ($shop->have_posts()) :
        while ($shop->have_posts()) : $shop->the_post(); ?>





          <div class="left">
            <div class="textcontainer">
              <h2> <br> <?php the_title() ?> </h2>
              <p>
                <?php the_content() ?>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
              </p>
            </div>
          </div>

          <div class="right">
            <?php
            $thirdPhoto = get_page_by_path('grid-cb-third-photo', OBJECT, 'post');
            $thumbnail_id = get_post_thumbnail_id($thirdPhoto->ID);
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>

            <img src="<?php echo $thumbnail_url ?>" alt="<?php echo $alt_text ?>">
            <?php wp_reset_postdata(); ?>
          </div>

    </div>
    <div id="hiring">
      <?php $fourthPhoto = get_page_by_path('grid-da-fourth-photo', OBJECT, 'post');
      $thumbnail_id = get_post_thumbnail_id($fourthPhoto->ID);
      $thumbnail_url = wp_get_attachment_url($thumbnail_id);
      $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
      <div class="left" style="background-image:url(<?php echo  $thumbnail_url ?>">
        <?php wp_reset_postdata(); ?>
        <?php
        $hiringFont = get_page_by_path('hiring-font', OBJECT, 'post');
        $thumbnail_id = get_post_thumbnail_id($hiringFont->ID);
        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>

        <img src="<?php echo $thumbnail_url ?>" alt="<?php echo $alt_text ?>">
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="right">
        <div class="textcontainer">
          <?php $shop = new WP_Query(array('name' => 'grid-cb'));
          if ($shop->have_posts()) :
            while ($shop->have_posts()) : $shop->the_post(); ?>



              <h2><?php the_title() ?> </h2>
              <p>
                <?php echo the_content() ?>
              </p>

              <div class="buttonDivApp">
                <?php
                $post_id = $shop->post->ID;
                $custom_field = get_post_meta($post_id, 'Button', true); ?>
                <a class="buttonApplication" href="#Job"> <?php echo $custom_field ?> </a>

              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
              </div>
        </div>
      </div>
    </div>

    <div id="shopArea">




      <div class="imageleft">
        <img alt="Willsch ein Backpfeiffe Merch" id='eyebrow'>
      </div>
      <div class="midDiv">
        <div class="textcontainer">
          <?php
          $shop = new WP_Query(array('name' => 'shop'));
          if ($shop->have_posts()) :
            while ($shop->have_posts()) : $shop->the_post(); ?>
              <h2><?php the_title() ?> </h2>
              <p>
                <?php the_content() ?>
              </p>
              <?php $post_id = $shop->post->ID;
              $custom_field = get_post_meta($post_id, 'ShopButton', true); ?>
              <div class="buttonShopArea">
                <?php $page = get_page_by_path('shop');
                $link = get_permalink($page) ?>
                <a class="buttonShop" href="<?php echo $link ?>"><?php echo $custom_field ?> </a>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>
      <div class="imageright">
        <img src="<?php echo get_template_directory_uri(); ?>/images/right.png" alt="ich geh mci hackeln">
      </div>


    </div>

    </div>

    <div class="contactFormular">
      <div class="contactWrapper">

        <!-- contact form by Batuhan Baş, teşekkür ederim! -->
        <?php
        $form = wpcf7_contact_form(74); // Replace 1 with the ID of the contact form
        echo $form->form;


        ?>
      </div>
    </div>
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
              $name = get_post_meta($post_id, 'name', true);
          ?>
              <p><?php echo $name; ?></p>
              <a href="tel:+43<?php echo $tel ?>"> <?php echo $tel ?> </a><br>
              <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a><br><br>
              <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($fullAddress); ?>" target="_blank" rel="noopener noreferrer"><?php echo $street ?>,<br> <?php echo $postIDandCity ?></a>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <?php
      $post = get_page_by_path('contact', OBJECT, 'post');
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $thumbnail_url = wp_get_attachment_url($thumbnail_id);
      $alt_text = get_post_meta($post, '_wp_attachment_image_alt', true); ?>
      <div class="mid">
        <img src="<?php echo  $thumbnail_url ?>" alt="<?php echo $alt_text ?>">


      </div>

      <div class="right">
        <div class="contactText">
          <?php
          $contact = new WP_Query(array('name' => 'contact'));
          if ($contact->have_posts()) :
            while ($contact->have_posts()) : $contact->the_post();
              $ImpressumLink = get_post_meta($post_id, 'ImpressumLink', true);
              $ImpressumText = get_post_meta($post_id, 'ImpressumText', true);
              $CopyRightText = get_post_meta($post_id, 'CopyrightText', true);

          ?>

              <a href="<?php echo $ImpressumLink ?> "><?php echo $ImpressumText ?></a>
              <p><?php echo $CopyRightText ?></p>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>


    </div>
  </section>



  <?php get_footer('custom'); ?>