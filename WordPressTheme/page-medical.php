<?php get_header(); ?>

<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
  <div class="l-inner p-sub-mv__inner">
    <div class="p-sub-mv__body">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri('assets/images/page-medical/page-medical__pc.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('assets/images/page-medical/page-medical__sp.jpg'); ?>" alt="診察室の様子" loading="lazy" />
      </picture>
      <div class="p-sub-mv__titles">
        <h1 class="p-sub__ja-title">診療案内</h1>
        <p class="p-sub__en-title ">medical</p>
      </div>

      <!-- パンくず -->
      <div class="c-breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>

    </div>
  </div>
</div>

<main>

  <!-- 診療メニュー -->
  <section class="p-menu l-menu">
    <div class="p-menu__inner l-inner">

      <?php
      $terms = get_terms(array(
        'taxonomy' => 'kind',
        'hide_empty' => true,
      ));

      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
          $term_slug = $term->slug;
          $term_name = $term->name;
      ?>

          <div class="p__menu__body">
            <div class="p-menu_title-wrap">
              <h2 class="p-menu_category"><?php echo esc_html($term_name); ?></h2>
              <span class="p-menu___tag p-menu___tag--<?php echo $term_slug == 'general' ? 'blue' : 'red'; ?>"><?php echo $term_slug == 'general' ? '保険対象' : '実費'; ?></span>
            </div>
            <div class="p-menu__items">

              <?php
              $args = array(
                'post_type' => 'plan',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'kind',
                    'terms' => $term_slug,
                    'field' => 'slug',
                  ),
                ),
                'order' => 'ASC',
              );
              $wp_query = new WP_Query($args);

              if ($wp_query->have_posts()) :
                while ($wp_query->have_posts()) :
                  $wp_query->the_post();
                  $post_id = get_the_ID();
              ?>
                  <div class="p-menu__item p-menu-item">
                    <a href="#post-<?php echo $post_id; ?>"><?php the_title(); ?></a>
                  </div>
              <?php
                endwhile;
              else :
                echo 'No posts found';
              endif;

              wp_reset_postdata();
              ?>
            </div>
          </div>

      <?php
        endforeach;
      endif;
      ?>
    </div>
  </section>

  <!-- 診療内容 -->
  <?php
  $terms = get_terms(array(
    'taxonomy' => 'kind',
    'hide_empty' => true,
  ));

  if (!empty($terms) && !is_wp_error($terms)) :
    foreach ($terms as $term) :
      $term_slug = $term->slug;
      $term_name = $term->name;
  ?>
      <section id="<?php echo esc_attr($term_slug); ?>" class="l-menu-detail p-menu-detail">
        <div class="l-menu-detail__top-bg l-top-bg"></div>
        <div class="l-inner p-menu-detail__inner">
          <div class="p-menu-detail__title-wrap">
            <h2 class="p-menu-detail__title c-section-title">
              <?php echo esc_html($term_name);
              ?>
            </h2>
          </div>
          <div class="p-menu-detail__boxs">
            <?php
            $args = [
              'post_type' => 'plan',
              'tax_query' => array(
                array(
                  'taxonomy' => 'kind',
                  'terms' => $term_slug,
                  'field' => 'slug',
                ),
              ),
            ];
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
              while ($custom_query->have_posts()) : $custom_query->the_post();
                $post_id = get_the_ID();
            ?>
                <div id="post-<?php echo $post_id; ?>" class="p-menu-detail__box p-menu-box">
                  <div class="p-menu-box__top">
                    <h2 class="p-menu-box__title"><?php the_title(); ?></h2>
                    <p class="p-menu-box__text"><?php the_field('worries'); ?></p>
                  </div>
                  <?php if ($term_slug == 'general') : ?>
                    <div class="p-menu-box__tag">
                      <img src="<?php echo get_theme_file_uri('assets/images/page-medical/tag1.png'); ?>" alt="保険対象" loading="lazy">
                    </div>
                  <?php else : ?>
                    <div class="p-menu-box__tag">
                      <img src="<?php echo get_theme_file_uri('assets/images/page-medical/tag2.png'); ?>" alt="実費" loading="lazy">
                    </div>
                  <?php endif; ?>
                  <div class="p-menu-box__bottom">
                    <p class="p-menu-box__textarea"><?php the_field('introduction'); ?></p>
                    <div class="p-menu-box__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri('assets/images/common/noimg.png'); ?>" alt="ダミー画像" loading="lazy">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>

        <div class="l-menu-detail-box__decos l-decos"></div>
        <div class="l-menu-detail-box__bottomDeco l-bottom-bg"></div>
      </section>
  <?php
    endforeach;
  endif;
  ?>

</main>

<?php get_footer(); ?>