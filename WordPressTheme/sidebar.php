<aside class="l-sidebar p-sidebar">

  <!-- clinic -->
  <div class="p-sidebar-clinic">
    <h2 class="p-sidebar-clinic__title c-sidebar-titile">
      クリニックの紹介
    </h2>
    <div class="p-sidebar-clinic__img">
      <img src="<?php echo get_theme_file_uri('assets/images/sidebar/sidebar-clinic.jpg'); ?>" alt="診療室" loading="lazy">
    </div>
    <div class="p-sidebar-clinic__bottom">
      <h3 class="p-sidebar-clinic__name">みなみ歯科クリニック</h3>
      <p class="p-sidebar-clinic__text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
      <a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a>
    </div>
  </div>

  <!-- blog -->
  <div class="l-sidebar-blog p-sidebar-blog">
    <h2 class="p-sidebar-blog__title c-sidebar-titile">
      新着記事
    </h2>
    <?php
    if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) :
      $post_type = 'blog';
    else :
      $post_type = 'post';
    endif;
    ?>
    <div class="p-sidebar-blog__cards">
      <?php
      $wp_query = new WP_Query(array(
        'post_type' => $post_type,
        'posts_per_page' => 6,
      ));
      if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) :
          $wp_query->the_post();
          $post_date = get_the_date('Y-m-d');
          $current_date = date('Y-m-d');
          $is_new = (strtotime($current_date) - strtotime($post_date)) <= 3 * 24 * 60 * 60;
      ?>
          <a href="<?php the_permalink(); ?>" class="p-sidebar-blog-card p-sidebar-blog-card">
            <?php if ($is_new) : ?>
              <p class="p-sidebar-blog-card__tag">new</p>
            <?php endif; ?>
            <div class="p-sidebar-blog-card__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_theme_file_uri('assets/images/sidebar/noimg.png'); ?>" alt="ダミー画像" loading="lazy">
              <?php endif; ?>
            </div>
            <div class="p-sidebar-blog-card__body">
              <p class="p-sidebar-blog-card__category">
                <?php
                $taxonomy_terms = get_the_terms(get_the_ID(), 'genre');
                if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                  foreach ($taxonomy_terms as $taxonomy_term) {
                    echo '<span class="' . $taxonomy_term->slug . '">' . $taxonomy_term->name . '</span>';
                  }
                } else {
                  $categories = get_the_category();
                  foreach ($categories as $category) {
                    echo '<span class="category-' . $category->slug . '">' . $category->name . '</span>';
                  }
                }
                ?>
              </p>
              <h3 class="p-sidebar-blog-card__title"><?php the_title(); ?></h3>
              <time class="p-sidebar-blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
            </div>
          </a>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>

  <!-- category -->
  <div class="l-sidebar-category p-sidebar-category">
    <h2 class="p-sidebar-category__title c-sidebar-titile">カテゴリー</h2>
    <div class="p-sidebar-category__wrap">
      <p class="p-sidebar-category__text">
<?php
$all_terms = array();
$taxonomy_terms = array();

// ブログ関連のアーカイブやシングルページ、タクソノミーページの場合に「genre」タクソノミーのタームを取得
if (is_post_type_archive('blog') || is_singular('blog') || is_tax('blog-type')) {
  $taxonomy_terms = get_terms(array(
    'taxonomy' => 'genre',
    'hide_empty' => false, 
  ));
  if (!is_wp_error($taxonomy_terms)) {
    $all_terms = array_merge($all_terms, $taxonomy_terms);
  }
}

// 取得したタクソノミーのタームを表示
if (!empty($taxonomy_terms)) {
  foreach ($taxonomy_terms as $term) {
    $category_link = get_term_link($term);
    echo '<a href="' . esc_url($category_link) . '">' . $term->name . '</a>';
  }
}

// その他のページではカテゴリーを取得
if (!is_post_type_archive('blog') && !is_singular('blog') && !is_tax('blog-type')) {
  $categories = get_categories(array(
    'hide_empty' => false, 
  ));
  if (!is_wp_error($categories)) {
    foreach ($categories as $category) {
      $category_link = get_category_link($category->term_id);
      echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
    }
  }
}
?>
      </p>
    </div>
  </div>

</aside>