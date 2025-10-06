<?php
global $siteUrl;
global $astUrl;
?>

<div class="fixed__badge">
  <a href="https://bibicareer-nurse.com/" target="_blank">
    <img src="<?php echo $astUrl; ?>assets/img/top/badge.png" alt="">
  </a>
</div>

<?php if (!is_page('contact')) : ?>
  <div class="l-footer-box">
    <div class="footer__section">
      <div class="l-footer-contact">
        <div class="l-footer-contact__meta">
          <div class="l-footer-contact__title">
            <hgroup class="l-title-contact">
              <h2 translate="no">CONTACT</h2>
              <p>お問い合わせ</p>
            </hgroup>
          </div>
          <div class="l-footer-contact__text">
            <p>お仕事をお探しの方・採用でお悩みの企業様は<br>ぜひBiBiキャリア株式会社までご相談ください！</p>
          </div>
        </div>
        <div class="l-footer-contact__button">
          <div class="l-footer-contact__tel">
            <p>※勧誘や営業電話はお控えください。</p>
            <a href="tel:06-4963-2729"><span>電話でお問い合わせ</span></a>
          </div>
          <div class="l-footer-contact__mail">
            <a href="<?php echo $siteUrl; ?>contact/"><span>メールでお問い合わせ</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="l-footer__wrap">
  <footer class="l-footer-meta">
    <div class="l-container--s">
      <div class="l-footer-meta__flex">
        <div class="l-footer-logo">
          <a href="<?php echo $siteUrl; ?>"><img src="<?php echo $astUrl; ?>assets/img/global/logo-w.svg" alt="BiBiキャリア"></a>
        </div>
        <div class="l-footer-link--pc">
          <ul>
            <li><a href="<?php echo $siteUrl; ?>">トップ</a></li>
            <li><a href="<?php echo $siteUrl; ?>about-us/">私たちについて</a></li>
            <li><a href="<?php echo $siteUrl; ?>business/">事業内容</a></li>
            <li><a href="<?php echo $siteUrl; ?>recruiter/">採用担当者様へ</a></li>
            <li><a href="<?php echo $siteUrl; ?>company/">会社案内</a></li>
          </ul>
          <ul>
            <li><a href="<?php echo $siteUrl; ?>news/">お知らせ</a></li>
            <li><a href="<?php echo $siteUrl; ?>contact/">お問い合わせ</a></li>
            <li><a href="<?php echo $siteUrl; ?>privacy-policy/">プライバシーポリシー</a></li>
            <li><a href="<?php echo $siteUrl; ?>sitemap/">サイトマップ</a></li>
          </ul>
        </div>
        <div class="l-footer-link--sp">
          <ul>
            <li><a href="<?php echo $siteUrl; ?>">トップ</a></li>
            <li><a href="<?php echo $siteUrl; ?>about-us/">私たちについて</a></li>
            <li><a href="<?php echo $siteUrl; ?>business/">事業内容</a></li>
            <li><a href="<?php echo $siteUrl; ?>recruiter/">採用担当者様へ</a></li>
            <li><a href="<?php echo $siteUrl; ?>company/">会社案内</a></li>
            <li><a href="<?php echo $siteUrl; ?>news/">お知らせ</a></li>
            <li><a href="<?php echo $siteUrl; ?>contact/">お問い合わせ</a></li>
            <li><a href="<?php echo $siteUrl; ?>privacy-policy/">プライバシーポリシー</a></li>
            <li><a href="<?php echo $siteUrl; ?>sitemap/">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="l-footer__copyright" translate="no"><small>Copyright © 2025 <a href="<?php echo $siteUrl; ?>">BiBiキャリア株式会社</a> All Rights Reserved.</small></p>
  </footer>

</div>