<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-company">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-company">

    <div class="l-mv-page l-mv-company">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">会社案内</h1>
          <p class="l-mv-page__titleEn">COMPANY</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-company-info">
      <div class="l-container">
        <hgroup class="l-title-center">
          <h2 translate="no">COMPANY INFO</h2>
          <p>会社概要</p>
        </hgroup>
        <div class="p-company-info__grid">
          <div class="p-company-info__gridItem">
            <img src="<?php echo $astUrl; ?>assets/img/company/img01.jpg" alt="">
          </div>
          <div class="p-company-info__gridItem">
            <dl class="p-company-info__list">
              <dt>会社名</dt>
              <dd>BiBiキャリア株式会社</dd>
              <dt>所在地</dt>
              <dd>〒542-0081<br>大阪府大阪市中央区南船場3丁目7−27 NLC心斎橋 3-I</dd>
              <dt>代表取締役</dt>
              <dd>道田 喜一郎</dd>
              <dt>電話番号</dt>
              <dd>06-4963-2729<br>※勧誘や営業電話はお控えください。</dd>
              <dt>設立</dt>
              <dd>2025年7月</dd>
              <dt>事業内容</dt>
              <dd>医療関係専門の総合人材サービス業</dd>
              <dt>許可番号</dt>
              <dd>有料職業紹介事業許可番号（27-ユ-304998）</dd>
            </dl>
          </div>
        </div>
        <div class="p-company-info__access">
          <h3 class="l-title-sub"><span>アクセスマップ</span></h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.1009722629096!2d135.50169499999998!3d34.677400999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7376842a721%3A0x7056c9891ce30b3f!2zTkxD5b-D5paO5qmL44OT44OrIDNF!5e0!3m2!1sja!2sjp!4v1758492779922!5m2!1sja!2sjp"></iframe>
        </div>
      </div>
    </section>

  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>