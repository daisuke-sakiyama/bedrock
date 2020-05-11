<?php query_posts('&posts_per_page=1'); ?>
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      the_content();
    endwhile;
  endif;
?>
