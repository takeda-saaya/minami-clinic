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
        <h1 class="p-sub__ja-title">WEB予約完了</h1>
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
  <div class="p-reserve l-reserve">
    <div class="p-reserve__inner l-inner">
      <div class="p-reserve__text-box">
        <p class="p-reserve__text">WEBよりご予約いただき誠にありがとうございます。<br>
          送信いただいた内容を確認して1営業日以内に返信いたします。<br>
          <span>※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
        </p>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>