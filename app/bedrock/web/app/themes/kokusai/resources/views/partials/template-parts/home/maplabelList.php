
<?php
$args=array(
'orderby' => 'name',
'hide_empty' => 0,
'order' => 'ASC'
);
$categories=get_categories($args);
foreach ($categories as $category) {
echo '<li class="p-map__labelList__item">';
echo '<a class="fonts__b--regular js-trigger--switch w-not-check--lang" data-switch-trigger-type="'. $category->category_nicename .'" href="#">'. $category->name .'</a>';
echo '</li>';
}
?>
