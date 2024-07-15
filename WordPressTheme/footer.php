<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__box">
      <div class="p-footer__info">
        <div class="p-footer__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/common/logo.png'); ?>" alt="みなみ歯科のロゴ" loading="lazy" />
          </a>
        </div>
        <div class="p-footer__address">
          <p class="p-footer__address1">〒166-0001</p>
          <p class="p-footer__address2">東京都杉並区阿佐谷北7-3-1</p>
        </div>
        <a href="tel:0312345678" class="p-footer__tel">03-1234-5678</a>
        <p class="p-footer__hour">(年中無休 AM9:00〜PM22:00)</p>
        <div class="p-footer__btns">
          <a href="<?php echo esc_url(home_url('reservation')); ?>" class="p-footer__btn c-footer-btn c-footer-btn--left">
            <img src="<?php echo get_theme_file_uri('assets/images/footer/btn--left.png'); ?>" alt="パソコンとスマホのイラスト" loading="lazy">
            <span class="c-footer-btn__text">WEB予約</span>
          </a>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-footer__btn c-footer-btn c-footer-btn--right">
            <img src="<?php echo get_theme_file_uri('assets/images/footer/btn--right.png'); ?>" alt="メールのイラスト" loading="lazy">
            <span class="c-footer-btn__text">お問い合わせ</span>
          </a>
        </div>
        <div class="p-footer__time">
          <img src="<?php echo get_theme_file_uri('assets/images/common/mv-time.png'); ?>" alt="みなみ歯科の営業時間表" loading="lazy" />
        </div>
      </div>
      <div class="p-footer__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12958.51748452014!2d139.6259521518825!3d35.71073713442561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ed89400bb025%3A0xe163fbc6ba8a0d1c!2z44CSMTY2LTAwMDEg5p2x5Lqs6YO95p2J5Lim5Yy66Zi_5L2Q6LC35YyX!5e0!3m2!1sja!2sjp!4v1718350168534!5m2!1sja!2sjp" width="315" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <ul class="p-footer__items">
      <li class="p-footer__item">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          top</a>
      </li>
      <li class="p-footer__item">
        <a href="<?php echo esc_url(home_url('/about')); ?>">
          当院について
        </a>
        <ul class="p-footer__subItems">
          <li class="p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/about/#policy')); ?>">
              ポリシーと特徴</a>
          </li>
          <li class="p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/about/#gallery')); ?>">
              当院の様子</a>
          </li>
        </ul>
      </li>
      <li class="p-footer__item">
        <a href="<?php echo esc_url(home_url('/staff')); ?>">
          スタッフ紹介
        </a>
        <ul class="p-footer__subItems">
          <li class=" p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/staff/#director')); ?>">
              院長のあいさつ</a>
          </li>
          <li class=" p-footer__subItem">
            <a href="/staff/#staffs">
              スタッフ</a>
          </li>
          <li class="p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/blog')); ?>">
              スタッフブログ</a>
          </li>
        </ul>
      </li>
      <li class="p-footer__item">
        <a href="<?php echo esc_url(home_url('/medical')); ?>">
          診療内容
        </a>
        <ul class="p-footer__subItems p-footer__subItems--grid">
          <?php
          $args = [
            'post_type' => 'plan',
            'orderby' => 'date',
            'order' => 'ASC',
          ];
          $custom_query = new WP_Query($args);

          if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post();
              $post_id = get_the_ID();
          ?>
              <li class="p-footer__subItem">
                <a href="<?php echo esc_url(home_url('/medical/#post-' . $post_id)); ?>"><?php the_title(); ?></a>
              </li>
            <?php
            endwhile;
            wp_reset_postdata();
          else :
            ?>
            <li class="p-footer__subItem">投稿がありません。</li>
          <?php
          endif;
          ?>
        </ul>
      </li>
      <li class="p-footer__item">
        <a href="<?php echo esc_url(home_url('/contact')); ?>">
          お問い合わせ
        </a>
        <ul class="p-footer__subItems">
          <li class=" p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">
              お問い合わせフォーム</a>
          </li>
          <li class=" p-footer__subItem">
            <a href="<?php echo esc_url(home_url('/reservation')); ?>">
              WEB予約</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="footer__bottom">
    <small>&copy;2020-2021 みなみ歯科クリニック</small>
  </div>
</footer>

<!-- cta -->
<div class="p-footer-cta">
  <div class="p-footer-cta__left">
    <a href="tel:0312345678">03-1234-5678</a>
    <p class="p-footer-cta__text">(年中無休 AM9:00〜PM22:00)</p>
  </div>
  <div class="p-footer-cta__right">
    <a href="<?php echo esc_url(home_url('reservation')); ?>">
      <div class="p-footer-cta__contact">
        <img src="<?php echo get_theme_file_uri('assets/images/footer/nav-contact.png'); ?>" alt="web予約ボタン" />
      </div>
    </a>
  </div>
</div>

<!-- side btn -->
<a href="<?php echo esc_url(home_url('reservation')); ?>" class="c-side-btn u-hidden-sp">
  <div class="c-side-btn__img">
    <img src="<?php echo get_theme_file_uri('assets/images/footer/side-btn.png'); ?>" alt="web予約ボタン" loading="lazy" />
  </div>
  <p class="c-side-btn__text">WEB予約はこちら</p>
</a>

<!-- topに戻る -->
<a href="#" class="c-page-top-btn js-pagetop">
  <img src="<?php echo get_theme_file_uri('assets/images/footer/page-top-btn.png'); ?>" alt="topに戻るページ" loading="lazy" />
</a>

<?php wp_footer(); ?>
</body>