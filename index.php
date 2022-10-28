<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
  include_once(G5_THEME_MOBILE_PATH . '/index.php');
  return;
}

if (G5_COMMUNITY_USE === false) {
  include_once(G5_THEME_SHOP_PATH . '/index.php');
  return;
}

include_once(G5_THEME_PATH . '/head.php');
?>


<main class="main_page">
  <section class="main_visual">
    <div class="main_slide">
      <figure class="itm01">이미지1</figure>
      <figure class="itm02">이미지1</figure>
      <figure class="itm03">이미지1</figure>
    </div>
    <div class="slogan">
      <h2>We Create Colorful Life</h2>
      <p>세상에 없는 길, NOROO가 만드는 새로운 길</p>
    </div>
  </section>
  <div>
    <? echo latest("theme/main_web", "notice", 5, 25); ?>
    <? echo latest("theme/main_photo", "qa", 5, 25); ?>
  </div>
</main>

<?php
include_once(G5_THEME_PATH . '/tail.php');
