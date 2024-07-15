<?php get_header(); ?>

<!-- sub-mv -->
<div class="l-sub-mv p-sub-mv">
  <div class="l-inner p-sub-mv__inner">
    <div class="p-sub-mv__body">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_theme_file_uri('assets/images/archive/archive-blog__pc.jpg?ver=1.0.1'); ?>" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('assets/images/archive/archive-blog__sp.jpg?ver=1.0.1'); ?>" alt="診察室の様子" loading="lazy" />
      </picture>
      <div class="p-sub-mv__titles">
        <?php
        if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) :
        ?>
          <h1 class="p-sub__ja-title">スタッフブログ</h1>
          <p class="p-sub__en-title">staff blog</p>
        <?php else : ?>
          <h1 class="p-sub__ja-title">お知らせ</h1>
          <p class="p-sub__en-title">news</p>
        <?php endif; ?>
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

  <!-- 記事 -->
  <div class="l-single p-single">
    <div class="l-inner p-single__inner">
      <div class="p-single__content">

        <!-- blog -->
        <article class="p-single-blog">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h2 class="p-single-blog__title">
                <?php the_title(); ?>
              </h2>
              <div class="p-single-blog__meta">
                <time class="p-single-blog__time" datetime="<?php the_time('Y-m-d'); ?>">
                  <?php the_time('Y.m.d'); ?>
                </time>
                <?php
                $taxonomy_terms = get_the_terms($post->ID, 'genre');
                if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {
                  foreach ($taxonomy_terms as $taxonomy_term) {
                    echo '<p class="p-single-blog__category"><a href="' . get_term_link($taxonomy_term->slug, 'genre') . '">' . $taxonomy_term->name . '</a></p>';
                  }
                }
                ?>
              </div>
              <div class="p-single-blog__content">
                <?php the_content(); ?>
              </div>
          <?php endwhile;
          endif; ?>

          <!--pager-->
          <div class="l-pager p-pager">
            <ul class="p-pager__list">
              <?php if (get_previous_post()) : ?>
                <li class="p-pager__item-prev">
                  <?php previous_post_link('%link', '<img src="' . get_theme_file_uri('assets/images/common/pagenavi-prev.png') . '" alt=""> 前の記事'); ?>
                </li>
              <?php endif; ?>
              <li class="p-pager__item">
                <?php
                if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) {
                  echo '<a href="' . esc_url(home_url('/blog/')) . '">記事一覧</a>';
                } else {
                  echo '<a href="' . esc_url(home_url('/news/')) . '">記事一覧</a>';
                }
                ?>
              </li>
              <?php if (get_next_post()) : ?>
                <li class="p-pager__item-next">
                  <?php next_post_link('%link', '次の記事 <img src="' . get_theme_file_uri('assets/images/common/pagenavi-next.png') . '" alt="">'); ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>

        </article>


        <!-- sidebar -->
        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>