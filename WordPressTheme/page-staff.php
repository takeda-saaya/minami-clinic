<?php get_header(); ?>

<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
  <div class="l-inner p-sub-mv__inner">
    <div class="p-sub-mv__body">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri('assets/images/page-staff/page-staff__pc.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('assets/images/page-staff/page-staff__sp.jpg'); ?>" alt="診察室の様子" loading="lazy" />
      </picture>
      <div class="p-sub-mv__titles">
        <h1 class="p-sub__ja-title">スタッフ紹介</h1>
        <p class="p-sub__en-title ">staff</p>
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

  <!-- 院長挨拶 -->
  <section id="director" class="l-director p-director">
    <div class="p-director__inner l-inner">
      <div class="p-director__title-wrap">
        <h2 class="p-director__title c-section-title">院長のあいさつ</h2>
      </div>
      <div class="p-director__body">
        <div class="p-director__tetxs">
          <div class="p-director__greeting">
            <div class="p-director__sub-title-wrap">
              <h3 class="p-director__sub-title">気軽に相談できる<br>
                街の歯医者さんでありたい。</h3>
            </div>
            <div class="p-director__text-wrap1">
              <p class="p-director__text">
                当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
            </div>
            <div class="p-director__text-wrap2">
              <p class="p-director__text">
                「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
            </div>
            <div class="p-director__text-wrap3">
              <p class="p-director__text">みなみ歯科クリニック</p>
              <p class="p-director__text">院長　南 俊雄</p>
            </div>
          </div>
          <div class="p-director__about">
            <div class="p-director__career">
              <p class="p-director__about-title">経歴</p>
              <div class="p-director__blocks">
                <div class="p-director__block">
                  <p class="p-director__text">2004年</p>
                  <p class="p-director__text">東京医科歯科大学歯学部 卒業</p>
                </div>
                <div class="p-director__block">
                  <p class="p-director__text">2008年</p>
                  <p class="p-director__text">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</p>
                </div>
                <div class="p-director__block">
                  <p class="p-director__text">2012年</p>
                  <p class="p-director__text">みなみ歯科クリニック 開院</p>
                </div>
              </div>
            </div>
            <div class="p-director__qualification">
              <p class="p-director__about-title">経歴</p>
              <div class="p-director__blocks">
                <p class="p-director__text">歯科医師臨床研修指導歯科医</p>
                <p class="p-director__text">博士(歯学)</p>
                <p class="p-director__text">衛生検査技師</p>
              </div>
            </div>
          </div>

        </div>
        <div class="p-director__img">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/director.png'); ?>" alt="院長の顔写真" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- gallery swiper -->
  <div class="p-staff-gallery l-staff-gallery">
    <div class="swiper p-staff-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/staff-swiper1.jpg'); ?>" alt="男性医師と女性医師が治療している様子" loading="lazy" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/staff-swiper2.jpg'); ?>" alt="女性医師が治療している様子" loading="lazy" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/staff-swiper3.jpg'); ?>" alt="女性医師が治療している様子" loading="lazy" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/staff-swiper4.jpg'); ?>" alt="男性医師が歯のレントゲンを見ながら患者に説明している様子" loading="lazy" />
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_theme_file_uri('assets/images/page-staff/staff-swiper5.jpg'); ?>" alt="男性が治療されている様子" loading="lazy" />
        </div>
      </div>
    </div>
  </div>

  <!-- スタッフ紹介 -->
  <section id="staffs" class="l-staff p-staff">
    <div class="p-staff__inner l-inner">
      <div class="p-staff__title-wrap">
        <h2 class="p-staff__title c-section-title">スタッフ紹介</h2>
      </div>
      <div class="p-staff__content">
        <?php
        $terms = get_terms([
          'taxonomy' => 'occupation',
          'hide_empty' => true,
        ]);

        $is_first_term = true;

        foreach ($terms as $term) :
          $term_name = esc_html($term->name);
          $term_class = $is_first_term ? '' : 'has-margin-top';
        ?>
          <p class="p-staff__occupation <?php echo $term_class; ?>"><?php echo $term_name; ?></p>
          <div class="p-staff__boxs">
            <?php
            $args = [
              'post_type' => 'staffs',
              'tax_query' => array(
                array(
                  'taxonomy' => 'occupation',
                  'terms' => $term->slug,
                  'field' => 'slug',
                ),
              ),
            ];
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
              while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div class="p-staff__box p-staff-box">
                  <div class="p-staff-box__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri('assets/images/common/noimg.png'); ?>" alt="ダミー画像" loading="lazy">
                    <?php endif; ?>
                  </div>
                  <div class="p-staff-box__name-wrap">
                    <p class="p-staff-box__occupation"><?php echo $term_name; ?></p>
                    <p class="p-staff-box__name"><?php the_title(); ?></p>
                  </div>
                  <dl class="p-staff-box__info">
                    <dt>出身地</dt>
                    <dd><?php the_field('from'); ?></dd>
                    <dt>趣味</dt>
                    <dd><?php the_field('hobby'); ?></dd>
                    <dt>好きな食べ物</dt>
                    <dd><?php the_field('favorite_food'); ?></dd>
                  </dl>
                </div>
            <?php
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p>スタッフが見つかりませんでした。</p>';
            endif;
            ?>
          </div>

        <?php
          $is_first_term = false;
        endforeach;
        ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>