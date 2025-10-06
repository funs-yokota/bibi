<?php
global $siteUrl;
global $astUrl;
?>
<?php get_header(); ?>

<div class="l-wrapper p-page p-recruiter">
  <?php get_file('headmenu'); ?>
  <main id="main" class="l-main l-main-page l-main-recruiter">

    <div class="l-mv-page l-mv-recruiter">
      <div class="l-mv-page__inner">
        <div class="l-mv-page__title">
          <h1 class="l-mv-page__titleJp">採用担当者様へ</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php echo custom_breadcrumbs(); ?>
    <!-- /パンくず -->

    <section class="p-recruiter-greeting">
      <div class="l-container">
        <div class="p-recruiter-greeting__grid">
          <div class="p-recruiter-greeting__gridItem">
            <hgroup class="l-title-left">
              <h2 translate="no">GREETING</h2>
              <p>採用担当者様に向けて</p>
            </hgroup>
            <div class="p-recruiter-greeting__textArea u-font-bold">
              <p>BiBiキャリアは、医療・美容・介護分野に特化した人材紹介サービスです。<br class="u-only--pc">採用担当者様にとって、良い人材の確保は常に重要な課題です。</p>
              <p>当社では業界に精通したスタッフが求人票の作成から面接調整、<br class="u-only--pc">そして入職後の定着支援まで一貫してサポートします。<br>急な欠員等による即戦力の人材確保はもちろん、長期的な視点から<br class="u-only--pc">信頼できる人材の確保など各ニーズに合わせて柔軟に対応可能です。 </p>
              <p>企業様が安心して採用活動に取り組むことができる環境を用意し、<br class="u-only--pc">医療・美容・介護業界の専門性を活かした採用課題解決を提供します。 </p>
            </div>
          </div>
          <div class="p-recruiter-greeting__gridItem">
            <img src="<?php echo $astUrl; ?>assets/img/recruiter/img01.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="p-recruiter-flow">
      <div class="l-container">
        <hgroup class="l-title-center">
          <h2 translate="no">FLOW</h2>
          <p>採用フロー例</p>
        </hgroup>
        <div class="p-recruiter-flow__img">
          <picture>
            <source srcset="<?php echo $astUrl; ?>assets/img/recruiter/figure-sp.png" media="(max-width: 768px)" type="image/png">
            <img src="<?php echo $astUrl; ?>assets/img/recruiter/figure.png" alt="">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-recruiter-job">
      <div class="l-container">
        <hgroup class="l-title-center">
          <h2 translate="no">JOB TYPE</h2>
          <p>ご紹介可能な職種一覧</p>
        </hgroup>
        <div class="p-recruiter-job__main">
          <div class="p-recruiter-job__mainItem">
            <div class="p-recruiter-job__mainImg">
              <img src="<?php echo $astUrl; ?>assets/img/recruiter/img02.jpg" alt="">
              <p>医療業界</p>
            </div>
            <ul class="p-recruiter-job__list">
              <li class="p-recruiter-job__listItem">医師</li>
              <li class="p-recruiter-job__listItem">看護師、看護助手</li>
              <li class="p-recruiter-job__listItem">助産師</li>
              <li class="p-recruiter-job__listItem">理学療法士、作業療法士、言語聴覚士</li>
              <li class="p-recruiter-job__listItem">薬剤師</li>
              <li class="p-recruiter-job__listItem">診療放射線技師、臨床検査技師、臨床工学技士</li>
              <li class="p-recruiter-job__listItem">公認心理士、臨床心理士</li>
              <li class="p-recruiter-job__listItem">医療ソーシャルワーカー</li>
              <li class="p-recruiter-job__listItem">歯科医師、歯科衛生士、歯科技工士、歯科助手</li>
              <li class="p-recruiter-job__listItem">歯科事務、医療事務、調剤事務、登録販売者</li>
            </ul>
          </div>
          <div class="p-recruiter-job__mainItem">
            <div class="p-recruiter-job__mainImg">
              <img src="<?php echo $astUrl; ?>assets/img/recruiter/img03.jpg" alt="">
              <p>美容業界</p>
            </div>
            <ul class="p-recruiter-job__list">
              <li class="p-recruiter-job__listItem">医師</li>
              <li class="p-recruiter-job__listItem">看護師、看護助手</li>
              <li class="p-recruiter-job__listItem">アートメイク施術者</li>
              <li class="p-recruiter-job__listItem">エステティシャン</li>
              <li class="p-recruiter-job__listItem">医療レーザーオペレーター</li>
              <li class="p-recruiter-job__listItem">受付・医療事務スタッフ</li>
              <li class="p-recruiter-job__listItem">カウンセラー</li>
              <li class="p-recruiter-job__listItem">クリニックマネージャー・運営スタッフ</li>
              <li class="p-recruiter-job__listItem">メディカルコーディネーター</li>
            </ul>
          </div>
          <div class="p-recruiter-job__mainItem">
            <div class="p-recruiter-job__mainImg">
              <img src="<?php echo $astUrl; ?>assets/img/recruiter/img04.jpg" alt="">
              <p>介護業界</p>
            </div>
            <ul class="p-recruiter-job__list">
              <li class="p-recruiter-job__listItem">サービス管理責任者、サービス提供責任者</li>
              <li class="p-recruiter-job__listItem">ケアマネジャー、社会福祉士、精神保健福祉士</li>
              <li class="p-recruiter-job__listItem">介護職員、介護助手、訪問介護員、介護事務</li>
              <li class="p-recruiter-job__listItem">児童発達支援管理者、機能訓練指導員</li>
              <li class="p-recruiter-job__listItem">相談支援専門員、生活支援員、生活相談員、<br>入居相談員、児童相談員、福祉用具専門相談員</li>
              <li class="p-recruiter-job__listItem">介護タクシー、送迎ドライバー</li>
            </ul>
          </div>
          <div class="p-recruiter-job__mainItem">
            <div class="p-recruiter-job__mainImg">
              <img src="<?php echo $astUrl; ?>assets/img/recruiter/img05.jpg" alt="">
              <p>美容業界</p>
            </div>
            <ul class="p-recruiter-job__list">
              <li class="p-recruiter-job__listItem">柔道整復師、あん摩マッサージ師、鍼灸師、<br>整体師</li>
              <li class="p-recruiter-job__listItem">管理栄養士、栄養士、調理職員</li>
              <li class="p-recruiter-job__listItem">清掃、リネン関連</li>
              <li class="p-recruiter-job__listItem">保健師</li>
              <li class="p-recruiter-job__listItem">営業</li>
            </ul>
          </div>
        </div>
      </div>
    </section>


  </main>
  <?php get_file('footmenu'); ?>
</div>
<?php get_footer(); ?>