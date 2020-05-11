<!-- GLOBAL HEADER -->
<header class="l-header js-header">
  <div class="p-header">
    <div class="l-container--wide p-header__inner">
      <a class="p-header__logo" href="<?php echo home_url() ?>"><?php include dirname(__FILE__) . '/header/svg/header.svg'; ?></a>
      <a class="p-header__btn--navMenu c-btn--navMenu js-trigger--spNav" href="#"><span class="c-btn--navMenu__inner"><span class="c-btn--navMenu__bar"></span><span class="c-btn--navMenu__bar"></span></span></a>
      <nav class="l-gNav">
        <div class="p-gNav">
          <ul class="p-gNav__head p-gNav__menu">
            <li class="p-gNav__menu__item has-dropNav js-parent--dropNav">
              <a class="fonts__b--regular js-trigger--dropNav js-hover" data-hover-in-time="200" data-hover-out-time="500" href="<?php echo home_url('information/') ?>"><span class="">Room Type</span></a>
                <?php get_template_part('views/partials/_inc_/views/modules/header/dropNav'); ?>
            </li>
            <li class="p-gNav__menu__item">
              <a class="fonts__b--regular js-hover" data-hover-in-time="200" data-hover-out-time="500" href="<?php echo home_url('information/') ?>"><span class="">Information</span></a>
            </li>
            <li class="p-gNav__menu__item">
              <a class="fonts__b--regular js-hover" data-hover-in-time="200" data-hover-out-time="500"  href="<?php echo home_url('news/') ?>"><span class="">News</span></a>
            </li>
            <li class="p-gNav__menu__item">
              <a class="fonts__b--regular js-hover" data-hover-in-time="200" data-hover-out-time="500" href="<?php echo home_url('faq/') ?>"><span class="">FAQ</span></a>
            </li>
            <li class="p-gNav__menu__item">
              <a class="fonts__b--regular js-hover" data-hover-in-time="200" data-hover-out-time="500"  href="<?php echo home_url('contact/') ?>"><span class="">Contact</span></a>
            </li>
          </ul>
          <div id="wovn-languages" class="p-gNav__foot js-parent--localizationNav">
            <a class="fonts__b--regular js-hover c-btn--lang js-trigger--localizationNav" data-hover-in-time="200" data-hover-out-time="500" href="#"><span>LANG</span></a>
            <?php get_template_part('views/partials/_inc_/views/modules/header/localizationNav'); ?>
          </div>
          <div class="p-gNav__sp">
            <div class="l-container--wide p-gNav__sp__inner">
              <ul class="p-gNav__sp__menu">
                <li class="p-gNav__sp__menu__item">
                  <a class="js-hover w-not-check--lang" data-hover-in-time="200" data-hover-out-time="500" href="<?php echo home_url('news/') ?>">NEWS</a>
                </li>
                <li class="p-gNav__sp__menu__item youtube">
                  <a class="js-hover" data-hover-in-time="200" data-hover-out-time="500" href="<?php echo home_url('') ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/youtube.svg" alt="youtube"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
<div class="p-spNavBg"></div>
<!-- /GLOBAL HEADER -->
