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
        <h1 class="p-sub__ja-title">スタッフブログ</h1>
        <p class="p-sub__en-title ">staff blog</p>
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

  <!-- 記事一覧 -->
  <div class="l-archive p-archive">
    <div class="l-inner p-archive__inner">
      <div class="p-archive__content">

        <!-- blog archive -->
        <section class="l-archive-blog p-archive-blog">
          <?php
          $post_type = (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) ? 'blog' : 'post';
          ?>

          <div class="p-archive-blog__cards">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => $post_type,
              'posts_per_page' => 10,
              'paged' => $paged,
            );

            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()) :
              while ($wp_query->have_posts()) :
                $wp_query->the_post();
                $post_date = get_the_date('Y-m-d');
                $current_date = date('Y-m-d');
                $is_new = (strtotime($current_date) - strtotime($post_date)) <= 3 * 24 * 60 * 60;
            ?>
                <a href="<?php the_permalink(); ?>" class="p-archive-blog__card p-archive-blog-card">
                  <?php if ($is_new) : ?>
                    <p class="p-archive-blog-card__tag">new</p>
                  <?php endif; ?>
                  <div class="p-archive-blog-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri('assets/images/common/noimg.png'); ?>" alt="ダミー画像" loading="lazy">
                    <?php endif; ?>
                  </div>
                  <div class="p-archive-blog-card__body">
                    <p class="p-archive-blog-card__category">
                      <?php
                      // タクソノミーまたはカテゴリーを取得
                      if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) {
                        $taxonomy_terms = get_the_terms($post->ID, 'genre');
                        if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                          foreach ($taxonomy_terms as $taxonomy_term) {
                            echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                          }
                        }
                      } else {
                        $categories = get_the_category();
                        if ($categories && !is_wp_error($categories)) {
                          foreach ($categories as $category) {
                            echo '<span>' . esc_html($category->name) . '</span>';
                          }
                        }
                      }
                      ?>
                    </p>
                    <h3 class="p-archive-blog-card__title"><?php the_title(); ?></h3>
                    <time class="p-archive-blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                  </div>
                </a>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </div>

          <!-- ページナビ -->
          <div class="p-archive-pagenave l-archive-pagenave">
            <?php
            $pagination_args = array(
              'mid_size' => 1,
              'prev_text' => '前へ',
              'next_text' => '次へ',
              'screen_reader_text' => ' ',
            );

            the_posts_pagination($pagination_args);
            ?>
          </div>
        </section>

        <!-- sidebar -->
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>