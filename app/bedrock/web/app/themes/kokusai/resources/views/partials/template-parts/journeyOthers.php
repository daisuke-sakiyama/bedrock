<?php
$othersList = array(
  'asato' => array(
    'number' => 'S-Style',
    'name' => array(
      'en' => '安里駅前',
      'ja' => 'SUMUKA'
    ),
    'href' => '/archives/category/asato/',
    'bg_src' => '/wp/wp-content/themes/sumuka/resources/assets/images/journey_nav/nav_thumb_asato.jpg'
  ),
  'kokusai' => array(
    'number' => 'S-Style',
    'name' => array(
      'en' => '国際通り',
      'ja' => 'SUMUKA'
    ),
    'href' => '/archives/category/kokusai/',
    'bg_src' => '/wp/wp-content/themes/sumuka/resources/assets/images/journey_nav/nav_thumb_kokusai.jpg'
  ),
  'shintoshin2' => array(
    'number' => 'S-Style',
    'name' => array(
      'en' => '新都心Ⅱ',
      'ja' => 'SUMUKA'
    ),
    'href' => '/archives/category/shintoshin2',
    'bg_src' => '/wp/wp-content/themes/sumuka/resources/assets/images/journey_nav/nav_thumb_asato.jpg'
  ),
  'shintoshin1' => array(
    'number' => 'S-Style',
    'name' => array(
      'en' => '新都心Ⅰ',
      'ja' => 'SUMUKA'
    ),
    'href' => '/archives/category/shintoshin1',
    'bg_src' => '/wp/wp-content/themes/sumuka/resources/assets/images/journey_nav/nav_thumb_shintoshin1.jpg'
  ),
  'urasoe' => array(
    'number' => 'S-Style',
    'name' => array(
      'en' => '浦添',
      'ja' => 'SUMUKA'
    ),
    'href' => '/archives/category/urasoe/',
    'bg_src' => '/wp/wp-content/themes/sumuka/resources/assets/images/journey_nav/nav_thumb_shintoshin1.jpg'
  ),
)
;?>

<section class="p-journey__others">
  <div class="js-target--wayPoint fade">
    <ul class="p-journey__othersNav ">
      <?php foreach ($othersList as $key => $value) :?>
        <li class="p-journey__othersNav__item <?php echo $key ;?>" data-journey-type="<?php echo $key ;?>">
          <a href="<?php echo $value['href'];?>">
            <div class="p-journey__othersNav__thumb c-banner--bg">
              <div class="p-journey__othersNav__currentText fonts__b--regular">
                <div class="p-journey__othersNav__currentText__line"></div>
                <p>Now visiting</p>
              </div>
              <div class="p-journey__othersNav__thumb__img c-banner--bg__img" data-background-path="<?php echo $value['bg_src'] ;?>"></div>
            </div>
            <div class="p-journey__othersNav__panel">
              <div class="p-journey__othersNav__title">
                <small class="fonts__r"><?php echo $value['number'] ;?></small>
              <span class="u-block"><small class="fonts__r"><?php echo $value['name']['ja'] ;?></small><?php echo $value['name']['en'] ;?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </div>
</section>
