<?php get_header(); ?>

<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
  <div class="l-inner p-sub-mv__inner">
    <div class="p-sub-mv__body">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri('assets/images/page-about/page-about__pc.jpg?ver=1.0.1'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('assets/images/page-about/page-about__sp.jpg?ver=1.0.1'); ?>" alt="診察室の様子" loading="lazy" />
      </picture>
      <div class="p-sub-mv__titles">
        <h1 class="p-sub__ja-title">当院について</h1>
        <p class="p-sub__en-title ">about our clinic</p>
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

  <!-- policy -->
  <section id="policy" class="l-policy p-policy">
    <div class="p-policy__title-wrap">
      <h2 class="p-policy__title c-section-title">ポリシーと特徴</h2>
    </div>
    <div class="p-policy__concept p-concept">
      <div class="p-concept__wrap">
        <div class="p-concept__body">
          <p class="p-concept__en-title">POLICY</p>
          <h2 class="p-concept__ja-title">コミュニケーションから始まる最適な医療提供
          </h2>
          <p class="p-concept__text">当院ではまず患者様から詳しくお話を伺います。<br>
            難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。</p>
          <p class="p-concept__text">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
        </div>
        <div class="p-concept__img">
          <img src="<?php echo get_theme_file_uri('assets/images/page-about/concept.jpg'); ?>" alt="男性医師が女性患者にレントゲンを見て説明している" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURE -->
  <section class="l-feature p-feature">
    <div class="p-feature__wrap">
      <figure class="p-feature__img">
        <img src="<?php echo get_theme_file_uri('assets/images/page-about/feature.jpg'); ?>" alt="受付" loading="lazy">
      </figure>
      <div class="p-feature__body p-concept__body">
        <p class="p-concept__en-title">feature</p>
        <h2 class="p-concept__ja-title">「医療技術の追求」と<br>
          「通いやすさ」
        </h2>
        <p class="p-concept__text">歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>
          また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
        </p>
        <p class="p-concept__text"> 朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</p>
      </div>
    </div>
  </section>

  <!--gallery  -->
  <div id="gallery" class="l-gallery p-gallery">
    <div class="p-gallery__inner l-inner">
      <div class="p-gallery__title-wrap">
        <h2 class="p-gallery__title c-section-title">院内の様子</h2>
      </div>
      <div class="p-gallery__photos">
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery1.jpg'); ?>" alt="治療室全体の写真" loading="lazy">
          </figure>
        </div>
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery2.jpg'); ?>" alt="女性医師が治療している様子" loading="lazy">
          </figure>
        </div>
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery3.jpg'); ?>" alt="治療室にある椅子周りの写真" loading="lazy">
          </figure>
        </div>
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery4.jpg'); ?>" alt="治療室の椅子とテレビがある写真" loading="lazy">
          </figure>
        </div>
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery5.jpg'); ?>" alt="治療室全体の写真" loading="lazy">
          </figure>
        </div>
        <div class="p-gallery__photo">
          <figure class="p-gallery__img">
            <img src="<?php echo get_theme_file_uri('assets/images/page-about/gallery6.jpg'); ?>" alt="機械の写真" loading="lazy">
          </figure>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>