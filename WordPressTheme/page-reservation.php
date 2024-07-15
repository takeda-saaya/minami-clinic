<?php get_header(); ?>

<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
  <div class="l-inner p-sub-mv__inner">
    <div class="p-sub-mv__body">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri('assets/images/page-contact/page-contact__pc.jpg'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('assets/images/page-contact/page-contact__sp.jpg'); ?>" alt="診察室の様子" loading="lazy" />
      </picture>
      <div class="p-sub-mv__titles">
        <h1 class="p-sub__ja-title">WEB予約</h1>
        <p class="p-sub__en-title ">reserve</p>
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

  <!-- 予約フォーム -->
  <section class="p-reserve l-reserve">
    <div class="p-reserve__inner l-inner">
      <div class="p-reserve__text-boxs">
        <div class="p-reserve__text-box">
          <h3 class="p-reserve__sub-title">お電話でのご予約/ご相談</h3>
          <div class="p-reserve__info">
            <a href="tel:0312345678" class="p-reserve__info-tel">03-1234-5678</a>
            <p class="p-reserve__info-hour">(年中無休 AM9:00〜PM22:00)</p>
          </div>
          <p class="p-reserve__text">お急ぎの方は電話での連絡がスムーズです。<br>
            混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
            あらかじめご了承ください。</p>
        </div>
        <div class="p-reserve__text-box">
          <h3 class="p-reserve__sub-title">メールでのご予約/ご相談</h3>
          <p class="p-reserve__text">【ご予約に関しての注意点】<br>
            メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
            ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
        </div>
      </div>
        <div class="p-reserve__title-wrap">
          <h2 class="p-reserve__title c-section-title">予約フォーム</h2>
        </div>

      <div class="p-contact__body p-form">
        <!-- Contact Form7のショートコードの読み込み -->
        <?php echo do_shortcode('[contact-form-7 id="3756db2" title="予約フォーム"]'); ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>