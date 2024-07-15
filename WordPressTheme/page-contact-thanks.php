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
        <h1 class="p-sub__ja-title">お問い合わせ完了</h1>
        <p class="p-sub__en-title ">contact</p>
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

  <!-- お問い合わせ完了 -->
  <div class="p-contact l-contact">
    <div class="p-contact__inner l-inner">
      <p class="p-contact__text">
        お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
        以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
        また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
        <span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
      </p>
    </div>
  </div>

</main>
<?php get_footer(); ?>