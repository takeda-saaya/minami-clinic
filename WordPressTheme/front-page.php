<?php get_header(); ?>

<main>

  <!-- メインビュー -->
  <div class="p-mv l-mv">
    <div class="p-mv__inner">
      <div class="p-swiper__container">
        <div class="swiper p-mv-swiper">
          <div id="js-swiper-wrap" class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="p-mv-swiper__img">
                <img src="<?php echo get_theme_file_uri('assets/images/front-page/mv-1__pc.jpg'); ?>" alt="機械の前に黒い診療椅子が置いてある" loading="lazy" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-mv-swiper__img">
                <img src="<?php echo get_theme_file_uri('assets/images/front-page/mv-2__pc.jpg'); ?>" alt="テレビと青い診療椅子が置いてある" loading="lazy" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-mv-swiper__img">
                <img src="<?php echo get_theme_file_uri('assets/images/front-page/mv-3__pc.jpg'); ?>" alt="明るい部屋に2つの青い診療椅子が並べて置いてある" loading="lazy" />
              </div>
            </div>
          </div>
        </div>
        <!-- ページネーション -->
        <div class="swiper-pagination p-mv-swiper-pagination"></div>
        <!-- 前後の矢印 -->
        <div class="swiper-button-prev p-mv-swiper-prev"></div>
        <div class="swiper-button-next p-mv-swiper-next"></div>
        <picture class="p-mv__titles">
          <source srcset="<?php echo get_theme_file_uri('assets/images/front-page/mv-title__pc.png'); ?>" media="(min-width: 768px)" />
          <img src="<?php echo get_theme_file_uri('assets/images/front-page/mv-title__sp.png'); ?>" alt="" />
        </picture>
      </div>
    </div>
  </div>

  <!-- お知らせ -->
  <section class="l-info p-info ">
    <div class="p-info__inner l-inner">
      <div class="p-info__wrap">
        <div class="p-info__time">
          <img src="<?php echo get_theme_file_uri('assets/images/common/mv-time.png'); ?>" alt="診察時間表" />
        </div>
        <div class="p-info__news p-news">
          <div class="p-news__wrap">
            <div class="p-news__titles">
              <h2 class="p-news__ja-title">お知らせ</h2>
              <p class="p-news__en-title">NEWS</p>
            </div>
            <a href="<?php echo esc_url(home_url('/news')); ?>">
              過去のお知らせはこちら</a>
          </div>

          <?php
          $recent_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          ));

          if ($recent_query->have_posts()) :
            while ($recent_query->have_posts()) : $recent_query->the_post();
          ?>
              <a href="<?php echo esc_url(get_permalink()); ?>" class="p-news__main">
                <time class="p-news__date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.n.j'); ?></time>
                <p class="p-news__title"><?php the_title(); ?></p>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- コンセプト -->
  <section class="l-concept p-concept">
    <div class="p-concept__wrap">
      <div class="p-concept__body ">
        <p class="p-concept__en-title">concept</p>
        <h2 class="p-concept__ja-title">健康的で素敵な笑顔あふれる<br>
          街づくりを目指して</h2>
        <p class="p-concept__text">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
          お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
        <div class="p-concept__btn">
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-btn">当院について</a>
        </div>
      </div>
      <div class="p-concept__img">
        <img src="<?php echo get_theme_file_uri('assets/images/front-page/concept1.jpg'); ?>" alt="歯科衛生士の女性が治療している様子" loading="lazy">
      </div>
    </div>
  </section>

  <!-- おすすめ -->
  <section class="l-recommend p-recommend">
    <div class="p-recommend__inner l-inner">
      <div class="p-recommend__title-wrap">
        <h2 class="p-recommend__title c-section-title">当院の3つのおすすめ</h2>
      </div>
      <div class="p-recommend__items">
        <div class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__titile">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-title1.png'); ?>" alt="おすすめ01" loading="lazy">
          </h3>
          <div class="p-recommend-item__img">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-item1.png'); ?>" alt="痛くない歯科医療の追求" loading="lazy">
          </div>
          <p class="p-recommend-item__text">歯の治療において、小さな違和感は大きなストレスにつながります。<br>
            私たちは常に快適な歯科医療技術の研究を行っております。</p>
        </div>
        <div class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__titile">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-title2.png'); ?>" alt="おすすめ02" loading="lazy">
          </h3>
          <div class="p-recommend-item__img">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-item2.png'); ?>" alt="駅から徒歩三分" loading="lazy">
          </div>
          <p class="p-recommend-item__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
        </div>
        <div class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__titile">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-title3.png'); ?>" alt="おすすめ03" loading="lazy">
          </h3>
          <div class="p-recommend-item__img">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/recommend-item3.png'); ?>" alt="夜２０時３０分まで営業" loading="lazy">
          </div>
          <p class="p-recommend-item__text">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
            <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 診療案内 -->
  <section class="l-medical p-medical">
    <div class="l-medical__top-bg l-top-bg"></div>
    <div class="p-medical__inner l-inner">
      <div class="p-medical__title-wrap">
        <h2 class="c-section-title">診療案内</h2>
      </div>
      <div class="p-medical__boxs">
        <a href="/medical/#general" class="p-medical__box">
          <div class="p-medical__img">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/medical1.jpg'); ?>" alt="歯ブラシが２本ある" loading="lazy">
          </div>
          <div class="p-medical__texts">
            <p class="p-medical__linkTitle">一般診療</p>
            <p class="p-medical__linkText">虫歯・入れ歯・小児歯科</p>
          </div>
        </a>
        <a href="/medical/#unique" class="p-medical__box">
          <div class="p-medical__img">
            <img src="<?php echo get_theme_file_uri('assets/images/front-page/medical2.jpg'); ?>" alt="歯の模型が置いてある" loading="lazy">
          </div>
          <div class="p-medical__texts">
            <p class="p-medical__linkTitle">特殊診療</p>
            <p class="p-medical__linkText">インプラント・ホワイトニング<br>
              予防歯科・口腔外科・審美歯科</p>
          </div>
        </a>
      </div>
      <div class="p-medical__bottom">
        <p class="p-medical__text">
          当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
          痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
          <span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
        </p>
      </div>
    </div>
    <div class="l-medical__decos l-decos"></div>
    <div class="l-medical__bottomDeco l-bottom-bg"></div>

  </section>

  <!-- スタッフブログ -->
  <section class="l-blog p-blog">
    <div class="p-blog__inner l-inner">
      <div class="p-blog__title-wrap">
        <h2 class="p-blog__title c-section-title">スタッフブログ</h2>
      </div>
      <div class="p-blog__cards">
        <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'blog',
          'posts_per_page' => '6',
        );
        $wp_query->query($my_posts);
        $post_count = 0;

        if ($wp_query->have_posts()) :
          while ($wp_query->have_posts()) :
            $wp_query->the_post();
            $post_count++;
            $obj = get_post_type_object($post->post_type);

            $post_date = get_the_date('Y-m-d');
            $current_date = date('Y-m-d');
            $is_new = (strtotime($current_date) - strtotime($post_date)) <= 3 * 24 * 60 * 60;
        ?>

            <a href="<?php the_permalink(); ?>" class="p-blog__card p-blog-card">
              <?php if ($is_new) : ?>
                <p class="p-blog-card__tag">new</p>
              <?php endif; ?>
              <div class="p-blog-card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri('assets/images/common/noimg.png'); ?>" alt="ダミー画像" loading="lazy">
                <?php endif; ?>
              </div>
              <div class="p-blog-card__body">
                <p class="p-blog-card__category">
                  <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'genre');
                  if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span class="' . $taxonomy_term->slug . '">' . $taxonomy_term->name . '</span>';
                    }
                  }
                  ?>
                </p>
                <h3 class="p-blog-card__title"><?php the_title(); ?></h3>
                <time class="p-blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
              </div>
            </a>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="p-blog__btn">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="c-btn">スタッフブログ一覧はこちら</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>