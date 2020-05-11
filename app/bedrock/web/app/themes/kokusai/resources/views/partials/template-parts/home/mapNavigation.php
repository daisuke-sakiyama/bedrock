
<?php
$catargs = array(
  'orderby' => 'id',
  'hide_empty' => 0,
  'order' => 'ASC'
);
$categories = get_categories($catargs);
foreach ($categories as $category) :
    $args = array(
        'cat' => $category->term_id,
    );
    echo '<div class="js-target--switch" data-switch-target-type="'. $category->category_nicename .'">' , "\n";
      echo '<ul class="p-map__list js-target--slick">' , "\n";
    $my_posts = get_posts($args);
    if ($my_posts) { // 該当する投稿があったら
        foreach ($my_posts as $post) :
            setup_postdata($post);
            /* the_title(), the_permalink() 等使用可
            マークアップはお好みで
            */
            echo '<li class="p-map__list__item js-target--slick__item js-target--map '. $category->category_nicename .'" data-map-link-href="'. home_url('/archives/') .''. $category->term_id .'" data-map-lat="'. apply_filters('get_post_type_object', $post->map_lat) .'" data-map-lng="'. apply_filters('get_post_type_object', $post->map_lng) .'" data-map-marker-src="'. get_stylesheet_directory_uri() .'/assets/img/icon/map/marker_'. $category->category_nicename .'.png" data-map-marker-current-src="'. get_stylesheet_directory_uri() .'/assets/img/icon/map/marker_'. $category->category_nicename .'_current.png" data-map-marker-width="42" data-map-marker-height="57" data-map-link-target="">' , "\n";
              echo '<a class="p-map__list__inner js-trigger--map__marker u-hover--white">' , "\n";
                echo '<div class="p-map__list__head">' , "\n";
                  echo '<div class="p-map__list__thumb c-banner--bg">' , "\n";
                    echo '<div class="p-map__list__thumb__img c-banner--bg__img" style="background-image:url('. the_post_thumbnail_url() .')"></div>' , "\n";
                    echo '<p class="p-map__list__label">'. $category->name .'</p>';
                  echo '</div>' , "\n";
                echo '</div>' , "\n";
                echo '<div class="p-map__list__foot">' , "\n";
                  echo '<p class="js-map__title p-map__list__title u-text-ellipsis">'. the_title() .'</p>';
                  echo '<div class="js-map__content p-map__list__content c-descriptionWrap">'. the_content() .'</div>';
                echo '</div>' , "\n";
              echo '</a>' , "\n";
            echo '</li>' , "\n";
        endforeach; // 投稿のループ終わり
    } else {
        // 投稿がなかった場合
    }
            echo '</ul>' , "\n";
          echo '</div>' , "\n";
    wp_reset_postdata();
endforeach; // カテゴリのループ終わり
?>
