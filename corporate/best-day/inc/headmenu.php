<?php
global $siteUrl;
global $astUrl;
?>
<header class="l-header--pc">
  <div class="l-header__inner">
    <?php $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div'; ?>
    <<?php echo $logo_tag; ?> class="l-header-logo">
      <a href="<?php echo $siteUrl; ?>">
        <img src="<?php echo $astUrl; ?>assets/img/global/logo-b.svg" alt="BiBiキャリア">
      </a>
    </<?php echo $logo_tag; ?>>
    <nav class="l-nav">
      <ul class="l-nav-list">
        <li class="l-nav-list__item">
          <a href="<?php echo $siteUrl; ?>">トップ</a>
        </li>
        <li class="l-nav-list__item">
          <a href="<?php echo $siteUrl; ?>about-us/">私たちについて</a>
        </li>
        <li class="l-nav-list__item">
          <a href="<?php echo $siteUrl; ?>business/">事業内容</a>
        </li>
        <li class="l-nav-list__item">
          <a href="<?php echo $siteUrl; ?>company/">会社案内</a>
        </li>
      </ul>
      <ul class="l-button-list">
        <li class="l-button-list__recruit">
          <a href="<?php echo $siteUrl; ?>recruiter/"><span>採用担当者様へ</span></a>
        </li>
        <li class="l-button-list__contact">
          <a href="<?php echo $siteUrl; ?>contact/"><span>お問い合わせ</span></a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div class="l-header--sp">
  <div class="l-header__inner">
    <?php $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'div'; ?>
    <<?php echo $logo_tag; ?> class="l-header-logo">
      <a href="<?php echo $siteUrl; ?>">
        <img src="<?php echo $astUrl; ?>assets/img/global/logo-b.svg" alt="BiBiキャリア">
      </a>
    </<?php echo $logo_tag; ?>>
    <button class="hamburger" aria-label="メニュー" aria-controls="nav-menu" aria-expanded="false">
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
    </button>

    <nav id="nav-menu" class="nav" aria-hidden="true">
      <ul class="nav__list">
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>" class="nav__link">トップ</a></li>
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>about-us/" class="nav__link">私たちについて</a></li>
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>business/" class="nav__link">事業内容</a></li>
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>company/" class="nav__link">会社案内</a></li>
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>recruiter/" class="nav__link">採用担当者様へ</a></li>
        <li class="nav__item"><a href="<?php echo $siteUrl; ?>news/" class="nav__link">お知らせ</a></li>
        <li class="nav__item__contact">
          <a href="<?php echo $siteUrl; ?>contact/"><span>お問い合わせ</span></a>
        </li>
        <li class="nav__item__tel">
          <a href="tel:06-4963-2729"><span>電話でお問い合わせ</span></a>
        </li>
      </ul>
    </nav>
  </div>
</div>