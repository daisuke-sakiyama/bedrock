<?php include_once dirname(__FILE__) . '/include/journey.php'; ?>
<section class="p-top__journey">
<div class="p-top__journey__foot">
  <div class="l-container--wide">
    <ul class="p-top__journey__menu">
      <?php foreach ($List as $key => $value) :?>
      <li class="p-top__journey__menu__item">
        <div>
          <a class="p-top__journey__banner c-banner--bg js-hover left parallax-x" data-hover-in-time="820" data-hover-out-time="870" href="<?php echo $value['href'];?>">
            <div class="c-banner--bg__cover js-target--parallax" data-parallax-type="x-minus">
              <div class="c-banner--bg__img" data-background-path="<?php echo get_template_directory_uri();?>/assets/images/top/<?php echo $value['bg_src'] ;?>"></div>
            </div>
            <h3 class="p-top__journey__banner__title c-banner--bg__title">
              <small class="fonts__r js-target--wayPoint wayPointTitle split-target" data-delay-duration="75"><?php echo $value['number']; ?></small>
              <strong class="fonts__b--regular js-target--wayPoint wayPointTitle split-target" data-delay-duration="75"><?php echo $value['name']['en']; ?></strong>
              <span class="js-target--wayPoint wayPointTitle split-target" data-delay-duration="75"><?php echo $value['name']['ja']; ?></span>
            </h3>
            <div class="js-hover__bg p-hover__bg"></div>
            </a>
          <div class="p-top__journey__panel">
            <h3 class="p-top__journey__panel__title">
              <small class="fonts__r js-target--wayPoint wayPointTitle split-target" data-delay-duration="75"><?php echo $value['number']; ?></small>
              <span class="js-target--wayPoint wayPointTitle split-target" data-delay-duration="75"><?php echo $value['name']['ja']; ?></span>
            </h3>
            <p class="c-description js-target--wayPoint fade"><?php echo $value['txt']; ?></p>
            <a class="js-hover c-btn--sideLine p-top__journey__panel__btn fonts__r js-target--wayPoint fade"><span class="c-btn--sideLine__outLine"><span class="js-clone c-btn--sideLine__inner"><span class="js-clone__element c-btn--sideLine__text">Visit</span></span></span></a>
          </div>
        </div>
      </li>
      <?php endforeach ;?>
    </ul>
  </div>
</div>
</section>
