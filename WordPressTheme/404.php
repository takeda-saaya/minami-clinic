<?php get_header(); ?>

<main>

  <section class="p-404 l-404">
    <div class="p-404__inner l-inner">
      <div class="p-404__wrap">
        <div class="p-404__body">
          <p class="p-404__text">申し訳ございません。<br>お探しのページが見つかりません。</p>
          <div class="p-404__img">
            <img src="<?php echo get_theme_file_uri('assets/images/404/404.jpg'); ?>" alt="若い少女が歯磨きをしながら横を見ている様子" loading="lazy">
          </div>
        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>


</main>
<?php get_footer(); ?>